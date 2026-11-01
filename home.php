<?php
ob_start();
?>

<!-- Welcome Banner -->
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Welcome to Lumière Soap House</h2>
        <p class="text-muted mb-0">Manage your products, customers, staff, and orders efficiently.</p>
    </div>
</div>

<!-- Quick Overview Cards -->
<div class="row g-3 mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-primary text-white">
            <div class="card-body d-flex align-items-center">
                <i class="bi bi-box-seam fs-1 me-3"></i>
                <div>
                    <h6 class="mb-0">Products</h6>
                    <small>Manage Inventory</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-success text-white">
            <div class="card-body d-flex align-items-center">
                <i class="bi bi-people-fill fs-1 me-3"></i>
                <div>
                    <h6 class="mb-0">Customers</h6>
                    <small>View Client List</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-warning text-dark">
            <div class="card-body d-flex align-items-center">
                <i class="bi bi-person-badge-fill fs-1 me-3"></i>
                <div>
                    <h6 class="mb-0">Staffs</h6>
                    <small>Team Directory</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0 bg-info text-white">
            <div class="card-body d-flex align-items-center">
                <i class="bi bi-cart-check-fill fs-1 me-3"></i>
                <div>
                    <h6 class="mb-0">Orders</h6>
                    <small>Track Sales</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carousel Section -->
<div class="card shadow-sm">
    <div class="card-body">
        <h5 class="card-title mb-3"><i class="bi bi-stars text-primary me-2"></i>Featured Highlights</h5>
        <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner rounded">
                <div class="carousel-item active bg-dark text-white p-5 text-center">
                    <h3>Inventory Management</h3>
                    <p class="mb-0">Keep track of your products, stock levels, and prices seamlessly.</p>
                </div>
                <div class="carousel-item bg-secondary text-white p-5 text-center">
                    <h3>Order Processing & Invoicing</h3>
                    <p class="mb-0">Generate order records and print formatted sales invoices in seconds.</p>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>