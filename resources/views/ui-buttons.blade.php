@extends('layouts.master')
@section('title')Buttons @endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') UI Elements @endslot
            @slot('title') Buttons @endslot
        @endcomponent
    @endsection
    
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Default Buttons</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-purple">Purple</button>
                    <button type="button" class="btn btn-dark">Dark</button>
                    <button type="button" class="btn btn-link">Link</button>
                    <button type="button" class="btn btn-light">Light</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Rounded Default Buttons</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary btn-rounded">Primary</button>
                    <button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
                    <button type="button" class="btn btn-success btn-rounded">Success</button>
                    <button type="button" class="btn btn-info btn-rounded">Info</button>
                    <button type="button" class="btn btn-warning btn-rounded">Warning</button>
                    <button type="button" class="btn btn-danger btn-rounded">Danger</button>
                    <button type="button" class="btn btn-purple btn-rounded">Purple</button>
                    <button type="button" class="btn btn-dark btn-rounded">Dark</button>
                    <button type="button" class="btn btn-link btn-rounded">Link</button>
                    <button type="button" class="btn btn-light btn-rounded">Light</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Outline Buttons</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    <button type="button" class="btn btn-outline-success">Success</button>
                    <button type="button" class="btn btn-outline-info">Info</button>
                    <button type="button" class="btn btn-outline-warning">Warning</button>
                    <button type="button" class="btn btn-outline-danger">Danger</button>
                    <button type="button" class="btn btn-outline-purple">Purple</button>
                    <button type="button" class="btn btn-outline-dark">Dark</button>
                    <button type="button" class="btn btn-outline-light">Light</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Soft Buttons</h4>
            </div><!-- end card header -->

            <div class="card-body">
            <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-primary-subtle">Primary</button>
                <button type="button" class="btn btn-secondary-subtle">Secondary</button>
                <button type="button" class="btn btn-success-subtle">Success</button>
                <button type="button" class="btn btn-info-subtle">Info</button>
                <button type="button" class="btn btn-warning-subtle">Warning</button>
                <button type="button" class="btn btn-danger-subtle">Danger</button>
                <button type="button" class="btn btn-purple-subtle">Purple</button>
                <button type="button" class="btn btn-dark-subtle">Dark</button>
                <button type="button" class="btn btn-light-subtle">Light</button>
            </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Rounded Outline Buttons</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-outline-primary btn-rounded">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-rounded">Secondary</button>
                    <button type="button" class="btn btn-outline-success btn-rounded">Success</button>
                    <button type="button" class="btn btn-outline-info btn-rounded">Info</button>
                    <button type="button" class="btn btn-outline-warning btn-rounded">Warning</button>
                    <button type="button" class="btn btn-outline-danger btn-rounded">Danger</button>
                    <button type="button" class="btn btn-outline-purple btn-rounded">Purple</button>
                    <button type="button" class="btn btn-outline-dark btn-rounded">Dark</button>
                    <button type="button" class="btn btn-outline-light btn-rounded">Light</button>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Rounded Soft Buttons</h4>
            </div><!-- end card header -->

            <div class="card-body">
            <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-primary-subtle btn-rounded">Primary</button>
                <button type="button" class="btn btn-secondary-subtle btn-rounded">Secondary</button>
                <button type="button" class="btn btn-success-subtle btn-rounded">Success</button>
                <button type="button" class="btn btn-info-subtle btn-rounded">Info</button>
                <button type="button" class="btn btn-warning-subtle btn-rounded">Warning</button>
                <button type="button" class="btn btn-danger-subtle btn-rounded">Danger</button>
                <button type="button" class="btn btn-purple-subtle btn-rounded">Purple</button>
                <button type="button" class="btn btn-dark-subtle btn-rounded">Dark</button>
            </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Default Buttons with Icon</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary"><i class="uil uil-user me-2"></i> Primary</button>
                    <button type="button" class="btn btn-success"><i class="uil uil-check me-2"></i> Success</button>
                    <button type="button" class="btn btn-warning"><i class="uil uil-exclamation-triangle me-2"></i> Warning</button>
                    <button type="button" class="btn btn-info"><i class="uil uil-info-circle me-2"></i> Info</button>
                    <button type="button" class="btn btn-danger"><i class="uil uil-exclamation-octagon me-2"></i> Danger</button>
                    <button type="button" class="btn btn-purple"><i class="uil uil-exclamation-octagon me-2"></i> Purple</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Outline Buttons with Icon</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-outline-primary"><i class="uil uil-user me-2"></i> Primary</button>
                    <button type="button" class="btn btn-outline-success"><i class="uil uil-check me-2"></i> Success</button>
                    <button type="button" class="btn btn-outline-warning"><i class="uil uil-exclamation-triangle me-2"></i> Warning</button>
                    <button type="button" class="btn btn-outline-info"><i class="uil uil-info-circle me-2"></i> Info</button>
                    <button type="button" class="btn btn-outline-danger"><i class="uil uil-exclamation-octagon me-2"></i> Danger</button>
                    <button type="button" class="btn btn-outline-purple"><i class="uil uil-exclamation-octagon me-2"></i> Purple</button>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Soft Buttons with Icon</h4>
            </div><!-- end card header -->

            <div class="card-body">
            <div class="d-flex flex-wrap gap-2">
                <button type="button" class="btn btn-primary-subtle"><i class="uil uil-user me-2"></i>Primary</button>
                <button type="button" class="btn btn-success-subtle"><i class="uil uil-check me-2"></i>Success</button>
                <button type="button" class="btn btn-warning-subtle"><i class="uil uil-exclamation-triangle me-2"></i> Warning</button>
                <button type="button" class="btn btn-info-subtle"><i class="uil uil-info-circle me-2"></i> Info</button>
                <button type="button" class="btn btn-danger-subtle"><i class="uil uil-exclamation-octagon me-2"></i> Danger</button>
                <button type="button" class="btn btn-purple-subtle"><i class="uil uil-exclamation-octagon me-2"></i> Purple</button>
            </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Default Icon Buttons</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary"><i class="uil uil-user"></i></button>
                    <button type="button" class="btn btn-success"><i class="uil uil-check-circle"></i></button>
                    <button type="button" class="btn btn-warning"><i class="uil uil-exclamation-triangle"></i></button>
                    <button type="button" class="btn btn-info"><i class="uil uil-exclamation-octagon"></i></button>
                    <button type="button" class="btn btn-purple"><i class="uil uil-bag-alt"></i></button>
                    <button type="button" class="btn btn-danger"><i class="uil uil-ban"></i></button>
                    <button type="button" class="btn btn-secondary"><i class="uil uil-location-arrow-alt"></i></button>
                    <button type="button" class="btn btn-light"><i class="uil uil-moon"></i></button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Outline Icon Buttons</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-outline-primary"><i class="uil uil-user"></i></button>
                    <button type="button" class="btn btn-outline-success"><i class="uil uil-check-circle"></i></button>
                    <button type="button" class="btn btn-outline-warning"><i class="uil uil-exclamation-triangle"></i></button>
                    <button type="button" class="btn btn-outline-info"><i class="uil uil-exclamation-octagon"></i></button>
                    <button type="button" class="btn btn-outline-purple"><i class="uil uil-bag-alt"></i></button>
                    <button type="button" class="btn btn-outline-danger"><i class="uil uil-ban"></i></button>
                    <button type="button" class="btn btn-outline-secondary"><i class="uil uil-location-arrow-alt"></i></button>
                    <button type="button" class="btn btn-outline-light"><i class="uil uil-moon"></i></button>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Soft Icon Buttons</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary-subtle"><i class="uil uil-user"></i></button>
                    <button type="button" class="btn btn-success-subtle"><i class="uil uil-check-circle"></i></button>
                    <button type="button" class="btn btn-warning-subtle"><i class="uil uil-exclamation-triangle"></i></button>
                    <button type="button" class="btn btn-info-subtle"><i class="uil uil-exclamation-octagon"></i></button>
                    <button type="button" class="btn btn-purple-subtle"><i class="uil uil-bag-alt"></i></button>
                    <button type="button" class="btn btn-danger-subtle"><i class="uil uil-ban"></i></button>
                    <button type="button" class="btn btn-secondary-subtle"><i class="uil uil-location-arrow-alt"></i></button>
                    <button type="button" class="btn btn-light-subtle"><i class="uil uil-moon"></i></button>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div>

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Button Tags</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <div class="button-items">
                        <a class="btn btn-primary" href="#" role="button">Link</a>
                        <button class="btn btn-success" type="submit">Button</button>
                        <input class="btn btn-info" type="button" value="Input">
                        <input class="btn btn-danger" type="submit" value="Submit">
                        <input class="btn btn-warning" type="reset" value="Reset">
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Toggle States</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="">
                    <button type="button" class="btn btn-primary" data-bs-toggle="button" aria-pressed="false">
                        Single toggle
                    </button>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Button Toolbar</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group me-2" role="group" aria-label="First group">
                            <button type="button" class="btn btn-light">1</button>
                            <button type="button" class="btn btn-light">2</button>
                            <button type="button" class="btn btn-light">3</button>
                            <button type="button" class="btn btn-light">4</button>
                        </div>
                        <div class="btn-group me-2" role="group" aria-label="Second group">
                            <button type="button" class="btn btn-light">5</button>
                            <button type="button" class="btn btn-light">6</button>
                            <button type="button" class="btn btn-light">7</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                            <button type="button" class="btn btn-light">8</button>
                        </div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Button Group</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Left</button>
                            <button type="button" class="btn btn-primary">Middle</button>
                            <button type="button" class="btn btn-primary">Right</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="btn-group mt-4 mt-md-0" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-light"><i class="uil uil-align-left"></i></button>
                            <button type="button" class="btn btn-light"><i class="uil uil-align-center-alt"></i></button>
                            <button type="button" class="btn btn-light"><i class="uil uil-align-right"></i></button>
                        </div>
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
                <h4 class="card-title">Buttons Width</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary w-xs">Xs</button>
                    <button type="button" class="btn btn-danger w-sm">Small</button>
                    <button type="button" class="btn btn-warning w-md">Medium</button>
                    <button type="button" class="btn btn-success w-lg">Large</button>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Buttons Sizes</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2 align-items-center">
                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                    <button type="button" class="btn btn-light btn-lg">Large button</button>
                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    <button type="button" class="btn btn-light btn-sm">Small button</button>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->


<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Block Buttons</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-primary btn-lg btn-block mb-1">Block level button</button>
                    <button type="button" class="btn btn-light btn-sm btn-block">Block level button</button>
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Sizing</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">Left</button>
                        <button type="button" class="btn btn-primary">Middle</button>
                        <button type="button" class="btn btn-primary">Right</button>
                    </div>

                    <br />

                    <div class="btn-group mt-2" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-light">Left</button>
                        <button type="button" class="btn btn-light">Middle</button>
                        <button type="button" class="btn btn-light">Right</button>
                    </div>

                    <br />

                    <div class="btn-group btn-group-sm mt-2" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-danger">Left</button>
                        <button type="button" class="btn btn-danger">Middle</button>
                        <button type="button" class="btn btn-danger">Right</button>
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
                <h4 class="card-title">Vertical variation</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                        <button type="button" class="btn btn-light">Button</button>
                        <div class="btn-group" role="group">
                            <button id="btnGroupVerticalDrop1" type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                <a class="dropdown-item" href="#">Dropdown link</a>
                                <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-light">Button</button>
                        <button type="button" class="btn btn-light">Button</button>
                    </div>
                </div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
