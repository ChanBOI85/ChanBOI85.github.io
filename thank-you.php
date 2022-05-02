<?php
    if (isset($_POST['email'])) {
        $to = $_POST['email'];
        $subject = "Thank you " . $_POST['name'];
        
        $txt = "
            Hi ". $_POST['name'] .",
            \n\n
            Thank you very much for choosing Ad Voca! We are delighted to have you on board!\n
            We're sure you want to start working with us, so we promise to get back to you as soon as possible.\n
            Have any questions? Do not hesitate to reach us out at heyall@ad-voca.com.\n
            \n\n
            Thank you once again,\n
            Your Ad Voca Team
        ";

        $headers = "From: noreply@ad-voca.com";

        mail($to,$subject,$txt,$headers);

        $to_support = "heyall@ad-voca.com";
        $subject_support = "Contact Page - Ad Voca";
        $txt_support = "
            Someone sent you a message!
            \n\n
            Name: ". $_POST['name'] ."\n
            Services: ". $_POST['services'] ."\n
            Timeline: ". $_POST['timeline'] ."\n
            Email: ". $_POST['email'] ."\n
            Phone Number: ". $_POST['phone_number'] ."
        ";
        // Always set content-type when sending HTML email
        $headers_support = "From: noreply@ad-voca.com" . "\r\n" .
        "CC: cpelitones@ad-voca.com";

        mail($to_support,$subject_support,$txt_support,$headers_support);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;900&display=swap" rel="stylesheet">
    <title>Ad Voca</title>
    <link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="assets/logo.png" alt="Ad Voca Logo">
                </a>
                <button onclick="openNav()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" style="background: none;" >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"><path stroke="rgba(237, 103, 68, 1)" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/></svg>
                    </span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" >
                  <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/">Home</a>
                    <a class="nav-item nav-link" href="works.html">Works</a>
                    <a class="nav-item nav-link" href="about.html">About</a>
                    <a class="nav-item nav-link active" href="contact.html">Contact</a>
                  </div>
                </div>

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><div>x</div></a>
                    <a href="/">Home</a>
                    <a href="works.html">Works</a>
                    <a href="about.html">About</a>
                    <a href="contact.html">Contact</a>
                </div>
            </div>    
        </nav>

        <section class="contact-1">
            <div class="container">
                <h1 class="contact-h1-main">let's talk about it.</h1>

                
                <form action="sendMail.php" method="POST" class="contact-form-container slideshow-container" id="contactCircle">
                    <div class="mySlides fade">
                        <h3 class="contact-h1-main">Thank you!</h3>
                        <h3 class="contact-h1-main">We'll get back to you<br>very soon.</h3>
                        <img src="assets/smile.png" class="w-50">
                    </div>
                </form>

                <p class="contact-p">Or, you can email us at <a href="mailto:heyall@ad-voca.com">heyall@ad-voca.com</a></p>
            </div>
        </section>


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-links">
                            <a href="#">Terms of Services</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Cookie Policy</a>
                            <a href="#">Ads Info</a>
                        </div>
                        <p>© 2021 Ad Voca, Inc.</p>
                    </div>
                    <div class="col d-flex align-items-center justify-content-end">
                        <div class="social-links">
                            <a href="#">
                                <img src="assets/facebook.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="assets/instagram.svg" alt="">
                            </a>
                            <a href="#">
                                <img src="assets/Be.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Script Section -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        var cw = $('#contactCircle').width();
        $('#contactCircle').css({'height':cw+'px'});    
    </script>
    <script src="js/script.js"></script>
    
</body>
</html>