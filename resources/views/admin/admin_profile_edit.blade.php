@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <h5 class="card-header bg-dark text-white">Edit Profile</h5>
                    <div class="card-body">
                        <form action="{{ route('store.profile') }}" method="POST" class="mt-3">
                            @csrf

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="name" type="text" id="example-text-input" value="{{ $editData->name }}">
                                </div>
                            </div>         
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email Address</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="email" type="text" id="example-text-input" value="{{ $editData->email }}">
                                </div>
                            </div>         
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="username" type="text" id="example-text-input" value="{{ $editData->username }}">
                                </div>
                            </div>         
                            <!-- end row -->
                            <div class="d-grid col-4 mx-auto mt-5">
                            <input type="submit" class="btn btn-info waves-effect waves-light">
                        </div>
                    </form>         
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

@endsection