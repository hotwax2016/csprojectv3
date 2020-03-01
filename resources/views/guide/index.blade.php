@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	
		<h3>Guides</h3>

		<table class="table my-5">
			<thead class="thead-dark">
				<tr>
				<th scope='col'>#</th>
				<th scope="col">User Name</th>
				<th scope="col">Full Name</th>
				<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $key => $user)
				<tr>
					<th scope="row">{{$key + 1}}</th>
					<td>{{$user->name}}</td>
					<td>{{$user->tourist->fname}} {{$user->tourist->lname}}</td>
					<td><a href="/guides/{{$user->tourist->id}}" class="btn btn-primary">View Profile</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
