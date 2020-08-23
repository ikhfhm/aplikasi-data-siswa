@extends('layouts.frontend')

@section('content')
<section class="banner-area relative about-banner" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Pendaftaran				
				</h1>	
				<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> Pendaftaran</a></p>
			</div>	
		</div>
	</div>
</section>

<section class="search-course-area relative" style="background: unset;">
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6 col-md-6 search-course-left">
				<h1>
					Pendaftaran Online <br>
					Bergabung bersama kami
				</h1>
				<p>
					Dengan kurikulum yang update dengan kebutuhan pasar, kami menjami lulusan akan mudah terserap di dunia kerja.
				</p>
			</div>
			<div class="col-lg-4 col-md-6 search-course-right section-gap">
				{!! Form::open(['url' => '/postregister', 'class' => 'form-wrap']) !!}
					<h4 class="pb-20 text-center mb-30">Formulir Pendaftaran</h4>		
					{!!Form::text('nama_depan','',['class' => 'form-control','placeholder' => 'Nama Depan'])!!}
					{!!Form::text('nama_belakang','',['class' => 'form-control','placeholder' => 'Nama Belakang'])!!}
					{!!Form::text('agama','',['class' => 'form-control','placeholder' => 'Agama'])!!}
					{!!Form::textarea('alamat','',['class' => 'form-control','placeholder' => 'Alamat'])!!}
					<div class="form-select" id="service-select">
						<select style="display: none;">
							<option datd-display="">Choose Course</option>
							<option value="1">Course One</option>
							<option value="2">Course Two</option>
							<option value="3">Course Three</option>
							<option value="4">Course Four</option>
						</select><div class="nice-select" tabindex="0"><span class="current">Choose Course</span><ul class="list"><li data-value="Choose Course" class="option selected">Choose Course</li><li data-value="1" class="option">Course One</li><li data-value="2" class="option">Course Two</li><li data-value="3" class="option">Course Three</li><li data-value="4" class="option">Course Four</li></ul></div>
					</div>

					<button class="primary-btn text-uppercase">Submit</button>
				{!!Form::close()!!}
			</div>
		</div>
	</div>	
</section>
@stop