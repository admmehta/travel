<?php 
require 'db.php';
session_start();
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before using the website!";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>

<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="booking/css/booking.css">
            <link rel="stylesheet" href="css/camera.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <script src="js/jquery.js"></script>

  <meta charset="UTF-8">
  <title>Payment</title>
   <link rel="stylesheet" href="css/stylep.css">
</head>

<body>
  <html lang="en">
  <head>
                     
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  
      <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
  <body>
      <h1>
                        <a href="index.html">
                            <img src="images/logo.png" alt="Your Happy Family">
                        </a>
                    </h1>

    <div class="container">
    	<!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box customwidth center-block">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="https://i.imgur.com/gIMFDbp.png">
                            
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form">
                       <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="name">Name of Client: <ins>
                                    <?= $fname.' '.$lname ?></ins>
                                </label></div>
                            </div>                        
                        </div>
                          <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">Number of Travelers:
                                    <div class="input-group">
                                    <input
                                    type="number"
                                    name="ppl"
                                    placeholder="Enter number of people"
                               /></label>

                         <div class="panel-body">
                    <form role="form" id="payment-form">
                       <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="name">Total Cost: <ins>
                                    
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            pattern="^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|6(?:011|5[0-9]{2})[0-9]{12}|(?:2131|1800|35\d{3})\d{11})$"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card" id="cardlogo" style="color:purple;font-size:2rem;"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                       <clear>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-success btn-lg btn-block" type="submit" onclick="document.getElementById('demo').innerHTML = Date()">Book Tour </button>
                                <p id="demo"></p>
                            </div>
                        </div>
                     
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
            <!-- CREDIT CARD FORM ENDS HERE -->
    </div>

  <footer>
            <div class="container_12">
                <div class="grid_12">
                    <div class="socials">
                        <a href="www.facebook.com" class="fa fa-facebook"></a>
                        <a href="www.twitter.in" class="fa fa-twitter"></a>
                        <a href="www.plus.google.com" class="fa fa-google-plus"></a>
                    </div>
                    <div class="copy">
                        Mehta(c) 2017 | Designed by ADM TOURS
                    </div>
                </div>
                <a href="profile.php">Log Out</a>
            </div>
        </footer>
        <script>
            $(function (){
                $('#bookingForm').bookingForm({
                    ownerEmail: '#'
                });
            })
            $(function() {
                $('#bookingForm input, #bookingForm textarea').placeholder();
            });
        </script>  
    <script  src="js/pjs.js"></script>

</body>
</html>
