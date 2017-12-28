<?php



function Veri($girdi){
    $servername = "localhost";
$username = "root";
$password = "root";
$dbname= "resimupload";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
  die('Bağlanamadı: ' . connect_error());
}
echo 'Başarıyla bağlandı';

$sql="INSERT INTO resimupload values ('$girdi')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
Veri("ASD");

session_start();
if(isset($_FILES['dosya'])){
   $hata = $_FILES['dosya']['error'];
   if($hata != 0) {
      echo 'Yüklenirken bir hata gerçekleşmiş.';
   } else {
      $boyut = $_FILES['dosya']['size'];
      if($boyut > (1024*1024*3)){
         echo 'Dosya 3MB den büyük olamaz.';
      } else {
         $tip = $_FILES['dosya']['type'];
         $isim = $_FILES['dosya']['name'];
         $uzanti = explode('.', $isim);
         $uzanti = $uzanti[count($uzanti)-1];
         if($tip != 'image/jpeg' || $uzanti != 'jpg') {
            echo 'Yanlızca JPG dosyaları gönderebilirsiniz.';
         } else {
            $dosya = $_FILES['dosya']['tmp_name'];
            copy($dosya, 'upload/' . $_FILES['dosya']['name']);
            $_SESSION["upload"]= $isim . " Dosyanız upload edildi!";
           # header("location:http://localhost/test/");
         }
      }
   }
}




?>