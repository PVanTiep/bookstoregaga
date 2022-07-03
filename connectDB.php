<?php
$pdo=new PDO('mysql:host=databasedoan.mysql.database.azure.com;port=3306;dbname=bookstore','admin123', 'Aa@123456',
array(PDO::MYSQL_ATTR_SSL_CERT=>'DigiCertGlobalRootCA.crt.pem'));
?>