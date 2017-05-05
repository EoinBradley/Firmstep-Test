--------
OVERVIEW
--------
This project was to build and design a queueing application for a council. The project would allow the council worker to add different users to a queue so that there issues can be addressed and narrows the problem down to a specific area. The fromt end of the app was built using HTML, CSS and JavaScript (Specifically jQuery). The JavaScript code then sent the users information to a PHP file which then inputted that into a MySQL database. The JavaScript was also responsible for sending a request to another PHP file which returned all the users in the queue.

-----------------------------
Installation (Requires MySQL)
-----------------------------
1) input the correct host name, MySQL user name and Mysql password into the db.php file.
2) run the install.php file in the browser. This file will create the database and tables then redirect the user to the homepage.

-------------
jQuery (AJAX)
-------------
jQuery was used in order to send information to the PHP file through a post request. The PHP code then sent beack a response in there was an error which jQuery would output to the user using the "alert()" function. jQuery was also used to send a request to another PHP file which would return all the customers in the queue. jQuery would then overwrite the HTML within a div which would output the queue to the user. This was used over normal HTML forms and querying the database on the homepage because it allows for all of this to be done without the page needing to refresh.

---
PHP
---
The PHP files were used to interface with a MySQL database and would do this using PDO. There are to PHP files. The first file takes information from a post request and puts it into the database while the second one takes data from the database and outputs it to the user. The reason why PDO was used rather the mysql_query is it allows for you to use prepared statements which help provent against SQL injection attackes. This issue could be provented with the mysql_query function somewhat by using the mysql_real_escape_string function but this function had alot of vulnerabilities so it was removed from later releases of PHP.

-----
MySQL
-----
MySQL was used for this project to store the customers information. This could have also been done by storing the information in a text file but this method is less secure.
