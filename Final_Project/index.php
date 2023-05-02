


<!-- index.php -->
<?php include('header.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>

  <!-- Bootstrap 5 CSS -->
  <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-LZP5MVZn5v5K5JNmn2Lr1Ry+ccOVvJicoo/LrPqC3+mlZ+x1aKlVCz+J6Jq3DyOu" crossorigin="anonymous">

  <!-- Your custom CSS -->
  <link rel="stylesheet" href="css/style.css">

<style>
.carousel-item img {
    width: 600px;
    height: 400px;
    object-fit: cover;
  }
</style>


</head>
<body>
  <!-- Your website content here -->

  <!-- Carousel Goes Here -->
  
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
   </div>
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img src="images/header_1.jpeg" class="d-block w-100" alt="...">
         <div class="carousel-caption d-none d-md-block">
            <h5>Powerful and Versatile Laptops for Gamers and Professionals</h5>
            <p>Experience top-of-the-line performance and stunning graphics with our selection of gaming laptops. Perfect for gamers and professionals who demand the best from their machines. Get yours today!</p>
            <a class="btn btn-primary" href="contact-form.php">Contact Us</a>
         </div>
      </div>
      <div class="carousel-item">
         <img src="images/Custom-PC-Repair.jpg" class="d-block w-100" alt="...">
         <div class="carousel-caption d-none d-md-block">
            <h5>Expert Repairs and Upgrades for PCs and Macs</h5>
            <p>Don't let a broken computer slow you down. Our expert technicians can quickly diagnose and repair any issues you're having with your PC or Mac. We also offer upgrade services to keep your computer running smoothly for years to come.</p>
         </div>
      </div>
      <div class="carousel-item">
         <img src="images/GoEBITS-Mac-Repair.jpg" class="d-block w-100" alt="...">
         <div class="carousel-caption d-none d-md-block">
            <h5>Fast and Reliable Tech Support Services</h5>
            <p>Got a tech emergency? Our team of experienced technicians is here to help. From hardware repairs to software troubleshooting, we've got you covered. Contact us today for fast and reliable tech support services</p>
         </div>
      </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
   </button>
</div>


<!-- Brief Description below -->

<div class="container">
  <div class="row mt-5">
    <div class="col-md-6">
      <img src="images/4567-1-600x463.jpg" alt="Byte Me PC Repair Shop" class="img-fluid">
    </div>
    <div class="col-md-6">
      <h2>About Byte Me PC Repair Shop</h2>
      <p class="mb-0 pb-3">Byte Me is a PC Repair Shop that specializes in repairing and upgrading all types of computers. Our team of experienced technicians can diagnose and fix any hardware or software issue, from virus removal to data recovery. We pride ourselves on providing fast and reliable service, with a focus on customer satisfaction.</p>
      <p>We also offer a range of high-performance gaming laptops, perfect for gamers and power users alike. Our selection includes models from top brands like Asus, Razer, Lenovo, and MSI, with features like fast processors, high-resolution displays, and powerful graphics cards. Whether you're looking to play the latest games or run demanding applications, our gaming laptops are up to the task</p>
      <p>If you're experiencing any computer problems or need an upgrade, contact us today to schedule an appointment. We're here to help!</p>
    </div>
  </div>
</div>


<!-- Services section -->
<div class="container">
  <div class="row mt-5">
    <div class="col-md-12">
      <h2>Our Services</h2>
      <p>At Byte Me PC Repair Shop, we offer a wide range of services to meet your computer repair and upgrade needs.</p>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Virus Removal</h5>
          <p class="card-text">Our experienced technicians use the latest tools and techniques to remove viruses, spyware, and other malicious software from your computer.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Hardware Upgrades</h5>
          <p class="card-text">From adding more memory to upgrading your hard drive, we can help you get the most out of your computer's hardware.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Data Recovery</h5>
          <p class="card-text">If you've lost important files or data, our team can help recover it for you, whether it's due to a hardware failure, accidental deletion, or other issue.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Products -->

<!-- Products section -->
<div class="container">
  <div class="row mt-5">
    <div class="col-md-12">
      <h2>Our Products</h2>
      <p>Check out some of our top-selling products, including high-performance gaming laptops and accessories. Our laptops feature cutting-edge technology and stunning graphics that bring your games to life. Whether you're a casual gamer or a hardcore enthusiast, we have the perfect laptop for you. And don't forget to check out our range of gaming accessories, designed to enhance your gaming experience and give you the competitive edge. From high-quality gaming headsets to precision gaming mice, we have everything you need to take your gaming to the next level.</p>
    </div>
  </div>
</div>

  <section>

  <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="https://m.media-amazon.com/images/I/81gK08T6tYL._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
        </a>

        <div class="label-top shadow-sm">
          <a class="text-white" href="#">asus</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">1.245$</span>

            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">ASUS TUF FX505DT Gaming Laptop- 15.6", 120Hz Full HD, AMD Ryzen 5 R5-3550H Processor, GeForce GTX 1650 Graphics, 8GB DDR4, 256GB PCIe SSD, RGB Keyboard, Windows 10 64-bit - FX505DT-AH51</a>
          </h5>

          <div class="d-grid gap-2 my-4">

            <a href="#" class="btn btn-warning bold-btn">add to cart</a>

          </div>
          <div class="clearfix mb-1">

            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>

            </span>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="https://m.media-amazon.com/images/I/71wF7YDIQkL._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
        </a>

        <div class="label-top shadow-sm">
          <a class="text-white" href="#">razer</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">2.345$</span>

            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">Razer Blade 15 Base Gaming Laptop 2020: Intel Core i7-10750H 6-Core, NVIDIA GeForce GTX 1660 Ti, 15.6" FHD 1080p 120Hz, 16GB RAM, 256GB SSD, CNC Aluminum, Chroma RGB Lighting, Black</a>
          </h5>

          <div class="d-grid gap-2 my-4">

            <a href="#" class="btn btn-warning bold-btn">add to cart</a>

          </div>
          <div class="clearfix mb-1">

            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>

            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="https://m.media-amazon.com/images/I/81w+3k4U8PL._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
        </a>

        <div class="label-top shadow-sm">
          <a class="text-white" href="#">lenovo</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">1.020$</span>

            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">Lenovo Legion 5 Gaming Laptop, 15.6" FHD (1920x1080) IPS Screen, AMD Ryzen 7 4800H Processor, 16GB DDR4, 512GB SSD, NVIDIA GTX 1660Ti, Windows 10, 82B1000AUS, Phantom Black</a>
          </h5>

          <div class="d-grid gap-2 my-4">

            <a href="#" class="btn btn-warning bold-btn">add to cart</a>

          </div>
          <div class="clearfix mb-1">

            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>

            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="https://m.media-amazon.com/images/I/61Ze2wc9nyS._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
        </a>
        <!-- <div class="label-top shadow-sm">Asus Rog</div>  -->
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">msi</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">2.245$</span>

            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">MSI GL66 Gaming Laptop: 15.6" 144Hz FHD 1080p Display, Intel Core i7-11800H, NVIDIA GeForce RTX 3070, 16GB, 512GB SSD, Win10, Black (11UGK-001)</a>
          </h5>

          <div class="d-grid gap-2 my-4">

            <a href="#" class="btn btn-warning bold-btn">add to cart</a>

          </div>
          <div class="clearfix mb-1">

            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

            <span class="float-end">
              
<i class="far fa-heart" style="cursor: pointer"></i>

            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</section>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ny2lDQm1sId/m9z4/KGxIg/0nITKfAK2nLeRSNdJNzAW1KjDnXN9YBp8FqbLFXgF" crossorigin="anonymous"></script>
</body>
</html>

<?php include('footer.php'); ?>

