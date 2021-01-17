@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			
			<div class="card">
				<div class="card-header">
					Ubah Data user
				</div>

				<div class="card-body">
					<form action="{{url('admin/user', $user->id)}}" method="post">
						@csrf
						@method("PUT")
					<div class="form-group">
					<label for="" class="control-label">Nama Lengkap</label>
					<input type="text" class="form-control" name="nama" id="nama" value="{{$user->nama}}">
					</div>
					<div class="row">
						<div class="col-md-6">
							
							<div class="form-group">
								<label for="" class="control-label">Username</label>
								<input type="text" class="form-control" name="username" id="username" value="{{$user->username}}">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label for="" class="control-label">Email</label>
							<input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
							</div>
							
						</div>
						<div class="col-md-3">
							<div class="form-group">
							<label for="" class="control-label">Password</label>
							<input type="password" class="form-control" name="password" id="password">
							</div>
						</div>
						<div class="form-group col-6">
					<label for="" class="control-label">Nomor Handphone</label>
					<input type="text" class="form-control" name="no_hp" value="{{$user->detail->no_hp}}">
					</div>
					</div>
					<button class="btn btn-dark float-right" type="submit"><i class="fa fa-save"> Simpan</i></button>

					</form>
					
					
				</div>
				
			</div>
		</div>
		
	</div>
	
</div>


@endsection 