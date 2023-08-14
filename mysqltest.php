<?php
$ip_server = $_SERVER['SERVER_ADDR'];
echo "SERVER:".$ip_server."</br>".PHP_EOL;
$link = mysqli_connect("mysql.student.co.uk","www","Northumbria!1","www");
if (!$link) {
        echo "Error: Unable to connect to MySQL."."</br>".PHP_EOL;
        echo "Debugging errno:".mysqli_connect_errno()."</br>".PHP_EOL;
        echo "Debugging error:".mysqli_connect_error()."</br>".PHP_EOL;
        exit;
}
echo "Success: A proper connection to MySQL was made! The my_db database is great."."</br>".PHP_EOL;
echo "Host information:".mysqli_get_host_info($link)."</br>".PHP_EOL;
mysqli_close($link);
?>
