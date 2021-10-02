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
              Data Table Products</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
            
            <form  action=  "<?php echo URLROOT ?>/pages/addProd"  method="POST" >
            <td>code<input type="text" name="code" ></td>
            <td>designation<input type="text" name="designation" ></td>
            <td>quantité<input type="number" name="qte" ></td>
            <td>prix<input type="number" name="prix" ></td>
            <td>photo<input type="file" name="photo" ></td>
            <td>promo<input type="number" name="promo" ></td>
            <td>categorie<input type="text" name="categorie" ></td>
            <td>description<input type="text" name="description" ></td>
          <div class="col-12">
            <button type="submit" class="btn btn-default add-product">Add Product</button>
          </div>
          </forme>
          </tr>
          </br>
            <tr>
              <th>#</th>
              <th>photo</th>
              <th>designation</th>
              <th>prix</th>
              <th>qte</th>
			
              <th>categorie</th>
            
            </tr>
            <?php foreach($data as $item ){ ?>
              <tr>
              <td>#</td>
            
              <th><img src="<?php $img=$item->photo ;
									$imgs=explode(',',$img);
									
									echo ($imgs[0]);?>" width="60" height="60" alt=""></th>
              <td><?php echo($item->designation)?></td>
              <td><?php echo($item->prix)?></td>
              <td><?php echo($item->qte)?></td>
              <td><?php echo($item->categorie)?></td>
           
          
              <td>
              <form  action=  "<?php echo URLROOT ?>/pages/deleteprod"  method="POST" >
                        <button type="submit" class="btn btn-default add-product" data-dismiss="modal" aria-label="Close">Delete
                        <span aria-hidden="true">&times;</span>
                        </button>
											     <input type="hidden" name="Prod_name" value="<?php echo($item->code);?>" >
											</form>
             
              </td>
        
            </tr> 
         
            <?php } ?>

          </thead>
                  
                   
        
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