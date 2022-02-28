@extends('cms.parent')

@section('page-name','Create Store')
@section('main-page','Human Resources')
@section('sub-page','Stores')
@section('page-name-small','Create Store')

@section('styles')

@endsection

@section('content')
<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Create New Store</h3>
                {{-- <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div> --}}
            </div>
            <!--begin::Form-->
            <form id="create-form">
                <div class="card-body">
                    <h3 class="text-dark font-weight-bold mb-10">Role</h3>
                    {{-- <div class="form-group row">
                        <label class="col-3 col-form-label">Role:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7" id="role_id"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="form-text text-muted">Please select store role</span>
                        </div>
                    </div> --}}

                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>
                    {{--  <div class="form-group row">
                        <label class="col-3 col-form-label">City:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7" id="city_id"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                    @foreach ($cities as $city)
                                    <option value="{{$city->id}}" @if($city->id == $product->city_id) selected @endif>{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="form-text text-muted">Please select product city</span>
                        </div>
                    </div>  --}}

                    <div class="form-group row">
                        <label class="col-3 col-form-label">Category:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7" id="category_id"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id == $product->category_id) selected @endif >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="form-text text-muted">Please select  category</span>
                        </div>
                    </div>



                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Product Name:<span class="text-danger">*</span></label>
                        <div class="col-9">

                            <input type="text" class="form-control" id="product_name"   value="{{$product->name}}" placeholder="Enter your product name"  />
                            <span class="form-text text-muted">Please enter your product name</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Product Quantity:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="number" class="form-control" id="quantity" placeholder="Enter manager name"  value="{{$product->quantity }}" />
                            <span class="form-text text-muted">Please enter manager name</span>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Prodcuts Size:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="number" class="form-control" id="size" placeholder="Enter nontact number" value="{{$product->size}}"/>
                            <span class="form-text text-muted">Please enter copmpany nontact number</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Prodcuts Price:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="number" class="form-control" id="price" placeholder="Enter nontact number" value="{{$product->price}}"/>
                            <span class="form-text text-muted">Please enter copmpany nontact number</span>
                        </div>
                    </div>


                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Details</h3>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Description:</label>
                        <div class="col-9">
                            <textarea class="summernote" id="description">{{$product->description ?? ''}}</textarea>
                            <span class="form-text text-muted">Please description about your product</span>
                        </div>
                    </div>




                    <div class="form-group row">
                        <label class="col-3 col-form-label">Image:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <div class="image-input image-input-empty image-input-outline" id="kt_image_5"
                                style="background-image:@if(!$product->image)   url({{asset('cms/assets/media/users/blank.png')}})   @else   url('{{url(Storage::url($product->image))}}') @endif">
                                <div class="image-input-wrapper"></div>

                                <label
                                    class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="change" data-toggle="tooltip" title=""
                                    data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="profile_avatar_remove" />
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>

                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                    data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>

                            </div>
                            <span class="form-text text-muted">Just png , jpg , jpeg</span>

                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Settings</h3>

                    <div class="form-group row">
                        <label class="col-3 col-form-label">Active Account</label>
                        <div class="col-3">
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox" @if($product->status) checked="checked" @endif id="status">
                                    <span></span>
                                </label>
                            </span>
                        </div>
                    </div>



                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-9">
                            <button type="button" onclick="performEdit()" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
</div>
<!--end::Container-->
@endsection

@section('scripts')
<script src="{{asset('cms/assets/js/pages/crud/forms/widgets/bootstrap-select.js')}}"></script>
<script src="{{asset('cms/assets/js/pages/crud/file-upload/image-input.js')}}"></script>
<script>
        var KTSummernoteDemo = function () {
        // Private functions
        var textEditors = function () {
            $('#description').summernote({height: 130,placeholder: 'Enter description'});
            $('#services').summernote({height: 130,placeholder: 'Enter services'});

        }

        return {
            init: function() {
                textEditors();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTSummernoteDemo.init();
    });

    var image = new KTImageInput('kt_image_5');
    var file = new KTImageInput('kt_file_5');

    function performEdit(){
        let formData = new FormData();
        formData.append('_method' , 'PUT');
        formData.append('category_id',document.getElementById('category_id').value);
        formData.append('name', document.getElementById('product_name').value);
        formData.append('size', document.getElementById('size').value);
        formData.append('quantity', document.getElementById('quantity').value);
        formData.append('price', document.getElementById('price').value);
        formData.append('description', $("#description").summernote("code"));


        formData.append('status',document.getElementById('status').checked);


        if(image.input.files[0] != undefined ){
            formData.append('image', image.input.files[0]);

        }
        formData.append('file', image.input.files[0]);
        // );


        store('/dashboard/products/{{$product->id}}',formData,'/dashboard/products');
        // update('/cms/admin/categories/{{$category->id}}', data, '/cms/admin/categories');





//,

    }

</script>


@endsection
