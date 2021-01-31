<?php 
if($_SESSION['level']==""){
    echo '<script type="text/javascript"> alert("Anda Belum Masuk dengan Akun Anda!");
    window.location = "index.php#tes_gizi";
    </script>';
}
?>
<?php
	$pertanyaan = "";
	$fin_atas1 = 0;
	$fin_atas2 = 0;
	$fin_atas3 = 0;
	$fin_bawah = 0;
	$prob_sakit1 = 0;
	$prob_sakit2 = 0;
	$prob_sakit3 = 0;
	$n_atas1 = 0;
	$n_atas2 = 0;
	$n_atas3 = 0;
	$id_penyakit = "";
	$sesion = "";
/* SETELAH PERTANYAAN BERAKHIR */
if (isset($_GET['solusi'])){
    $kesimpulan = "";
    $hasil = "";
    $solusi = $_GET['solusi'];
    $sakit = "";
		echo "<h2>Kondisi Gizi Anda:</h2>";
		echo "<table class=\"table table-striped\" id=\"tabel_hasil\">";
		echo "<thead class=\"head-table\">";
		echo "<th>Nomor:</th>";
		echo "<th>Kondisi Anda:</th>";
		echo "</thead>";
		echo "<tbody>";
		echo "<tr>";
for ($counter = 0; $counter < $_SESSION['jumlah_keluhan']; $counter++){
    $nomor = $counter + 1;
        echo "<tr>";
        echo "<td>$nomor</td>";
        echo "<td>".$_SESSION['keluhan'][$counter]."</td>";
        echo "</tr>";
}
		echo "</tr>";
		echo "</tbody>";
		echo "</table>";
// PERHITUNGAN DIAGNOSA PENYAKIT
for ($count = 0; $count < 3; $count++){
    $npenyakit = 0;
switch ($count){
case '0':
    $id_penyakit = "p1";
    $sesion = "'n_atas1'";
    $n_atas1  += $_SESSION['n_atas1']; 
break;
case '1':
    $id_penyakit = "p2";
    $sesion = "'n_atas2'";
    $n_atas2  += $_SESSION['n_atas2']; 
break;
case '2':
    $id_penyakit = "p3";
    $sesion = "'n_atas3'";
    $n_atas3  += $_SESSION['n_atas3']; 
break;
}
    $ssql = "SELECT * FROM daftar_penyakit WHERE id_penyakit = '$id_penyakit'";
    $query = mysqli_query($con, $ssql);
    while ($record = mysqli_fetch_array($query)){
        $npenyakit = $record['npenyakit'];
switch ($count) {
case '0':
    $fin_atas1 += $n_atas1 * $npenyakit;
break;
case '1':
    $fin_atas2 += $n_atas2 * $npenyakit;
break;
case '2':
    $fin_atas3 += $n_atas3 * $npenyakit;
break;
}}}
    $fin_bawah = $fin_atas1 + $fin_atas2 + $fin_atas3;
		$prob_sakit1 += $fin_atas1 / $fin_bawah;
		$prob_sakit2 += $fin_atas2 / $fin_bawah;
		$prob_sakit3 += $fin_atas3 / $fin_bawah;
		// PEMISAH
		$prob_sakit1 = round ($prob_sakit1,2);
		$prob_sakit2 = round ($prob_sakit2,2);
		$prob_sakit3 = round ($prob_sakit3,2);
		// PEMISAH
		$prob_sakit1 *= 100;
		$prob_sakit2 *= 100;
		$prob_sakit3 *= 100;
		// PEMISAH
		$total = $prob_sakit1 + $prob_sakit2 + $prob_sakit3;
		// PEMISAH
		$hasil = $prob_sakit1;
		$penyakit = "p1";
        // PEMISAH
		if ($prob_sakit2 >= $prob_sakit1){
			$hasil = $prob_sakit2;
			$penyakit = "p2";
		}
		if ($prob_sakit3 >= $prob_sakit2){
			$hasil = $prob_sakit3;
			$penyakit = "p3";
		}
		// JIKA SEMUA JAWABAN SALAH
		if ($prob_sakit1 == 30 && $prob_sakit2 == 30 && $prob_sakit3 == 40){
			$penyakit = "p0";
			$prob_sakit1 *= 0;
			$prob_sakit2 *= 0;
			$prob_sakit3 *= 0;
			$sakit = "Anda Bergizi Baik";
		}
    $sstring = "SELECT * FROM daftar_penyakit WHERE id_penyakit = '$penyakit'";
    $query = mysqli_query($con, $sstring);
while ($record = mysqli_fetch_array($query)){
    $sakit = strtoupper($record['nama_penyakit']);
}
    echo "<h2>Kemungkinan Terjangkit Gizi Buruk:</h2>";
    echo "<table class=\"table table-striped\" id=\"tabel_hasil\">";
    echo "<thead class=\"head-table\">";
	echo "<th>Nama Penyakit</th>";
	echo "<th>Kwarshiorkor</th>";
	echo "<th>Marasmus</th>";
	echo "<th>Marasmik-Kwarshiorkor</th>";
	echo "</thead>";
	echo "<tbody>";
	echo "<tr>";
	echo "<td>Kemungkinan:</td>";
        echo "<td>$prob_sakit1 %</td>";
		echo "<td>$prob_sakit2 %</td>";
		echo "<td>$prob_sakit3 %</td>";
    echo "</tr>";
	echo "</tbody>";
	echo "</table>";	
/* MENAMPILKAN KESIMPULAN DAN SARAN */
    echo "<div class=\"kesimpulan\">";
    if ($penyakit != 'p0'){
        echo "<h5 style=\"font-size:17px;\">Anda dinyatakan mengidap: $sakit</h5>";
		}
    $ssql = "SELECT * FROM daftar_solusi WHERE id_penyakit = '$penyakit'";
    $query = mysqli_query ($con, $ssql);
    while ($record = mysqli_fetch_array($query)){
        $kesimpulan = $record['solusi'];
			echo "<h5 id=\"hasil_text\">Dari kami, solusi untuk Anda ialah dianjurkan (sarankan) untuk: $kesimpulan</h5>";
		}
			echo"<div class=\"row\">";
			echo"<div class=\"col-lg-4 col-sm-7\">";
			echo"<br><a href=\"periksa.php\" class=\"read_more2\">Periksa Ulang</a> ";
			echo"</div>";
			echo"</div>";
            echo "</div>";
        }
    else if (isset($_GET['rute'])){
		$rute = $_GET['rute'];
		$sstring = "SELECT * FROM basis_aturan WHERE id_gejala = '$rute'";
		$query = mysqli_query($con, $sstring);
		while ($record = mysqli_fetch_array($query)){
			$pertanyaan = $record['pertanyaan'];
		}
		echo "<div class=\"periksa\">";
		echo "<h2><strong>Pertanyaan</strong></h2>";
		echo "<h2>$pertanyaan</h2>";	
			echo"<div class=\"row\">";
			echo"<div class=\"col-lg-4 col-sm-7\">";
			echo"<a href=\"proses_periksa.php?jawaban=benar&rute=$rute\" class=\"read_more2\">Benar</a> ";
			echo"</div>";
			echo"<div class=\"col-lg-5 col-sm-7\">";
			echo"<a href=\"proses_periksa.php?jawaban=tidak&rute=$rute\" class=\"read_more2\">Tidak</a> ";
			echo"</div>";
			echo"</div>";
		echo "</div>";
	}else{		
		echo"<div class=\"row\">";
		echo "<h2><strong>Diagnosa Mandiri</strong></h2>";
		echo"<div >";
		echo "<p>Di sini, anda dapat melakukan diagnosa mandiri untuk mengetahui apakah anda mengidap penyakit gizi buruk ataupun tidak.
        <br>
        Anda hanya perlu menjawab setiap pertanyaan berkaitan dengan kondisi/keluhan yang anda rasakan saat ini.
        <br>
        Kemudian sistem akan melakukan prediksi berdasarkan jawaban anda.</p>";
		echo"<a href=\"proses_periksa.php?jawaban=mulai&rute=g1\" class=\"read_more2\">Mulai</a> ";
		echo"</div>";
		echo"</div>";
	}
?>