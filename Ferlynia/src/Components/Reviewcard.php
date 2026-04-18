<!-- Review Card -->
<div class="col-md-4 mb-4">
  <div class="card review-card rounded-3xl shadow-sm p-3" style="background-color:#FAF0E6; transition: all 0.3s;">
    
    <!-- Card Header -->
    <div class="d-flex justify-content-between align-items-center mb-2">
      <h5 class="card-title fw-bold mb-0" style="color:#8B4513;">REVIEW_AUTHOR</h5>
      
      <!-- Star Rating -->
      <div>
        <!-- Repeat the star span for review.rating -->
        <span class="text-warning fs-5">★</span>
        <span class="text-warning fs-5">★</span>
        <span class="text-warning fs-5">★</span>
        <!-- Adjust number of stars according to rating -->
      </div>
    </div>
    
    <!-- Review Date -->
    <h6 class="card-subtitle mb-2 text-secondary" style="color:#6B4423; font-size:0.8rem;">REVIEW_DATE</h6>
    
    <!-- Card Body -->
    <div class="card-body p-0">
      <p class="card-text fst-italic" style="color:#2C1810; line-height:1.4rem;">
        "REVIEW_TEXT"
      </p>
    </div>
    
  </div>
</div>

<!-- Optional Hover Effect -->
<style>
  .review-card:hover {
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.2);
    transform: translateY(-4px);
  }
</style>