<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        



        <title>Enter Details</title>
    
 <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       
    </head>
   
    
        <h1 class ="mainheading">Please enter your payment details</h1>
        
       
            <form action="Ebus3.php" method="POST">
                
               
                <br/>
                
                <label for="user_pin">PIN:</label>
                <br/>
                <input type ="password" id="user_pin" placeholder="Card PIN" maxlength="4">
                
                </br>
                
                <button type ="Submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                
            </form>
            
            
        <br/>
            <button onClick ="validateDetails()">Validate</button>
       <div/>
        <script type ="text/javascript" src="Ebus2_validator.js"></script>
        
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        </div>
    </body>
</html>