<?php
    require('config.php');

    $grand_Total = 0;
    $allItems = '';
    $items = array();
    $sql = " SELECT CONCAT(product_name, '(',qty,')' ) AS ItemQty, total_price, FROM cart";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result= $stmt->get_result();
    while($row=$result->fetch_assoc())
    {
        $grand_Total +=$row['total_price'];
        $items[] = $row['ItemQty'];
    }
    //  echo $grand_Total;
    //  print_r($items);
    $allItems = implode(" , " , $items);
    //echo $allItems;




?>


<!-- PayPal Payment -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  


<!-- PayPal Payment -->


<div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
  <script>
    function initPayPalButton() {
      paypal.Buttons({
        style: {
          shape: 'rect',
          color: 'gold',
          layout: 'vertical',
          label: 'paypal',
          
        },

        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
          });
        },

        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
          });
        },

        onError: function(err) {
          console.log(err);
        }
      }).render('#paypal-button-container');
    }
    initPayPalButton();
  </script>

</body>
</html>




<!-- Payment PHP Start Here.. -->

<?php

$product_name = $_POST['products'];
$price = $_POST['grand_total'];
// Customer Variable Details here
$name = $_POST['name'];
$email =$_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// Create InstaMojo Folder to Desktop and Include it here
include 'Instamojo.php';
// now go to GitHub.com where the instamojo copied and copy API variable link in there
// eg: $api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN, 'https://test.instamojo.com/api/1.1/');
// then gey the key in your Instamojo Dashboard, click on API & Plugins: copy Private api key. then Replace API_KEY and AUTH_TOKENs
// Go to GithHub again and Copy ' Create a New Payment Request' Code 
// example code..
try {
  $response = $api->paymentRequestCreate(array(
    "purpose" => $product_name,
    "amount" => $price,
    "send_email" => true,
    "email" => $email,
    "buyer_name" => $name,
    "phone" =>$phone,
    "address" => $address,
    "send_sms" => true,
    "allow_repeated_payments" => false,
    "redirect_url" => "http://localhost/e-comerce/thankyou.php",
    // "webhook"=>
  ));
  // print_r($response);
  $pay_url = $response['longurl'];
  header("location: $pay_url");
} catch (Exception $e) {
  //throw $th;
  print('error :'.$e->getMessage());
}


?>