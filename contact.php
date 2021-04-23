<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact - Jake Buhite</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
</head>
<body>
    <div class="header" style="margin-bottom: 40px">
        <div class="small_name"><strong>jake buhite</strong></div>
        <nav>
            <a href="index.html">home</a> |
            <a href="portfolio.html">portfolio</a> |
            <a href="contact.html">contact</a>
        </nav>
    </div>
    <div class="container contact">
            <div class="content" id="large_title"><strong>Contact</strong></div>
            <div class="content" id="text">Need anything? Contact me using the form below.</div>
            <div class="content">
                <form method="POST" action="/scripts/form_processing.php">
                    <div class="f_element"><input type="text" name="name" placeholder="Enter your name..." required></div>
                    <div class="f_element"><input type="email" name="email" placeholder="Enter your email..." required></div>
                    <div class="f_element"><textarea name="message" id="contact_msg" cols="30" rows="10" placeholder="Type your message..." required></textarea></div>
                    <input type="submit" value="Send Message">
                </form>
                <?php 
                    include('scripts/form_processing.php');
                    echo((!empty($msg)) ? $msg);
                ?>
            </div>
    </div>
    <div class="footer" style="margin-top: 40px">
        <div class="content">&copy; Jake Buhite</div>
        <div class="content">
            <a href="#" target="_blank"><img src="imgs/instagram_icon.png" alt="instagram icon" width="32px" height=auto /></a>
            <a href="#" target="_blank"><img src="imgs/linkedin_icon.png" alt="linkedin icon" width="32px" height=auto /></a>
            <a href="#" target="_blank"><img src="imgs/youtube_icon.png" alt="youtube icon" width="32px" height=auto /></a>
        </div>
        <div class="content"><a href="contact.html">contact me</a></div>
    </div>
</body>
</html>