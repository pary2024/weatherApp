<?php
include "../database/config.php";
header('Content-Type: application/json');

$type = $_GET['type'];
switch ($type) {
    case 'create': {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];

        if (!empty($_POST['image_name'])){
            $image = $_POST['image_name'];
        }else{
            $image = '';
        }

        $sql = "INSERT INTO `compros`(`name`, `price`, `qty`, `image`)
                VALUES ('$name', '$price', '$qty', '$image')";

        if (mysqli_query($con, $sql)) {
            echo json_encode([
                "status" => 200,
                "message" => "Data inserted successfully",
                "image" => $image
            ]);
        } else {
            echo json_encode([
                "status" => 500,
                "message" => "Database error: " . mysqli_error($con)
            ]);
        }
        break;
    }

    case 'upload':{
        $file = $_FILES['image'];
        $image_name = $file['name'];
        $image_tmp = $file['tmp_name'];
        $imageText = rand(0, 999999) . "." . pathinfo($image_name,PATHINFO_EXTENSION);
        $imageDir = "../public/$imageText";
        move_uploaded_file($image_tmp, $imageDir);
        echo json_encode([
            "status" => 200,
            "message" => "Image uploaded successfully",
            "image" => $imageText
        ]);
       


        break;
    }

    case 'cancel':{
        $image = $_POST['image'];
        $imageDir = "../public/$image";
        if (file_exists($imageDir)){
            unlink($imageDir);
            echo json_encode([
                "status" => 200,
                "message" => "Image deleted successfully",
            ]);

        }else{
             echo json_encode([
                "status" => 500,
                "message" => "Image not found",
             ]);
        }
        break;
    }
    case 'select':{
        $sql = "SELECT * FROM `compros`";
        $result = mysqli_query($con, $sql);
        $compro = mysqli_fetch_all($result,MYSQLI_ASSOC);
        echo json_encode([
            "status" => 200,
            "compros" => $compro
        ]);
        break;
    }
    case 'delete':{
        $id = $_GET['id'];
        $sql = "DELETE FROM `compros` WHERE `id` = '$id'";
        $result = mysqli_query($con, $sql);
        if ($result){
            echo json_encode([
                "status" => 200,
                "message" => "Compro deleted successfully",
            ]);
        }
        break;
    }
    case 'edite':{
        $id = $_POST['id'];
        $sql = "SELECT * FROM `compros` WHERE `id` = '$id'";
        $result = mysqli_query($con,$sql);
        $compro = mysqli_fetch_assoc($result);
        if($compro){
            echo json_encode([
                "status" => 200,
                "compro" => $compro
            ]);
        }
        break;
    }
    case 'update':{

        if (!empty($_POST['image_name'])){
            $image = $_POST['image_name'];
            $old_image = $_POST['edite_id'];
            $sql = "SELECT `image` FROM `compros` WHERE  `id` = '$old_image'";
            $result = mysqli_query($con, $sql);
            $product = mysqli_fetch_assoc($result)['name'];
            $imageDir = "../public/$product";
            if ($product != null){
                if (file_exists($imageDir)){
                    unlink($imageDir);
                }
            }
            


        }elseif(empty($_POST['image_name'])){
            $image = $_POST['image_name'];
        }else{
            $image=null;
        }

    
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qty   = $_POST['qty'];

        $id = $_POST['update_id'];
       $sql ="UPDATE `compros` SET
                `name`='$name',
                `price`='$price',
                `qty`='$qty',
                `image`='$image'
                WHERE `id`='$id'";

        $result = mysqli_query($con, $sql);
        

        if ($result) {
            echo json_encode([
                "status" => 200,
                "message" => "Data inserted successfully",
                "image" => $result
            ]);
        } else {
            echo json_encode([
                "status" => 500,
                "message" => "Database error: " . mysqli_error($con)
            ]);
        }

        break;
    }

}

?>
