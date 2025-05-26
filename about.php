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
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-2-1.jpg" alt="">
      </div>

      <div class="content">
         <h3>kenapa memilih kami?</h3>
         <p>Selamat datang di toko kue kami, Kami menempatkan kualitas sebagai prioritas utama dalam setiap kreasi kami. Bahan-bahan terbaik dipilih dengan cermat untuk menghasilkan kue-kue berkualitas tinggi.
            Tim ahli koki kami terus berinovasi dalam menciptakan kue-kue yang unik dan menarik.
            Kue-kue kami tidak hanya tentang penampilan yang indah, tetapi juga rasa yang luar biasa. Dapur kami dilengkapi dengan peralatan modern dan tim profesional yang menjaga kebersihan ruang kerja, sehingga pelanggan dapat merasa yakin tentang kualitas dan keamanan setiap kue yang mereka beli.
            Kepuasan pelanggan adalah prioritas kami. Tim layanan pelanggan kami siap membantu Anda dalam setiap pertanyaan atau permintaan.</p>
         <a href="menu.html" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>pilih menu</h3>
         <p>Anda akan disambut dengan pilihan menu yang menggoda. Dari kue-kue klasik yang lezat hingga inovasi kreatif terbaru, setiap produk dipajang dengan cantik.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>pengiriman cepat</h3>
         <p>roses pemesanan juga dibuat cepat dan efisien, memastikan pelanggan dapat menikmati pengalaman belanja tanpa hambatan.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p>Setiap gigitan kue memberikan kenikmatan yang luar biasa, 
            menghadirkan kombinasi rasa yang sempurna dan memanjakan 
            lidah pelanggan dengan cita rasa istimewa.</p>
      </div>

   </div>

</section>

<!-- steps section ends -->



<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>