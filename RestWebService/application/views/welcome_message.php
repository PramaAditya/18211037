<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<title>HTML KickStart Elements</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css" media="all" /> 
	
	<!-- Javascript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>js/kickstart.js"></script>
</head>
<body>
<div class="grid">
	<div class="col_12">
		<h1 class="center">Selamat Datang</h1>
		<h5 class="center subtitle">di Web Service dari</h5>
		<h6 class="center subtitle">Prama Aditya dan Mekaputra Yudhandika</h6>
		<hr class="alt2" />
	</div>
</div> <!-- End Grid -->
<div class="grid">
	<div class="col_12">
		<h3>Penjelasan</h3>
		<p>
			Ini adalah Server dari Rest Web Service yang menyediakan service berupa pengambilan data dari 3 database yaitu:
		</p>
		<ul>
			<li>Liverpool</li>
			<li>Other</li>
			<li>Shortlist</li>
		</ul>
	<p>Service ini menggunakan arsitektur REST dan mampu memberikan response dalam bentuk JSON dan XML</p>
		</p>
		<hr class="alt2" />
	</div>
</div>
<div class="grid">
	<div class="col_12">
		<h3>Cara Penggunaan REST</h3>
	</div>
</div>
<div class="grid">
	<div class="col_4">
		<h5>Database Liverpool</h5>
		<p>Data pemain Liverpool dapat diakses dengan</p>
		<pre>
		./18211037/RestWebService/index.php/api/<em>Liverpool</em>/players/format/xml.xml
		</pre>
		<a href="http://prama-aditya.com/progin/RestWebService/index.php/api/Liverpool/players/format/xml.xml"><button class="medium"><i class="icon-coffee"></i> Try It!</button></a>
	</div>
	<div class="col_4">
		<h5>Database Other</h5>
		<p>Data pemain Other dapat diakses dengan</p>
		<pre>
		./18211037/RestWebService/index.php/api/<em>Other</em>/players/format/xml.xml
		</pre>
		<a href="http://prama-aditya.com/progin/RestWebService/index.php/api/Other/players/format/xml.xml"><button class="medium"><i class="icon-coffee"></i> Try It!</button></a>
	</div>
	<div class="col_4">
		<h5>Database Shortlist</h5>
		<p>Data pemain Shortlist dapat diakses dengan</p>
		<pre>
		./18211037/RestWebService/index.php/api/<em>Shortlist</em>/players/format/xml.xml
		</pre>
		<a href="http://prama-aditya.com/progin/RestWebService/index.php/api/Shortlist/players/format/xml.xml"><button class="medium"><i class="icon-coffee"></i> Try It!</button></a>
	</div>
</div>
<div class="grid">
	<div class="col_6">
		<h5>Banyak Pemain</h5>
		<p>Untuk mengakses banyak pemain, maka digunakan parameter <em>players</em></p>
		<pre>
		./18211037/RestWebService/index.php/api/Liverpool/<em>players</em>/format/xml.xml
		</pre>
		<a href="http://prama-aditya.com/progin/RestWebService/index.php/api/Liverpool/players/format/xml.xml"><button class="medium"><i class="icon-coffee"></i> Try It!</button></a>
	</div>
	<div class="col_6">
		<h5>Satu Pemain</h5>
		<p>Untuk mengakses salah satu pemain dengan id tertentu, maka digunakan parameter <em>player</em> dan ditambahkan parameter id</p>
		<pre>
		./18211037/RestWebService/index.php/api/Liverpool/<em>player/id/1/</em>format/xml.xml
		</pre>
		<a href="http://prama-aditya.com/progin/RestWebService/index.php/api/Liverpool/player/id/1/format/xml.xml"><button class="medium"><i class="icon-coffee"></i> Try It!</button></a>
	</div>
	<hr class="alt2" />
</div>	

</body>
</html>
