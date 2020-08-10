<!DOCTYPE html>
<html>
	<head>
		<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
	<h1>Data Siswa</h1>
	<table>
		<tr>
			<th>NAMA DEPAN</th>
			<th>NAMA BELAKANG</th>
			<th>JENIS KELAMIN</th>
			<th>AGAMA</th>
			<th>ALAMAT</th>
		</tr>
		@foreach($data_siswa as $siswa)
		<tr>
			<td>{{$siswa->nama_depan}}</td>
			<td>{{$siswa->nama_belakang}}</td>
			<td>{{$siswa->jenis_kelamin}}</td>
			<td>{{$siswa->agama}}</td>
			<td>{{$siswa->alamat}}</td>
		</tr>
		@endforeach
	</table>
		

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>

