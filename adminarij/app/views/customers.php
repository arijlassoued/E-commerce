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
              Data Table customers</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mobile</th>
              <th>Address</th>
			        <th>Action</th>
            </tr>
          </thead>
                  
          <tbody id="customer_list">
		  <?php foreach($data as $user){ ?>
             <tr>
              <td><?php echo($user->id)?></td>
              <td><?php echo($user->nom)?> <?php echo($user->prenom)?></td>
              <td><?php echo($user->email)?></td>
              <td><?php echo($user->tel)?></td>
              <td><?php echo($user->adresse)?></td>
             
            
              <td>
              <form  action=  "<?php echo URLROOT ?>/pages/deleteuser"  method="POST" >
              <button type="submit" class="btn btn-default add-product" data-dismiss="modal" aria-label="Close">Delete
                        <span aria-hidden="true">&times;</span>
                        </button>
											     <input type="hidden" name="user_id" value="<?php echo($user->id);?>" >
											</form>
             
              </td>
              
              
            </tr> 
			<?php } ?>
      
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