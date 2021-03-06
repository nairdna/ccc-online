<?php
	function emailData($nama, $nopeserta, $tingkat, $sekolah, $email, $password)
	{
		$message = '
		<html>
		<head>
			<title>Aktivasi Email EKTIZO Online</title>

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

			<meta name="viewport" content="width=device-width, initial-scale=1">

		</head>
		<body>
			<div class="container">
				<div class="col-md-2 col-xs-2">
				</div>
				<div class="col-md-8 col-xs-8">
					<div style="width:100%; height:100px; border:1px solid black; margin-top:1,75cm">
						Header
					</div>
					<br>
					<div style="text-align: justify; line-height: 115%">
						<p>Terima kasih telah melakukan pendaftaran ulang ke dalam sistem EKTIZO Online Competition. Pastikan data anak Anda sesuai dengan detail berikut:</p>
						<pre>
							<table>
								<tr>
									<td>Nama&nbsp;</td>
									<td>:&nbsp;</td>
									<td style="font-weight: bold; text-transform: uppercase;">'.$nama.'</td>
								</tr>
								<tr>
									<td>No Peserta&nbsp;</td>
									<td>:&nbsp;</td>
									<td style="font-weight: bold;">'.$nopeserta.'</td>
								</tr>
								<tr>
									<td>Tingkat&nbsp;</td>
									<td>:&nbsp;</td>
									<td style="font-weight: bold;">'.$tingkat.'</td>
								</tr>
								<tr>
									<td>Sekolah&nbsp;</td>
									<td>:&nbsp;</td>
									<td style="font-weight: bold;">'.$sekolah.'</td>
								</tr>
							</table>
						</pre>
						<p>Untuk masuk ke dalam sistem kami, gunakan email dan password berikut:</p>
						<pre>
							<table>
								<tr>
									<td>Email&nbsp;</td>
									<td>:&nbsp;</td>
									<td style="font-weight: bold;">'.$email.'</td>
								</tr>
								<tr>
									<td>Password&nbsp;</td>
									<td>:&nbsp;</td>
									<td style="font-weight: bold;">'.$password.'</td>
								</tr>
							</table>
						</pre>
						<p>Untuk melakukan login dan dapat menggunakan sistem kami, silahkan kunjungi tautan berikut <a href="http://learn.ektizo.com">learn.ektizo.com</a>. Pastikan setelah anda login, ubah password anda menjadi password yang diinginkan. Apabila Anda tidak dapat melakukan login, silahkan kirimkan email ke <a href="mailto:ccc
						@ektizoedu.com">ccc@ektizoedu.com</a> dengan subjek "<b>Gagal Login - (nomor peserta)</b>" contoh : <b>"Gagal Login - '.$nopeserta.'"</b>.</p>

						<p>
							Apabila ada hal yang ingin ditanyakan, silahkan email kontak kami via email ke <a href="mailto:ccc@ektizoedu.com">ccc@ektizoedu.com</a>
						</p>
						<p>
							Terima kasih,<br>
							<br>
							<br>
							<br>
							<b>Panitia #EKTIZO3C16</b>
						</p>
						<p style="text-align: center; font-size: x-small; color: white;background-color: #bdc3c7; padding: 10px">Anda menerima email ini karena terdaftarnya anda dalam kompetisi EKTIZO Creative Coding Comeptition 2016. Data yang diberikan oleh anda merupakan data yang bersifat rahasia serta hanya digunakan untuk internal perusahaan. Dimohon untuk tidak membalas email ini. Email ini dibuat secara otomatis oleh sistem.</p>
					</div>
				</div>
				<div class="col-md-2 col-xs-2">
				</div>
			</div>
		</body>
	</html>';

	return $message;
	}
?>