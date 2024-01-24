@extends('layouts.master')
@section('title')Grid @endsection
@section('content')

    {{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') UI Elements @endslot
            @slot('title') Grid @endslot
        @endcomponent
    @endsection

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title mb-0">Grid Options</h4>
            </div> <!-- end card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center">
                                    xs<br>
                                    <span class="fw-normal">&lt;576px</span>
                                </th>
                                <th scope="col" class="text-center">
                                    sm<br>
                                    <span class="fw-normal">≥576px</span>
                                </th>
                                <th scope="col" class="text-center">
                                    md<br>
                                    <span class="fw-normal">≥768px</span>
                                </th>
                                <th scope="col" class="text-center">
                                    lg<br>
                                    <span class="fw-normal">≥992px</span>
                                </th>
                                <th scope="col" class="text-center">
                                    xl<br>
                                    <span class="fw-normal">≥1200px</span>
                                </th>
                                <th scope="col" class="text-center">
                                    xxl<br>
                                    <span class="fw-normal">≥1400px</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-nowrap" scope="row">Grid behavior</th>
                                <td>Horizontal at all times</td>
                                <td colspan="5">Collapsed to start, horizontal above breakpoints</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Max container width</th>
                                <td>None (auto)</td>
                                <td>540px</td>
                                <td>720px</td>
                                <td>960px</td>
                                <td>1140px</td>
                                <td>1320px</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Class prefix</th>
                                <td><code>.col-</code></td>
                                <td><code>.col-sm-</code></td>
                                <td><code>.col-md-</code></td>
                                <td><code>.col-lg-</code></td>
                                <td><code>.col-xl-</code></td>
                                <td><code>.col-xxl-</code></td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row"># of columns</th>
                                <td colspan="6">12</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Gutter width</th>
                                <td colspan="6">24px (12px on each side of a column)</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Custom gutters</th>
                                <td colspan="6">Yes</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Nestable</th>
                                <td colspan="6">Yes</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Offsets</th>
                                <td colspan="6">Yes</td>
                            </tr>
                            <tr>
                                <th class="text-nowrap" scope="row">Column ordering</th>
                                <td colspan="6">Yes</td>
                            </tr>
                        </tbody>
                    </table><!-- end table -->
                </div>
            </div> <!-- end card body -->
        </div> <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Row Columns</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-xl-4">
                        <div>
                            <div class="row row-cols-2 g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div>
                            <div class="row row-cols-3 g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div>
                            <div class="row row-cols-4 g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col-6">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div>
                            <div class="row row-cols-auto g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div>
                            <div class="row row-cols-4 g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-4">
                        <div>
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-0">
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                                <div class="col">
                                    <div class="p-3 border bg-light">Column</div>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end cardbody -->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Equal Width</h4>
            </div><!-- end card header -->
            <div class="card-body">

                <div>
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border bg-light">1 of 2</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light">2 of 2</div>
                        </div>
                    </div><!-- end row -->
                </div>

                <div class="mt-3">
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border bg-light">1 of 3</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light">2 of 3</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light">3 of 3</div>
                        </div>
                    </div><!-- end row -->
                </div>

            </div><!-- end card body-->
        </div><!-- end card -->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Setting One Column Width</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border bg-light">1 of 3</div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border bg-light">2 of 3 (wider)</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light">3 of 3</div>
                        </div>
                    </div><!-- end row -->
                    <div class="row mt-3">
                        <div class="col">
                            <div class="p-3 border bg-light">1 of 3</div>
                        </div>
                        <div class="col-5">
                            <div class="p-3 border bg-light">2 of 3 (wider)</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light">3 of 3</div>
                        </div>
                    </div><!-- end row -->
                </div>
            </div><!-- end card body-->
        </div><!-- end card -->
    </div> <!-- end col -->

</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Variable Width Content</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="px-2">
                    <div class="row justify-content-md-center">
                        <div class="col col-lg-2">
                            <div class="p-3 px-2 border bg-light">1 of 3</div>
                        </div>
                        <div class="col-md-auto">
                            <div class="p-3 px-2 border bg-light">Variable width content</div>
                        </div>
                        <div class="col col-lg-2">
                            <div class="p-3 px-2 border bg-light">3 of 3</div>
                        </div>
                    </div><!-- end row -->
                    <div class="row mt-3">
                        <div class="col">
                            <div class="p-3 px-2 border bg-light">1 of 3</div>
                        </div>
                        <div class="col-md-auto">
                            <div class="p-3 px-2 border bg-light">Variable width content</div>
                        </div>
                        <div class="col col-lg-2">
                            <div class="p-3 px-2 border bg-light">3 of 3</div>
                        </div>
                    </div><!-- end row -->
                </div>
            </div><!-- end card body-->
        </div><!-- end card -->
    </div> <!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">All Breakpoints</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col">
                            <div class="p-3 border bg-light">col</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light">col</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light">col</div>
                        </div>
                        <div class="col">
                            <div class="p-3 border bg-light">col</div>
                        </div>
                    </div><!-- end row -->
                    <div class="row mt-3">
                        <div class="col-8">
                            <div class="p-3 border bg-light">col-8</div>
                        </div>
                        <div class="col-4">
                            <div class="p-3 border bg-light">col-4</div>
                        </div>
                    </div><!-- end row -->
                </div>
            </div><!-- end card body -->
        </div><!-- end card -->
    </div><!-- end col -->

</div><!-- end row -->

<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Stacked to Horizontal</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="p-3 border bg-light">col-sm-8</div>
                        </div>
                        <div class="col-sm-4">
                            <div class="p-3 border bg-light">col-sm-4</div>
                        </div>
                    </div><!-- end row -->
                    <div class="row mt-3">
                        <div class="col-sm">
                            <div class="p-3 border bg-light">col-sm</div>
                        </div>
                        <div class="col-sm">
                            <div class="p-3 border bg-light">col-sm</div>
                        </div>
                        <div class="col-sm">
                            <div class="p-3 border bg-light">col-sm</div>
                        </div>
                    </div><!-- end row -->
                </div>
            </div><!-- end cardbody-->
        </div><!-- end card -->
    </div><!-- end col -->

    <div class="col-xl-6">
        <div class="card">
            <div class="card-header justify-content-between d-flex align-items-center">
                <h4 class="card-title">Mix and Match</h4>
            </div><!-- end card header -->
            <div class="card-body">
                <div>
                    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="p-3 border bg-light">.col-md-8</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="p-3 border bg-light">.col-6 .col-md-4</div>
                        </div>
                    </div>

                    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                    <div class="row mt-3">
                        <div class="col-6 col-md-4">
                            <div class="p-3 border bg-light">.col-6 .col-md-4</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="p-3 border bg-light">.col-6 .col-md-4</div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="p-3 border bg-light">.col-6 .col-md-4</div>
                        </div>
                    </div>

                    <!-- Columns are always 50% wide, on mobile and desktop -->
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="p-3 border bg-light">.col-6</div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border bg-light">.col-6</div>
                        </div>
                    </div>
                </div>
            </div><!-- end cardbody-->
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

@endsection
@section('script')

<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
