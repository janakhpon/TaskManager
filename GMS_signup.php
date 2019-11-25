<?php include("includes/header.php") ?>

        <div class="card">
          <div class="card-body">
          <?php validate_user_registration(); ?>
          </div>
        </div>

        <div class="card card-shadow border-0">
          <div class="card-body">

          

            <form role="form" method="post">

              <div class="form-group">
                <label for="name">Dev name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Linus torvald">
              </div>

              <div class="form-group">
                <label for="email">Dev Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="torvald@linux.com">
              </div>
              
              
              <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control" id="Phone" name="phone" placeholder="+(555) 432-442-672">
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="###-###-####">
              </div>

              <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="###-###-####">
              </div>

              <button type="submit" class="btn btn-md btn-primary">SIGN ME UP</button>
            </form>



          </div>
        </div>

 
<?php include("includes/footer.php") ?>