@extends('cms.parent')

@section('page-name','اضافة منتج')
@section('main-page','ادارة المحتوى')
@section('sub-page','المنتجات')
@section('page-name-small','انشاء منتج جديد')

@section('styles')

@endsection

@section('content')
<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">انشاء منتج جديد</h3>
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
                    <h3 class="text-dark font-weight-bold mb-10"></h3>
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
                    <h3 class="text-dark font-weight-bold mb-10"></h3>
           >

                    <div class="form-group row">
                        <label class="col-3 col-form-label">الاقسام:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7" id="category_id"
                                    title="اختار القسم..." tabindex="null" data-live-search="true">
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="form-text text-muted">رجاء اخيار القسم</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">اسم المنتج:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" placeholder="ادخل اسم المنتج" />
                            <span class="form-text text-muted">رجاء ادخال اسم المنتج</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">كمية المنتج:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="number" class="form-control" id="quantity" placeholder="كميتة المنتج" />
                            <span class="form-text text-muted">رجاء ادخال كمية النتج</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">حجم المنتج:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="number" class="form-control" id="size" placeholder="ادخل جحم المنتج" />
                            <span class="form-text text-muted">رجاء ادخال حجم المنتج</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">سعر المنتج:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="number" class="form-control" id="price" placeholder="ادخل سعر المنتج" />
                            <span class="form-text text-muted">ادخل سعر المنتج</span>
                        </div>
                    </div>


                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Description</h3>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">الوصف:</label>
                        <div class="col-9">
                            <textarea class="summernote" id="description">{{$page->description ?? ''}}</textarea>
                            <span class="form-text text-muted">رجاء ادخال وصف المنتج</span>
                        </div>
                    </div>






                    <div class="form-group row">
                        <label class="col-3 col-form-label">صورة المنتج:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <div class="image-input image-input-empty image-input-outline" id="kt_image_5"
                                style="background-image: url({{asset('cms/assets/media/users/blank.png')}})">
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
                    <h3 class="text-dark font-weight-bold mb-10">الاعدادت</h3>

                    <div class="form-group row">
                        <label class="col-3 col-form-label">حالة المنتج</label>
                        <div class="col-3">
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox" checked="checked" id="status">
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
                            <button type="button" onclick="performStore()" class="btn btn-primary mr-2">اضافة</button>
                            <button type="reset" class="btn btn-secondary">الغاء</button>
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

    function performStore(){
        let formData = new FormData();

        formData.append('category_id',document.getElementById('category_id').value);
        formData.append('name', document.getElementById('name').value);
        formData.append('description', document.getElementById('description').value);
        formData.append('quantity', document.getElementById('quantity').value);
        formData.append('size', document.getElementById('size').value);
        formData.append('price', document.getElementById('price').value);
        formData.append('status',document.getElementById('status').checked);
        formData.append('image', image.input.files[0]);
        formData.append('file', image.input.files[0]);
        // );


        store('/dashboard/products',formData),'dashboard/products/create';



//,

    }

</script>


@endsection
