<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QFMS | Contact us</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/contactus.css">

</head>
<body>
    <header>
    <?php include "./header.php" ?>

           
    </header>


    <main>
        <div class="contact-us">
            <div class="contact-us-header">
                <h1>Contact Us For Any Query</h1>
            </div>
                <div class="contact-us-methods-all">
                        <div class="contact-us-methods">
                            <div class="contact-us-methods-location">
                                <img class="contact-us-methods-icon" src="img/icons/location.png" alt="location">
                                <span>123 Street, Street, Sri Lanka</span>
                            </div>
                        </div>
                    

                    <div class="contact-us-methods">
                        <div class="contact-us-methods-location">
                            <img class="contact-us-methods-icon" src="img/icons/gmail.jpg" alt="gmail">
                            <span>abcd@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact-us-methods">
                        <div class="contact-us-methods-location">
                            <img class="contact-us-methods-icon" src="img/icons/telephone.png" alt="Telphone">
                            <span>+94 77 179 7718</span>
                        </div>
                    </div> 
                </div>

                <div class="contact-us-content">
                    <div class="contact-us-map">
                        <iframe
                            src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=Matale,%20Sri%20Lanka+(WBORMH)&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                            width="450"
                            height="475"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="contact-us-textarea">
                        <div class="contact-us-textarea-top">
                            <input type="text" name="name" id="name" placeholder="Your name">
                            <input type="text" name="email" id="email" placeholder="Your Email">
                        </div>
                        
                        <div class="contact-us-textarea-bottom">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message"></textarea>
                            <div class="contact-us-textarea-bottom-button">
                                <button id="sendmessage">Send Message</button>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
        </div>
        
        
    </main>

    <footer>
        <?php include "./footer.php" ?>
    </footer>
    
    
</body>
</html>
