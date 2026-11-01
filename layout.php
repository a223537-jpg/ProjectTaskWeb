<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid p-0 min-vh-100">
    <div class="row g-0 min-vh-100">

      <?php require_once 'sidebar.php'; ?>

      <div class="col bg-light">
        <!-- Mobile Header with Burger -->
        <div id="myBurger" class="p-3 d-lg-none text-white bg-dark">
          <div class="row">
            <a href="#" class="text-white text-decoration-none" data-bs-toggle="offcanvas" data-bs-target="#mySidebar">
              <i class="bi bi-list"></i><h5 class="ms-3 d-inline">My Company</h5>
            </a>
          </div>
        </div>
          
        <div class="p-4">
          <?= $content ?? '' ?>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>