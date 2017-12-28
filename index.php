<!doctype html>
<html lang="en">
  <head>
    <title>AAA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body style="background-color:#f8d7da">
    
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong><?php echo "Tarih " . date("Y/m/d") . "<br>";
 ?></strong>

 <div class="form-group">
      <input type="password" class="form-control" name="" id="" placeholder="Şifre">
    <button type="submit" class="btn btn-block  btn-danger">Giris</button>
 
 </div>
    </div>
        
        <div style="width:10%;height:10%;" class="card text-center">
          <img class="card-img-top" src="a.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">AAA</h4>
            <p class="card-text">Body</p>
          </div>
        </div>
        
     
<?php
session_start();
if (isset($_SESSION["upload"])) {
 echo $_SESSION["upload"];
} ?>
        <form  action="upload.php" method="post" enctype="multipart/form-data">
        <label class="btn btn-primary">
               <input type="file"  name="dosya" >
            </label>
        <input type="submit" value="Gönder" class="btn btn-success btn-lg"/>
            
     </form>  


        
            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname= "loginform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
  die('Bağlanamadı: ' . connect_error());
}
echo 'Başarıyla bağlandı';



?>