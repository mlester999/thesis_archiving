@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">PNC Library</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Department List</p>
                                <h4 class="mb-2">12</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-list-check-2 font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                            
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Curriculum List</p>
                                <h4 class="mb-2">12</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-warning rounded-3">
                                    <i class="ri-file-list-3-fill font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Verified Students</p>
                                <h4 class="mb-2">1698</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-success rounded-3">
                                    <i class="ri-user-follow-fill font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Not Verified Students</p>
                                <h4 class="mb-2">521</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-danger rounded-3">
                                    <i class="ri-user-unfollow-fill font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                            
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Approved Archives</p>
                                <h4 class="mb-2">22</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-success rounded-3">
                                    <i class="ri-inbox-archive-fill font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-14 mb-2">Pending Archives</p>
                                <h4 class="mb-2">16</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-danger rounded-3">
                                    <i class="ri-inbox-archive-fill font-size-24"></i>  
                                </span>
                            </div>
                        </div>                                              
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>

                        <h4 class="card-title mb-4">Latest Thesis File Uploaded</h4>

                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>Uploader's Name</th>
                                        <th>Title Name</th>
                                        <th>Status</th>
                                        <th>Curriculum</th>
                                        <th>Upload date</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    <tr>
                                        <td><h6 class="mb-0">Marc Rommel Briones</h6></td>
                                        <td>Web-Based Inventory Management System With Data Analytics And Visualization For Lola Wheng Transfi Online Store</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            BSIT
                                        </td>
                                        <td>
                                            12 Oct, 2022
                                        </td> 
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Alex Adams</h6></td>
                                        <td>Python Developer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
                                        </td>
                                        <td>
                                            28
                                        </td>
                                        <td>
                                            01 Aug, 2021
                                        </td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Prezy Kelsey</h6></td>
                                        <td>Senior Javascript Developer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            35
                                        </td>
                                        <td>
                                            15 Jun, 2021
                                        </td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Ruhi Fancher</h6></td>
                                        <td>React Developer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            25
                                        </td>
                                        <td>
                                            01 Mar, 2021
                                        </td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Juliet Pineda</h6></td>
                                        <td>Senior Web Designer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            38
                                        </td>
                                        <td>
                                            01 Jan, 2021
                                        </td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Den Simpson</h6></td>
                                        <td>Web Designer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-warning align-middle me-2"></i>Deactive</div>
                                        </td>
                                        <td>
                                            21
                                        </td>
                                        <td>
                                            01 Sep, 2021
                                        </td>
                                    </tr>
                                     <!-- end -->
                                     <tr>
                                        <td><h6 class="mb-0">Mahek Torres</h6></td>
                                        <td>Senior Laravel Developer</td>
                                        <td>
                                            <div class="font-size-13"><i class="ri-checkbox-blank-circle-fill font-size-10 text-success align-middle me-2"></i>Active</div>
                                        </td>
                                        <td>
                                            32
                                        </td>
                                        <td>
                                            20 May, 2021
                                        </td>
                                    </tr>
                                     <!-- end -->
                                </tbody><!-- end tbody -->
                            </table> <!-- end table -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    
</div>

@endsection