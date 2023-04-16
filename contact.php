<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['submit'])){

   $name = $_POST['name']; 
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email']; 
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number']; 
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg']; 
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_contact = $conn->prepare("SELECT * FROM `contact` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_contact->execute([$name, $email, $number, $msg]);

   if($select_contact->rowCount() > 0){
      $message[] = 'pesan sudah terkirim!';
   }else{
      $insert_message = $conn->prepare("INSERT INTO `contact`(name, email, number, message) VALUES(?,?,?,?)");
      $insert_message->execute([$name, $email, $number, $msg]);
      $message[] = 'tanggapan sukses terkirim!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>hujat</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/makima.png" alt="">
      </div>

      <form action="" method="post">
         <h3>KIRIM TANGGAPAN</h3>
         <input type="text" placeholder="masukan nama anda" required maxlength="100" name="name" class="box">
         <input type="email" placeholder="masukan email anda" required maxlength="100" name="email" class="box">
         <input type="number" min="0" max="9999999999" placeholder="masukan nomor hp anda" required maxlength="10" name="number" class="box">
         <textarea name="msg" class="box" placeholder="silahkan mau komentar apa.....xixixixixixi" required cols="30" rows="10" maxlength="1000"></textarea>
         <input type="submit" value="Kirim Hujatan" class="inline-btn" name="submit">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fa-brands fa-whatsapp"></i>
         <h3>WhatsApp Developer</h3>
         <a href="https://wa.me/085895421884">085895421884</a>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Alamat Email</h3>
         <a href="mailto:darrenarmani666@gmail.com">darrenarmani666@gmail.com</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Alamat kantor</h3>
         <a href="https://goo.gl/maps/YsCCbUoT97Dx6kkg7">Disaat ini kami belum memiliki kantor, user aja belum ada</a>
      </div>


   </div>

</section>

<!-- contact section ends -->











<?php include 'components/footer.php'; ?>  

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>