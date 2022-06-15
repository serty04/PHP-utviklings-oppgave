<!DOCTYPE html>
<?php
    $query = mysql_query("SELECT * from php_oppgave", $connection);//lager tilgang til serveren//
    $connection = mysql_connect("localhost", "root", "");//velger databasen//
    $db = mysql_select_db("php_oppgave", $connection);//utfoorer MYsql select query//
    $query = mysql_query("SELECT * FROM info_ansatte ORDER BY id", $connection);//velger hvordan data du henter ut//
    
?>
