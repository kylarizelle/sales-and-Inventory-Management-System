<?php
include'../includes/connection.php';
?>
          <!-- Page Content -->
          <div class="col-lg-12">
            <?php
              $pc = $_POST['CNAME'];
              
        
              switch($_GET['action']){
                case 'add':  
                
                    $query = "INSERT INTO category (CNAME)
                              VALUES ('$pc')";
                    mysqli_query($db,$query)or die ('Error in updating product in Database '.$query);
                    }

            ?>
              <script type="text/javascript">window.location = "category.php";</script>
          </div>

<?php
include'../includes/footer.php';
?>