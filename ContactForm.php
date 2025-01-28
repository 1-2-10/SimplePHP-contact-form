<!DOCTYPE html>
<html lang="en">
<head>
  <title>## Your doc title here ##</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style>
*{margin:0; padding:0;}
body{
font-size:16px;
background-color:#ebedf0;
margin:0;
padding:0;
}
#wrapper{
width:86%;
max-width:45em;
background-color:#fff;
border: .065em solid gray;
border-radius:2em;
box-shadow: 0.125em 0.125em 0.625em 0em rgba(0, 0, 0, 0.4); /* Subtle drop shadow */
margin:2em auto 1em auto; 
padding: 1em; 
}

.form-fields{
margin:0 0 1em 1em ;
padding: 0;
}
.prompt-text{
color: #808080;
font-size: 0.75em;
margin:0 0 1em 2em;
padding:0 0 5em 0;
}

#message{
min-width: 260px;
min-height: 80px;
padding: 0.25em;
font-size:1em;
background-color:#ebedf0;
color: #000;
border: 2px solid #afb2b6;
border-radius: 0.25em;
box-shadow: 0.125em 0.125em 0.625em 0em rgba(0, 0, 0, 0.4);
}

.g-recaptcha{
margin:1em 0 1em 0.25em;
padding:0;
}

input{
padding: 0.25em;
font-size:1em;
background-color: #ebedf0;
color: #000;
border: 2px solid #afb2b6;
border-radius: 0.25em;
box-shadow: 0.125em 0.125em 0.625em 0em rgba(0, 0, 0, 0.4);
}

 </style>    
</head>
<body>
<div id="wrapper">
    <form action="send_email.php" method="post">
   <div class="form-fields">
      <label for="name">Name:<span class="prompt-text">(required*)</span></label><br>
      <input type="text" id="name" name="name" required>
   </div>
   <div class="form-fields">
      <label for="email">Email:<span class="prompt-text">(required*)</span></label><br>
      <input type="text" id="email" name="email" required>
   </div>
   <div class="form-fields">
      <label for="subject">Subject:<span class="prompt-text">(required*)</span></label><br>
      <input type="text" id="subject" name="subject" required>
   </div>
   <div class="form-fields">
      <label for="phone">Phone #:<span class="prompt-text">(optional*)</span></label><br>
      <input type="text" id="phone" name="phone">
   </div>
   <div class="form-fields text-area">
     <label for="message">Message: (750 chars max)</label><br>
     <textarea id="message" name="message" required maxlength="750"   oninput="updateCharCount()"></textarea><br>
     <span id="charCount">750 characters remaining</span>
   </div>
        <!-- reCAPTCHA widget -->
   <div class="g-recaptcha" data-sitekey="## Your site's Google keys for captcha ##">
   </div>
    <div class="form-fields">
  <input type="submit" value="Send it!">
  <div>
 </form>
</div>
<script>
function updateCharCount() {
    var messageField = document.getElementById("message");
    var charCount = document.getElementById("charCount");
    var remaining = 750 - messageField.value.length;
  
    charCount.textContent = remaining + " characters remaining";
}
</script>
</body>
</html>
