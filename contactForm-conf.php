<?php
session_start(); // Start the session to access session variables
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>##| Your document title here |##</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{margin:0; padding:0;}
body{
font-size:16px;
background-color:#ebedf0;
margin:0;
padding:0;
}
#wrapper{
width:80%;
max-width:45em;
background-color:#fff;
border: .065em solid gray;
border-radius:2em;
box-shadow: 0.125em 0.125em 0.625em 0em rgba(0, 0, 0, 0.4); /* Subtle drop shadow */
margin: 1em auto; 
padding: .75em; 
}
h1{
font-size:1em;
margin:0.75em;
padding:0;
}
p{
margin:0.75em 0.5em;
padding:0;
}   
.sent-info{
font-weight:bold;
font-style:italic;
border-bottom:0.12em dotted gray;
margin:0.75em 0.75em;
padding:0.5em;
}
   
#bck-btn{
width:70%;
text-align:center;
background-color:#d7dbe0;
border:0.2em solid #00000030;
border-radius: .5em;
margin:2em auto .05em auto;
padding:0.5em 0;
}  
#bck-btn a{
color:#b05d2a;
text-decoration:none;   
} 
#bck-btn a:hover{
color:#693515;
text-decoration:underline;
}   
</style>
</head>
<body>
 <div id="wrapper">
  <h1>Thank You for contacting us.</h1>
   <p>~ Success!<br/> Your message has been sent :)</p>
   <p>What you sent / what we will receive:</p>
   <p class="sent-info">Name: <?php echo htmlspecialchars($_SESSION['name']); ?></p>
   <p class="sent-info">Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
   <p class="sent-info">Phone: <?php echo htmlspecialchars($_SESSION['phone']); ?></p> 
      <!-- Include phone number as non required / optional-->
   <p class="sent-info">Subject: <?php echo htmlspecialchars($_SESSION['subject']); ?></p>
   <p class="sent-info">Message: <?php echo nl2br(htmlspecialchars($_SESSION['message'])); ?></p> 
    <div id="bck-btn">{   
        <a href="http://cyberfluence.com/index.html">Return to Website</a>
    }</div>        
   </div>
</body>
</html>
