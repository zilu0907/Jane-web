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