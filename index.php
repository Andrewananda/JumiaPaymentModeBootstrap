<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container-fluid">
        <div class="sidebar">
            <a href="#home">PAY WITH</a>
            <a href="#mpesaexpress">Mpesa Express</a>
            <a href="#mpesa">Mpesa</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="content" id="home">
            <div class="jumbotron">
                <b>Payments Module</b>
                <p>Thank You for shopping with us,</p>
                <small>You can make payments via: <br></small>
                <a href="#mpesaexpress">Mpesa Express</a> |
                <a href="#mpesa">Mpesa</a> |
                <a href="#contact">Contact</a>
            </div>
        </div>

<!--Forms-->

        <div class="content">
            <form action="action_page.php" style="border:1px solid #ccc" id="mpesaexpress">
            <div class="container">
                <h1>JUMIA <span  class="glyphicon glyphicon-shopping-cart"> MpesaExpress</span></h1>
                <hr>

                <label for="mpesaexpress"><b>Enter YOUR MPESA NUMBER TO RECIEVE STK PUSH</b></label>
                <input type="text" placeholder=" MPESA NUMBER" name="mpesaexpress" required class="glyphicon glyphicon-earphone">
                    <div class="retry">
                         <button class="btn btn-primary">Retry</button>
                    </div>
                <p><small>If you've paid please wait for 10seconds. Afterwards if the page is not yet to update click here to refresh</small> </p>
                    <a href="#" style="color:dodgerblue" class="errorpay">Secured by iPay</a>
            </div>
            </form> 
        </div>
<!-- Mpesa form-->
        <div class="content">
            <form action="action_page.php" style="border:1px solid #ccc" id="mpesa">
            <div class="container">
                <h1>JUMIA <span  class="glyphicon glyphicon-shopping-cart"> Mpesa</span></h1>
                <hr>

                <label for="mpesa"><b>Enter YOUR MPESA NUMBER TO RECIEVE STK PUSH</b></label>
                <input type="text" placeholder=" MPESA NUMBER" name="mpesa" required class="glyphicon glyphicon-phone">
                    <div class="retry">
                         <button class="btn btn-primary">Retry</button>
                    </div>
                <p><small>If you've paid please wait for 10seconds. Afterwards if the page is not yet to update click here to refresh</small> </p>
                    <a href="#" style="color:dodgerblue" class="errorpay">Secured by iPay</a>
            </div>
            </form> 
        </div>

        <!-- Contact us form-->
        <div class="content">
            <form action="action_page.php" style="border:1px solid #ccc" id="contact">
            <div class="container">
                <h1>Contact Us <span  class="glyphicon glyphicon-phone-alt"></span></h1>
                <hr>
                    <div class="contactUs">
                        <div class="row">
                            <div class="col-md-6">
                                    Address: Kaka House, Nairobi <br>
                                    Hours: Open ⋅ Closes 6PM <br>
                                    Phone: 0700 000990 <br>
                                    Appointments: facebook.com

                            </div>
                            <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d31910.335947983534!2d36.75018901715725!3d-1.2996105393343138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d-1.3001975!2d36.755014599999996!4m5!1s0x182f1a766c414ccd%3A0x17d1e7adc2cf9553!2sJumia%2C+Behind+Tuskys+supermarket%2C+off-loading+gate%2C+godown+no+2!3m2!1d-1.3003893!2d36.7803827!5e0!3m2!1sen!2ske!4v1556613586395!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                
            </div>
            </form> 
        </div>


    </div>
</body>
</html> 
