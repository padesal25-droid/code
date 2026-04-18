<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ferlynia Bakeshop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

  <style>
    body { background-color: #fff; }
    .brand-brown { color: #8B4513; }
    .text-brown { color: #6B4423; }
    .bg-cream { background-color: #FFF8F0; }
    .bg-wheat { background-color: #F5DEB3; }

    .icon-circle {
      width: 64px;
      height: 64px;
      background-color: #FFB347;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 32px;
      margin: auto;
    }
  </style>
</head>
<body>
<!-- HEADER / NAVBAR -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="Home.php">
      <img src="./../picture.jpg" alt="Ferlynia Logo" width="50" class="me-2">
      <div>
        <div class="fw-bold brand-brown" style="font-family:Merriweather, serif;">Ferlynia Bakeshop</div>
        <small class="text-brown">Guiteb,Ramos,Tarlac</small>
      </div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link brand-brown" href="Home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link brand-brown" href="About.php">About</a></li>
        <li class="nav-item"><a class="nav-link brand-brown" href="products.php">Products</a></li>
        <li class="nav-item"><a class="nav-link brand-brown" href="reviews.php">Reviews</a></li>
        <li class="nav-item"><a class="nav-link brand-brown" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- HERO -->
<section class="py-5 text-center text-white" style="background:#8B4513;">
  <div class="container py-5">
    <h1 class="display-4 fw-bold" style="font-family:Merriweather, serif;">
      Ferlynia Bakeshop
    </h1>
    <p class="lead">
      Serving Ramos with fresh breads and pastries every day
    </p>
  </div>
</section>

<!-- WHY CHOOSE US -->
<section class="py-5 bg-cream">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold brand-brown" style="font-family:Merriweather, serif;">
        Why Choose Ferlynia?
      </h2>
      <p class="text-brown">
        We're more than just a bakery — we're part of the community
      </p>
    </div>

    <div class="row g-4 text-center">
      <div class="col-md-3">
        <div class="p-4 bg-white rounded shadow h-100">
          <div class="icon-circle mb-3">
            <i class="bi bi-heart-fill"></i>
          </div>
          <h5 class="fw-bold brand-brown">Made with Love</h5>
          <p class="text-brown small">
            Freshly baked daily using traditional Filipino recipes
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="p-4 bg-white rounded shadow h-100">
          <div class="icon-circle mb-3">
            <i class="bi bi-clock-fill"></i>
          </div>
          <h5 class="fw-bold brand-brown">Fresh Daily</h5>
          <p class="text-brown small">
            Open from 5:30 AM with hot pandesal every morning
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="p-4 bg-white rounded shadow h-100">
          <div class="icon-circle mb-3">
            <i class="bi bi-award-fill"></i>
          </div>
          <h5 class="fw-bold brand-brown">Quality Assured</h5>
          <p class="text-brown small">
            Rated 4.8 stars by loyal customers in Ramos
          </p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="p-4 bg-white rounded shadow h-100">
          <div class="icon-circle mb-3">
            <i class="bi bi-star-fill"></i>
          </div>
          <h5 class="fw-bold brand-brown">Affordable</h5>
          <p class="text-brown small">
            Great taste at prices everyone can enjoy
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURED PRODUCTS -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold brand-brown" style="font-family:Merriweather, serif;">
        Our Bestsellers
      </h2>
      <p class="text-brown">
        Customer favorites you’ll love
      </p>
    </div>

    <div class="row g-4">
      <!-- Product Card -->
      <div class="col-md-3">
        <div class="card shadow h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top">
          <div class="card-body text-center">
            <h6 class="fw-bold brand-brown">Classic Pandesal</h6>
            <p class="text-muted small">Freshly baked every morning</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top">
          <div class="card-body text-center">
            <h6 class="fw-bold brand-brown">Ensaymada</h6>
            <p class="text-muted small">Soft, cheesy, and sweet</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top">
          <div class="card-body text-center">
            <h6 class="fw-bold brand-brown">Spanish Bread</h6>
            <p class="text-muted small">Customer favorite</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card shadow h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top">
          <div class="card-body text-center">
            <h6 class="fw-bold brand-brown">Cheese Roll</h6>
            <p class="text-muted small">Perfect snack anytime</p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="products.php" class="btn btn-lg text-white fw-bold px-5 py-3 rounded-pill"
         style="background:#8B4513;">
        View All Products
      </a>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section class="py-5 bg-wheat">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold brand-brown" style="font-family:Merriweather, serif;">
        What Our Customers Say
      </h2>
      <div class="d-flex justify-content-center align-items-center gap-2">
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <i class="bi bi-star-fill text-warning"></i>
        <span class="fw-bold brand-brown ms-2">4.8</span>
      </div>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow">
          <p class="text-brown">
            “Masarap at laging fresh! Babalik-balikan talaga.”
          </p>
          <h6 class="fw-bold brand-brown mb-0">– Maria S.</h6>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow">
          <p class="text-brown">
            “Best pandesal in Ramos.Sulit ang presyo.”
          </p>
          <h6 class="fw-bold brand-brown mb-0">– Juan D.</h6>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow">
          <p class="text-brown">
            “Friendly staff at sobrang sarap ng tinapay.”
          </p>
          <h6 class="fw-bold brand-brown mb-0">– Ana L.</h6>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="reviews.php" class="btn btn-lg text-white fw-bold px-5 py-3 rounded-pill"
         style="background:#8B4513;">
        Read All Reviews
      </a>
    </div>
  </div>
</section>

  <div> 
    <a class="nav-link brand-brown" href="Footer.php">Footer</a>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>