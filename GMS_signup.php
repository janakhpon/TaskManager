<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="img/icon/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css">
    <title>Management System</title>
  </head>
  <body>
    <!-- Start Container -->
    <div class="container-fluid container-main">

        <div class="card card-shadow border-0">
          <div class="card-body">

            <form>

              <div class="form-group">
                <label for="name">Dev name</label>
                <input type="text" class="form-control" id="name" placeholder="Linus torvald">
              </div>

              <div class="form-group">
                <label for="email">Dev Email</label>
                <input type="email" class="form-control" id="email" placeholder="torvald@linux.com">
              </div>
              
              
              <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control" id="Phone" placeholder="+(555) 432-442-672">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="###-###-####">
              </div>

              <div class="form-group">
                <label for="password1">Confirm Password</label>
                <input type="password" class="form-control" id="password1" placeholder="###-###-####">
              </div>

              <button type="submit" class="btn btn-md btn-primary">SIGN ME UP</button>
            </form>

          </div>
        </div>

<?php include("includes/footer.php") ?>