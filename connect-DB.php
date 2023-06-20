<!-- Connecting -->
<?php
$databaseName = 'PSUTTON1_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'psutton1_writer';
$password = 'HABVDCd3CGfk';
$pdo = new PDO($dsn, $username, $password);
?>
<!-- Connection complete -->