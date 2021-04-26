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
            <a href="/">home</a> |
            <a href="portfolio">portfolio</a> |
            <a href="contact">contact</a>
        </nav>
    </div>
    <div class="container contact">
            <div class="content" id="large_title"><strong>Contact</strong></div>
            <div class="content" id="text">Need anything? Contact me using the form below.</div>
            <?php 
                    if ($_GET['status'] == 'success') {
                        echo '<div style="margin-top: 10px; padding: 10px; color: #03C04a; border: 1px solid #03C04a; border-radius: 25px;">Your form has been sent!</div>';
                    }
            ?>
            <div class="content">
                <form method="POST" action="/scripts/form_processing.php">
                    <div class="f_element"><input type="text" name="name" placeholder="Enter your name..." required></div>
                    <div class="f_element"><input type="email" name="email" placeholder="Enter your email..." required></div>
                    <div class="f_element"><textarea name="message" id="contact_msg" cols="30" rows="10" placeholder="Type your message..." required></textarea></div>
                    <input type="submit" name="submit" value="Send Message">
                </form>
            </div>
    </div>
    <div class="footer" style="margin-top: 40px">
        <div class="content">&copy; Jake Buhite</div>
        <div class="content">
            <a href="#" target="_blank"><img src="imgs/instagram_icon.png" alt="instagram icon" width="32px" height=auto /></a>
            <a href="https://www.linkedin.com/in/jake-buhite-1a0838210/" target="_blank"><img src="imgs/linkedin_icon.png" alt="linkedin icon" width="32px" height=auto /></a>
            <a href="#" target="_blank"><img src="imgs/youtube_icon.png" alt="youtube icon" width="32px" height=auto /></a>
        </div>
        <div class="content"><a href="contact">contact me</a></div>
    </div>
</body>
</html>