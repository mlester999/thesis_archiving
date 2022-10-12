@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <h5 class="card-header bg-dark text-white">Change Password</h5>
                    <div class="card-body">

                        @if(count($errors))

                            @foreach($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show"> {{ $error }}</p>
                            @endforeach

                        @endif

                        <form action="{{ route('update.password') }}" method="POST" class="mt-3">
                            @csrf

                            <div class="row mb-3">
                                <label for="currPass" class="col-sm-2 col-form-label">Current Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="currentPassword" type="password" id="currPass">
                                </div>
                            </div>         
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="newPass" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="newPassword" type="password" id="newPass">
                                </div>
                            </div>         
                            <!-- end row -->
                            <div class="row mb-3">
                                <label for="confirmPass" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="confirmPassword" type="password" id="confirmPass">
                                </div>
                            </div>         
                            <!-- end row -->
                            <div class="d-grid col-4 mx-auto mt-5">
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Change Password">
                        </div>
                    </form>         
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

@endsection