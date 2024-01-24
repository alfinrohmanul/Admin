@extends('layouts.master-without-nav')
@section('title')404 Error Basic @endsection
@section('content')

        <div class="auth-bg-basic d-flex align-items-center min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="d-flex flex-column min-vh-100 py-5 px-3">
                    <div class="row justify-content-center">
                        <div class="col-xl-5">
                            <div class="text-center text-muted mb-2">
                                <div class="pb-3">
                                    <a href="{{ url('index') }}">
                                        <span class="logo-lg">
                                            <img src="{{URL::asset('assets/images/logo-sm.svg')}}" alt="" height="24"> <span class="logo-txt">Vuesy</span>
                                        </span>
                                    </a>
                                    <p class="text-muted font-size-15 w-75 mx-auto mt-3 mb-0">User Experience &amp; Interface Design Strategy Saas Solution</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-lg-6 col-xl-7">
                            <div class="card bg-transparent shadow-none border-0">
                                <div class="card-body">
                                    <div class="px-3 py-3 text-center">
                                        <h1 class="error-title"><span class="blink-infinite">404</span></h1>
                                        <h4 class="text-uppercase">Sorry, page not found</h4>
                                        <p class="font-size-15 mx-auto text-muted w-75 mt-4">It will be as simple as Occidental in fact, it will Occidental to an English person</p>
                                        <div class="mt-5 text-center">
                                            <a class="btn btn-primary waves-effect waves-light" href="{{ url('index') }}">Back to Dashboard</a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Vuesy. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                            </div>
                        </div>
                    </div> <!-- end row -->
                </div>
            </div>
            <!-- end container fluid -->
        </div>
        <!-- end authentication section -->
        
@endsection