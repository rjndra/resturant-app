<?php
##for mysql server connection

mysql_connect("localhost","root","") or die("Could not Connect to Mysql server");

mysql_select_db("hitech_resturant") or die("Could not find the database name");

?>