<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer Reviews – Ferlynia Bakeshop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">

  <style>
    body { background: #FFF8F0; }
    .brand-brown { color: #8B4513; }
    .text-brown { color: #6B4423; }
    .bg-gradient-brown { background: linear-gradient(135deg, #8B4513, #D2691E); }
    .star { color: #FFB347; }
    .rating-bar-bg { background: #E5E5E5; border-radius: 50px; }
    .rating-bar-fill { background: #FFB347; height: 12px; border-radius: 50px; transition: width 0.5s; }
  </style>
</head>
<body>

<!-- HEADER -->
<section class="py-5 bg-gradient-brown text-center text-white">
  <div class="container py-4">
    <h1 class="display-4 fw-bold" style="font-family:Merriweather, serif;">Customer Reviews</h1>
    <p class="lead">See what our happy customers have to say about us</p>
  </div>
</section>

<!-- RATING SUMMARY -->
<section class="py-5">
  <div class="container">
    <div class="bg-[#FFF8F0] rounded-3xl p-4 shadow-lg">
      <div class="row g-4 align-items-center">

        <!-- Average Rating -->
        <div class="col-lg-6 text-center text-lg-start">
          <h2 class="display-3 fw-bold brand-brown mb-3">4.8</h2>
          <div class="mb-2">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
          </div>
          <p class="text-brown mb-1">Based on <strong>11 reviews</strong></p>
          <p class="text-success fw-semibold">
            &#8679; Excellent rating
          </p>
        </div>

        <!-- Rating Distribution -->
        <div class="col-lg-6">
          <div class="mb-2 d-flex align-items-center">
            <div class="me-2 text-brown fw-semibold">5 <span class="star">&#9733;</span></div>
            <div class="flex-grow-1 rating-bar-bg">
              <div class="rating-bar-fill" style="width: 82%;"></div>
            </div>
            <div class="ms-2 text-brown fw-semibold">9</div>
          </div>

          <div class="mb-2 d-flex align-items-center">
            <div class="me-2 text-brown fw-semibold">4 <span class="star">&#9733;</span></div>
            <div class="flex-grow-1 rating-bar-bg">
              <div class="rating-bar-fill" style="width: 18%;"></div>
            </div>
            <div class="ms-2 text-brown fw-semibold">2</div>
          </div>

          <div class="mb-2 d-flex align-items-center">
            <div class="me-2 text-brown fw-semibold">3 <span class="star">&#9733;</span></div>
            <div class="flex-grow-1 rating-bar-bg">
              <div class="rating-bar-fill" style="width: 0%;"></div>
            </div>
            <div class="ms-2 text-brown fw-semibold">0</div>
          </div>

          <div class="mb-2 d-flex align-items-center">
            <div class="me-2 text-brown fw-semibold">2 <span class="star">&#9733;</span></div>
            <div class="flex-grow-1 rating-bar-bg">
              <div class="rating-bar-fill" style="width: 0%;"></div>
            </div>
            <div class="ms-2 text-brown fw-semibold">0</div>
          </div>

          <div class="mb-2 d-flex align-items-center">
            <div class="me-2 text-brown fw-semibold">1 <span class="star">&#9733;</span></div>
            <div class="flex-grow-1 rating-bar-bg">
              <div class="rating-bar-fill" style="width: 0%;"></div>
            </div>
            <div class="ms-2 text-brown fw-semibold">0</div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- REVIEWS GRID -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center fw-bold brand-brown mb-5" style="font-family:Merriweather, serif;">
      What Our Customers Are Saying
    </h2>

    <div class="row g-4">

      <!-- Review Card -->
      <div class="col-md-4">
        <div class="card shadow h-100">
          <div class="card-body">
            <h5 class="fw-bold brand-brown">Juan Dela Cruz</h5>
            <div class="mb-2">
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
            </div>
            <p class="text-brown small">
              Delicious bread! Always fresh and tasty.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow h-100">
          <div class="card-body">
            <h5 class="fw-bold brand-brown">Maria Santos</h5>
            <div class="mb-2">
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
            </div>
            <p class="text-brown small">
              The ensaymada is heavenly! Highly recommend.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow h-100">
          <div class="card-body">
            <h5 class="fw-bold brand-brown">Pedro Lim</h5>
            <div class="mb-2">
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
              <span class="star">&#9733;</span>
            </div>
            <p class="text-brown small">
              Spanish bread and coffee are my daily favorites.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-5 text-center text-white" style="background:#8B4513;">
  <div class="container">
    <h2 class="fw-bold mb-3" style="font-family:Merriweather, serif;">
      Come Taste What Everyone's Raving About!
    </h2>
    <p class="lead mb-2">
      Visit us and experience the quality that earned us a 4.8-star rating
    </p>
    <p class="opacity-75">
      Open Daily: 5:30 AM - 8:30 PM | Takeout Available
    </p>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>