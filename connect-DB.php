<!-- Connecting -->
<?php
$databaseName = 'PSUTTON1_weeks';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'psutton1_writer';
$password = 'yvgXBz3BTVPk';
$pdo = new PDO($dsn, $username, $password);
?>
<!-- Connection complete -->