<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QFMS | RV Owner</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mechanic.css">
    <!-- <link rel="stylesheet" href="css/mechanicpopup1.css"> -->
    <link rel="stylesheet" href="css/recovery.css">

</head>
<body>
    <header>
        <?php include "./header.php" ?>       
    </header>


    <main>
       <div class="mechanic-container">
            <div class="mechanic-header">
                <h1>Thanks for Joining Us.....</h1>
                <div class="mechanic-content">
                    <h3>Your Job Count:</h3>
                    <div>
                        <textarea name="currentrequests" id="mechanic-current-req" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
       </div>


       <!-- popup -->

       <div class="recovery-vh-popup" id="recovery-vh-popup">
            <div class="rv-popup1">
                <div class="rv-popup-content">
                    <div class="rv-popup-content-hdimg">
                        <img src="img/user.jpg" alt="user">
                    </div>
                    <div class="rv-popup-content-txtarea">
                        <h2 id="rvpop-customer-name">Customer Name</h2>
                        <h3 id="rvpop-phnum">Phone Number</h3>
                        <h3 id="rvpop-vehicle-num">Vehicle Number</h3>
                    </div>
                    <div class="rv-popup-map">
                        <iframe
                                    src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=Matale,%20Sri%20Lanka+(WBORMH)&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                                    width="500px"
                                    height="475px"
                                    style="border: 0"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="rv-popup-buttons">
                        <button id="Finish">Finish</button>
                        
                    </div>
                </div>
            </div>
       </div>

       

       <button id="rv-accept">Accept</button>
       <script src="js/popups.js"></script>
        
    </main>

    <footer>
        <?php include "./footer.php" ?>
    </footer>
    
    
</body>
</html>
