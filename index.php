<!DOCTYPE html>
<?php
    // Create connection
$conn = new mysqli($username, $password, $dbname, $servername);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error); // Hvis tilkoblingen feilet
}

$sql = "SELECT id, navn, bilde, mobil, Jobb, epost, Stilling, avdeling FROM info_ansatte"; // Hva vi skal hente
$result = $conn->query($sql); // Henter resultatet



$conn->close(); // Lukke tilkoblingen til SQL server
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_oppgave";




$sql = "INSERT INTO info_ansatte (navn, mobil, stilling)";
?>

<?php
 // loop som kjører til slutten av raden i mysql
  while($rows=$result->fetch_assoc())
  {
      $bilde = $rows ['bilde'];
      $brukerid = $rows['id'];
      $navn = $rows['navn'];
      $mobil = $rows['mobil'];
      $jobb = $rows['jobb'];
      $epost = $rows['epost'];
      $avdeling = $rows['avdeling']; 
      $stilling = $rows['stilling'];






?>
<?php
  }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<tr>
    <!-- henter data fra hver rad -->

    <td><?php echo "<img src=\"$bilde\" width=\"100px\" height=\"100px\">";?></td>
    <td><?php echo $rows['id'];?></td>
    <td><?php echo $rows['navn'];?></td>
    <td><?php echo $rows['mobil'];?></td>
    <td><?php echo $rows['jobb'];?></td>
    <td><?php echo $rows['epost'];?></td>
    <td><?php echo $rows['stilling'];?></td>
    <td><?php echo $rows['avdeling'];?></td>




</tr>

<form action ="add.php">
                <input type="submit" value="legg til nye ansatte" />
                </form>
</body>

