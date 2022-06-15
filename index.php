<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_oppgave";
$ansatte_id = "ansatte_id";
$ansatte_navn = "ansatte_navn";
$ansatte_mobil = "ansatte_mobil";
$ansatte_jobb = "ansatte_jobb";
$ansatte_epost = "ansatte_epost";
$ansatte_stilling = "ansatte_stilling";
$ansatte_avdeling = "ansatte_avdeling";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO info_ansatte (navn, mobil, stilling)
VALUES ('John', 'Doe', 'john')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
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

  <div id="innpakning">
        <div id="header">

        </div>
        <div id="innhold">
            <div id="tabel">
              <table>
                <tr>
                  <th class="d-flex flex-column" id= "ansatte_id">id</th>
                  <th id= "ansatte_navn">navn</th>
                  <th id= "ansatte_mobil">mobil</th>
                  <th id= "ansatte_jobb">jobb</th>
                  <th id= "ansatte_epost">e-post</th>
                  <th id= "ansatte_stilling">stilling</th>
                  <th id= "ansatte_avdelin">avdeling</th>
                </tr>
                <tr>
                  <td>Alfreds Futterkiste</td>
                  <td>Maria Anders</td>
                  <td>Germany</td>
                </tr>
                <tr>
                  <td>Centro comercial Moctezuma</td>
                  <td>Francisco Chang</td>
                  <td>Mexico</td>
                </tr>
              </table>
                
                
            </div>
        </div>
        <div id="footer">

        </div>
  </div>
</body>
</html>