@extends('layouts.master')
@section('title')Product Detail @endsection
@section('css')
<!-- swiper css -->
<link href="{{ URL::asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
@endsection
@section('content')
{{-- breadcrumbs  --}}
    @section('breadcrumb')
        @component('components.breadcrumb')
            @slot('li_1') Ecommerce @endslot
            @slot('title') Product Detail @endslot
        @endcomponent
    @endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="product-detail">
                            <div class="product-wishlist">
                                <a href="#">
                                    <i class="mdi mdi-heart-outline"></i>
                                </a>
                            </div>
                            <div class="swiper product-thumbnail-slider rounded border overflow-hidden position-relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="{{URL::asset('assets/images/product/img-1.png')}}" alt="" class="img-fluid d-block" /></div>
                                    <div class="swiper-slide"><img src="{{URL::asset('assets/images/product/img-2.png')}}" alt="" class="img-fluid d-block" /></div>
                                    <div class="swiper-slide"><img src="{{URL::asset('assets/images/product/img-3.png')}}" alt="" class="img-fluid d-block" /></div>
                                    <div class="swiper-slide"><img src="{{URL::asset('assets/images/product/img-6.png')}}" alt="" class="img-fluid d-block" /></div>
                                    <div class="swiper-slide"><img src="{{URL::asset('assets/images/product/img-5.png')}}" alt="" class="img-fluid d-block" /></div>
                                </div>

                                <div class="d-none d-md-block">
                                    <div class="swiper-button-next"><i class="mdi mdi-arrow-right"></i></div>
                                    <div class="swiper-button-prev"><i class="mdi mdi-arrow-left"></i></div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="swiper product-nav-slider mt-2 overflow-hidden">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide rounded">
                                            <div class="nav-slide-item"><img src="{{URL::asset('assets/images/product/img-1.png')}}" alt="" class="img-fluid d-block" /></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item"><img src="{{URL::asset('assets/images/product/img-2.png')}}" alt="" class="img-fluid d-block" /></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item"><img src="{{URL::asset('assets/images/product/img-3.png')}}" alt="" class="img-fluid d-block" /></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item"><img src="{{URL::asset('assets/images/product/img-6.png')}}" alt="" class="img-fluid d-block" /></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-slide-item"><img src="{{URL::asset('assets/images/product/img-5.png')}}" alt="" class="img-fluid d-block" /></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row text-center mt-3">
                                <div class="col-sm-6">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-primary waves-effect waves-light mt-2 me-1">
                                            <i class="bx bx-cart-alt me-2"></i> Add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-light waves-effect  mt-2 waves-light">
                                            <i class="bx bx-shopping-bag me-2"></i>Buy now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="mt-4 mt-xl-3 ps-xl-4">
                            <h5 class="font-size-14"><a href="#" class="text-muted">Nike</a></h5>
                            <h5 class="mt-1">
                                <a href="" class="text-reset lh-base">Stylish Cricket & Walking Light Weight Shoes</a>
                            </h5>

                            <div class="text-muted">
                                <span class="badge bg-success-subtle text-success font-size-14 me-1"><i class="mdi mdi-star"></i> 4.2</span> 234 Reviews
                            </div>

                            <h5 class="font-size-20 mt-4 pt-2"><del class="text-muted me-2">$280</del>$260 <span class="text-danger font-size-14 ms-2">- 20 % Off</span></h5>

                            <p class="mt-4 text-muted">If several languages coalesce, the grammar of the resulting language is more simple and regular</p>

                            <div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mt-3">

                                            <h5 class="font-size-14">Specification :</h5>
                                            <ul class="list-unstyled product-desc-list text-muted">
                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> High Quality</li>
                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Leather</li>
                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> All Sizes available</li>
                                                <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> 4 Different Color</li>
                                            </ul>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mt-3">
                                            <h5 class="font-size-14">Services :</h5>
                                            <ul class="list-unstyled product-desc-list text-muted">
                                                <li><i class="bx bx-log-in-circle text-primary me-1"></i> 10 Days Replacement</li>
                                                <li><i class="bx bx-dollar-circle text-primary me-1"></i> Cash on Delivery available</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">

                                    <h5 class="font-size-14 mb-3"><i class="bx bx-map-pin font-size-20 text-primary align-middle me-2"></i> Delivery location</h5>

                                    <div class="d-inline-flex">

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Enter Delivery pincode ">

                                            <button class="btn btn-light" type="button">Check</button>

                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-7 col-sm-8">
                                        <div class="product-desc-color mt-3">
                                            <h5 class="font-size-14">Colors :</h5>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <a href="#" class="active" data-bs-toggle="tooltip" data-bs-placement="top" title="Gray">
                                                        <div class="product-color-item">
                                                            <img src="{{URL::asset('assets/images/product/img-1.png')}}" alt="" class="avatar-md">
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Dark">
                                                        <div class="product-color-item">
                                                            <img src="{{URL::asset('assets/images/product/img-2.png')}}" alt="" class="avatar-md">
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Purple">
                                                        <div class="product-color-item">
                                                            <img src="{{URL::asset('assets/images/product/img-3.png')}}" alt="" class="avatar-md">
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="text-primary border-0 p-1" data-bs-toggle="modal" data-bs-target="#color-img">
                                                        2 + Colors
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>

                                    <div class="col-lg-5 col-sm-4">
                                        <div class="mt-3">
                                            <h5 class="font-size-14 mb-3">Select Sizes :</h5>

                                            <div class="d-inline-flex">
                                                <select class="form-select w-sm">
                                                    <option value="1">3</option>
                                                    <option value="2">4</option>
                                                    <option value="3">5</option>
                                                    <option value="4">6</option>
                                                    <option value="5" selected>7</option>
                                                    <option value="6">8</option>
                                                    <option value="7">9</option>
                                                    <option value="8">10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-8">
                        <div class="mt-4 pt-3">
                            <h5 class="font-size-14 mb-3">Reviews : </h5>
                            <div class="text-muted mb-3">
                                <span class="badge bg-success-subtle text-success font-size-14 me-1"><i class="mdi mdi-star"></i> 4.2</span> 234 Reviews
                            </div>
                            <div class="border py-4 rounded">

                                <div class="px-4" data-simplebar style="max-height: 260px;">

                                    <div class="border-bottom pb-3">
                                        <p class="float-sm-end text-muted font-size-13">12 July, 2021</p>
                                        <div class="badge bg-success-subtle text-success mb-2"><i class="mdi mdi-star"></i> 4.1</div>
                                        <p class="text-muted mb-4">It will be as simple as in fact, it will be Occidental. It will seem like simplified</p>
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15 mb-0">Samuel</h5>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <ul class="list-inline product-review-link mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"><i class="bx bx-like"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Comment"><i class="bx bx-comment-dots"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="border-bottom py-3">
                                        <p class="float-sm-end text-muted font-size-13">06 July, 2021</p>
                                        <div class="badge bg-success-subtle text-success mb-2"><i class="mdi mdi-star"></i> 4.0</div>
                                        <p class="text-muted mb-4">Sed ut perspiciatis unde omnis iste natus error sit</p>
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15 mb-0">Joseph</h5>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <ul class="list-inline product-review-link mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"><i class="bx bx-like"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Comment"><i class="bx bx-comment-dots"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-bottom py-3">
                                        <p class="float-sm-end text-muted font-size-13">26 June, 2021</p>
                                        <div class="badge bg-success-subtle text-success mb-2"><i class="mdi mdi-star"></i> 4.2</div>
                                        <p class="text-muted mb-4">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                                        <div class="d-flex align-items-start">
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15 mb-0">Paul</h5>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <ul class="list-inline product-review-link mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Like"><i class="bx bx-like"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Comment"><i class="bx bx-comment-dots"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="px-4">
                                    <div class="border rounded mt-4">
                                        <form action="#">
                                            <div class="px-2 py-1 bg-light">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-link text-reset text-decoration-none"><i class="bx bx-link"></i></button>
                                                    <button type="button" class="btn btn-sm btn-link text-reset text-decoration-none"><i class="bx bx-smile"></i></button>
                                                    <button type="button" class="btn btn-sm btn-link text-reset text-decoration-none"><i class="bx bx-at"></i></button>
                                                </div>
                                            </div>
                                            <textarea rows="2" class="form-control border-0 resize-none" placeholder="Your Message..."></textarea>
                                        </form>
                                    </div>

                                    <div class="text-end mt-3">
                                        <button type="button" class="btn btn-success w-sm text-truncate ms-2"> Send <i class="bx bx-send ms-2 align-middle"></i></button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="mt-4 pt-3">
                            <h5 class="font-size-14 mb-3">Product description: </h5>
                            <div class="product-desc">
                                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="desc-tab" data-bs-toggle="tab" href="#desc" role="tab">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="specifi-tab" data-bs-toggle="tab" href="#specifi" role="tab">Specifications</a>
                                    </li>
                                </ul>
                                <div class="tab-content border border-top-0 p-4">
                                    <div class="tab-pane fade" id="desc" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div>
                                                    <img src="{{URL::asset('assets/images/product/img-6.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="text-muted">
                                                    <p>If several languages coalesce, the grammar of the resulting language is more simple and regular</p>
                                                    <p>It will be as simple as occidental in fact.</p>

                                                    <div>
                                                        <ul class="list-unstyled product-desc-list text-muted mb-0">
                                                            <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Sed ut perspiciatis omnis iste</li>
                                                            <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Neque porro quisquam est</li>
                                                            <li><i class="mdi mdi-circle-medium me-1 align-middle"></i> Quis autem vel eum iure</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="specifi" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" style="width: 50%;"><b>Category :</b></th>
                                                        <td>Shoes</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><b>Brand :</b></th>
                                                        <td>Nike</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><b>Color :</b></th>
                                                        <td>Gray</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><b>Quality :</b></th>
                                                        <td>High</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"><b>Material :</b></th>
                                                        <td>Leather</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<!-- sample modal content -->
<div id="color-img" class="modal fade" tabindex="-1" aria-labelledby="color-imgLabel" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="color-imgLabel">Product Images</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="product-desc-color">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <a href="#" class="active" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Gray">
                                <div class="product-color-item">
                                    <img src="{{URL::asset('assets/images/product/img-1.png')}}" alt="" class="avatar-md">
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Dark">
                                <div class="product-color-item">
                                    <img src="{{URL::asset('assets/images/product/img-2.png')}}" alt="" class="avatar-md">
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Purple">
                                <div class="product-color-item">
                                    <img src="{{URL::asset('assets/images/product/img-3.png')}}" alt="" class="avatar-md">
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Sky">
                                <div class="product-color-item">
                                    <img src="{{URL::asset('assets/images/product/img-4.png')}}" alt="" class="avatar-md">
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Green">
                                <div class="product-color-item">
                                    <img src="{{URL::asset('assets/images/product/img-5.png')}}" alt="" class="avatar-md">
                                </div>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="White">
                                <div class="product-color-item">
                                    <img src="{{URL::asset('assets/images/product/img-6.png')}}" alt="" class="avatar-md">
                                </div>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
@section('script')
<!-- swiper js -->
<script src="{{ URL::asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/pages/ecommerce-product-detail.init.js') }}"></script>
<script src="{{ URL::asset('assets/js/app.js') }}"></script>

@endsection
