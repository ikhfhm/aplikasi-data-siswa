<table class="tabler">
	<thead>
		<tr>
			<th>NAMA LENGKAP</th>
			<th>JENIS KELAMIN</th>
			<th>AGAMA</th>
			<th>NILAI RATA-RATA</th>
		</tr>
	</thead>
	<tbody>
		@foreach($siswa as $s)
		<tr>
			<td>{{$siswa->nama_lengkap()}}</td>
			<td>{{$siswa->jenis_kelamin}}</td>
			<td>{{$siswa->agama}}</td>
			<td>{{$siswa-rataRataNilai()}}</td>
		</tr>
		@endforeach
	</tbody>
</table>