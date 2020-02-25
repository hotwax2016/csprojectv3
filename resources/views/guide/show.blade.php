@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{$guide->fname}}</div> 

                <div class="card-body">
                    {{ $guide->user->name }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
