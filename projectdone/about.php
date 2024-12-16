<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tentang Kami</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Pesan Pengembang:</h3>
         <p>Halo! Saya Harsh Chaudhary. Seorang mahasiswa program BE di Departemen Rekayasa Perangkat Lunak dari NCIT College [Angkatan: 2023]. Saya menyukai desain website dan eksplorasi hal-hal baru. Belajar hal baru adalah hobi saya.</p>

         <p>Saya ingin mengucapkan terima kasih kepada <a href="https://www.facebook.com/er.ashokbasnet" target="_blank">Er. Ashok Basnet</a> Sir atas bimbingannya selama sesi pembelajaran, yang membuat saya mampu mengembangkan proyek seperti ini.</p>
         <a href="contact.php" class="btn">Hubungi Kami</a>
      </div>

   </div>

</section>



<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>
