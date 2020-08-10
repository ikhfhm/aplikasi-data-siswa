<!DOCTYPE html>
<html>
	<head>
		<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>

	
	</body>
</html>

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