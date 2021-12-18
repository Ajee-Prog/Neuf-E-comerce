<?php //include('Incl/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>E-comerce</title>

        <!-- <base href="/" /> -->

        <meta name="color-scheme" content="dark" />
        <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />


        <!-- <link rel="shortcut icon" type="image/png" href="/assets/icon/favicon.png" /> -->

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Main css -->
        <!-- <link rel="stylesheet" type="text/css" href="./css/theme.css"> -->
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- font roboto -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"> -->

        <!-- font montserrat -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- add to homescreen for ios -->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-title" content="NEUF" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    </head>

    <body data-barba="wrapper" style="overflow: auto;">

        <div class="app" data-barba="container" data-barba-namespace="home" style="overflow: auto";>
            <div class="container fItem"></div>
            <div class="container fItem align-items-center">
                <div class="row align-self-center rowma">
                    <div class="col">
                        
                    </div>
                    <div class="col-5 text-center spinningNeuf">
                        <img class="img-fluid mb-2 " src="Images/web logo.png" alt="spinning neuf logo" />
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row align-self-center rowma">
                    <div class="col"></div>
                    <div class="col-5 text-center">
                        <a href="store.php" class="buttonLink">
                            <div class="buttonLink">ENTER </div> <br>
                        </a>
                    </div>
                    <div class="col"></div>
                </div>
                <div class="row align-self-center justify-center rowma">
                    <div class="col"></div>
                    <div class="col-xs-4 col-md-5 text-center">
                        <div class="row align-self-center mt-3">
                            <div class="col"></div> 
                            <div class="col-3 m-auto">
                                <a href="https://twitter.com/neufworldwide">
                                    <img class="invert" height="30px" src="icon/twitter.svg" alt="twitter logo" />
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="https://instagram.com/neufworldwide">
                                    <img class="invert" height="30px" src="icon/instagram.svg" alt="instagram logo" />
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="https://youtube.com/neufworldwide">
                                    <img class="invert" height="30px" src="icon/youtube.svg" alt="youtube logo" />
                                </a>
                            </div>
                            <!-- <div class="col"></div> -->
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
            <!-- Fetch data from DataBase -->
            <!-- <//?php require 'config.php';
            $sql = "SELECT * FROM product";
            $result = mysqli_query($conn, $sql);
            ?> -->
            <!-- Fetch data from DataBase -->
            <!-- <div class="container fItem ">
                <div class="row">
                    </?php// while($row=mysqli_fetch_array($result)); ?>
                    <div class="col-lg-4 my- mb-3">
                        <div class="card-deck">
                            <div class="card border-info p-2">
                                <img src="<//?= //$row['product_image']; ?>" class="card-img-top" height="90">
                                <h5 class="card-title">Product: </?= $row['product_name'];?></h5>
                                <h3>Price:<//?= // number_format($row['product_price']); ?> </h3>
                                <a href="order.php?id=<//?= $row['id' ]?>" class= "btn btn-danger btn-block btn-lg"> BUY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="container ">
                <div id="message"></div>
                <div class="row mt-2 pb-3">
                    </?php include 'config.php'; 
                    $stmt = $conn->prepare(" SELECT * FROM product");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while( $row=$result->fetch_assoc()):
                        ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 bg-transparent">
                        <div class="card-deck bg-transparent">
                            <div class="card p-2 border-secondary mb-2 bg-transparent">
                                <img src="</?= $row['product_image']; ?>" class="card-img-top" height="250">

                                <div class="card-body p-1">
                                    <h4 class="card-title text-center text-info">
                                        </?= $row['product_name']; ?>
                                    </h4>
                                    <h5 class="card-text text-center text-danger"> <i class="fas fa-nigeria-sign"></i>
                                    $</?= number_format( $row['product_price'],2 )?>
                                    </h5>
                                </div>
                                <div class="card-footer p-1">
                                    <form action="" method="post" class="form-submit">
                                        <input type="hidden" name="" class="pid" value="</?= $row['id']?>">
                                        <input type="hidden" name="" class="pname" value="</?= $row['product_name']?>">
                                        <input type="hidden" name="" class="pprice" value="</?= $row['product_price']?>">
                                        <input type="hidden" name="" class="pimage" value="</?= $row['product_image']?>">
                                        <input type="hidden" name="" class="pcode" value="</?= $row['product_code']?>">
                                        <button type="submit" class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i> Add To Cart</button>
                                    </form>
                                    <-- <a href="action.php?id=</?= $row['id'] ?>" class="btn btn-info btn-block"> <i class="fas fa-cart-plus"></i> Add To Cart</a> -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php //endwhile;?>
                </div>
            </div> 
        </div>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.1/gsap.min.js"></script>
        <script src="index.js"></script>

        <!-- Ajax -->

        <!-- <script src="" type="text/javascript">
            $(document).ready(function(){
                $(.addItemBtn).click(function(e){
                    e.preventDefault();

                    var $form = $(this).closest(".form-submit");
                    var pid = $form.find(".pid").val();
                    var pname = $form.find(".pname").val();
                    var pprice = $form.find(".pprice").val();
                    var pimage = $form.find(".pimage").val();
                    var pcode = $form.find(".pcode").val();

                    // Send value to SERVER Using AJAX
                    $.ajax({
                        url: "action.php",
                        method: 'post',
                        // What data U want to send
                        data: {pid:pid, pname:pname, pprice:pprice, pimage:pimage, pcode:pcode},
                        success:function(response){
                            $("#message").html(response);
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
                        data: {cartItem:"cart_item"},
                        success: function(response){
                            $("#cart-item").html(response);
                        }
                    });
                }
            });
        </script> -->
    </body>
    <?php include('Incl/footer.php'); ?>
</html>