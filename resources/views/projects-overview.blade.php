@extends('layouts.master')
@section('title')Project Overview @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Projects @endslot
            @slot('title') Project Overview @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card pb-0">
            <ul class="nav nav-tabs nav-tabs-custom nav-justified project-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#overview" role="tab">
                        <i class="mdi mdi-atom font-size-20"></i>
                        <span class="d-none d-sm-block">Overview</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                        <i class="mdi mdi-clipboard-edit-outline font-size-20"></i>
                        <span class="d-none d-sm-block">Tasks</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#team" role="tab">
                        <i class="mdi mdi-account-multiple-outline font-size-20"></i>
                        <span class="d-none d-sm-block">Team</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#activities" role="tab">
                        <i class="mdi mdi-chart-box-plus-outline font-size-20"></i>
                        <span class="d-none d-sm-block"></span>Activities</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="overview" role="tabpanel">
                    <div class="card mb-0 border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <div class="avatar-title bg-primary-subtle rounded font-size-20 text-primary">
                                                            <i class="uil uil-list-ul"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">21</h5>
                                                    <p class="mb-0 text-truncate text-muted">Total Tasks</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <div class="avatar-title bg-primary-subtle rounded font-size-20 text-primary">
                                                            <i class="uil uil-check-circle"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">10</h5>
                                                    <p class="mb-0 text-truncate text-muted">Completed Tasks</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <div class="avatar-title bg-primary-subtle rounded font-size-20 text-primary">
                                                            <i class="uil uil-users-alt"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">152</h5>
                                                    <p class="mb-0 text-truncate text-muted">Members</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <div class="avatar-title bg-primary-subtle rounded font-size-20 text-primary">
                                                            <i class="uil uil-clock-eight"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-16 mb-1">6325</h5>
                                                    <p class="mb-0 text-truncate text-muted">Total Hours</p>
                                                </div>
                                            </div>
                                        </div><!-- end card body-->
                                    </div><!-- end card -->
                                </div> <!-- end col -->
                            </div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card h-100 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Description</h5>

                                            <div class="text-muted">
                                                <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing.</p>
                                                <p>Phasellus rhoncus neque blandit, faucibus nulla eget, consectetur mauris. Aliquam faucibus eu ligula ac tincidunt. Maecenas sit amet neque sed risus placerat molestie interdum sed elit.
                                                    Nunc id facilisis orci, in scelerisque ex. Duis pharetra pellentesque laoreet. Etiam egestas feugiat nisl, non pretium nisi feugiat vel. Nam suscipit fringilla volutpat. Pellentesque ac auctor tortor. Ut bibendum nisl tincidunt ipsum porta accumsan</p>

                                                <ul class="ps-3">
                                                    <li class="py-1">Cras ultricies mi eu turpis hendrerit</li>
                                                    <li class="py-1">Lorem ipsum dolor sit amet</li>
                                                    <li class="py-1">Duis arcu tortor, suscipit eget</li>
                                                </ul>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                                <div class="col-lg-4">
                                    <div class="card h-100 mb-lg-0">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Task Status</h5>

                                            <div>
                                                <div class="py-3">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14">Design</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="text-muted mb-0">07/12</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress animated-progess custom-progress mt-2">
                                                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="py-3">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14">Development</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="text-muted mb-0">02/07</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress animated-progess custom-progress mt-2">
                                                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="py-3">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14">Other Tasks</h5>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="text-muted mb-0">02/05</p>
                                                        </div>
                                                    </div>
                                                    <div class="progress animated-progess custom-progress mt-2">
                                                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end card -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end tab pane -->

                <div class="tab-pane" id="tasks" role="tabpanel">
                    <div class="card mb-0 border-0">
                        <div class="card-body">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h5 class="card-title">Tasks</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="dropdown">
                                        <a class="btn btn-link text-reset dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table align-middle table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 40px;"></th>
                                            <th scope="col" style="width: 140px;">Task ID</th>
                                            <th scope="col">Task</th>
                                            <th scope="col">Assignee</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width: 140px;">Action</th>
                                        </tr><!-- end tr -->
                                    </thead><!-- end thead -->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" value="" id="taskcheck01">
                                                    <label class="form-check-label" for="taskcheck01"></label>
                                                </div>
                                            </td>
                                            <td><a href="#">DS-045</a></td>
                                            <td>
                                                <h5 class="font-size-14"><a href="#" class="text-reset">Dashboard UI</a></h5>
                                                <p class="text-muted mb-0">09 Mar, 2020</p>
                                            </td>

                                            <td>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Emily Surface">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title rounded-circle bg-primary">
                                                                    E
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-soft-primary font-size-12">Open</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" value="" id="taskcheck02">
                                                    <label class="form-check-label" for="taskcheck02"></label>
                                                </div>
                                            </td>
                                            <td><a href="#">DS-044</a></td>
                                            <td>
                                                <h5 class="font-size-14"><a href="#" class="text-reset">Calendar App Page</a></h5>
                                                <p class="text-muted mb-0">08 Mar, 2020</p>
                                            </td>

                                            <td>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="James Scott">
                                                            <div class="avatar-sm">
                                                                <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Lynn Hackett">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title rounded-circle bg-info">
                                                                    E
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-soft-primary font-size-12">Open</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" value="" id="taskcheck03">
                                                    <label class="form-check-label" for="taskcheck03"></label>
                                                </div>
                                            </td>
                                            <td><a href="#">DS-043</a></td>
                                            <td>
                                                <h5 class="font-size-14"><a href="#" class="text-reset">Authentication Page Design</a></h5>
                                                <p class="text-muted mb-0">07 Mar, 2020</p>
                                            </td>
                                            <td>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Emily Surface">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title rounded-circle bg-danger">
                                                                    E
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-soft-warning font-size-12">Inprogress</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" value="" id="taskcheck04">
                                                    <label class="form-check-label" for="taskcheck04"></label>
                                                </div>
                                            </td>
                                            <td><a href="#">DS-042</a></td>
                                            <td>
                                                <h5 class="font-size-14"><a href="#" class="text-reset">Component Pages</a></h5>
                                                <p class="text-muted mb-0">06 Mar, 2020</p>
                                            </td>

                                            <td>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="James Scott">
                                                            <div class="avatar-sm">
                                                                <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-soft-warning font-size-12">Inprogress</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr><!-- end tr -->
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" value="" id="taskcheck05">
                                                    <label class="form-check-label" for="taskcheck05"></label>
                                                </div>
                                            </td>
                                            <td><a href="#">DS-041</a></td>
                                            <td>
                                                <h5 class="font-size-14"><a href="#" class="text-reset">Admin layout design</a></h5>
                                                <p class="text-muted mb-0">05 Mar, 2020</p>
                                            </td>

                                            <td>
                                                <div class="avatar-group">
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="James Scott">
                                                            <div class="avatar-sm">
                                                                <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="avatar-group-item">
                                                        <a href="javascript: void(0);" class="d-block" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Lynn Hackett">
                                                            <div class="avatar-sm">
                                                                <div class="avatar-title rounded-circle bg-info">
                                                                    L
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge badge-soft-success font-size-12">Completed</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="font-size-16 px-2 text-muted dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr><!-- end tr -->
                                    </tbody><!-- end tbody -->
                                </table><!-- end table -->
                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end tab pane -->

                <div class="tab-pane" id="team" role="tabpanel">
                    <div>
                        <div class="card mb-0 border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                        <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-reset">Donald
                                                                Risher</a></h5>
                                                        <span class="badge badge-soft-success mb-0">Full Stack Developer</span>

                                                    </div>


                                                    <div class="flex-shrink-0 dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div><!-- end dropdown -->
                                                </div>
                                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                    ornare libero sed diam sed fringilla est.</p>
                                                <div class="pt-2">
                                                    <button type="button" class="btn btn-primary-subtle btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                        <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-reset">Helen
                                                                Barron</a></h5>
                                                        <span class="badge badge-soft-danger mb-0">Web Designer</span>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                    ornare libero sed diam sed fringilla est.</p>
                                                <div class="pt-2">
                                                    <button type="button" class="btn btn-primary-subtle btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                </div>
                                            </div><!-- end cardbody -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                        <img src="{{URL::asset('assets/images/users/avatar-3.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-reset">Philip
                                                                Theroux</a></h5>
                                                        <span class="badge badge-soft-warning mb-0">UI/UX Designer</span>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                    <!-- end dropdown -->
                                                </div>
                                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                    ornare libero sed diam sed fringilla est.</p>
                                                <div class="pt-2">
                                                    <button type="button" class="btn btn-primary-subtle btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                </div>
                                            </div><!-- end card -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                        <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-reset">Donald
                                                                Risher</a></h5>
                                                        <span class="badge badge-soft-primary mb-0">Backend Developer</span>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                    ornare libero sed diam sed fringilla est.</p>
                                                <div class="pt-2">
                                                    <button type="button" class="btn btn-primary-subtle btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                        <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-reset">Gerald
                                                                Moyer</a></h5>
                                                        <span class="badge badge-soft-primary mb-0">Backend Developer</span>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </div><!-- end -->
                                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                    ornare libero sed diam sed fringilla est.</p>
                                                <div class="pt-2">
                                                    <button type="button" class="btn btn-primary-subtle btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                </div>
                                            </div><!-- end cardbody -->
                                            <!-- end btn-group -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <div class="col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body p-4">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar rounded-circle me-3">
                                                        <img src="{{URL::asset('assets/images/users/avatar-6.jpg')}}" alt="" class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="pages-profile" class="text-reset">Sharon
                                                                Carver</a></h5>
                                                        <span class="badge badge-soft-info mb-0">Frontend Developer</span>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-xs">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="19" cy="12" r="1"></circle>
                                                                <circle cx="5" cy="12" r="1"></circle>
                                                            </svg>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mt-4 text-muted">Curabitur non magna lobortis est tempus gravida
                                                    ornare libero sed diam sed fringilla est.</p>
                                                <div class="pt-2">
                                                    <button type="button" class="btn btn-primary-subtle btn-sm w-md text-truncate"><i class="bx bx-user me-1 align-middle"></i> Contact</button>
                                                    <button type="button" class="btn btn-primary btn-sm w-md text-truncate ms-2"><i class="bx bx-message-square-dots me-1 align-middle"></i> Profile</button>
                                                </div>
                                            </div>
                                            <!-- end card body -->
                                            <!-- end button group -->
                                        </div>
                                        <!-- end card -->
                                    </div><!-- end col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tab pane -->

                <div class="tab-pane" id="activities" role="tabpanel">
                    <div class="card mb-0 border-0">
                        <div class="card-header bg-transparent border-bottom d-flex">

                            <h5 class="card-title mb-0">Activities</h5>

                            <div class="ms-auto">
                                <ul class="nav nav-tabs card-header-tabs float-end border-bottom-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#card-header-messages-tabs" data-bs-toggle="tab">
                                            <span class="d-block d-sm-none"><i class="uil uil-comment-alt-lines"></i></span>
                                            <span class="d-none d-sm-block">Messages</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#card-header-attachment-tabs" data-bs-toggle="tab">
                                            <span class="d-block d-sm-none"><i class="uil uil-paperclip"></i></span>
                                            <span class="d-none d-sm-block">Attachments</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="card-header-messages-tabs">
                                    <div>

                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item py-3">
                                                <div class="d-flex aligm-items-start">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="avatar rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="javascript: void(0);" class="text-reset">John Patino</a> <small class="text-muted ms-1">09:34 AM</small></h5>
                                                        <p class="text-muted mb-0">Donec quam felis ultricies nec, pellentesque eu pretium quis</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript: void(0);" class="text-muted font-size-15 px-1">
                                                                    <i class="uil uil-smile"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle text-muted font-size-15 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-copy align-bottom text-muted me-2"></i> Copy</a>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-comment-alt-notes align-bottom text-muted me-2"></i> Reply</a>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-share align-bottom text-muted me-2"></i> Forward</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-trash-alt align-bottom text-muted me-2"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul><!-- end ul -->
                                                    </div>
                                                </div>
                                            </div><!-- end list group -->

                                            <div class="list-group-item py-3">
                                                <div class="d-flex aligm-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="avatar rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="javascript: void(0);" class="text-reset">Kate Daniels</a> <small class="text-muted ms-1">09:45 AM</small></h5>
                                                        <p class="text-muted mb-0">Aenean imperdiet. etiam ultricies nisi vel augue.</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript: void(0);" class="text-muted font-size-15 px-1">
                                                                    <i class="uil uil-smile"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle text-muted font-size-15 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-copy align-bottom text-muted me-2"></i> Copy</a>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-comment-alt-notes align-bottom text-muted me-2"></i> Reply</a>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-share align-bottom text-muted me-2"></i> Forward</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-trash-alt align-bottom text-muted me-2"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- end list group -->

                                            <div class="list-group-item py-3">
                                                <div class="d-flex aligm-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="avatar rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="javascript: void(0);" class="text-reset">John Patino</a> <small class="text-muted ms-1">10:15 AM</small></h5>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-sm-6">
                                                                <div class="card border p-2 shadow-none mt-2 mb-2">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 avatar-sm me-3">
                                                                            <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                                                <i class="uil uil-scenery"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <h5 class="font-size-12 mb-1 text-truncate"><a href="javascript:void(0);" class="text-reset">Image-1.jpg</a></h5>
                                                                            <p class="text-muted mb-0 font-size-12">1.2 MB</p>
                                                                        </div>
                                                                        <div class="flex-shrink-0 ms-2">
                                                                            <a href="javascript:void(0);" class="px-2 font-size-18 text-muted">
                                                                                <i class="uil uil-download-alt"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- end card -->
                                                            </div><!-- end col -->
                                                        </div><!-- end row -->
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript: void(0);" class="text-muted font-size-15 px-1">
                                                                    <i class="uil uil-smile"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle text-muted font-size-15 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-copy align-bottom text-muted me-2"></i> Copy</a>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-comment-alt-notes align-bottom text-muted me-2"></i> Reply</a>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-share align-bottom text-muted me-2"></i> Forward</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-trash-alt align-bottom text-muted me-2"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </li><!-- end li -->
                                                        </ul><!-- end ul -->
                                                    </div>
                                                </div>
                                            </div><!-- end list group -->

                                            <div class="list-group-item py-3">
                                                <div class="d-flex aligm-items-center">
                                                    <div class="flex-shrink-0 flex-shrink-0 avatar me-3">
                                                        <div class="avatar-title rounded-circle bg-light text-primary">
                                                            J
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 mb-1 text-truncate"><a href="javascript: void(0);" class="text-reset">Jerry Macleod</a> <small class="text-muted ms-1">11:34 AM</small></h5>
                                                        <p class="text-muted mb-0">Sed consequat, leo eget augue velit</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript: void(0);" class="text-muted font-size-15 px-1">
                                                                    <i class="uil uil-smile"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle text-muted font-size-15 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-copy align-bottom text-muted me-2"></i> Copy</a>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-comment-alt-notes align-bottom text-muted me-2"></i> Reply</a>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-share align-bottom text-muted me-2"></i> Forward</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#"><i class="uil uil-trash-alt align-bottom text-muted me-2"></i> Remove</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul><!-- end ul -->
                                                    </div>
                                                </div>
                                            </div><!-- end list group -->
                                        </div>
                                        <div class="d-flex chat-input-section align-items-start pt-3">
                                            <div class="flex-shrink-0 d-none d-sm-block me-3">
                                                <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="avatar-sm rounded-circle">
                                            </div>
                                            <div class="flex-grow-1">
                                                <div class="position-relative d-flex align-items-start">
                                                    <input type="text" class="form-control chat-input" placeholder="Some text value...">
                                                    <div class="chat-input-links d-flex align-items-start">
                                                        <button type="button" class="btn btn-link text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Emoji" aria-label="Emoji"><i class="uil uil-smile"></i></button>
                                                        <button type="button" class="btn btn-link text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Attachments" aria-label="Attachments"><i class="uil uil-paperclip"></i></button>
                                                        <button type="button" class="btn btn-primary"><i class="uil uil-message"></i></button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane" id="card-header-attachment-tabs">
                                    <div>
                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item py-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                        <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                            <i class="uil uil-scenery"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-1 text-truncate"><a href="javascript:void(0);" class="text-reset">Image-1.jpg</a></h5>
                                                        <p class="text-muted mb-0 font-size-12">1.2 MB</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript: void(0);" class="text-muted font-size-18 px-2">
                                                                    <i class="uil uil-download-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle text-muted font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- end list group -->

                                            <div class="list-group-item py-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                        <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                            <i class="uil uil-scenery"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-1 text-truncate"><a href="javascript:void(0);" class="text-reset">Image-2.jpg</a></h5>
                                                        <p class="text-muted mb-0 font-size-12">1.3 MB</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript: void(0);" class="text-muted font-size-18 px-2">
                                                                    <i class="uil uil-download-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle text-muted font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- end list group -->

                                            <div class="list-group-item py-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                        <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                            <i class="uil uil-folder"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-1 text-truncate"><a href="javascript:void(0);" class="text-reset">Pages changes.zip</a></h5>
                                                        <p class="text-muted mb-0 font-size-12">2.1 MB</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript: void(0);" class="text-muted font-size-18 px-2">
                                                                    <i class="uil uil-download-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle text-muted font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- end list group -->

                                            <div class="list-group-item py-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                        <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                            <i class="uil uil-scenery"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-1 text-truncate"><a href="javascript:void(0);" class="text-reset">Image-3.jpg</a></h5>
                                                        <p class="text-muted mb-0 font-size-12">1.2 MB</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript: void(0);" class="text-muted font-size-18 px-2">
                                                                    <i class="uil uil-download-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle text-muted font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- end list group -->

                                            <div class="list-group-item py-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0 avatar-sm me-3">
                                                        <span class="avatar-title bg-light text-primary rounded font-size-20">
                                                            <i class="uil uil-scenery"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-13 mb-1 text-truncate"><a href="javascript:void(0);" class="text-reset">Img-1.png</a></h5>
                                                        <p class="text-muted mb-0 font-size-12">1.3 MB</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <ul class="list-inline mb-0">
                                                            <li class="list-inline-item">
                                                                <a href="javascript: void(0);" class="text-muted font-size-18 px-2">
                                                                    <i class="uil uil-download-alt"></i>
                                                                </a>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle text-muted font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                        <i class="uil uil-ellipsis-h"></i>
                                                                    </a>

                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Action</a>
                                                                        <a class="dropdown-item" href="#">Another action</a>
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul><!-- end ul -->
                                                    </div>
                                                </div>
                                            </div><!-- end list group -->
                                        </div>

                                    </div>
                                </div>
                                <!-- end tab pane -->
                            </div>
                            <!-- end tab content -->

                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
