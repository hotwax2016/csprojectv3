@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h3 class="text-center mt-4">Guides</h3>
            <ol class="list-group">
                @foreach($guides as $guide)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $guide->name }}
                        <a href="/guides/{{$guide->id}}"><span class="btn btn-primary">Contact Me</span></a>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</div>
@endsection
