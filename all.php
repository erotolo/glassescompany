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
        <!-- connection file include connects to the stylesheet -->
       <style> <?php include "style.css"?> </style>
        <!--below script is used for the filter system -->
        <script
  src="https://code.jquery.com/jquery-1.11.2.min.js"
  integrity="sha256-Ls0pXSlb7AYs7evhd+VLnWsZ/AqEHcXBeMZUycz/CcA="
  crossorigin="anonymous"></script>
    
     </head>

<body>
<!-- php includes that link the navbar and the jquery and basic styling for the cart-->
<?php include "includes/cart.php" ?>
<?php include "includes/navbar.php" ?>    

    
  <!-- div class 'main' wrapping the contents of the page so that it can be positioned below the nav bar as it is a fixed nav bar  -->  
    <div class="main"> 
    <!--html for the banner at the top of the page -->
    <div class="topbanner"> 
    <div class="productstitle">
    <h1> All Products</h1>    
    </div>
    </div>
 <!-- php for the filtering system.This echoes out the dropdown.-->   
<select name="price" id="price">
                    <option value="">Sort By :</option>
                    <?php echo fill_price($conn) ?>
               </select>

                     <div id="show_product">
                          <?php echo fill_product($conn)?>
                     </div>
        
         
            
        <?php

 //below php selects the price table which then shows the price in ascending and descending order 
 function fill_price($conn)
 {
      $output = '';
      $sql = "SELECT * FROM price";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result))
      {
           $output .= '<option value="'.$row["price_id"].'">'.$row["price"].'</option>';
      }
      return $output;    
            
            
     }       
            
     function fill_product($conn)
 {        
// php that selects all from the products table       
    $output = '';        
            
         $sql="SELECT * FROM product";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result)) {
//below code echos out information from my table. The bootstrap code is used to place the information in the correct sections of the page with    "   .$row["columnname"]. "  being used to call specific information from the selected column within my table. 

//the <a href> is used to wrap around any content that I want to be a link. When it's clicked the site will show whatever product information that is linked to the same ID as the thumbnail.
        $output .= "     
            
            
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
            
            
               }
?>
            
            
            
            
            <?php
      return $output;
 }
 ?>
  

            
</div>
<!--jquery that allows the user to sort products by price. It calls Ajax in order to get the information from the table. -->
 <script>
  $(document).ready(function(){
       $('#price').change(function(){
            var price_id = $(this).val();
            $.ajax({
                 url:"loadprice.php",
                 method:"POST",
                 data:{price_id:price_id},
                 success:function(data){
                      $('#show_product').html(data);
                 }
            });
       });
  });
  </script>        
</body>
</html>