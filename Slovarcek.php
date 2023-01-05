<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Zobna ordinacija Majda Dobravec, Dobravec d.o.o.">
    <meta name="description" content="Informativna splena stran o zobni ordinaciji Majda Dobravec.">
    <meta name="author" content="Rok Dobravec">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap in css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Slovarček</title>
</head>
<body>
    <!--glava-->
    <header>
        <!--navigacijska vrstica-->
        <nav class="navbar">
            <div class="container-fluid">
            
                <div class="navbar-header">
                    <!-- Gumb menija -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#meni">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Logotip s povezavo -->
                    <a class="navbar-brand" href="index.html"><img src="slike/logo.png" alt="Šolska zobna ordinacija Majda Dobravec" class="logo"></a>
                </div>
            
                <!-- Meni -->
                <div class="collapse navbar-collapse" id="meni">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Domov</a></li>
                        <li><a href="Slovarcek.php">Slovarček</a></li>
                        <li><a href="Zobje.html">Zobje</a></li>
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Metode</a>
                            <!-- Spustni meni -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="Rentgen.html">Rentgen</a></li>
                                <li><a class="dropdown-item" href="Medicinska_hipnoza.html">Medicinska hipnoza</a></li>
                                <li><a class="dropdown-item" href="Prozon.html">Prozon</a></li>
                                <li><a class="dropdown-item" href="Biostimulativni_laser.html">Biostimulativni laser</a></li>
                                <li><a class="dropdown-item" href="Apex_locator.html">Apex lokator</a></li>
                                <li><a class="dropdown-item" href="Peskalnik.html"">Peskalnik</a></li>
                                <li><a class="dropdown-item" href="Zobni_nakit.html">Zobni nakit</a></li>
                                <li><a class="dropdown-item" href="Elmex_zele.html">Elmex žele</a></li>
                                <li><a class="dropdown-item" href="Smejalni_plin.html">Smejalni plin</a></li>
                            </ul>
                        </li>
                        <li><a href="Nasveti.html">Nasveti</a></li>
                        <li><a href="Kontakt_in_povezave.html">Kontakt in povezave</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--jedro-->
    <selection>
    <table border="1" margin-right="100px" margin-left="100px">
        <tr>
            <th padding="5px">Beseda</th>
            <th padding="5px">Pomen</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost", "root", "", "slovar");
            if($conn-> connect_error) {
                die("Connection failed:". $conn-> connect_error);
            }

            $sql = "SELECT beseda, pomen from slovar";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td padding="5px">". $row["beseda"] ."</td><td padding="5px">". $row["pomen"] ."</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }
            $conn-> close();
        ?>
    </table>
    </selection>
    <!--noga-->
    <footer>
        <div class="contacts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-1 footer-columns">
                        <!--stolpec podjetje-->
                        <ul class="podjetje col-md-4">
                            <div class="title">Podjetje:</div>
                            <li>Dobravec d.o.o.</li>
                            <li>Kranjska cesta 27</li>
                            <li>4240 Radovljica</li>
                        </ul>
                        <!--stolpec povezave-->
                        <ul class="povezave col-md-4">
                            <div class="title">Povezave:</div>
                            <li><a href="index.html">Domov</a></li>
                            <li><a href="Slovarcek.php">Slovarček</a></li>
                            <li><a href="Zobje.html">Zobje</a></li>
                            <li><a href="Metode.html">Metode</a></li>
                            <li><a href="Nasveti.html">Nasveti</a></li>
                            <li><a href="Kontakt_in_povezave.html">Kontakt in povezave</a></li>
                        </ul>
                        <!--stolpec kontakt-->
                        <ul class="kontakt col-md-4">
                            <div class="title">Kontakt:</div>
                            <li><a href="tel:04 533 75 22 ">04/ 53375 22</a></li>
                            <li><a href="mailto:majda.dobravec@gmail.com">majda.dobravec@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>