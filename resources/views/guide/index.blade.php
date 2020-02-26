@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
			<h2 class="text-center">Guides</h2>   
			@foreach($users as $user)
			<div class="row">
				<div class="media border p-3 my-2">
					<img src="{{$user->guide->dp_url}}" alt="{{$user->guide->fname}}" class="mr-3 mt-3 rounded-circle" style="width:60px;">
					<div class="media-body">
						<div class="row">
							<div class="col-md-6">
								<h5>{{$user->guide->fname}}</h5>
							</div>
							<div class="col-md-6">
								@if ($user->guide->license_key == null)
									<span class="badge badge-pill badge-danger">Unregistered Guide</span>
								@else 
									<span class="badge badge-pill badge-success">Registered Guide</span>
								@endif
								<span class="badge badge-pill badge-primary">Posts 10</span>
								<span class="badge badge-pill badge-primary">Followers 1.2k</span>
							</div>
						</div>
						<ul class="list-group-flush" style="background-color:#f8fafc">
							<li class="list-group-item" style="background-color:#f8fafc">
								Full Name : {{$user->guide->fname}} {{$user->guide->lname}}
							</li>
							<li class="list-group-item" style="background-color:#f8fafc">
								Contact No : {{$user->guide->contact_no}}
							</li>
							<li class="list-group-item" style="background-color:#f8fafc">
								Email : {{$user->email}}
							</li>
						</ul>
						<h5 class="text-center" mt-3>About {{$user->guide->fname}}</h5>
						<p>{{$user->guide->description}}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class=" col-md d-flex justify-content-center">
					<a href="/guides/{{$user->id}}" class="btn btn-primary mr-2">Profile</a>
					<a href="#" class="btn btn-primary mr-2">Follow</a>
					<a href="#" class="btn btn-primary mr-2">Posts</a>
				</div>
			</div>
			@endforeach
        </div>
    </div>
	<div class="row mt-5">
		<div class="col-md d-flex justify-content-center">
			{{$users->links()}}
		</div>
	</div>
</div>
@endsection
