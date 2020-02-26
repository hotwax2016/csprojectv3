@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row my-2">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Contact Info</a>
                    </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h5 class="mb-3">{{$guide->fname}}'s Profile</h5>
                            </div>
                            <div class="col-md-6">
                                @if (Auth::user()->role == 'guide')
                                    <a href="" class="btn btn-primary">Create Post</a>
                                @endif
                                <a href="/guides/{{$guide->id}}/tasks" class="btn btn-primary">Make Appoinment</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>About</h6>
                                <p>
                                    {{$guide->description}}
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6>Recent badges</h6>
                                <a href="#" class="badge badge-dark badge-pill">abc</a>
                                <a href="#" class="badge badge-dark badge-pill">abc</a>
                                <a href="#" class="badge badge-dark badge-pill">abc</a>
                                <a href="#" class="badge badge-dark badge-pill">abc</a>
                                <a href="#" class="badge badge-dark badge-pill">abc</a>
                                <a href="#" class="badge badge-dark badge-pill">abc</a>
                                <a href="#" class="badge badge-dark badge-pill">abc</a>
                                <a href="#" class="badge badge-dark badge-pill">abc</a>
                                <hr>
                                <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                                <span class="badge badge-success"><i class="fa fa-cog"></i> 43 posts</span>
                            </div>
                            <div class="col-md-12">
                                <h3>Recent Activities</h3>
                            </div>
                        </div>
                        <!--/row-->
                    </div>
                    <div class="tab-pane" id="edit">
                        <form method="patch" action="/guides/{{$guide->id}}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="email" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">License Key </label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">License Expire At</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="date" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Guide Category</label>
                                <div class="col-lg-9">
                                    <select id="category" class="form-control" size="0">
                                        <option value="national">National Guide</option>
                                        <option value="chauffeur">Chauffeur Guide</option>
                                        <option value="area">Area Guide</option>
                                        <option value="site">Site Guide</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Contact No</label>
                                <div class="col-lg-9">
                                    <input class="form-control" type="tel" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="reset" class="btn btn-secondary" value="Cancel">
                                    <input type="submit" class="btn btn-primary" value="Save Changes">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-1 text-center">
                @if($guide->license_key == null)
                    <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block border border-danger" alt="avatar">
                @else 
                    <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block border border-success" alt="avatar">
                @endif
                <h6 class="mt-2">Upload a different photo</h6>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <span class="custom-file-control">Choose file</span>
                </label>
            </div>
        </div>
    </div>
@endsection
