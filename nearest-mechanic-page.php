<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QFMS | Nererest Mechanic</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/nearest-mechanic-page.css">

    <script src="js/main.js"></script>
</head>
<body>
    <header>
      <?php include "./header.php" ?>
    </header>


    <main>
        <div class="nearest-mechanic-container">
            <div class="nearest-mechanic-container-item">
                <div class="nearest-mechanic-container-left">
                    <iframe
                            src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=Matale,%20Sri%20Lanka+(WBORMH)&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                            width="500px"
                            height="475px"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
                <div class="nearest-mechanic-container-right">
                    <div class="nearest-mechanic-container-heading">
                        <h1>Find your nearest mechanic</h1>
                    </div>
                    <div class="nearest-mechanic-container-descrip">
                    <select name="nmlocation" id="nmlocation">
                                            <option selected>Select District</option>
                                            <option value="Ampara">Ampara</option>
                                            <option value="Anuradhapura">Anuradhapura</option>
                                            <option value="Badulla">Badulla</option>
                                            <option value="Batticaloa">Batticaloa</option>
                                            <option value="Colombo">Colombo</option>
                                            <option value="Galle">Galle</option>
                                            <option value="Gampaha">Gampaha</option>
                                            <option value="Hambantota">Hambantota</option>
                                            <option value="Jaffna">Jaffna</option>
                                            <option value="Kalutara	">Kalutara	</option>
                                            <option value="Kandy">Kandy</option>
                                            <option value="Kegalla">Kegalla</option>
                                            <option value="Kilinochchi">Kilinochchi</option>
                                            <option value="Kurunegala">Kurunegala</option>
                                            <option value="Mannar">Mannar</option>
                                            <option value="Matale">Matale</option>
                                            <option value="Matara">Matara</option>
                                            <option value="Moneragala">Moneragala</option>
                                            <option value="Mullaitivu">Mullaitivu</option>
                                            <option value="Nuwareliya">Nuwar Eliya</option>
                                            <option value="Polonnaruwa">Ampara</option>
                                            <option value="Puttalam">Puttalam</option>
                                            <option value="Rathnapura">Rathnapura</option>
                                            <option value="Trincomalee">AmpaTrincomaleera</option>
                                            <option value="Vavuniya">Vavuniya</option>
                                            
                    </select>
                        <input type="text" id="nearest-mechanic-page-vid" placeholder="Vehicle Registration Number">
                        <div class="nearest-mechanic-container-descrip-button">
                            <button>Pay and Find</button>
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
