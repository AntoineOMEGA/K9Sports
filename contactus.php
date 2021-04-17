<?php 
    $page = "Contact Us";
    include("includes/head.php");
    include("includes/header.php");
?>

<main>
    <div class="hero" id="hero-contactus"></div>

    <div class="contact-container">
        <form action="#form" id="form" method="post" name="form" class="contact-form">
            <h1>Contact Us</h1>
            <h3><?php include "send.php"?></h3>
            <input name="name" placeholder="Name" type="text" value="">
            <input name="email" placeholder="Email" type="text" value="">
            <input name="subject" placeholder="Subject" type="text" value="">
            <textarea name="message" placeholder="Message"></textarea>
            <input id="send" name="submit" type="submit" value="Send Message">
        </form>
        
        
        <div class="social-media-container">
            <div class="social-media">
                <a href="https://www.facebook.com" id="facebook" target="_blank"></a>
                <a href="https://www.instagram.com" id="instagram" target="_blank"></a>
                <a href="https://www.twitter.com" id="twitter" target="_blank"></a>
            </div>
        </div>
    </div>
    
</main>

<?php include("includes/footer.php");?>