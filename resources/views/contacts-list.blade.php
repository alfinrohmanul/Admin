@extends('layouts.master')
@section('title')User List @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Contacts @endslot
            @slot('title') User List @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title">Contact List <span class="text-muted fw-normal ms-2">(834)</span></h5>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-start justify-content-md-end mt-2 mt-md-0 gap-2 mb-3">
                            <div>
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="contacts-list" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="uil uil-list-ul"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contacts-grid" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="uil uil-apps"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addContactModal"><i class="uil uil-plus me-1"></i> Add New</a>
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-link text-dark dropdown-toggle shadow-none" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="uil uil-ellipsis-h"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div><!-- end dropdown -->
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <!-- Modal -->
                <div class="modal fade" id="addContactModal" tabindex="-1" aria-labelledby="addContactModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addContactModalLabel">Add Contact</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- end modalheader -->
                            <div class="modal-body p-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="addcontact-name-input" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="addcontact-name-input" placeholder="Enter Name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="addcontact-designation-input" class="form-label">Designation</label>
                                        <input type="text" class="form-control" id="addcontact-designation-input" placeholder="Enter Designation">
                                    </div>
                                    <div class="mb-3">
                                        <label for="addcontact-file-input" class="form-label">User Image</label>
                                        <input type="file" class="form-control" id="addcontact-file-input">
                                    </div>

                                    <div class="mb-3">
                                        <label for="addcontact-email-input" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="addcontact-email-input" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <!-- end modalbody -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light w-sm" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary w-sm">Add</button>
                            </div>
                            <!-- end modalfooter -->
                        </div><!-- end content -->
                    </div>
                </div>
                <!-- end modal -->

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap table-check">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 50px;">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Email</th>
                                <th scope="col">Project</th>
                                <th scope="col">Tags</th>
                                <th style="width: 80px; min-width: 80px;">Action</th>
                            </tr><!-- end tr -->
                        </thead><!-- end thead -->
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                        <label class="form-check-label" for="contacusercheck1"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-sm rounded-circle me-2">
                                    <a href="pages-profile" class="text-body fw-medium">Donald Risher</a>
                                </td>
                                <td><span class="badge badge-soft-warning mb-0">UI/UX Designer</span></td>
                                <td>DonaldRisher@Vuesy.com</td>
                                <td>235</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge badge-soft-primary">Photoshop</a>
                                        <a href="#" class="badge badge-soft-primary">illustrator</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck2">
                                        <label class="form-check-label" for="contacusercheck2"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/avatar-2.jpg')}}" alt="" class="avatar-sm rounded-circle me-2">
                                    <a href="pages-profile" class="text-body fw-medium">Helen Barron</a>
                                </td>
                                <td><span class="badge badge-soft-info mb-0">Frontend Developer</span></td>
                                <td>HelenBarron@Vuesy.com</td>
                                <td>125</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge badge-soft-primary font-size-11">Html</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">Css</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">2 + more</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck3">
                                        <label class="form-check-label" for="contacusercheck3"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/avatar-3.jpg')}}" alt="" class="avatar-sm rounded-circle me-2">
                                    <a href="pages-profile" class="text-body fw-medium">Philip Theroux</a>
                                </td>
                                <td><span class="badge badge-soft-primary mb-0">Backend Developer</span></td>
                                <td>PhilipTheroux@Vuesy.com</td>
                                <td>562</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge badge-soft-primary font-size-11">Php</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">Java</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">Python</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <!-- end tr -->
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck4">
                                        <label class="form-check-label" for="contacusercheck4"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="avatar-sm rounded-circle me-2">
                                    <a href="pages-profile" class="text-body fw-medium">Justin McClain</a>
                                </td>
                                <td><span class="badge bg-success-subtle text-success mb-0">Full Stack Developer</span></td>
                                <td>JustinMcClain@Vuesy.com</td>
                                <td>325</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge badge-soft-primary font-size-11">Ruby</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">Php</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">2 + more</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck5">
                                        <label class="form-check-label" for="contacusercheck5"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/avatar-5.jpg')}}" alt="" class="avatar-sm rounded-circle me-2">
                                    <a href="pages-profile" class="text-body fw-medium">Sharon Carver</a>
                                </td>
                                <td><span class="badge badge-soft-info mb-0">Frontend Developer</span></td>
                                <td>SharonCarver@Vuesy.com</td>
                                <td>475</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge badge-soft-primary font-size-11">Html</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">Css</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">2 + more</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck6">
                                        <label class="form-check-label" for="contacusercheck6"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/avatar-6.jpg')}}" alt="" class="avatar-sm rounded-circle me-2">
                                    <a href="pages-profile" class="text-body fw-medium">Jody Tondreau</a>
                                </td>
                                <td><span class="badge badge-soft-warning mb-0">UI/UX Designer</span></td>
                                <td>JodyTondreau@Vuesy.com</td>
                                <td>521</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge badge-soft-primary font-size-11">Photoshop</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">illustrator</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck7">
                                        <label class="form-check-label" for="contacusercheck7"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/avatar-7.jpg')}}" alt="" class="avatar-sm rounded-circle me-2">
                                    <a href="pages-profile" class="text-body fw-medium">Dennis Goulet</a>
                                </td>
                                <td><span class="badge badge-soft-info mb-0">Graphic Designer</span></td>
                                <td>DennisGoulet@Vuesy.com</td>
                                <td>623</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge badge-soft-primary font-size-11">Photoshop</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">illustrator</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck8">
                                        <label class="form-check-label" for="contacusercheck8"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/avatar-8.jpg')}}" alt="" class="avatar-sm rounded-circle me-2">
                                    <a href="pages-profile" class="text-body fw-medium">Cecelia Farrell</a>
                                </td>
                                <td><span class="badge badge-soft-danger mb-0">Angular Developer</span></td>
                                <td>CeceliaFarrell@Vuesy.com</td>
                                <td>325</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge badge-soft-primary font-size-11">Php</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">Javascript</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck9">
                                        <label class="form-check-label" for="contacusercheck9"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/avatar-9.jpg')}}" alt="" class="avatar-sm rounded-circle me-2">
                                    <a href="pages-profile" class="text-body fw-medium">Peter Dryer</a>
                                </td>
                                <td><span class="badge badge-soft-info mb-0">Web Designer</span></td>
                                <td>PeterDryer@Vuesy.com</td>
                                <td>231</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge badge-soft-primary font-size-11">Html</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">Css</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">2 + more</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr><!-- end tr -->
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck10">
                                        <label class="form-check-label" for="contacusercheck10"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="{{URL::asset('assets/images/users/avatar-4.jpg')}}" alt="" class="avatar-sm rounded-circle me-2">
                                    <a href="pages-profile" class="text-body fw-medium">Gerald Moyer</a>
                                </td>
                                <td><span class="badge badge-soft-warning mb-0">Backend Developer</span></td>
                                <td>GeraldMoyer@Vuesy.com</td>
                                <td>321</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge badge-soft-primary font-size-11">Php</a>
                                        <a href="#" class="badge badge-soft-primary font-size-11">Javascript</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="uil uil-ellipsis-h"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr><!-- end tr -->
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div><!-- end table responsive -->

                <div class="row g-0 text-center text-sm-start">
                    <div class="col-sm-6">
                        <div>
                            <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-sm-6">
                        <ul class="pagination pagination-rounded justify-content-center justify-content-sm-end mb-sm-0">
                            <li class="page-item disabled">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">3</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">4</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">5</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                            </li>
                        </ul><!-- end ul -->
                    </div><!-- end col -->
                </div><!-- end row -->

            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
