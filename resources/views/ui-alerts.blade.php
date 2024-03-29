@extends('layouts.master')
@section('title')Alerts @endsection
@section('content')

{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') UI Elements @endslot
            @slot('title') Alerts @endslot
        @endcomponent
    @endsection
    
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Default Alerts</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert—check it out!
                    </div>
                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                    </div>
                    <div class="alert alert-purple" role="alert">
                        A simple purple alert—check it out!
                    </div>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert—check it out!
                    </div>
                    <div class="alert alert-warning" role="alert">
                        A simple warning alert—check it out!
                    </div>
                    <div class="alert alert-info" role="alert">
                        A simple info alert—check it out!
                    </div>
                    <div class="alert alert-light" role="alert">
                        A simple light alert—check it out!
                    </div>
                    <div class="alert alert-dark mb-0" role="alert">
                        A simple dark alert—check it out!
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Alerts with Icon</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="">
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <i class="uil uil-user-circle me-2"></i>
                        A simple primary alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        <i class="uil uil-pen me-2"></i>
                        A simple secondary alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="uil uil-check me-2"></i>
                        A simple success alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-purple alert-dismissible fade show" role="alert">
                        <i class="uil uil-bag me-2"></i>
                        A simple purple alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="uil uil-exclamation-octagon me-2"></i>
                        A simple danger alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <i class="uil uil-exclamation-triangle me-2"></i>
                        A simple warning alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <i class="uil uil-question-circle me-2"></i>
                        A simple info alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-light alert-dismissible fade show" role="alert">
                        <i class="uil uil-moon me-2"></i>
                        A simple light alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                        <i class="uil uil-location-arrow-alt me-2"></i>
                        A simple dark alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Dismissing Alerts</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="">
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        A simple primary alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        A simple secondary alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        A simple success alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <div class="alert alert-purple alert-dismissible fade show" role="alert">
                        A simple purple alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        A simple danger alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        A simple warning alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        A simple info alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <div class="alert alert-light alert-dismissible fade show" role="alert">
                        A simple light alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                        A simple dark alert—check it out!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Alerts Link Color</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-success" role="alert">
                        A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-purple" role="alert">
                        A simple purple alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-warning" role="alert">
                        A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-info" role="alert">
                        A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-light" role="alert">
                        A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                    <div class="alert alert-dark mb-0" role="alert">
                        A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Border Alerts</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="">
                    <div class="alert alert-primary alert-top-border alert-dismissible fade show" role="alert">
                        <i class="uil uil-user-circle text-primary font-size-16 me-2"></i>
                        A simple border primary alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-secondary alert-top-border alert-dismissible fade show" role="alert">
                        <i class="uil uil-pen font-size-16 text-secondary me-2"></i>
                        A simple border secondary alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
                    </div>
                    <div class="alert alert-success alert-top-border alert-dismissible fade show" role="alert">
                        <i class="uil uil-check font-size-16 text-success me-2"></i>
                        A simple border success alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-purple alert-top-border alert-dismissible fade show" role="alert">
                        <i class="uil uil-bag font-size-16 text-purple me-2"></i>
                        A simple border purple alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-danger alert-top-border alert-dismissible fade show" role="alert">
                        <i class="uil uil-exclamation-octagon font-size-16 text-danger me-2"></i>
                        A simple border danger alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-warning alert-top-border alert-dismissible fade show" role="alert">
                        <i class="uil uil-exclamation-triangle font-size-16 text-warning me-2"></i>
                        A simple border warning alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-info alert-top-border alert-dismissible fade show" role="alert">
                        <i class="uil uil-question-circle font-size-16 text-info me-2"></i>
                        A simple border info alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-dark alert-top-border alert-dismissible text-reset fade show mb-0" role="alert">
                        <i class="uil uil-location-arrow-alt font-size-16 me-2"></i>
                        A simple border dark alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Outline Alerts</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="">
                    <div class="alert alert-primary alert-outline alert-dismissible fade show" role="alert">
                        <i class="uil uil-user-circle text-primary font-size-16 me-2"></i>
                        A simple outline primary alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-secondary alert-outline alert-dismissible fade show" role="alert">
                        <i class="uil uil-pen font-size-16 text-secondary me-2"></i>
                        A simple outline secondary alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-success alert-outline alert-dismissible fade show" role="alert">
                        <i class="uil uil-check font-size-16 text-success me-2"></i>
                        A simple outline success alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-purple alert-outline alert-dismissible fade show" role="alert">
                        <i class="uil uil-bag font-size-16 text-purple me-2"></i>
                        A simple outline purple alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-danger alert-outline alert-dismissible fade show" role="alert">
                        <i class="uil uil-exclamation-octagon font-size-16 text-danger me-2"></i>
                        A simple outline danger alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-warning alert-outline alert-dismissible fade show" role="alert">
                        <i class="uil uil-exclamation-triangle font-size-16 text-warning me-2"></i>
                        A simple outline warning alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-info alert-outline alert-dismissible fade show" role="alert">
                        <i class="uil uil-question-circle font-size-16 text-info me-2"></i>
                        A simple outline info alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="alert alert-dark  alert-outline alert-dismissible text-reset fade show mb-0" role="alert">
                        <i class="uil uil-location-arrow-alt font-size-16 me-2"></i>
                        A simple outline dark alert
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
</div>

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
