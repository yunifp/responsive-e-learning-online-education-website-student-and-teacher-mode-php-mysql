<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tentang kami</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/pake.png" alt="">
      </div>

      <div class="content">
         <h3>Mengapa harus BOK?</h3>
         <p>BOK adalah platform kelas online tutor sebaya yang dikhususkan untuk <span>Orang Biasa</span> dan <span>Para Sepuh</span> yang rendah hati, tidak diperuntukan untuk <span>ORANG ELITE </span> yang elit silahkan belajar di <span>kafe </span>saja sambil pesan <span>americano coffee.</span></p>
         <a href="courses.php" class="inline-btn">Kursus kami</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fa-solid fa-chess-king"></i>
         <div>
            <h3>+1</h3>
            <span>kursus video online</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+1</h3>
            <span>Orang biasa yang pintar</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5</h3>
            <span>Sepuh</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>pake nanya</h3>
            <span>jelas langsung paham</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Jadi gini tanggapan beliau beliau yang telah bergabung</h1>

   <div class="box-container">

      <div class="box">
         <p>Tanggapan masih kosong, orang membernya aja kagak ada,,,</p>
         <div class="user">
            <img src="images/profil.jpg" alt="">
            <div>
               <h3>mas .......</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Tanggapan masih kosong, orang membernya aja kagak ada,,,</p>
         <div class="user">
            <img src="images/profil.jpg" alt="">
            <div>
               <h3>mas .......</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Tanggapan masih kosong, orang membernya aja kagak ada,,,</p>
         <div class="user">
            <img src="images/profil.jpg" alt="">
            <div>
               <h3>mas .......</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Tanggapan masih kosong, orang membernya aja kagak ada,,,</p>
         <div class="user">
            <img src="images/profil.jpg" alt="">
            <div>
               <h3>mas .......</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Tanggapan masih kosong, orang membernya aja kagak ada,,,</p>
         <div class="user">
            <img src="images/profil.jpg" alt="">
            <div>
               <h3>mas .......</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Tanggapan masih kosong, orang membernya aja kagak ada,,,</p>
         <div class="user">
            <img src="images/profil.jpg" alt="">
            <div>
               <h3>mas .......</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>