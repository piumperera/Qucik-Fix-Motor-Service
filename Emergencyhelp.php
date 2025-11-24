<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QFMS | Emergency-help</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/home.css"> -->
    <link rel="stylesheet" href="css/sample-index.css">

    <script src="js/main.js"></script>
</head>
<body>
    <header>
        <?php include "./header.php" ?>
    </header>


    <main>

        

    
        <br>

        <!-- Emergency help -->
        <div class="emergency-help-container">
            <div class="emergency-help-container-content">
                <div class="emergency-help-content-section1">
                    <h1>You can use our these services one time without registering</h1>
                </div>
                <div class="emergency-help-content-section2">
                    <div class="emergency-help-content-section2-btn">
                        <div class="index-sub-container2">
                            <div class="index-sub-container2-content">
                               
                                <div class="index-sub-container2-content-main-section2" id="emergency">
                                    <div class="index-sub-container2-content-section">
                                        <div class="index-sub-container2-content-des">
                                            <h1>
                                                The nearest mechanical service
                                            </h1>
                                            <p>This service provides you with motor mechanic within a few minutes. <br> 
                                                If your vehicle has a minor problem, it will be solved on the spot without taking your vehicle to a garage.
                                            </p>
                                        </div>
                                        <div class="index-sub-container2-content-img">
                                            <img src="img/mechanic.jpg" alt="Emergency help">
                                        </div>
                                        
                                    </div>
                                </div>
            
                                <div class="index-sub-container2-content-main-section3" id="emergency">
                                    <div class="index-sub-container2-content-section">
                                        <div class="index-sub-container2-content-img">
                                            <img src="img/recoveryvehicle.jpg" alt="Emergency help">
                                        </div>
                                        <div class="index-sub-container2-content-des">
                                            <h1>The recovery vehicle service</h1>
                                            <p>Under the recovery vehicle service, you can request for a recovery vehicle which will be sent soon <br> to the place where your vehicle is. <br> 
                                                You can use this recovery vehicle to bring your vehicle to the garage. <br> 
                                                This is suitable those who unable to use mechanical service.
                                                </p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                
            </div>

        </div>
            <!-- popup -->

            <div class="service-popup" id="service-popup">
                <div class="service-popup-content">
                    <span class="close" id="closePopup">&times;</span>
                    <div class="service-popup-heading">
                        <h1>Enter Your NIC</h1>
                    </div>
                    <div class="service-popup-input">
                        <input type="number">               
                    </div>
                    <div class="eme-popup-btns">
                        <button id="nicenter">Enter</button>
                        <button id="emepopupclose">Cancel</button>
                    </div>
                    
                </div>

            </div>
            <!-- popup end -->
      
    </main>

    <footer>
        <?php include "./footer.php"?>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/popups.js"></script>
    
</body>
</html>
