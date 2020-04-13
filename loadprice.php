<?php include "db/connect.php";?>
<?php
$output = '';

if(isset($_POST["price_id"]))
{
     if($_POST["price_id"] != '')
     {
          $sql = 'SELECT * FROM product ORDER BY price '.$_POST['price_id'].'  ';
     }
     else
     {
        $sql="SELECT * FROM product";
     }
     $result = mysqli_query($conn, $sql);

     while($row = mysqli_fetch_array($result))
     {
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
     echo $output;
}
?>