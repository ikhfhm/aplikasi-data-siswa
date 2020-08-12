<!DOCTYPE html>
<html>
	<head>
		<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>

			<div class="container">
				<h1>Edit data siswa</h1>
				@if(session('sukses'))
				<div class="alert alert-success" role="alert">
				  {{session('sukses')}}
				</div>
				@endif
				<div class="row">
					<div class="col-lg-12">
					<form action="/siswa/create" method="post">
			        	{{csrf_field()}}
					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Depan</label>
					    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1">Nama Belakang</label>
					    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
					  </div>

					  <div class="form-group">
					  	<label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
						<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
						   <option value="L">Laki-laki</option>
						   <option value="P">Perempuan</option>
						</select>
					  </div>

					  <div class="form-group">
						<label for="exampleInputEmail1">Agama</label>
					    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Alamat</label>
					    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
       				</form>
       				</div>
				</div>
			</div>
															

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>

