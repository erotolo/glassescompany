
<?
if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['name'];
 $email = $_POST['email'];
 $male = $_POST['male'];
 $female = $_POST['female'];
 // variables for input data
 
 // sql query for inserting data into database
 $sql_query = "INSERT INTO form(name,email,male,female) VALUES('$name','$email','$male','$female')";
 // sql query for inserting data into database
}
?>
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Inserted Successfully Checkout Your Database Table');
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}

?>


<div class="container">
          <div class="row">
              <div class="col-md-12">
       <div class="signup">
           <h2>Sign Up to Our Monthly Newsletter Below!</h2>
           <!-- Button to open the modal -->
<button class="buttonsignup" onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form  method="post" class="modal-content animate" action="/action_page.php">
    <h4>Enter your name and email below to get the latest deals!</h4>
    <div class="container">
    <label><b>Name</b></label>
    <input type="text" placeholder="Name" name="name" required> <!--textbox-->
    <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
       <!-- checkboxes for mens or women's glasses, the user can also choose both -->
    <label class="container">Mens
    <input type="checkbox" checked="checked">
    <span class="checkmark"></span>
        </label>

        <label class="container">Womens
    <input type="checkbox">
    <span class="checkmark"></span>
        </label>



      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
    </div>
    </div>


