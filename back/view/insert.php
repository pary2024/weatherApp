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
            <a href="formgroup.php"><button class=" btn btn-outline-primary">Back</button></a>
        </div>

    </div>

    <div class="container">
        <div class="form-group w-25 text-align-center shadow p-3">
            <form action="" class="Formpro" enctype="multipart/form-data">
                <div class="form mt-2 ">
                    <label for="">Name</label>
                    <input type="text" name="name" placeholder=" Enter your name" class="form-control">
                </div>
                <div class="form mt-2 ">
                    <label for="">price</label>
                    <input type="number" name="price" placeholder=" Enter your price" class="form-control">
                </div>
                <div class="form mt-2 ">
                    <label for="">qty</label>
                    <input type="number" name="qty" placeholder=" Enter your qty" class="form-control">
                </div>
                <div class="form mt-2 ">
                    <label for="">img</label>
                    <input type="file" name="image" placeholder=" Enter your price" class="form-control">
                    <button type="button" onclick="uploadImage('.Formpro')" class="btn btn-outline-info mt-2">Upload</button>
                </div>
                <div class="show-image">

                    
                    

                </div>
                <div class="btngroup mt-4">
                    <button type="button" onclick="CreateProduct('.Formpro')" class=" btn btn-primary">submite</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>



const CreateProduct = (form)=>{
        let pyload = $(form).serializeArray();
        let data_obj = pyload;
        $.ajax({
            method: "POST",
            url: "../controller/controllerPro.php?type=create",
            data: data_obj,
            dataType:'json',
            success:(res)=>{
                if(res.status===200){
                    SelectPro();

                }
            }
        })
        
    }

    const uploadImage = (form)=>{
        let pyload = new FormData($(form)[0]);

        $.ajax({
            method: "POST",
            url: "../controller/controllerPro.php?type=upload",
            data: pyload,
            processData: false,
            contentType: false,
            dataType:'json',
            success:(res)=>{
                if(res.status===200){
                    $('.show-image').html(`
                    <input type="hidden" name="image_name" value="${res.image}" class="w-25  form-control mt-2 edite_id" >
                    <img src="../public/${res.image}" alt="" height=50px width=80px class="mt-2">
                    <button onclick="cancelImage(${res.image})" class=" btn btn-danger mt-2">cancel</button>`)
                }
                $('.Formpro input[type=file]').val('');

            }
        })
    }
    const cancelImage = (image)=>{
        if (confirm('Are your want to cancel this image?')) {
            $.ajax({
                method: "POST",
                url: "../controller/controllerPro.php?type=cancel",
                data: {image:image},
                dataType:'json',
                success:(res)=>{
                    if(res.status===200){
                        $('.show-image').html('')
                    }
                }
            })
        }
    }


   


   
</script>
</html>

