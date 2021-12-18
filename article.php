<?php //include "Incl/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/lightbox.min.css" type="text/css">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>Article</title>
</head>
<body style="overflow: auto;">
    
    <nav>
  
        <div class="logo">
          <a href="index.php"><img src="images/logo.png" alt="" width="60" height="40"></a>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
          <i class="fa fa-bars"></i>
        </label>
        <ul>
          <li><a href="store.php" >Shop</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="music.php">Music</a></li>
          <li><a href="article.php" class="active">Articles</a></li>
          <li><a href="cart.php">Cart <span>0</span></a></li>
        </ul>
  </nav>



    <div id="h2">
        <h2>Articles</h2>
    </div>


    <div class="site-container">
        <div class="article-container">
            <article class="article-card">
                <figure class="article-image">
                    <img src="images/250.png" alt="shoe">
                </figure>
                <div class="article-content">
                    <a href="#" class="card-category">Wears</a>
                    <h3 class="card-title">New Nike Shoes Available</h3>
                    <p class="card-excerpt">Lorem ipsum dolor, sit amet consectetur 
                        adipisicing elit. Cupiditate itaque, qui autem repellendus veniam 
                        facere tempore esse ab provident quibusdam quas, molestias debitis.</p>
                </div>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="images/250.png" alt="shoe">
                </figure>
                <div class="article-content">
                    <a href="#" class="card-category">Wears</a>
                    <h3 class="card-title">New Nike Shoes Available</h3>
                    <p class="card-excerpt">Lorem ipsum dolor, sit amet consectetur 
                        adipisicing elit. Cupiditate itaque, qui autem repellendus veniam 
                        facere tempore esse ab provident quibusdam quas, molestias debitis.</p>
                </div>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="images/250.png" alt="shoe">
                </figure>
                <div class="article-content">
                    <a href="#" class="card-category">Wears</a>
                    <h3 class="card-title">New Nike Shoes Available</h3>
                    <p class="card-excerpt">Lorem ipsum dolor, sit amet consectetur 
                        adipisicing elit. Cupiditate itaque, qui autem repellendus veniam 
                        facere tempore esse ab provident quibusdam quas, molestias debitis.</p>
                </div>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="images/250.png" alt="shoe">
                </figure>
                <div class="article-content">
                    <a href="#" class="card-category">Wears</a>
                    <h3 class="card-title">New Nike Shoes Available</h3>
                    <p class="card-excerpt">Lorem ipsum dolor, sit amet consectetur 
                        adipisicing elit. Cupiditate itaque, qui autem repellendus veniam 
                        facere tempore esse ab provident quibusdam quas, molestias debitis.</p>
                </div>
            </article>

            <article class="article-card">
                <figure class="article-image">
                    <img src="images/250.png" alt="shoe">
                </figure>
                <div class="article-content">
                    <a href="#" class="card-category">Wears</a>
                    <h3 class="card-title">New Nike Shoes Available</h3>
                    <p class="card-excerpt">Lorem ipsum dolor, sit amet consectetur 
                        adipisicing elit. Cupiditate itaque, qui autem repellendus veniam 
                        facere tempore esse ab provident quibusdam quas, molestias debitis.</p>
                </div>
            </article>
        </div>
    </div>



    
   <div class="modal-container" id="modal-container">
        <div class="modal" id="modal">
            <div class="close-btn" id="close"><i class="fa fa-times"></i></div>
            <div class="modal-content">
                <div class="head">
                    <h2 class="log">Wants to get updates from us?</h2>
                </div>
                <form action="mailto:techsight01@gmail.com">
                    <input type="text" value="" placeholder="Enter Email">
                    <button class="subscribe">Submit</button>
                </form>
            </div>
        </div>
   </div>




   <?php include('Incl/footer.php'); ?>
<!-- jQuery library  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="index.js"></script>



    



    <!-- <script src="index.js"></script> -->




    <!-- Ajax -->

    <script  type="text/javascript">
            $(document).ready(function(){
                // Send Order request to the SERVER
                $("#placeOrder").submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        url: 'action.php',
                        method: 'post',
                        data: $('form').serialize()+"&action=order",
                        success: function(response){
                            $("#order").html(response);
                            // load_cart_item_number();
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

</body>
</html>