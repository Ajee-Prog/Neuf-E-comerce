<?php //session_start();
include('Incl/header.php'); //session_destroy(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">

    <title>Shop</title>

    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>



   


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



   <!-- jQuery library  -->
<-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>




    <!-- Latest compiled and minified CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script> -->


    <!-- Latest compiled and minified CSS
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 -->

 <!-- jQuery library  -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- Popper JS --
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

!-- Latest compiled JavaScript --
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

    
</head>
<body style="overflow: auto;">
       
<div class="container-scroller">
   
  <!-- <nav>
  
      <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="" width="60" height="40"></a>
      </div>
      <input type="checkbox" id="click">
      <label for="click" class="menu-btn">
        <i class="fa fa-bars"></i>
      </label>
      <ul>
        <li><a href="store.php" class="active">Shop</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="music.php">Music</a></li>
        <li><a href="article.php">Articles</a></li>
        <li> <div> <a href="cart.php" class="btn btn-outline-success">Cart <span>(0)</span></a></div></li>
      </ul>
</nav> -->
  
  
<?php //print_r($_SESSION['cart']);?>
  
  
    <!-- New SHOW CASE -->
    <div class="container page-body-wrapper full-page-wrapper">
    <div id="h2">
        <h2>Shop</h2>
    </div>
              <div id="message"></div>
                <div class="row mt-2 pb-3 px-3 justify-content-md-center">
                    <?php include('config.php'); 
                    $stmt = $conn->prepare(" SELECT * FROM product");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while( $row=$result->fetch_assoc()):
                        ?>
                    <div class="col-sm-6 col-md-4 col-md-auto col-lg-3 bg">
                        <div class="card-deck bg-transparen">
                            <div class="card shadow p-2 border-secondar mb-2 bg-transparent">
                                <div>
                                <a href=""><img src="<?= $row['product_image']; ?>" class="card-img-top" height="250"></a>
                                </div>

                                <div class="card-body p-1">
                                    <h4 class="card-title text-center text-info">
                                        <?= $row['product_name']; ?>
                                    </h4>
                                    <!-- <p class="card-text text-light text-center">Some quick example <br/> for product details.</p> -->
                                    <h5 class="card-text text-center text-danger"> <i class="fas fa-nigeria-sign"></i>
                                    $<?= number_format( $row['product_price'],2 );?>
                                    </h5>
                                </div>
                                <div class="card-footer text-center p-1">
                                    <form action="" method="post" class="form-submit">
                                        <input type="hidden" name="" class="pid" value="<?= $row['id'];?>">
                                        <input type="hidden" name="" class="pname" value="<?= $row['product_name'];?>">
                                        <input type="hidden" name="" class="pprice" value="<?= $row['product_price'];?>">
                                        <input type="hidden" name="" class="pimage" value="<?= $row['product_image'];?>">
                                        <input type="hidden" name="" class="pcode" value="<?= $row['product_code'];?>">
                                        <p class="card-text text-light text-center">Some quick example <br/> for product details.</p>
                                        <button type="submit" class="btn btn-secondary text-light btn-block btn-large addItemBtn"><i class="fas fa-cart-plus"></i> Add To Cart</button>
                                    </form>
                                    
                                    <!-- <a href="action.php?id=</?= //$row['id'] ?>" class="btn btn-info btn-block"> <i class="fas fa-cart-plus"></i> Add To Cart</a> -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
              </div>
        <!-- END of New Show Case -->
        <!-- Hold Show Case -->
    <!-- <div class="container mt-5">
        <div class="row">
          <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
              <div class="card bg-transparent">
                <img src="Images/hood2.png" class="card-img-top" height="250" width="250">
                <div class="card-body text-center ">
                  <h5 class="card-titl text-dar">Clothe 2</h5>
                  <p class="card-text text-dar">Price: $411 <span> <small>NGN 1000</small> </span> </p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info text-light">Add To Cart</button>
                  <input type="hidden" name="Item_Name" value="Clothe 2">
                  <input type="hidden" name="Price" value="411">
                </div>
              </div>
              </form>
          </div>
          
          <div class="col-lg-3 ">
            <form action="manage_cart.php" method="POST">
              <div class="card bg-transparent">
                <img src="Images/hood3.png" class="card-img-top" height="250" width="250" >
                <div class="card-body text-center ">
                  <h5 class="card-titl text-dar">Clothe 3</h5>
                  <p class="card-text text-dar">Price: $411 <span> <small>NGN 1000</small> </span> </p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info text-light">Add To Cart</button>
                  <input type="hidden" name="Item_Name" value="Clothe 3">
                  <input type="hidden" name="Price" value="411">
                </div>
              </div>
              </form>
          </div>

          <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
              <div class="card bg-transparent">
                <img src="Images/hood4.png" class="card-img-top" height="250" width="250">
                <div class="card-body text-center ">
                  <h5 class="card-titl text-dar">Clothe 4</h5>
                  <p class="card-text text-dar">Price: $411 <span> <small>NGN 1000</small> </span> </p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info text-light">Add To Cart</button>
                  <input type="hidden" name="Item_Name" value="Clothe 4">
                  <input type="hidden" name="Price" value="411">
                </div>
              </div>
              </form>
          </div>

          <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
              <div class="card bg-transparent">
                <img src="Images/3.jpg" class="card-img-top" height="250" width="250">
                <div class="card-body text-center ">
                  <h5 class="card-titl text-dar">Clothe 03</h5>
                  <p class="card-text text-dar">Price: $411 <span> <small>NGN 1000</small> </span> </p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info text-light">Add To Cart</button>
                  <input type="hidden" name="Item_Name" value="Clothe 03">
                  <input type="hidden" name="Price" value="411">
                </div>
              </div>
              </form>
          </div>

          <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
              <div class="card bg-dark text-light">
                <img src="Images/hood2.png" class="card-img-top bg-dark" height="250" width="250">
                <div class="card-body text-center ">
                  <h5 class="card-title text-dar">Clothe 22</h5>
                  <p class="card-text text-dar">Price: $411 <span> <small>NGN 1000</small> </span> </p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info text-light">Add To Cart</button>
                  <input type="hidden" name="Item_Name" value="Clothe 22">
                  <input type="hidden" name="Price" value="411">
                </div>
              </div>
              </form>
          </div>

          <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
              <div class="card bg-transparent">
                <img src="Images/cloth 4.jpg" class="card-img-top" height="250" width="250">
                <div class="card-body text-center ">
                  <h5 class="card-titl text-dar">Clothe 1</h5>
                  <p class="card-text text-dar">Price: $411 <span> <small>NGN 1000</small> </span> </p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info text-light">Add To Cart</button>
                  <input type="hidden" name="Item_Name" value="Clothe 1">
                  <input type="hidden" name="Price" value="411">
                </div>
              </div>
              </form>
          </div>
          <div class="col-lg-3">
            <form action="manage_cart.php" method="POST">
              <div class="card bg-transparent">
                <img src="Images/cloth 4.jpg" class="card-img-top" height="250" width="250">
                <div class="card-body text-center ">
                  <h5 class="card-titl text-dar">Clothe 1</h5>
                  <p class="card-text text-dar">Price: $411 <span> <small>NGN 1000</small> </span> </p>
                  <button type="submit" name="Add_To_Cart" class="btn btn-info text-light">Add To Cart</button>
                  <input type="hidden" name="Item_Name" value="Clothe 1">
                  <input type="hidden" name="Price" value="411">
                </div>
              </div>
              </form>
          </div>
        </div>
      </div> -->

    



    
   
      <!-- Optional JavaScript; choose one of the two! -->

    

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</div>
      
<!-- jQuery library  -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->

</div>

<?php include('Incl/footer.php'); ?>
<!-- jQuery library  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="index.js"></script>





      <!-- Ajax -->

      <script  type="text/javascript">
            $(document).ready(function(){
                $('.addItemBtn').click(function(e){
                    e.preventDefault();

                    var $form = $(this).closest('.form-submit');
                    var pid = $form.find('.pid').val();
                    var pname = $form.find('.pname').val();
                    var pprice = $form.find('.pprice').val();
                    var pimage = $form.find('.pimage').val();
                    var pcode = $form.find('.pcode').val();

                    // Send value to SERVER Using AJAX
                    $.ajax({
                        url: 'action.php',
                        method: 'post',
                        // What data U want to send
                        data: {pid:pid, pname:pname, pprice:pprice, pimage:pimage, pcode:pcode},
                        success: function(response){
                            $('#message').html(response);
                            window.scrollTo(0,0);
                            load_cart_item_number();
                        }
                    });
                });
                // Call the function
                load_cart_item_number();
                // Update cart Item number
                function load_cart_item_number(){
                    $.ajax({
                        url: 'action.php',
                        method: 'get',
                        data: {cartItem:'cart_item'},
                        success: function(response){
                            $('#cart-item').html(response);
                        }
                    });
                }
            });
        </script>


<?php //include('Incl/footer.php'); ?>

<!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4./jquery.min.js"></script> -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

</body>
<!-- <script src="index.js"></script> -->
</html>