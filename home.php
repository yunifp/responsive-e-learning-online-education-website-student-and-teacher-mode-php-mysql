<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- quick select section starts  -->

<section class="quick-select">

   <h1 class="heading">opsi cepat</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
      <div class="box">
         <h3 class="title">komentar dan like</h3>
         <p>total likes : <span><?= $total_likes; ?></span></p>
         <a href="likes.php" class="inline-btn">lihat like</a>
         <p>total comments : <span><?= $total_comments; ?></span></p>
         <a href="comments.php" class="inline-btn">lihat komentar</a>
         <p>saved playlist : <span><?= $total_bookmarked; ?></span></p>
         <a href="bookmark.php" class="inline-btn">lihat playlist</a>
      </div>
      <?php
         }else{ 
      ?>
      <div class="box" style="text-align: center;">
         <h3 class="title">Minimal join dulu gak sih</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">Masuk</a>
            <a href="register.php" class="option-btn">Daftar</a>
         </div>
      </div>
      <?php
      }
      ?>

      <div class="box">
         <h3 class="title">Kategori Terbaik</h3>
         <div class="flex">
            <a href="search_course.php?"><i class="fas fa-code-compare"></i><span>Full Stack</span></a>
            <a href="search_course.php?"><i class="fas fa-cog"></i><span>Back End</span></a>
            <a href="search_course.php?"><i class="fas fa-code"></i><span>Front End</span></a>
            <a href="search_course.php?"><i class="fa fa-brands fa-uikit"></i><span>UI/UX</span></a>
            <a href="search_course.php?"><i class="fas fa-database"></i><span>Data Analyst</span></a>
            <a href="search_course.php?"><i class="fas fa-pen"></i><span>Graphic Design</span></a>
            <a href="search_course.php?"><i class="fas fa-calculator"></i><span>Math</span></a>
            <a href="search_course.php?"><i class="fas fa-chart-line"></i><span>Statistics</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">Trending Topik</h3>
         <div class="flex">
            <a href="search_course.php?"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="search_course.php?"><i class="fab fa-css3"></i><span>CSS</span></a>
            <a href="search_course.php?"><i class="fab fa-js"></i><span>javascript</span></a>
            <a href="search_course.php?"><i class="fab fa-react"></i><span>react</span></a>
            <a href="search_course.php?"><i class="fab fa-php"></i><span>PHP</span></a>
            <a href="search_course.php?"><i class="fab fa-bootstrap"></i><span>bootstrap</span></a>
         </div>
      </div>

      <div class="box tutor">
         <h3 class="title">Udah merasa Pro/Suhu/Sepuh?.</h3>
         <p>jadi tutor lah, ajarin yang belum bisa ya puh</p>
         <a href="admin/register.php" class="inline-btn">Jadi Tutor</a>
      </div>

   </div>

</section>

<!-- quick select section ends -->

<!-- courses section starts  -->

<section class="courses">

   <h1 class="heading">Kursus Terbaru</h1>

   <div class="box-container">

      <?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="box">
         <div class="tutor">
            <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
            <div>
               <h3><?= $fetch_tutor['name']; ?></h3>
               <span><?= $fetch_course['date']; ?></span>
            </div>
         </div>
         <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
         <h3 class="title"><?= $fetch_course['title']; ?></h3>
         <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">Lihat Playlist</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">belum ada kursus yang ditambahkan!</p>';
      }
      ?>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">Lebih banyak</a>
   </div>

</section>

<!-- courses section ends -->












<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>