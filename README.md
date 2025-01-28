#README:

# SimplePHP-contact-form
A simple PHP contact form implementation that allows users to submit their information. The submissions are sent via email and include Google reCAPTCHA for spam protection.

## Features
- User input fields: Name, Email, Subject, Phone (optional), Message
- Google reCAPTCHA integration to prevent spam
- Email sending functionality utilizing PHP’s `mail()` function
- Confirmation page to inform users of successful submission
- Easy-to-use and adjustable to fit various needs
#NOTE: 1. sends to any email address, but because of Google's strict email policies
           it is a best practice to send to an email accnt on your domain's remote server first.
       2. From the domain remote server set up a 'forwarding' emaill accnt at gmail, yahoo etc.
       3. The Google captcha script is commented out. So a user will want to create there own domain related site and secret keys to use with this script.   

## Installation
1. Upload `contact.php`, `send_email.php`, and the `PHPMailer` directory to your web server.
2. Ensure your mailing server (`contact@yourdomain.com`) is set up to forward emails appropriately.
3. Configure `send_email.php` with the necessary email headers to route messages through your designated email account.
4. Update the Google reCAPTCHA keys in `contact.php` to your specific keys.
5. Make sure the server's PHP environment is set up to handle email sending.
#NOTE:   1. This is a basic sandbox /all in the root directory assoc. The user will probably want to store the PHP somewhere more organized than in the docroot. So beware of file paths and make any needed edits.
         2. Styles have been left in the head for easy access. Good trick: if you want to style the contact and confirmation form / page you can do it right on the desk top by changing the .ext from .php to .html (Just do'nt forget to revert before uploading.

## Usage
1. Navigate to the contact form on the site ([your website URL]/contact.php).
2. Fill out the required fields (Name, Email, Subject, Message).
3. (Optional) Enter a Phone Number.
4. Complete the reCAPTCHA verification.
5. Click the "Send" button to submit your message.
# Behavior
1. Once the form is filled out and 'submit'ted, the user will get a confirmation page with a review of the sent email and a link at the bottom taking the user back to the website's home page

## License
This project is licensed under the MIT License.


