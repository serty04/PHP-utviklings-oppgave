<?php 
include "connect.php";
if(isset($_POST["submit"])) {


        $ansatt_navn = htmlspecialchars($_POST["navn"])
        $mobil = htmlspecialchars($_POST["mobil"]);
        $jobb = htmlspecialchars($_POST["jobb"]);
        $epost = htmlspecialchars($_POST["epost"]);
        $stilling = htmlspecialchars($_POST["stilling"]);
        $avdeling = htmlspecialchars($_POST["avdeling"]);
    
    
        $sql = "INSERT INTO info_ansatte (navn, mobil, jobb, epost, stilling, avdeling) VALUES ('$ansatt_navn', '$mobil', '$jobb', '$epost', '$stilling', '$avdeling')";
        if(mysqli_query($mysqli, $sql)) {
            <!-- success case 
            header('Location: index.php');
        } else {
            // error case
            echo "Error: " . mysqli_error($mysqli);
        }
    }
    ?>
    <head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Link til css -->
    <link rel="stylesheet" href="css/style.css">
    </head>

    <form action ="index.php">
                <input type="submit" value="Tilbake" />
                </form>
    <div class="row">
                <div class="col-md-5 mx-auto">
                <!-- legger til ny ansatt i databasen -->
                    <H1>legg til ny ansatt</H1>
                    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
                       
                        <input type="text" name="Navn" placeholder="Navn">
                        <input type="number" name="Mobil" placeholder="Mobil" >
                        <input type="number" name="Jobb" placeholder="Jobb" >
                        <input type="email" name="Epost" placeholder="Epost" >
                        <input type="text" name="Stilling" placeholder="Stilling" >
                        <input type="text" name="Avdeling" placeholder="Avdeling"  >
                        
                        
                       
                        <button type="submit" name="submit">Legg til</button>
                        <!-- -->
                </div>
                
            </div>
?>