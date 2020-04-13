<!--- References : cart : https://kautube.com/php/shopping-cart-with-php-and-jquery/ (last accessed:3/01/18)
                   filter: http://www.codingcage.com/2016/04/load-mysql-records-on-drop-down.html (last accessed:6/01/18 )
                   carousel: https://bootsnipp.com/snippets/featured/carousel-with-gallery-thumbs (last accessed: 20/12/17)
                   navbar: https://www.w3schools.com/bootstrap/bootstrap_theme_me.asp (last accessed:8/01/18)
-->


<!--This php adds the red notification on the cart that saves the amount of products in the cart -->
<?php

$angka = substr(uniqid(rand(), true), 7, 7);
$order = preg_replace("/[^0-9]/", "",$angka);
?>
<!DOCTYPE html>
 <html>   
    <head>
        <title>The Glasses Company</title>
        <!-- connection file include connects to the database -->
        <?php include "db/connect.php"?>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!-- connection file include connects to the stylesheet -->
        <style> <?php include "style.css"?> 
</style>
     </head>

<body>
<!-- php includes that link the navbar and the jquery and basic styling for the cart -->
<?php include "includes/cart.php" ?>
<?php include "includes/navbar.php" ?>
    <div class="main">

    <div class="parallax">
        <center>
            <div class="logo"><img src="imgs/home/tgclogocrop.png" width:400px></div></center>
    <a href="all.php" class="buttonhome">Shop All</a>   <!--button on the main home screen parallax -->
    </div>
    <!-- below div is for the background of the homepage content to create the parallax effect -->
    <div class="background" >
    
       <div class="siteintro">
        <div class="container">
          <div class="row">
              <div class="col-md-7">
                  <!-- below is the html for a promotional graphic that is underneath the parallax  -->
                  <div class="homepromo">
                  <img src="imgs/home/promohome.png">
                    <div class="wire">
                      <h1> Wire</h1>
                    </div>
                    <div class="frames">
                        <h1> Frames</h1>
                    </div>
                      <!-- Links to all.php which is the main products page -->
                    <a href="all.php" class="buttonpromo">Shop All</a>  
                  </div>
              </div>
          <div class="col-md-5">
              <!-- about us introduction paragraph with advert vid -->
              <div class="about">
              <h2> About Us </h2>
                  <div class="aboutdesc"><h4> We know how important it is to be able to change your look at anytime you want. We want to provide you with the possibility to match your frames with every occasion and all of your favourite styles. So therefore, we design quality frames at a fair price, which allows you to continuously update your eyewear.</h4></div>
                  <p> Watch our latest advertisement below!</p>
              </div>
              <video width="400" controls>
  <source src="video/rayban%20Never%20Hide.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
          </div>
              
          </div>
        </div>
        </div>  
    </div>
    <!-- div for parallax 2 -->
    <div class="ad"></div>
        <div style="height:400px;background-color:white;font-size:36px">
    <div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
        </div>
    
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="topproducts"> <h1> TOP PRODUCTS </h1></div>
        </div>
    <div class="col-lg-4 col-md-6 mb-4">
        </div>
        </div>
       <?php
            //The php below selects all from the 'product' table in my database, it is then filtered by only showing products that have 'yes' in the top_product column. This makes it easy to change regularly as top products may change.       
        $sql = "SELECT * FROM product where top_product = 'yes'";
       
             // Performs a query against the database which selects all from my table. 
  $result = $conn->query($sql);
  //Returns with available rows from the query

  if ($result->num_rows > 0) {

      // output data of each row
      while($row = $result->fetch_assoc()) {
//below code echos out information from my table. The bootstrap code is used to place the information in the correct sections of the page with    "   .$row["columnname"]. "  being used to call specific information from the selected column within my table. 

//the <a href> is used to wrap around any content that I want to be a link. When it's clicked the site will show whatever product information that is linked to the same ID as the thumbnail.

                      echo "
        
               <div class= 'col-sm-4'>
            
                  <a href=productpage.php?id=".$row["id"].">
                
                <div class='effect'>
                <img class='image' src=" . $row["image"]. " class=img-responsive style=width:100% alt=Image>
                            <img class='image hover' src=" . $row["image2"]. " class=img-responsive style=width:100% alt=Image>
                </div>
                </a>
                <div class='card-body'>
                  <h4 class='card-title'>
                    <a>".$row["name"]."</a>
                  </h4></a>
                  <h5>£".$row["price"].".00</h5>
                 <p class='card-text'>".$row["summary"]."</p>
                </div>
                </div>
              
        ";
            
            
               }}
?>
            
    
    
        </div>


    </div>
       
    
</body>
     <!--this links to and includes the footer html -->
     <?php include "includes/footer.php" ?>
</html>

