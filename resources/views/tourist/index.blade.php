@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h3 class="text-center mt-4">Guides</h3>
            <ol class="list-group">
                @foreach($users as $user)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$user->name}}
                        <a href="/guide/{{$user->id}}"><span class="btn btn-primary">Contact Me</span></a>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
@endsection
