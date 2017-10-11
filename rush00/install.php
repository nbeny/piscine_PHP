<?PHP
$filesql = "push.sql";
$vals['db_user'] = "rush42";
$vals['db_pass'] = "rush";
$vals['db_host'] = "127.0.0.1";
$vals['db_name'] = "rush_admin";

$command = "mysql -u{$vals['db_user']} -p{$vals['db_pass']} "
 . "-h {$vals['db_host']} -D {$vals['db_name']} < {$filesql}";

$output = shell_exec($command);
?>