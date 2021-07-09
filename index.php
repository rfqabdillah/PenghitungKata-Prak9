<!DOCTYPE html>
<html>
<head>
	<title>Penghitung Panjang String | Postest 9</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
	<table align="center">
        <tr>
            <td>
                <div class="kotak1">
                    <div class="konten">
                        <div class="konten-judul">
                            <h2>Input Kalimat</h2>
                        </div>
                        <table align="center">
                            <form class="form" name="form1" action="index.php" method="get">
                                <label >
                                    <input type="text" name="inp_text" required placeholder="Inputkan Kalimat">
                                </label>
                                <tr>
                                    <td align="center">
                                        <label>
                                            <input type="submit" name="btn" id="submit-btn" value="Hitung" align="center">
                                        </label>
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                </div>
            </td>
            <td>
                <div class="kotak2">
                    <div class="konten">
                        <div class="data1">
                            Kalimat yang diinputkan
                        </div>
                        <div class="data2">
                            <?php
                            $x = $_GET['inp_text'];
                            $kal = $x;
                            $tot = strlen($kal);
                            echo $kal;
                            ?>
                        </div>
                        <div class="data3">
                            <?php
                            $x = $_GET['inp_text'];
                            $kal = $x;
                            $tot = strlen($kal);
                            echo "Banyak karakter : $tot karakter <br>"; 
                            ?>
                        </div>
                        <div class="data4">
                            <?php
                            echo "Tanggal dibuat : ". date("l"). ", ". date("d-m-Y"). ", ". date("H:i:s")
                            ?>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>
	<footer class="kolom">
		<p>2021 All Rights Reserved | Designed by Rifqi Abdillah </p>
	</footer>

</body>
</html>
