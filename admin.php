<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Fix Motor Service</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/customer-register.css">
    <link rel="stylesheet" href="css/mechanic-register.css">
<body>
    <header>
        <?php include "./header.php" ?>
    </header>

    <main>
        <div class="admin-container">'
            <div class="admin-container-content">
             
                <!-- customer details -->


                <div class="admin-container-content-section1">
                        <div class="admin-container-content-worker">
                            <div class="admin-container-content-user-details">
                                <div class="user-details-heading">
                                    <h1>Customer Details</h1>
                                </div>
                                <div class="user-details-search-aera">
                                <form action="" method="get">
                                        <div class="user-details-search-form">
                                            <div class="user-details-search-bar">
                                                <input type="text" placeholder="Enter the User ID">
                                                <button type="submit">Search</button>
                                            </div>
                                        </div>
                                </form>
                                
                                    
                            </div>
                            <div class="details-cutomer">
                                <div class="customer-register-container">
                                    <div class="customer-register-details">
                                        <!-- <h2>Fill all your details</h2> -->
                                        <div class="customer-register-details-txtbox">
                                            <div class="customer-register-details-txtbox-line">
                                                <input type="text" placeholder="First Name">
                                                <input type="text" placeholder="Last Name">
                                            </div>
                                            <div class="customer-register-details-txtbox-line">
                                                <input type="text" placeholder="NIC">
                                                <input type="text" placeholder="Email">
                                            </div>
                                            <div class="customer-register-details-txtbox-line">
                                                <input type="text" placeholder="Phone Number">
                                                <input type="text" placeholder="Vehicle Registration Number">
                                            </div>
                                        </div>
                                    </div>
                        
                                    <hr>
                        
                                    <div class="customer-register-login">
                                        <h2>Login Details</h2>
                                        <div class="customer-register-details-txtbox-line">
                                            <input type="text" placeholder="Password">
                                            <input type="text" placeholder="Confirm Password"> 
                                        </div>
                                        <div class="user-register-btns">
                                            <div class="user-register-svbtn">
                                                <button>Save</button>
                                            </div>
                                            
                                            <div class="user-register-dltbtn">
                                                <button>Delete</button>
                                            </div>
                                            
                                        </div>
                                        
                        
                                    </div>
                                </div>
                    
                            </div>  
                        </div>
                    </div>

                </div>

                <!-- mechanic details -->

                <div class="admin-container-content-section1">
                        <div class="admin-container-content-worker">
                            <div class="admin-container-content-user-details">
                                <div class="user-details-heading">
                                    <h1>Mechanic details</h1>
                                </div>
                                <div class="user-details-search-aera">
                                <form action="" method="get">
                                        <div class="user-details-search-form">
                                            <div class="user-details-search-bar">
                                                <input type="text" placeholder="Enter the User ID">
                                                <button type="submit">Search</button>
                                            </div>
                                        </div>
                                </form>
                                
                                    
                            </div>
                            <div class="details-cutomer">
                                <div class="customer-register-container">
                                    <div class="customer-register-details">
                                        <h2>Fill all your details</h2>
                                        <div class="customer-register-details-txtbox">
                                            <div class="customer-register-details-txtbox-line">
                                                <input type="text" placeholder="First Name" id="fname">
                                                <input type="text" placeholder="Last Name" id="lname">
                                            </div>
                                            <div class="customer-register-details-txtbox-line">
                                                <input type="text" placeholder="NIC" id="nic">
                                                <input type="text" placeholder="Email" id="email">
                                            </div>
                                            <div class="customer-register-details-txtbox-line">
                                                <input type="text" placeholder="Phone Number" id="pnum">
                                                <input type="text" placeholder="Vehicle Registration Number" id="vno">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                    <div class="mechanic-register-location">
                                    <div class="mechanic-register-location-select">
                                        <select name="mlocation" id="mlocation">
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
                                    </div>
                                        <!-- <div class="mechanic-register-location-txtbox">
                                            <input type="text" placeholder="Latitude" id="Latitude">
                                            <input type="text" placeholder="Longitude" id="Longitude">
                                        </div> -->
                                    </div>
                        
                                    <div class="customer-register-payment">
                                        <div >
                                            <h2>Add Payment detailes</h2>
                                        </div>
                                        <div class="customer-register-payment-inputs" >
                                            <select name="bank" id="bank">
                                                <option selected>Select Bank</option>
                                                                    <option value="Amana-Bank">Amana Bank</option>
                                                                    <option value="Bank-of-Ceylon">Bank of Ceylon</option>
                                                                    <option value="Bank-of-China">Bank of China</option>
                                                                    <option value="Cargills-Bank">Cargills Bank</option>
                                                                    <option value="Citibank">Citibank</option>
                                                                    <option value="Commercial-Bank-of-Ceylon">Commercial Bank of Ceylon</option>
                                                                    <option value="Deutsche-Bank">Deutsche Bank</option>
                                                                    <option value="DFCC-Bank">DFCC Bank</option>
                                                                    <option value="Habib-Bank">Habib Bank</option>
                                                                    <option value="Hatton-National-Bank">Hatton National Bank</option>
                                                                    <option value="Indian-Bank">Indian Bank</option>
                                                                    <option value="Indian-Overseas-Bank">Indian Overseas Bank</option>
                                                                    <option value="MCB-Bank">MCB Bank</option>
                                                                    <option value="National-Development-Bank">National Development Bank</option>
                                                                    <option value="Nations-Trust-Bank">Nations Trust Bank</option>
                                                                    <option value="Pan-Asia-Bank">Pan Asia Bank</option>
                                                                    <option value="People's-Bank">People's Bank</option>
                                                                    <option value="Public-Bank-Berhad">Public Bank Berhad</option>
                                                                    <option value="Sampath-Bank">Sampath Bank</option>
                                                                    <option value="Seylan-Bank">Seylan Bank</option>
                                                                    <option value="Standard-Chartered-Bank">Standard Chartered Bank</option>
                                                                    <option value="State Bank-of-India">State Bank of India</option>
                                                                    <option value="Hong-Kong-and-Shanghai-Banking-Corporation-(HSBC)">Hong Kong and Shanghai Banking Corporation (HSBC)</option>
                                                                    <option value="Union-Bank-of-Colombo">Union Bank of Colombo</option>
                                            </select>
                                            <input type="text" placeholder="Branch" id="branch">
                                            <input type="text" placeholder="Account Number" id="accno">
                                        </div>
                                    </div>
                                    <hr>
                        
                                    <div class="customer-register-login">
                                        <h2>Login Details</h2>
                                        <div class="customer-register-details-txtbox-line">
                                            <input type="text" placeholder="Password" id="pwd">
                                            <input type="text" placeholder="Confirm Password" id="cpwd"> 
                                        </div>
                                        <div class="user-register-btns">
                                            <div class="user-register-svbtn">
                                                <button>Save</button>
                                            </div>
                                            
                                            <div class="user-register-dltbtn">
                                                <button>Delete</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                        
                    
                            </div>  
                        </div>
                    </div>

                </div>

                <!-- rv owner -->

                <div class="admin-container-content-section1">
                        <div class="admin-container-content-worker">
                            <div class="admin-container-content-user-details">
                                <div class="user-details-heading">
                                    <h1>Recovery Vehicle Owner Details</h1>
                                </div>
                                <div class="user-details-search-aera">
                                <form action="" method="get">
                                        <div class="user-details-search-form">
                                            <div class="user-details-search-bar">
                                                <input type="text" placeholder="Enter the User ID">
                                                <button type="submit">Search</button>
                                            </div>
                                        </div>
                                </form>
                                
                                    
                            </div>
                            <div class="customer-register-container">
            <div class="customer-register-details">
                <h2>Fill all your details</h2>
                <div class="customer-register-details-txtbox">
                    <div class="customer-register-details-txtbox-line">
                        <input type="text" placeholder="First Name" id="fname">
                        <input type="text" placeholder="Last Name" id="lname">
                    </div>
                    <div class="customer-register-details-txtbox-line">
                        <input type="text" placeholder="NIC" id="nic">
                        <input type="text" placeholder="Email" id="email">
                    </div>
                    <div class="customer-register-details-txtbox-line">
                        <input type="text" placeholder="Phone Number" id="pnum">
                        <input type="text" placeholder="Vehicle Registration Number" id="vno">
                    </div>
                </div>
            </div>
            <hr>
            
            <div class="mechanic-register-location">
            <div class="mechanic-register-location-select">
                    <select name="rvlocation" id="rvlocation">
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
                </div>
                <!-- <div class="mechanic-register-location-txtbox">
                    <input type="text" placeholder="Latitude" id="Latitude">
                    <input type="text" placeholder="Longitude" id="Longitude">
                </div> -->
            </div>

            <div class="customer-register-payment">
                <div >
                    <h2>Add Payment detailes</h2>
                </div>
                <div class="customer-register-payment-inputs" >
                    <select name="bank" id="bank">
                        <option selected>Select Bank</option>
                                            <option value="Amana-Bank">Amana Bank</option>
                                            <option value="Bank-of-Ceylon">Bank of Ceylon</option>
                                            <option value="Bank-of-China">Bank of China</option>
                                            <option value="Cargills-Bank">Cargills Bank</option>
                                            <option value="Citibank">Citibank</option>
                                            <option value="Commercial-Bank-of-Ceylon">Commercial Bank of Ceylon</option>
                                            <option value="Deutsche-Bank">Deutsche Bank</option>
                                            <option value="DFCC-Bank">DFCC Bank</option>
                                            <option value="Habib-Bank">Habib Bank</option>
                                            <option value="Hatton-National-Bank">Hatton National Bank</option>
                                            <option value="Indian-Bank">Indian Bank</option>
                                            <option value="Indian-Overseas-Bank">Indian Overseas Bank</option>
                                            <option value="MCB-Bank">MCB Bank</option>
                                            <option value="National-Development-Bank">National Development Bank</option>
                                            <option value="Nations-Trust-Bank">Nations Trust Bank</option>
                                            <option value="Pan-Asia-Bank">Pan Asia Bank</option>
                                            <option value="People's-Bank">People's Bank</option>
                                            <option value="Public-Bank-Berhad">Public Bank Berhad</option>
                                            <option value="Sampath-Bank">Sampath Bank</option>
                                            <option value="Seylan-Bank">Seylan Bank</option>
                                            <option value="Standard-Chartered-Bank">Standard Chartered Bank</option>
                                            <option value="State Bank-of-India">State Bank of India</option>
                                            <option value="Hong-Kong-and-Shanghai-Banking-Corporation-(HSBC)">Hong Kong and Shanghai Banking Corporation (HSBC)</option>
                                            <option value="Union-Bank-of-Colombo">Union Bank of Colombo</option>
                    </select>
                    <input type="text" placeholder="Branch" id="branch">
                    <input type="text" placeholder="Account Number" id="accno">
                </div>
            </div>
            <hr>

            <div class="customer-register-login">
                <h2>Login Details</h2>
                <div class="customer-register-details-txtbox-line">
                    <input type="text" placeholder="Password" id="pwd">
                    <input type="text" placeholder="Confirm Password" id="cpwd"> 
                </div>
                <div class="customer-register-btn">
                    <button>Register Now</button>
                </div>
            </div>
            
        </div>  
                        </div>
                    </div>

                </div>

                <!-- messages -->

                


            </div>
    </main>
    <script src="js/slider.js"></script> 
    <script src="js/main.js"></script>
    <script src="js/header.js"></script>

    <footer>
        <?php include "./footer.php"?>
    </footer>

</body>
</html>