<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Ajax-Search</title>
</head>

<body>
	<h2 align="center">Praktikum 5</h2>

	<div class="wrapper">

		<label>Filter Data</label>
		<div class="form">
			<label>Prodi</label>
			<select name="s_prodi" id="s_prodi" class="form-control">
				<option value="">Pilih Prodi</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
				<option value="Teknik Pertambangan">Teknik Pertambangan</option>
				<option value="Teknik Industri">Teknik Industri</option>
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Elektro">Teknik Elektro</option>
				<option value="Matematika">Matematika</option>
			</select>
		</div>

		<div class="form">
			<label>Keyword</label>
			<input type="text" name="s_keyword" id="s_keyword" class="form-control" placeholder="ex: Seseorang">
		</div>
	</div>

	<div class="container">
		<div class="data"></div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.1.min.js"
		integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous">
		</script>

	<script>
		$(document).ready(function () {
			load_data();
			function load_data(prodi, keyword) {
				$.ajax({
					method: "POST",
					url: "data.php",
					data: { prodi: prodi, keyword: keyword },
					success: function (hasil) {
						$('.data').html(hasil);
					}
				});
			}
			$('#s_keyword').keyup(function () {
				var prodi = $("#s_prodi").val();
				var keyword = $("#s_keyword").val();
				load_data(prodi, keyword);
			});
			$('#s_prodi').change(function () {
				var prodi = $("#s_prodi").val();
				var keyword = $("#s_keyword").val();
				load_data(prodi, keyword);
			});
		});
	</script>
</body>

</html>