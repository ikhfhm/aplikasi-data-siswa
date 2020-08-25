@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Posts</h3>
									<div class="right">
										<a href="{{route('posts.add')}}" class="btn btn-sm btn-primary">Add New Post</a>
									</div>
								</div>
								<div class="panel-body">
									
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop