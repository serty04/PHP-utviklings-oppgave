<!DOCTYPE html>
<?php
    $query = mysql_query("SELECT * from php_oppgave", $connection);//lager tilgang til serveren//
    $connection = mysql_connect("localhost", "root", "");//velger databasen//
    $db = mysql_select_db("php_oppgave", $connection);//utfoorer MYsql select query//
    $query = mysql_query("SELECT * FROM info_ansatte ORDER BY id", $connection);//velger hvordan data du henter ut//
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="innpakning">
        <div id="header">

        </div>
        <div id="innhold">
            
        </div>
        <div id="footer">

        </div>
    </div>
</body>
</html>