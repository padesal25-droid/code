<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us – Ferlynia Bakeshop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

  <style>
    .brand-brown { color: #8B4513; }
    .bg-brown-gradient {
      background: linear-gradient(135deg, #8B4513, #D2691E);
    }
    .bg-light-brown {
      background-color: #FFF8F0;
    }
    .circle-icon {
      width: 48px;
      height: 48px;
      background-color: #FFB347;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 20px;
    }
  </style>
</head>
<body>
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
<!-- HEADER -->
<section class="bg-brown-gradient text-white text-center py-5">
  <div class="container">
    <h1 class="display-4 fw-bold mb-3" style="font-family: Merriweather, serif;">
      Visit Us
    </h1>
    <p class="lead">
      We'd love to hear from you! Stop by or send us a message
    </p>
  </div>
</section>

<!-- CONTENT -->
<section class="py-5 bg-light-brown">
  <div class="container">
    <div class="row g-5">

      <!-- CONTACT INFO -->
      <div class="col-lg-6">
        <h2 class="fw-bold brand-brown mb-4" style="font-family: Merriweather, serif;">
          Get In Touch
        </h2>

        <!-- Location -->
        <div class="d-flex align-items-start bg-white p-4 rounded shadow mb-4">
          <div class="circle-icon me-3">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div>
            <h5 class="fw-bold brand-brown">Location</h5>
            <p class="text-muted mb-0">
              MJ98+3VM, Guiteb Ramos Road<br>
              Paniqui, Tarlac<br>
              Philippines
            </p>
          </div>
        </div>

        <!-- Hours -->
        <div class="d-flex align-items-start bg-white p-4 rounded shadow mb-4">
          <div class="circle-icon me-3">
            <i class="bi bi-clock-fill"></i>
          </div>
          <div>
            <h5 class="fw-bold brand-brown">Business Hours</h5>
            <p class="text-muted mb-0">
              <strong>Daily:</strong> 6:30 AM – 7:30 PM<br>
              <span class="text-success fw-semibold">Open 7 Days a Week</span>
            </p>
          </div>
        </div>

        <!-- Services -->
        <div class="d-flex align-items-start bg-white p-4 rounded shadow mb-4">
          <div class="circle-icon me-3">
            <i class="bi bi-telephone-fill"></i>
          </div>
          <div>
            <h5 class="fw-bold brand-brown">Services</h5>
            <p class="text-muted mb-0">
              ✓ Takeout Available<br>
              ✓ Fresh Daily Baking<br>
              ✓ Order Cake<br>
            </p>
          </div>
        </div>

        <!-- MAP -->
        <div class="bg-white rounded shadow overflow-hidden">
          <iframe
            src="https://www.google.com/maps/place/Guiteb+Ramos+Tarlac/@15.6676179,120.6175476,18z/data=!4m6!3m5!1s0x339134aa52c7773f:0x67889df5af32a47c!8m2!3d15.6677125!4d120.6171719!16s%2Fg%2F11rwnkf4hf?entry=ttu&g_ep=EgoyMDI2MDEyOC4wIKXMDSoKLDEwMDc5MjA2OUgBUAM%3D"
            width="100%"
            height="300"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
          </iframe>
        </div>
      </div>

      <!-- CONTACT FORM -->
      <div class="col-lg-6">
        <div class="bg-white p-5 rounded shadow-lg">
          <h2 class="fw-bold brand-brown mb-3" style="font-family: Merriweather, serif;">
            Send Us a Message
          </h2>
          <p class="text-muted mb-4">
            Have questions or special requests? We'd love to hear from you!
          </p>

          <form>
            <div class="mb-3">
              <label class="form-label fw-semibold brand-brown">Your Name *</label>
              <input type="text" class="form-control" placeholder="Juan Dela Cruz" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold brand-brown">Email Address *</label>
              <input type="email" class="form-control" placeholder="juan@example.com" required>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold brand-brown">Phone Number (Optional)</label>
              <input type="text" class="form-control" placeholder="+63 912 345 6789">
            </div>

            <div class="mb-4">
              <label class="form-label fw-semibold brand-brown">Your Message *</label>
              <textarea class="form-control" rows="5" placeholder="Tell us how we can help you..." required></textarea>
            </div>

            <button type="submit" class="btn w-100 text-white fw-bold py-3 rounded-pill"
              style="background-color:#8B4513;">
              <i class="bi bi-send-fill me-2"></i>
              Send Message
            </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>