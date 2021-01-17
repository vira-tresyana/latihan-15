@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			
			<div class="card">
				<div class="card-header">
					Data User
					<a href="{{url('admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="">
					<table class="table">
						<thead>
							<tr>

							<th>No</th>
							<th>Aksi</th>
							<th>Nama user</th>
							<th>Username user</th>
							<th>Jenis Kelamin</th>
							<th>Email user</th>
							
							</tr>
						</thead>
						<tbody>
							@foreach($list_user as $user)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group" role="group" arial-label="Basic example">
									<a href="{{url('admin/user', $user->id)}}" class="btn btn-dark btn-sm"><i class="fa fa-info-circle"></i></a>
									<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
									@include('template.utils.delete', ['url' => url('admin/user', $user->id)])
									</div>
								</td>
								<td>{{$user->nama}}</td>
								<td>{{$user->username}}</td>
								<td>{{$user->jenis_kelamin_string}}</td>
								<td>{{$user->email}}</td>

							</tr>
							@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
		
	</div>
	
</div>



@endsection