<?php include("includes/header.php") ?>

        <div class="card card-shadow border-0">
          <div class="card-body">

            <form>

              <div class="form-group">
                <label for="email">Account Email</label>
                <input type="email" class="form-control" id="email" placeholder="torvald@linux.com">
              </div>
              
              <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" class="form-control" id="password" placeholder="###-###-####">
              </div>


              <div class="form-group">
                <label for="password1">Confirm Password</label>
                <input type="password" class="form-control" id="password1" placeholder="###-###-####">
              </div>

              <button type="submit" class="btn btn-md btn-primary">REQUEST</button>

            </form>

          </div>
        </div>

<?php include("includes/footer.php") ?>