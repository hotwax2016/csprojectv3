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
                                <h5 class="mb-3">
                                    @if ($tourist->fname != null)
                                        {{$tourist->fname}}'s Profile
                                    @else 
                                        {{$tourist->user->name}}'s Profile
                                    @endif
                                </h5>
                            </div>
                            <!-- <div class="col-md-6">
                                <a href="" class="btn btn-primary">Create Post</a>
                                <a href="/tasks" class="btn btn-primary">Make Appoinment</a>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h6>About</h6>
                                <p>
                                    {{$tourist->description}}
                                </p>
                            </div>
                            <div class="col-md-12">
                                <h3>Recent Activities</h3>
                            </div>
                        </div>
                        <!--/row-->
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <a href="/guides" class="btn btn-primary">View Guides</a>
                                <!-- <a href="#" class="btn btn-primary">Friends</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="edit">
                        <form method="patch" action="/guides/{{$tourist->id}}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="fname" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="lname" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="email" type="email" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Contact No</label>
                                <div class="col-lg-9">
                                    <input class="form-control" name="contac_no" type="tel" value="">
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
                <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                <h6 class="mt-2">Upload a different photo</h6>
                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <span class="custom-file-control">Choose file</span>
                </label>
            </div>
        </div>
    </div>
@endsection
