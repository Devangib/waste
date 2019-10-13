<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'devangi');
   define('DB_DATABASE', 'kwatt_online_course');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if(mysqli_connect_errno($db))
{
 echo 'Failed to connect';
}
?>