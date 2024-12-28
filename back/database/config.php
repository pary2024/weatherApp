<?php


$con = mysqli_connect( "localhost", "root", "","product", "3306" );

$sql = " CREATE TABLE IF NOT EXISTS compros(
    `id` INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
    `name` VARCHAR( 255 ) NOT NULL ,
    `price` decimal(10,2) NOT NULL ,
    `qty` INT( 11 ) NOT NULL ,
    `image` VARCHAR( 255 ) NOT NULL ,
    `create_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)";
mysqli_query($con,$sql);



?>