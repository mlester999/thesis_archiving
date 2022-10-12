@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <h5 class="card-header bg-dark text-white">Profile</h5>
                    <div class="card-body mt-3">
                      <h5 class="card-title">Full Name: {{ $adminData->name }}</h5>
                      <hr>
                      <h5 class="card-title">Email Address: {{ $adminData->email }}</h5>
                      <hr>
                      <h5 class="card-title">Username: {{ $adminData->username }}</h5>
                      <hr>
                      <div class="d-grid col-4 mx-auto mt-5">
                      <a href="{{ route('edit.profile') }}" class="btn btn-info waves-effect waves-light">Edit Profile</a>
                    </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection