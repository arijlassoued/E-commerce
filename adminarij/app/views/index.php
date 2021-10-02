<?php if(!isset($_SESSION['email'])){
  header('location:' . URLROOT . '/users/login');
} ?>
<!DOCTYPE html>
<html lang="en">
<?php include "includes/top.php";?>

  

  <body id="page-top">

  <?php include "includes/navbar.php";?>



    <div id="wrapper">

    <?php include "includes/sidebar.php";?>

    <!-- Icon Cards-->
    <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">Customers</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="http://localhost/adminarij/pages/customers">
                  <span class="float-left"> ♡ ♡ ♡ ♡ ♡ </span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">Products</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="http://localhost/adminarij/pages/products">
                  <span class="float-left"> ♡ ♡ ♡ ♡ ♡ </span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">Category</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="http://localhost/adminarij/pages/categories">
                  <span class="float-left"> ♡ ♡ ♡ ♡ ♡ </span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">Log Out</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="http://localhost/adminarij/users/logout">
                  <span class="float-left"> ♡ ♡ ♡ ♡ ♡ </span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
  <!-- DataTables Example -->
  <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Table admin </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>nom</th>
                      <th>email</th>
                      
                    </tr>
                  </thead>
                  <tbody id="admin_list">
          <?php foreach($data as $admin){ ?>

          
            <tr>
              <td><?php echo($admin->id_admin) ?></td>
              <td><?php echo($admin->adminname) ?></td>
              <td><?php echo($admin->email) ?></td>
              <td>
              <form  action=  "<?php echo URLROOT ?>/pages/deletadmin"  method="POST" >
              <button type="submit" class="btn btn-default dell-admin" data-dismiss="modal" aria-label="Close">Delete
                        <span aria-hidden="true">&times;</span>
                        </button>
											     <input type="hidden" name="admin_id" value="<?php echo($admin->id_admin);?>" >
											</form>
             
              </td>
              
            </tr>
            <?php } ?>
          </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

      
 
        <?php include "includes/footer.php";?>
  </body>

</html>