<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QFMS | Mechanic</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mechanic.css">
    <link rel="stylesheet" href="css/mechanicpopup1.css">

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

       <div class="mechanic-popup1" id="mechanicpopup">
        <div class="mechanic-popup">
            <span class="close" id="closePopup">&times;</span>
            <div class="mechanic-popup-container">
                <form action="">
                    <div class="mechanic-vd-1">
                        <h1>Mechanic Invoice and Report</h1>
                    <div class="mechanic-textarea1">
                        
                        <div class="mechanic-popup-vdails">
                            <label for="vehicleNumber">Vehicle Number : </label>
                            <input type="text" id="vehicleNumber" name="vehicleNumber" placeholder="Vehicle Number">
                        </div>
                        <div class="mechanic-popup-vdails">
                            <label for="date">Date</label>
                            <input type="date" id="date" name="date">
                        </div>
                    </div>
                    <div class="mechanic-textarea2">
                        <div class="mechanic-popup-vdails">
                            <label for="milage">Mileage</label>
                            <input type="number" id="milage" name="milage" placeholder="Mileage (Km)">
                        </div>
                        <div class="mechanic-textarea3">
                            <input type="radio" id="service" name="serviceType" value="service">
                            <label for="service" id="serviceLabel">Service</label>
                        </div>
                    </div>
                    </div>
                    
                    <div class="mechanic-bill">
                        <div id="itemsContainer">
                            <!-- Items will be dynamically added here -->
                        </div>
                        <div class="mechanic-bill-buttons-line">
                            <div id="totalPriceLabel">Total price = Rs.0</div> <!-- Added total price label -->
                            <button type="button" id="calculateTotalBtn">Calculate Total</button> <!-- Added calculate total button -->
                            <button type="button" id="addItemBtn">Add Item</button>
                            <button type="submit">Submit</button>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
        </div>
        <script src="js/mechanicpopup1.js"></script>
       </div>

       <button id="accept">Accept</button>
       <script src="js/popups.js"></script>
        
    </main>

    <footer>
        <?php include "./footer.php" ?>
    </footer>
    
    
</body>
</html>
