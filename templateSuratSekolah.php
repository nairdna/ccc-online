
<?php
	include_once('connection.php');
	if (isset($_POST['kodesekolah']))
	{	
	
		//$kodesekolah = 101; //ini buat nyoba aja

		$kodesekolah = $_POST['kodesekolah'];

		$stmt1 = $mysqli->prepare("select nama from tb_sekolah where kode=?");
		$stmt1->bind_param('s', $kodesekolah);
		$stmt1->execute();
		$stmt1->bind_result($namasekolah);
		$stmt1->fetch();
		$stmt1->close();
	}
		//$namasekolah = "SMP Erenos 1"; //ini juga buat nyoba

		$timestamp = time();
	
	function indonesian_date ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB') {
    if (trim ($timestamp) == '')
    {
            $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
        $timestamp = strtotime ($timestamp);
    }
    # remove S (st,nd,rd,th) there are no such things in indonesia :p
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
        '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
        '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
        '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
        '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
        '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
        '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
        '/April/','/June/','/July/','/August/','/September/','/October/',
        '/November/','/December/',
    );
    $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
        'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
        'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
        'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
        'Oktober','November','Desember',
    );
    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date} {$suffix}";
    return $date;
} 
?>

<html>
<head>
	<title>Surat untuk Sekolah</title>
	<style>
		@page{
			size : A4;
			margin: 2,54cm;
			font-size:11px;;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="text-align:justify; line-height:115%; position:relative">
	<div class="header">
		<img class="right" src="img/ektizo-logo.png">
		<img src="img/ektizo3c16-logo.png">
	</div>
	<br>
	<div class="float-right">
		Jakarta, <?php echo indonesian_date ($timestamp, 'j F Y'); ?>
	</div>
	No: P1/03/3C16/EKT/X/2016<br>
	Perihal: Pengumuman Kompetisi Babak 1<br>
	Lampiran: 4 berkas<br>
	<br>
	Kepada Yth.<br>
	Bapak/Ibu Kepala <?php echo $namasekolah; ?><br>
	di Tempat<br>
	<p>Salam sejahtera,</p>
	<p>
	Semoga surat ini menjumpai Bapak/Ibu dalam kondisi yang sehat dan baik. Izinkan kami dalam kesempatan ini mengucapkan terima kasih atas partisipasi sekolah Bapak/Ibu dalam <b>EKTIZO Creative Coding Competition 2016 (#EKTIZO3C16)</b>.
	</p>
	<p>
	Melalui surat ini, kami kirimkan beberapa berkas terkait Hasil Penyisihan Tingkat Sekolah antara lain:
	<ol>
		<li>Daftar Peserta Babak 2 - Online (Peserta yang Lolos Babak 1) sebanyak 2 lembar.</li>
		<li>Petunjuk Mengikuti Babak Online (Untuk Orangtua) sebanyak 2 lembar.</li>
		<li>Form Pendaftaran Ulang (Untuk diisi Orangtua) sebanyak 4 berkas (Siswa Kelas 3-6)</li>
		<li>
			Amplop (Untuk Orangtua) sebanyak jumlah peserta yang lolos, masing-masing berisi:
			<ol type="a">
				<li>Surat pengantar untuk orangtua</li>
				<li>Petunjuk Mengikuti Babak Online</li>
				<li>Brosur</li>
			</ol>
		</li>
	</ol>
	</p>
	<p>
	Seperti disebutkan dalam proposal kami, setiap orangtua yang anaknya lolos ke babak 2 (online), perlu membayar biaya kompetisi sebesar Rp. 100.000,- kepada EKTIZO dan dibayarkan melalui pihak sekolah. Batas waktu pembayaran adalah 7 hari setelah tanggal surat pemberitahuan. Pada saat melakukan pembayaran, orangtua perlu mengisi Form Pendaftaran Ulang (terlampir) berupa nama orangtua, no. hp orangtua dan email orangtua/siswa. Setelah semua orangtua membayar atau setelah lewat 7 hari, maka pihak sekolah wajib menyetor biaya kompetisi kepada kami sejumlah siswa yang ikut. Pengembalian 20% dari biaya kompetisi akan ditransfer kembali ke pihak sekolah paling lambat 30 hari sejak setoran dari peserta kami terima.  
	</p>
	<p>
	Demikian surat pemberitahuan ini kami sampaikan. Jika Bapak/Ibu memiliki pertanyaan, jangan sungkan untuk menghubungi kami.
	</p>
	<p>
	Hormat kami,
	</p>
	<br>
	Melisa<br>
	Ketua Panitia<br>
	#EKTIZO3C16
	<br>
	<div class="footer">
	<hr>
	<b>EKTIZO Creative Coding Competition 2016</b><br>
	PT EKTIZO KREASI TALENTA<br>
	Taman Kedoya Baru<br>
	Jalan Albasia Raya Blok XI No. 13
	08111222333
	</div>
</body>
</html>