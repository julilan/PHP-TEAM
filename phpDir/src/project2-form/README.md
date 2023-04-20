# Mini-Project 02

Use this form to create validation and handle contact form

## Deploy in live server

The basic assumption is such that you will have to deploy it in live PHP server somewhere to see it working.

Form in public bc server: https://public.bc.fi/s2300103/php-form/index.php
Note! Locally names with international characters such as äöáü and apostrophes ' are passing the check with

```php
// Allowing international letters with the property '\p{L}' that matches any Unicode letter character
if (!preg_match("/^[\p{L}\s\-']+$/u",$name)) {
  $nameErr = "Invalid name. Only letters, spaces, hyphens, and apostrophes are allowed.";
}
```

but in the public bc server they are not. So names such as María García, Sophie O'Connor and Heikki Kärkkäinen are not allowed but locally they are.

## Getting Started

1. Use the webform.html
2. Create a new php file for backend e.g. webform.php
3. You may simply rename the webform.html to webform.php as well
4. Use GET or POST method to capture form data
5. To see the form locally you can visit: http://localhost:8006/project2-form/webform.php

## License

This project is licensed under the MIT License
