<?php include("includes/header.php") ?>

        <div class="card card-shadow border-0">
          <div class="card-body">

            <form>

              <div class="form-group">
                <label for="email">Dev Email</label>
                <input type="email" class="form-control" id="email" placeholder="torvald@linux.com">
              </div>
              
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="###-###-####">
              </div>


              <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me for future login!</label>
             </div>

              <button type="submit" class="btn btn-md btn-primary">SIGN ME IN</button>

            </form>

          </div>
        </div>

<?php include("includes/footer.php") ?>