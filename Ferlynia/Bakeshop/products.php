<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Products | Ferlynia Bakeshop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

  <style>
    .brand-brown { color: #8B4513; }
    .text-brown { color: #6B4423; }
    .bg-cream { background-color: #FFF8F0; }

    .category-btn .nav-link {
      border-radius: 50px;
      padding: 10px 20px;
      font-weight: 600;
      color: #8B4513;
    }

    .category-btn .nav-link.active {
      background-color: #8B4513;
      color: white;
    }
  </style>
</head>
<nav class="navbar navbar-expand-lg bg-white shadow-sm py-3">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="54542aec-62ad-4f24-a108-b40320eafb6f.png" alt="Ferlynia Logo" width="50" class="me-2">
      <div>
        <div class="fw-bold brand-brown" style="font-family:Merriweather, serif;">Ferlynia Bakeshop</div>
        <small class="text-brown">Paniqui, Tarlac</small>
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

<body class="bg-cream">

<!-- HEADER -->
<section class="py-5 text-center text-white"
         style="background: linear-gradient(135deg, #8B4513, #D2691E);">
  <div class="container py-4">
    <h1 class="display-4 fw-bold mb-3"
        style="font-family:Merriweather, serif;">
      Our Products
    </h1>
    <p class="lead">
      Freshly baked Filipino treats made with love every day
    </p>
  </div>
</section>

<!-- PRODUCTS SECTION -->
<section class="py-5">
  <div class="container">

    <!-- CATEGORY TABS -->
    <ul class="nav nav-pills justify-content-center mb-5 category-btn" role="tablist">
      <li class="nav-item">
        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#all">
          All Products
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#breads">
          Breads & Pandesal
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#cakes">
          Cakes & Pastries
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#special">
          Specialty Items
        </button>
      </li>
      <li class="nav-item">
        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#drinks">
          Drinks
        </button>
      </li>
    </ul>

    <!-- TAB CONTENT -->
    <div class="tab-content">

      <!-- ALL PRODUCTS -->
      <div class="tab-pane fade show active" id="all">
        <div class="row g-4">

          <!-- Product Card -->
          <div class="col-md-4">
            <div class="card shadow h-100">
              <img src="https://via.placeholder.com/400x250" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="fw-bold brand-brown">Classic Pandesal</h5>
                <p class="text-muted small">Freshly baked every morning</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card shadow h-100">
              <img src="https://via.placeholder.com/400x250" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="fw-bold brand-brown">Ensaymada</h5>
                <p class="text-muted small">Soft and cheesy delight</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card shadow h-100">
              <img src="https://via.placeholder.com/400x250" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="fw-bold brand-brown">Spanish Bread</h5>
                <p class="text-muted small">Customer favorite</p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- BREADS -->
      <div class="tab-pane fade" id="breads">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card shadow h-100">
              <img src="https://via.placeholder.com/400x250" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="fw-bold brand-brown">Pandesal</h5>
                <p class="text-muted small">Hot and fresh daily</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- CAKES -->
      <div class="tab-pane fade" id="cakes">
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card shadow h-100">
              <img src="https://via.placeholder.com/400x250" class="card-img-top">
              <div class="card-body text-center">
                <h5 class="fw-bold brand-brown">Chocolate Cake</h5>
                <p class="text-muted small">Perfect for celebrations</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SPECIAL -->
      <div class="tab-pane fade" id="special">
        <div class="text-center py-5">
          <p class="text-brown fs-5">
            No specialty items available yet.
          </p>
        </div>
      </div>

      <!-- DRINKS -->
      <div class="tab-pane fade" id="drinks">
        <div class="text-center py-5">
          <p class="text-brown fs-5">
            Drinks coming soon.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-5 text-center text-white" style="background:#8B4513;">
  <div class="container">
    <h2 class="fw-bold mb-3" style="font-family:Merriweather, serif;">
      Visit Us for Fresh Baked Goods
    </h2>
    <p class="mb-2">
      Open daily from 5:30 AM to 8:30 PM. Takeout available!
    </p>
    <p class="opacity-75">
      📍 Guiteb Ramos Road, Paniqui, Tarlac
    </p>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>