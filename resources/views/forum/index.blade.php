@extends('layouts.master')

@section('content')
<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Forum</h3>
									<div class="right">
										<a href="{{route('posts.add')}}" class="btn btn-sm btn-primary">Tambah Forum</a>
									</div>
								</div>
								<div class="panel-body">
                                <ul class="list-unstyled activity-list">
                                    @foreach($forum as $frm)
										<li>
											<img src="{{$frm->user->siswa->getAvatar()}}" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Michael</a> has achieved 80% of his completed tasks <span class="timestamp">20 minutes ago</span></p>
										</li>
									@endforeach
									</ul>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection