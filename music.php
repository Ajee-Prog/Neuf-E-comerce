<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="theme.css" type="text/css">
    <link rel="stylesheet" href="css/lightbox.min.css" type="text/css">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <title>Music</title>
</head>
<body>
    
    <nav>
  
        <div class="logo">
          <a href="index.php"><img src="images/logo.png" alt="" width="60" height="40"></a>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
          <i class="fa fa-bars"></i>
        </label>
        <ul>
          <li><a href="store.php">Shop</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="music.php" class="active">Music</a></li>
          <li><a href="article.php">Articles</a></li>
          <li><a href="cart.php">Cart <span>0</span></a></li>
        </ul>
  </nav>



    <div id="h2">
        <h2>Music</h2>
        <h4 class="ex">Explore our music</h4>
    </div>




    <div class="site-container">
        <div class="article-container">
            <article id="article-card">
                <figure class="article-image">
                    <img src="Images/liz.png" alt="liz">
                </figure>
                <div class="player">
                    <audio src="audio/rema.mp3" controls></audio>
                </div>
            </article>



            <article id="article-card">
                <figure class="article-image">
                    <img src="Images/liz.png" alt="liz">
                </figure>
                <div class="player">
                    <audio src="audio/rema.mp3" controls></audio>
                </div>
            </article>



            <article id="article-card">
                <figure class="article-image">
                    <img src="Images/liz.png" alt="liz">
                </figure>
                <div class="player">
                    <audio src="audio/rema.mp3" controls></audio>
                </div>
            </article>



            <article id="article-card">
                <figure class="article-image">
                    <img src="Images/liz.png" alt="liz">
                </figure>
                <div class="player">
                    <audio src="audio/rema.mp3" controls></audio>
                </div>
            </article>


            <article id="article-card">
                <figure class="article-image">
                    <img src="Images/liz.png" alt="liz">
                </figure>
                <div class="player">
                    <audio src="audio/rema.mp3" controls></audio>
                </div>
            </article>
        </div>

    </div>




    <?php include('Incl/footer.php'); ?>
<!-- jQuery library  -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="index.js"></script>



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