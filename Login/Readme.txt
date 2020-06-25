[Setup]
To set up, refer to https://medium.com/@JohnFoderaro/how-to-set-up-apache-in-macos-sierra-10-12-bca5a5dfffba
Put Jane-web under /Users/username/Sites.
Test the configuration by typing localhost/~username/Jane-web/Login/test.php in the browser.



[Bug]: The server requested authentication method unknown to the client.
[Cause]: The version# of MySQL is 8. But Apache useS MySQL 7.
[Solution]: 
mysql -uroot -p
use mysql;
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'your password';

[Validation]
Data validation can be performed by a web server or a web browser. I used Javascript to do data validation in login.js. The "onsubmit = return false" in the form element will prevent the submission of the form and the redirection of page. Note that the function name must be spelt right. 


[Password]
The type attribute of <input> element can be "password", so that the password field are not visiable. The method of form is "POST", so that the password will not appear in the address.

[To do]
1. Check if username exists.
2. Check if field formats are legal.
3. Display the error message right behind/below the input box.