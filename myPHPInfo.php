
<?php

// Use the following code to show all the information about mySQL. 
$pdo = new PDO('mysql:dbname=ka8kgj_wine;host=mysql', 'ka8kgj_admin', 'P!n0t_Gr15', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$query = $pdo->query('SHOW VARIABLES like "version"');
$row = $query->fetch();
echo 'MySQL version:' . $row['Value'];


phpinfo();

/*
// Use the following code to show all the information about PHP. 
phpinfo(); 


// Use the following code to see the installed modules and their current values. 
phpinfo(INFO_MODULES); 

*/

// Use the following code to display the configurations you have set up through your php.ini or to review what's setup through the default configurations. 
phpinfo(INFO_CONFIGURATION); 

?>

