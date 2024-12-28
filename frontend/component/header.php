<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
    <style>
                    @import url('https://fonts.googleapis.com/css2?family=Hanuman:wght@100;300;400;700;900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Battambang:wght@100;300;400;700;900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root{
    --colorBlack : #1E293B;
    --imageMaster:https://mastertechkh.com/img/header_search.png;
    --imageMasterred:https://mastertechkh.com/img/header_search.png;
    --imageScrol:https://www.mastertechkh.com/storage/uploads/Banner/WATER%20PC.jpg;
    --imageScrol1:https://www.mastertechkh.com/storage/uploads/Banner/RAZER.jpg;
    --imageSrol2:https://www.mastertechkh.com/storage/silders/T9ljr4vv1eiaA4EhHt0rILQ2KbqynC-metaVW50aXRsZWQtMS5qcGc=-.jpg;
    --imageScrol3:https://www.mastertechkh.com/storage/silders/TOeDBFXa7ut0Kzye3kej4b8fTizMC5-metaQUVZdmc5aEpiZFhGbVdMNFhLUGlIay5qcGc=-.jpg;
    --imageScrol4:https://www.mastertechkh.com/storage/silders/ymwXWohiEtHF6FaiW9sy5op9MllFXx-metaMTdfX2J1bmRsZXMuanBn-.jpg;
    --imageScrol5:https://www.mastertechkh.com/storage/silders/tEEjGkoTKjcDavlWsJur5xhB3DqUEQ-metaWWVhcl9FbmQtS0gtcHJvbW8tMTAtQ2hhbm5lbC04NzB4MzMwLmpwZw==-.jpg;
    --imageScrol6:https://www.mastertechkh.com/storage/silders/rCcgFUHsAm9wjMdy2buXsfvTvAgWlG-metaMTIzLmpwZw==-.jpg;
    --imageimage:https://mastertechkh.com/img/categories/sec-desktop-g.jpg;

}
.navbar{
    height: 130px;
    background-color: #1E293B;
    display: flex;
    flex-direction: column;
    align-items: center;
    row-gap: 2rem;
    padding: 10px;
}
.classNav{
    height: 50px;
    width: 80%;
    background-color: #1E293B;
}
.classNav:nth-child(1){
    display: flex;
    align-items: center;
    justify-content: start;
    gap: 10px;
}
.contact{
    display: flex;
}
.contact h5{
    font-size:15px ;
    color: white;
}
.location{
    display: flex;
}
.location i{
    font-size: 15px;
    color: #cb0b0a;
}
.location h5{
    font-family: "Hanuman", serif;
    font-weight: 400;
    font-style: normal;
    font-size: 15px;
    color: white;
}
.contact i{
    font-size: 15px;
    color: #cb0b0a;
}
.classNav:nth-child(2){
    /* background-color: yellow; */
    display: flex;
    gap: 1rem;
    
    
}

/*  */

.search{
    position: relative;
    height: 50px;
    width: 400px;
    background-color: white;
    border-radius: 20px;
    border:  1px solid gray;
    display: flex;
    align-items: center;
    justify-content: end;

}
.search  i{
    position: absolute;
    font-size: 20px;
    margin-right: 5px;
    right: 5px;
    top: 14px;

   
}

.myAccount{
    position: relative;
    height: 50px;
    width: 240px;
    /* border: 1px solid black; */
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.myAccount i{
    font-size: 30px;
    color: white;
}
.myAccount h5{
    font-size: 20px;
    color:white;
    position: relative;
}
.search input{
    height: 50px;
    width: 400px;
    border-radius: 20px;
}
.drop{
    position: absolute;
    height: 0px;
    width: 100px;
    background-color: white;
    top: 50px;
    right: 10px;
    transition: all 0.5s;
    opacity: 0;
    flex-direction: column;
    display: flex;
    row-gap: 10px;
    padding: 2px;
    border-radius: 15px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
.drop i{
    font-size: 14px;
    color: red;
}
.drop i:hover{
    transform: scale(1.1);
}
.drop a{
    text-decoration: none;
}
.myAccount:hover .drop{
    height: 60px;
    opacity: 1;
}

/*  */
.contegories{
    height: 50px;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}
.showCotegories{
    height: 50px;
    width: 80%;
    background-color: white;
    align-items: center;
    padding: 10px ;
    
}
.showCotegories ul{
    display: flex;
    align-items: center;
    justify-content: space-between;
    list-style: none;
    position: relative;
   
}
.showCotegories ul  li a{
   text-decoration: none;
   margin-top:auto ;
   color: black;
   font-size: 18px;
   font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-style: normal;
}
.showCotegories ul li{
    position: relative;
}
.showCotegories ul li::before{
    content: '';
    display: block;
    height: 3px;
    width: 0%;
    background-color:black;
    position: absolute;
    top: 20px;
    transition: all 0.5s;
}
.showCotegories ul li:hover::before{
    width: 100%;
}
.showCotegories ul li ul{
    position: absolute;
    height:0px;
    width: 100px;
    background-color: white;
    top: 30px;
    transition: all 0.5s;
    flex-direction: column;
    overflow: hidden;
    font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-style: normal;
  box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;

}
.showCotegories ul li:hover ul{
    height: 200px;
}

.container{
    height: 500px;
    
    /* background-color: #F5F7F8; */
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
}
.sidebar{
    height: 100%;
    width: 80%;
    row-gap: 10px;
    flex-direction: column;
    display: flex;
}
.sidebars{
    height: calc(100% / 2);
    /* background-color: aqua; */
    border-radius: 10px;
    display: flex;
    gap: 10px;
    
    
}
.sidebars .child:nth-child(1){
    width: 65%;
    height: 100%;
   
    animation: scroll 20s linear infinite ;
}
@keyframes scroll {
    0%,10%{
    height: 100%;
    width: 65%;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 20px;
        background-image: url('https://www.mastertechkh.com/storage/uploads/Banner/WATER%20PC.jpg');
    }
    15%,25%{
        height: 100%;
        width: 65%;
        background-repeat: no-repeat;
        background-size: cover;
        border-radius: 20px;
        background-image: url('https://www.mastertechkh.com/storage/uploads/Banner/RAZER.jpg');
    }
    30%,40%{
        height: 100%;
    width: 65%;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 20px;
        background-image: url('https://www.mastertechkh.com/storage/silders/T9ljr4vv1eiaA4EhHt0rILQ2KbqynC-metaVW50aXRsZWQtMS5qcGc=-.jpg');
    }
    45%,55%{
        height: 100%;
    width: 65%;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 20px;
        background-image: url('https://www.mastertechkh.com/storage/silders/TOeDBFXa7ut0Kzye3kej4b8fTizMC5-metaQUVZdmc5aEpiZFhGbVdMNFhLUGlIay5qcGc=-.jpg');
    }
    60%,70%{
        height: 100%;
    width: 65%;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 20px;
        background-image: url('https://www.mastertechkh.com/storage/silders/ymwXWohiEtHF6FaiW9sy5op9MllFXx-metaMTdfX2J1bmRsZXMuanBn-.jpg');
    }
    75%,85%{
        height: 100%;
    width: 65%;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 20px;
        background-image: url('https://www.mastertechkh.com/storage/silders/tEEjGkoTKjcDavlWsJur5xhB3DqUEQ-metaWWVhcl9FbmQtS0gtcHJvbW8tMTAtQ2hhbm5lbC04NzB4MzMwLmpwZw==-.jpg');
    }
    90%,100%{
        height: 100%;
    width: 65%;
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 20px;
        background-image: url('https://www.mastertechkh.com/storage/silders/rCcgFUHsAm9wjMdy2buXsfvTvAgWlG-metaMTIzLmpwZw==-.jpg');
    }
}
.iamgesidebar{
    height: 100%;
    width: 35%;
    /* background-color: #000; */
    overflow: hidden;
    position: relative;

}
.iamgesidebar img{
    height: 100%;
    width: 100%;
    border-radius: 20px;
    transition: all 0.5s;
    
}
.iamgesidebar img:hover{
    transform: scale(1.2);
}
.sidebars:nth-child(2){
    padding: 0px 0px;
}

.bolside{
    height: 100%;
    width: 100%;
    /* border: 1px solid black; */
    display: flex;
    gap: 10px;
    padding: 40px 0px;
}
.prarent{
    height: 80%;
    width: calc(100% / 4);
    /* border: 1px solid black; */
    background-color: #F5F7F8;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}
.prarent i{
    font-size: 40px;
    color: red;
}
.prarent h5{
    font-family: "Hanuman", serif;
    font-weight: 400;
    font-style: normal;
    font-size: 20px;
}
.cicle{
    height: 70px;
    width: 70px;
    border: 1px solid gray;
    border-radius: 50%;
    text-align: center;
    padding-top: 10px;
    
    
}
.prarent:hover{
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    transition: all 0.5s;
}
h1{
    text-align: center;
    font-family: "Roboto", sans-serif;
    font-weight: 700;
    font-style: normal;
}
hr{
    border: 1px solid black;
}
.prarent:active{
    background-color: #1e293b4a;
}
/*  */
.promotion{
    height: 350px;
    /* background-color: red; */
    align-items: center;
    display: flex;
    justify-content: center;
    margin-top: 15px;
}
.pro-computer{
    height: 350px;
    width: 80%;
    /* background-color: yellow; */
    display: flex;
    gap: 20px;
    padding: 0px 10px;
    overflow: scroll;
    scrollbar-width: none;
    padding: 5px 0;
   
}
.child-com{
    position: relative;
    height: 350px;
    width: calc(100% / 4);
    /* border: 1px solid black; */
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}
.child-com:hover{
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    transition: all 0.3s;
}
.eye-image{
    position: absolute;
    height: 40px;
    width: 40px;
    /* border: 1px solid black; */
    right: 10px;
    top: 10px;
    border-radius: 35%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(128, 128, 128, 0.473);
}
.eye-image i{
    font-size: 20px;
    color: white;
}
.computer-image{
    height: 65%;
    /* background-color: white; */
    padding: 20px;
}
.computer-image img{
    height: 100%;
}
.in-stock{
    height: 20px;
    width: 90px;
    /* border: 1px solid black; */
    margin-left: 15px;
    margin-top: 10px;
    border-radius: 5px;
    background-color: #9fffcb;
}
.in-stock p{
    text-align: center;
    font-family: "Hanuman", serif;
    font-weight: 800;
    font-style: normal;
    font-size: 13px;
    color: white;

}
.name-com h5{
    margin-left: 15px ;
    margin-top: 10px;
    font-family: "Hanuman", serif;
    font-weight: 500;
    font-style: normal;
    
}
.price-com{
    height: 30px;
    display: flex;
    gap: 5px;
    margin-left: 15px;
    margin-top: 10px;
}
.price-com h4{
    font-family: "Hanuman", serif;
    font-weight: 700;
    font-style: normal;

}
.price-com h5{
    color: red;
    text-decoration: line-through;
}

.conteg-model{
    height: 550px;
    /* background-color: red; */
    display: flex;
    align-items:center;
    justify-content: center;
    margin-top: 15px;
}
.cont-model{
    height: 100%;
    width: 80%;
    /* background-color: yellow; */
    display: flex;
    flex-wrap: wrap;
}
.model-box{
    height: 30%;
    width: 300px;
    /* border: 1px solid black; */
    flex-wrap: wrap;
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    display: flex;
    align-items: center;
    justify-content: center;
    
   
}
.model-box img{
    height: 70%;
    width: 150px;
    padding: 30px;
   
}
.model-box:hover{
    transition: all 0.4s;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.promotion-card{
    height:80vh;
    /* background-color: red; */
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    
}
.card-fro-product{
    height: 100%;
    width: 90%;
    /* background-color: yellow; */
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    overflow: scroll;
    scrollbar-width: none;
    padding: 10px 0;
}
.card{
    height: 100%;
    width: 25%;
    /* border: 1px solid black; */
    border-radius: 5px;
    margin-left: 10px;
    position: relative;
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
}
.card:hover{
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    transition: all 0.3s;
}
.promotion-btn{
    height: 40px;
    width: 200px;
    border: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px 0px 15px 0px;
    background-color: #B32E2E;
    color: white;
}
.check-eye{
    position: absolute;
    height: 40px;
    width: 40px;
    /* border: 1px solid black; */
    right: 10px;
    top: 10px;
    border-radius: 35%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(128, 128, 128, 0.473);
}
.promot-img {
    height: 30%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;

}
.promot-img a{
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 10px;

}
.promot-img  img{
    height: 100%;
}
.btn-in{
    height: 20px;
    width: 90px;
    /* border: 1px solid black; */
    margin-left: 19px;
    margin-top: 10px;
    border-radius: 5px;
    background-color: #9fffcb;
}
.btn-in h5{
    text-align: center;
    font-family: "Hanuman", serif;
    font-weight: 800;
    font-style: normal;
    font-size: 13px;
    color: white;
}
.asus{
    margin-left: 19px;
    margin-top: 10px;
    font-family: "Hanuman", serif;
    font-weight: 800;
    font-style: normal;
    font-size: 14px;
    
}
.short-list{
    margin-left: 19px;
    font-size: 12px;
    font-family: "Hanuman", serif;
    font-weight: 400;
    font-style: normal;
}
.price-card{
    height: 20px;
    width: 200px;
    border: 1p solid black;
    margin-left: 19px;
}
.price-card h5{
    font-size: 18px;
}
.price-card p{
    color: red;
    font-size: 12px;
    text-decoration: line-through;
}
.container-footer{
    margin-top: 20px;
    height: 300px;
    background-color: black;
}
.row:nth-child(1){
    height: 75%;
    /* background-color: red; */
    padding: 50px 0 0 200px;

}
.row:nth-child(2){
    height: 25%;
    /* background-color: #9fffcb; */
    display: flex;
    align-items: center;
    justify-content: center;
}
.footer-contact, .footer-location{
    display: flex;
    gap: 20px;
    margin-top: 10px;
    font-family: "Battambang", serif;
    font-weight: 300;
    font-style: normal;

}
.footer-contact, .footer-location i{
    color: red;
}
.footer-contact, .footer-location p{
    color: red;
}
.row:nth-child(2) p{
    color: white;
}

.register-buy{
    padding: 5px;
    background-color: #B32E2E;
    border-radius: 10px;
    float: right;
    position: absolute;
    right: 10px;
    
}
.register-buy button{
    color: black;
    background-color: #B32E2E;
    font-size: 10px;
    border-radius: 10px;
    padding: 10px;

}
    </style>
    
</head>
<body>
    <!-- navigationbar -->
        <nav class="navbar">

            <div class="classNav">
                <div class="contact">
                    <i class="fa-solid fa-phone"></i>
                    <h5>010445201 / 089 786502</h5>
                </div>
                <div class="location">
                    <i class="fa-solid fa-map"></i>
                    <h5>ទីតាំង: ខាងក្រោយពេទ្យលោកសង្ឈ ផ្លូវ​ 146 ផ្ទះលេខ229A សង្កាត់ទឹកល្អក 2 រាជធានីភ្នុំពេញ​ Cambodia</h5>
                </div>
            </div>
            <div class="classNav">
                <figure class="imageMaster">
                    <img src="https://mastertechkh.com/img/header_search.png" alt="">
                </figure>

                <div class="search">
                   <span><input type="text" placeholder="Find your favorite">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    
                </span>
                  
                </div>

                <div class=" myAccount">
                    <i class="fa-regular fa-heart"></i>
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span><h5 class="" id="myAcount">My Account</h5>
                        
                    </span>

                    <div class="drop">
                       <span><i class="fa-solid fa-right-to-bracket"></i><a href="">Login</a></span>
                       <span><i class="fa-solid fa-user"></i><a href="">Sign in</a></span>
                    </div>

                </div>
            </div>


        </nav>
    <!-- @ -->
     <!-- cotegoriess -->
      <div class="contegories">

        <div class="showCotegories">
            <ul>
                <li>
                    <a href="#" class="btncatege" id="btnCategory">Categories</a>
                        <ul class="btndrop" id="dropdownMenu">
                            <li>Laptops</li>
                            <li>PC-parts</li>
                            <li>Accessories</li>
                            <li>Monitors</li>
                            <li>PC-sets</li>
                            <li>Other</li>
                        </ul>
                </li>
                <li><a href="">Home</a></li>
                <li><a href="">Laptop ROG</a></li>
                <li><a href="">MSI</a></li>
                <li><a href="">ASUS</a></li>
                <li><a href="">APPLE</a></li>
                <li><a href="">Accesories</a></li>
                <li><a href="">CPU</a></li>
                <li><a href="">PC-Sets</a></li>
                <li><a href="">Monitore</a></li>
                <li><a href="">Chair</a></li>
                <li><a href="">Custom PC Builder</a></li>
            </ul>

        </div>

      </div>
      <!-- @ -->
      
 

        <!-- @ -->
         <!-- cotegories -->