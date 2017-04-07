# Registration-Login-Password-Recovery-and-Password-Changing-system
Useful scripts for everyday use!


This is a small bundle of script I've developed, it's made for small projects. It comes with complete registration, login, password recovery and password changing system. Just to lessen load on server I wrote some client validation too.

Using these scripts is quite straight forward. Just import the ‘website_name.sql’ database, change your database information in ‘connection.php’ file and you should good to go. Just make sure in 'php_form_validator.php' you change the details for email, like your website name, address, reply to email etc. Other than this there's nothing really to be concerned about. Any suggestions/commits are welcome.

- Authentication/login system requires that there's people in registration table. It stores the client data in $_POST, then hashes the password, and using SQL query it tries matching it against data in the table. If data is matched it will log the user in and create session. No account will be able to login unless it has been confirmed.

- Registration system also uses SQL to store data in our registration table. It hashes the password when storing. Registration script also comes with email verification methods, and aswell as captcha.

- Password recovery system asks for and sends it link to check whether user who put the email is the true owner. When user clicks that link, it check if it matches with temporary password and username in recover_password table and then generates new password and stores in registration table.

- Password changing sytem is quite easy too. You have to be logged in, enter new password and hit the button!

For more scripts or tutorial visit http://www.webdevtown.com
