<!--This php adds the red notification on the cart that saves the amount of products in the cart -->
<?php

$angka = substr(uniqid(rand(), true), 7, 7);
$order = preg_replace("/[^0-9]/", "",$angka);
?>
<!DOCTYPE html>
 <html>   
    <head>
        <?php include "db/connect.php"?> <!--links to the connection file that connects with the database -->
        <title>The Glasses Company</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/lightslider.css" />                  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
      
     </head>
   
     <body>
 <!--This is assets for the cart links stylesheets -->

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- php includes that link the navbar and the jquery and basic styling for the cart -->
<?php include "includes/cart.php" ?>
<!-- links to the navbar -->
<?php include "includes/navbar.php" ?>
<!-- links to slider javascript and styling -->
<?php include "includes/slider.php"?>
  
             <div class="main">
 <?php
    // selects all from the 'gallery' table which has all the images for the slider and is joined to the 'product' table that has the product information such as name and price. The ids in the product table and the gallery table are then linked and the $_GET function is used to show the product information of a link with the same ID.
    
    //the echo'd information contains the html for the carousel/slider with the images from the 'gallery' table being echo'd.
    
    //The price, name, and description are then also echo'd out from the 'products' gallery
         $sql="SELECT * FROM gallery left join product ON  product.id = gallery.imageid WHERE imageid='$_GET[id]' ";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)) {
echo"
   <div class='productinfo'>    
   <div class='container'>
         <div class='row'>
         <div class='col-md-7'>
             

         
                <div class='col-xs-12' id='slider'>
                    <!-- Top part of the slider -->
                    <div class='row'>
                        <div class='col-sm-12' id='carousel-bounding-box'>
                            <div class='carousel slide' id='myCarousel'>
                                <!-- Carousel items -->
                                <div class='carousel-inner'>
                                    <div class='active item' data-slide-number='0'>
                                        <img src='" . $row["image1"]. "'></div>

                                    <div class='item' data-slide-number='1'>
                                        <img src='" . $row["image2"]. "'></div>

                                    <div class='item' data-slide-number='2'>
                                        <img src='" . $row["image3"]. "'></div>
                                </div>
                                <!-- Carousel nav -->
                                <a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>
                                    <span class='glyphicon glyphicon-chevron-left'></span>
                                </a>
                                <a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>
                                    <span class='glyphicon glyphicon-chevron-right'></span>
                                </a>
        </div>

    </div>
</div>  

   </div>


             </div>
         <div class='col-md-5'>
             <div class='productinfo'>
             <h2> " . $row["name"]. " </h2>
             <p> " . $row["summary"]. " </p>
           <h4> £" . $row["price"]. ".00</h4>
      
         
  <button type='button' class='btn btn-danger my-cart-btn' data-id='".$row['id']."' data-name='".$row['name']."' data-summary='".$row['summary']."' data-price='".$row['price']."' data-quantity= '".$row['quantity']."' data-image='" . $row["image"]. " '>Add to Cart</button>

             </div>
             </div>
       </div>
        </div>
        </div>
       
       ";}
    
             ?>    
         </div>     
    </body>



 <footer>
     <!--this links to and includes the footer html -->
<?php include "includes/footer.php" ?>     
</footer>

   
</html>
