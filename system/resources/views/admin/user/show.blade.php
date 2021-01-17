@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			
			<div class="card">
				<div class="card-header">
					Detail Data User
				</div>

				<div class="card-body">
					<div class="jumbotron">
					<h1 class="display-5">{{$user->nama}}</h1><hr>
						
					  <p class="lead"><strong class="text-dark">Alamat Email : {{$user->email}} <b></b>  </strong></p>
					  <hr class="my-4">
					  <p>Username : {{$user->username}}<br>
					  	Nomor Handphone : {{$user->detail->no_hp}}
					  </p>
					
				</div>
				
			</div>
		</div>
		
	</div>
	
</div>


@endsection 