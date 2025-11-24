<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QFMS | Reports</title>
    <link rel="stylesheet" href="css/reports.css">
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body>
    <header>
         <?php include "./header.php" ?>
    </header>


    <main>

       <div class="reports-container">
            <div class="reports-container-items">
                <h2>Your Reports</h2>
                <div class="reports-container-textboxes">
                    <div class="reports-container-textboxes-header">
                        <h3>Vehicles Number</h3>
                    </div>
                    <div class="reports-container-textboxes-slectbox">
                        <select name="" id="reports-container-vno"></select>
                    </div>
                </div>
                <div class="reports-container-textboxes-button">
                    <button>Search</button>
                </div>
            </div>
       </div>
    </main>

    <footer>
         <?php include "./footer.php" ?>
    </footer>
    
    
</body>
</html>
