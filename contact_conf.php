
<!-- Your html / php or whatever above here -->

<?php 
session_start(); // Start the session to access session variables
?>
<div id="form_wrapper">
    <h1>Thank You for Contacting Us!</h1>
    <p>~ Success!<br/> Your message has been sent :)</p>
    <p>What you sent / what we will receive:</p>
    <p class="sent-info">Name: <?php echo htmlspecialchars($_SESSION['contact_name']); ?></p>
    <p class="sent-info">Email: <?php echo htmlspecialchars($_SESSION['contact_email']); ?></p>
    <!-- Include phone number as non required / optional-->
    <p class="sent-info">Phone: <?php echo htmlspecialchars($_SESSION['contact_phone']); ?></p> 
    <p class="sent-info">Subject: <?php echo htmlspecialchars($_SESSION['contact_subject']); ?></p>
    <p class="sent-info">Message: <?php echo nl2br(htmlspecialchars($_SESSION['contact_message'])); ?></p>
    
    <div id="bck-btn">   
        <a href="/my_Clients/SusanDodge/dev-02/index.php">Return to Website</a>
    </div>        

    <?php
    // Clear session variables and end session after use
    session_unset(); 
    session_destroy(); 
    ?> 
</div> <!-- End of div #form_wrapper  -->
