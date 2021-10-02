<!DOCTYPE html>
<html lang="en">
<?php include "includes/top.php";?>

  

  <body id="page-top">

  <?php include "includes/navbar.php";?>



    <div id="wrapper">

    <?php include "includes/sidebar.php";?>
    <!-- DataTables Example -->
    <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Category</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Action</th>
              
            </tr>
          </thead>
          <tbody id="category_list">
          <?php foreach($data as $cat ){ ?>
            <tr>
            <th>#</th>
           
              <td><?php echo($cat->nom)?></td>
              
              <td>
              <form  action=  "<?php echo URLROOT ?>/pages/deletecat"  method="POST" >
              <button type="submit" class="btn btn-default add-product" data-dismiss="modal" aria-label="Close">Delete
                        <span aria-hidden="true">&times;</span>
                        </button>
											     <input type="hidden" name="cat_name" value="<?php echo($cat->nom);?>" >
											</form>
             
              </td>
              
              
            </tr> 
            <?php } ?>
            <tr>
              <form  action=  "<?php echo URLROOT ?>/pages/addcat"  method="POST" >
              <input type="text" name="cat_name" >
        		<div class="col-12">

            
        			<button type="submit" class="btn btn-default add-product">Add Category</button>
        		</div>
            </forme>
            </tr>
            </br>
          </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <p class="small text-center text-muted my-5">
            <em>More table examples coming soon...</em>
          </p>

        </div>
        

        <?php include "includes/footer.php";?>
  </body>

</html>