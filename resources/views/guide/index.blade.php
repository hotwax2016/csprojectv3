@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
	
		<h3>Guides</h3>

		<table class="table my-5">
			<thead class="thead-dark">
				<tr>
				<th scope="col">Username</th>
				<th scope="col">Full Name</th>
				<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->guide->fname}} {{$user->guide->lname}}</td>
					<td><a href="/guides/{{$user->guide->id}}" class="btn btn-primary">View Profile</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{{ $users->links() }}
	</div>
</div>
@endsection
