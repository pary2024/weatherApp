<!-- Button trigger modal -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <div class="container  d-flex align-items-center justify-content-between">
    <h1>Update product</h1>
    <div>
     <a href="./formgroup.php"><button class=" btn btn-outline-primary">Back</button></a>
    </div>
  </div>
    <div class="container">
      <div class="form-group w-25 shadow p-3 rounded-2">
      <form action="" class="Formproedite" method="POST" enctype="multipart/form-data">
                <input type="text" class=" form-control edite_id" name="update_id">
                <div class="form mt-2 ">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder=" Enter your name" class="form-control edite_name">
                </div>  
                <div class="form mt-2 ">
                    <label for="">price</label>
                    <input type="number" name="price" placeholder=" Enter your price" class="form-control edite_price">
                </div>
                <div class="form mt-2 ">
                    <label for="">qty</label>
                    <input type="number" name="qty" placeholder=" Enter your qty" class="form-control edite_qty">
                </div>
                <div class="form mt-2 ">
                    <label for="">img</label>
                    <input type="file" name="image" placeholder=" Enter your price" class="form-control">
                    <button type="button" onclick="uploadImage('.Formproedite')" class="btn btn-outline-info mt-2">Upload</button>
                </div>
                <div class="show-image">

                </div>
                <div class="modal-footer">
       
                  <button type="button" onclick="updatePro()" class="btn btn-primary">updatePro</button>
                </div>
                
            </form>
      </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>


const updatePro = (form)=>{
        let pyloads = $(form).serializeArray();
        $.ajax({
            method:"POST",
            url: "../controller/controllerPro.php?type=update",
            data: pyloads,
            processData: false,
            contentType: false,
            dataType:'json',
            success:(res)=>{
                if(res.status==200){

                }
            }
        })
    }


  
    



     
</script>
</html>
<!-- Modal -->


































