<!-- Product Card -->
<div class="col-md-4 mb-4">
  <div class="card product-card shadow-lg rounded-3xl overflow-hidden position-relative" style="transition: all 0.3s;">
    
    <!-- Image -->
    <div class="position-relative overflow-hidden" style="height: 16rem;">
      <img src="PRODUCT_IMAGE_URL" alt="PRODUCT_NAME" class="card-img-top object-fit-cover" style="width:100%; height:100%; transition: transform 0.5s;">
      
      <!-- Featured Badge -->
      <span class="badge position-absolute top-0 end-0 m-3 bg-warning text-dark fw-semibold px-3 py-1">Featured</span>
      
      <!-- Overlay on hover -->
      <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to top, rgba(0,0,0,0.5), transparent); opacity:0; transition: opacity 0.3s;"></div>
    </div>

    <!-- Card Body -->
    <div class="card-body">
      <h5 class="card-title text-brown fw-bold" style="font-family:Merriweather, serif;">PRODUCT_NAME</h5>
      <h6 class="card-subtitle mb-2 text-secondary fw-medium">CATEGORY</h6>
      <p class="card-text text-secondary mb-3" style="font-size:0.9rem; line-height:1.4rem;">
        PRODUCT_DESCRIPTION
      </p>
      <div class="d-flex justify-content-between align-items-center">
        <span class="text-brown fw-bold fs-4">PRICE_RANGE</span>
      </div>
    </div>

  </div>
</div>

<!-- Optional Hover Effects -->
<style>
  .text-brown { color: #8B4513 !important; }
  .text-secondary { color: #6B4423 !important; }
  .product-card:hover { transform: translateY(-8px); box-shadow: 0 1rem 2rem rgba(0,0,0,0.2); }
  .product-card:hover .card-img-top { transform: scale(1.1); }
  .product-card:hover .overlay { opacity: 1; }
  .object-fit-cover { object-fit: cover; }
</style>