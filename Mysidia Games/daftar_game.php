<html>
<head>
<title>MYSIDIAN GAME NEST: DAFTAR GAME TERBARU!</title>
</head>
<body>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("mysidiagame");
	
	print("<h2>Data Barang</h2><br>");
	print("<table width='100%'>");
	print("<tr bgcolor='black'>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>No</th>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Kode Barang</th>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Nama Barang</th>");
        print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Platform Game</th>");
	print("<th align='center'><font color=#33ffff face=tahoma size=3 /font>Harga Barang</th>");


	print("</tr>");
	
	$no=1;
	$sql = 'SELECT * FROM data_barang';
	$kueri = mysql_query($sql);
	while ($baris = mysql_fetch_array($kueri)){
		print("<tr bgcolor='#000'>");
		print("<td aling='center'><font color=#666 face=tahoma size=2 /font>$no</td>");
		print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[kode_barang]</td>");
		print("<td><font color=#666 face=tahoma size=2 /font>$baris[nama_barang]</td>");
                print("<td><font color=#666 face=tahoma size=2 /font>$baris[platform]</td>");
		print("<td align='center'><font color=#666 face=tahoma size=2 /font>$baris[harga_barang],00</td>");


		print("</tr>");
		$no=$no+1;
	} 
	print("</table>");
?>
    <br><br><br>
<center><img src="images/now.png"></center><br>
<center><img src="images/or.gif"></center>