	
<?php 

if(isset($_POST["singup"]))
{
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$con=mysqli_connect("localhost","root","","techvilla");
if($pass==$cpass)

{

$c= "SELECT * FROM userres WHERE sEmail='$email'"; 
$q=mysqli_query($con,$c);
$count=mysqli_num_rows($q);
//print_r($count);
if($count>0)
{
	echo" email already exist";
}

else

{

$query="INSERT INTO userres (Sid,sEmail,Spass,Scpas) VALUES('','$email','$pass','$cpass')";
$run=mysqli_query($con,$query);

if($run)
{
echo"<script> alert('singup successfully')</script>";
echo header("location:login.php");
}
else
{

echo" <script> alert('failed') </script> ";
}
}
}
else
{
echo"<script> alert('password or cinform password doest match')</script>";
}

}

?>

    <!DOCTYPE html>
<html lang="en">
<head>

    <title>singup</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
     rel="stylesheet">
     <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        
        <div class="row">
       <div class="col-sm-4" ></div>
       <div class="col-sm-4" >
<div class="login">
   <h2 style="text-align:center;">Singup </h2> 

        <form method="post"> 
            <div class="mb-3">
              
              <input type="email" name="email" class=" inp form-control" placeholder="enter email" id="email">
              
            </div>
            <div class="mb-3">
              
              <input type="password" name="password" class=" inp form-control" placeholder="password" id="pass">
            </div>


            <div class="mb-3">
              
              <input type="password"  name="cpassword" class=" inp form-control" placeholder="confirm password" id="pass">
            </div>
           

           
            <button type="submit" name="singup"  class=" form_btn form btn btn-primary" value="singup">singup </button>
          </form>
<br><br>
          <p>have an account?<a href="login.php">login</a></p>

        </div>
       </div>
       <div class="col-sm-4"></div>
    </div>

</div>

</body>
</html>

</body>
</html>