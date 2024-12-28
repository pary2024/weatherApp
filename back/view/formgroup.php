<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <div class ="d-flex align-items-center justify-content-between">
            <h1>My First Project Back end</h1>
    
            <div>
                <a href="insert.php"><button class=" btn btn-outline-primary">AddProduct</button></a>
            </div>
    
        </div>
    </div>
    <div class="container">
        <table  class=" table">
            <thead>
                <tr>
                    <th>img</th>
                    <th>id</th>
                    <th>UserName</th>
                    <th>Price</th>
                    <th>qty</th>
                    <th>action</th>
                </tr>
                
              
            </thead>
            <tbody class=" app_list">
               
            </tbody>
        </table>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>

    const SelectPro = ()=>{
        $.ajax({
            type: 'GET',
            dataType:'json',
            url: '../controller/controllerPro.php?type=select',
            success:(res)=>{
                if(res.status==200){
                    let data = res.compros;
                    let tr='';
                    $.each(data,(index,value)=>{
                        tr +=`<tr>
                                <td><img src="../public/${value.image}" alt="" width="50" height="50"></td>
                                <td>${value.id}</td>
                                <td>${value.name}</td>
                                <td>${value.price}</td>
                                <td>${value.qty}</td>
                                <td>
                                    <button onclick="deletePro(${value.id})"  class="  btn btn-outline-danger">Delete</button>
                                    <a href="edite.php">
                                        <button type="button" onclick="editepro('event,${value.id}')" class=" btn btn-outline-primary" >edite</button>
                                    </a>
                             </td>
                    </tr>`
                    });
                    $('.app_list').html(tr);
                    

                }
            }
        })
   }
   SelectPro();

   const deletePro =(id)=>{
    if(confirm('Are you want to delete this product?')){
        $.ajax({
            method:'GET',
            dataType:'json',
            url: '../controller/controllerPro.php?type=delete',
            data: {id:id},
            success:(res)=>{
                if(res.status==200){
                    SelectPro();
                }
            }
        })
    }
   }


   const editepro=(event,id)=>{
    event.preventDefault();
       $.ajax({
        method:"POST",
        url: "../controller/controllerPro.php?type=edite",
        data: {id:id},
        dataType:'json',
        success:(res)=>{
            if(res.status==200){
                // $('.edite_id').val(res.compro.id);
                // $('.edite_name').val(res.compro.name);
                // $('.edite_price').val(res.compro.price);
                // $('.edite_qty').val(res.compro.qty);
                
                // if(res.compro.image !=null){
                //     $('.show-image').html(`
                //     <input type="hidden" name="old_image" value="${res.compro.image}" class="w-25  form-control mt-2" >
                //     <img src="../public/${res.compro.image}" alt="" height=50px width=80px class="mt-2">
                //     <button type="button" onclick="cancelImage(${res.compro.image})" class=" btn btn-danger mt-2">cancel</button>`)
                // }
                // $('Formpro input[type = file]').val('');

            }
        }
       })

    }
  

  
    


</script>
</html>