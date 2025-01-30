
#README:
SimplePHP-contact-form

A lightweight contact form for website owners, using native PHP for handling submissions without external dependencies.

## Features
- User fields: Name, Email, Subject, Phone (optional), Message
- Basic email sending using PHP’s `mail()` function
- Simple confirmation page upon successful submission
- Additional fields can be easily added

## Changes Prompting Branch Creation
- Introduced external stylesheets for improved presentation.
- Structure adjustments to support additional styling without complicating the core functionality.

## Installation
1. Place `contact.php` and `contact_conf.php` in the root of the site’s directory.
2. Place `send_email.php` in a subdirectory named `PHPscripts`, or adjust the code for alternative file paths.
3. Uncomment the CAPTCHA code in `contact.php` and insert your Google CAPTCHA keys.

## Directory Structure


/public_html/                (or the root directory of your site)
│
├── index.php               (Main entry point of the site)
│
├── contact.php             (Contact form page)
│
├── contact_conf.php        (Confirmation page for form submission)
│
├── styles/                 (Directory for stylesheets)
│   └── contact_form.css     (Styles specific to the contact form)
│
└── PHPscripts/             (Directory for PHP scripts)
    └── send_email.php      (Handles email sending on form submission)
    
    ## License
MIT License (or applicable license).
