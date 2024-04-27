<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
   <?php include("inc/nav.php"); ?>
   <section class="about-sec">
        <div class="about-flex">
            <div class="about-color">
                <div class="container">
                    <div class="about-content">
                        <h2>Contact Us</h2>
                        <p>Got questions or need assistance? Feel free to reach out to us. We're here to help you with all your agricultural needs. You can get in touch via email, phone, or the contact form below.</p>
                    </div>
                </div>
            </div>
            <div class="about-img">
                <img src="images/contact.png" alt="">
            </div>
        </div>
   </section>

   <section class="about_mobile">
        <div class="container">
        <div class="about_mobile_flex">
            <div class="about_mobile_content">
                <h2>Contact Us</h2>
                <p>Got questions or need assistance? Feel free to reach out to us. We're here to help you with all your agricultural needs. You can get in touch via email, phone, or the contact form below. </p>
            </div>
        </div>
        </div>
   </section>

   <section class="contact">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h3>Let’s Talk</h3>
                    <p>We look forward to hearing from you and assisting you on your <br> farming journey.</p>
                    <?php

if ($error) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <button type="button" class="btn-close" 
    data-bs-dismiss="alert" aria-label="Close"></button>' . $error . '</div>';
  }


  if ($success) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> <button type="button" class="btn-close" 
    data-bs-dismiss="alert" aria-label="Close"></button>' . $success . '</div>';
  }
  ?>

                    ?>
                    <form action="proc-contact.php" method="post">
                    <div class="contact-input">
                        <label for="">Name</label> <br>
                        <input type="text" name="name">
                        <div>
                        <label for="">Email</label><br>
                        <input type="text" name="email">
                        </div>
                       <div>
                       <label for="">Message</label> <br>
                        <textarea name="" id="" cols="30" rows="10" name="message"></textarea>
                       </div>
                       
                    </div>
                    <div class="contact_check">
                        <input type="checkbox" name="" id=""> <a href="">I accept the Terms</a>
                    </div>
                    <div class="contact_btn">
                        <button>Submit</button>
                    </div>
                    </form>
                </div>
                <div class="map">
                    <!-- <img src="images/map.png" alt=""> -->
                    <iframe class="map-w3layouts" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26661.603479479887!2d3.3577727455131265!3d6.613204448775852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93ae8b461ed7%3A0xc7c5f985cb446284!2sMagodo%20Gate%201(Shangisha)!5e0!3m2!1sen!2sng!4v1701094441546!5m2!1sen!2sng" width="100%" height="600" frameborder="0" style="border: 0px" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
   </section>

   <section class="contact_icon">
           <div class="container">
           <div class="contact_flex">
                <div class="info_flex">
                    <div class="email_img">
                        <img src="images/email1.png" alt="">
                    </div>
                    <div class="infos">
                        <a href="mailto:hillsprojectsltd@gmal.com">hillsprojectsltd@gmal.com,</a>
                        <a href="mailto:info@hillsglobal.com">info@hillsglobal.com,</a><br>
                        <a href="mailto:hillsprojectsltd@yahoo.com">hillsprojectsltd@yahoo.com</a>
                    </div>
                </div>
                <div class="info_flex">
                    <div class="email_img">
                        <img src="images/phone1.png" alt="">
                    </div>
                    <div class="infos">
                        <a href="tel:+234-1-749 7322">Tel: +234-1-749 7322,</a><br>
                        <a href="tel:+2348033042676">+234 803 304 2676</a><br>
                    </div>
                </div>

                <div class="info_flex">
                    <div class="email_img">
                        <img src="images/pin1.png" alt="">
                    </div>
                    <div class="infos">
                        <p>Plot 8, Block B1, Raji Oladimeji Crescent, Off CMD Road, Magodo Scheme II Extention, Magodo-Shangisha 100248, Lagos. Nigeria</p>
                    </div>
                </div>
            </div>
           </div>
   </section>

   <?php include("inc/mail.php");?>

<?php include("inc/footer.php");?>


 <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up"></i></button>
  <!-- Carousel wrapper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
  <script src="js/script.js"></script> 
</body>
</html>