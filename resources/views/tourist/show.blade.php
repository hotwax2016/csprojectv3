@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">welcome user</div>

                    <h1>Welcome</h1>
                    
                    {{ $tourist->fname }}
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
