@extends('cms.parent')

@section('page-name','Edit Store')
@section('main-page','Human Resources')
@section('sub-page','Stores')
@section('page-name-small','Edit Store')

@section('styles')

@endsection

@section('content')
<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Edit Store</h3>
                {{-- <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div> --}}
            </div>
            <!--begin::Form-->
            <form>
                <div class="card-body">
                    <h3 class="text-dark font-weight-bold mb-10">Role</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Role:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7" id="role_id"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                    @foreach ($roles as $role)
                                    <option value="{{$role->id}}" @if($role->name == $grantedRole) selected
                                        @endif>{{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="form-text text-muted">Please select store role</span>
                        </div>
                    </div>

                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">City:<span class="text-danger">*</span></label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7" id="city_id"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                    @foreach ($cities as $city)
                                    <option value="{{$city->id}}" @if($city->id == $store->city_id) selected
                                        @endif>{{$city->name_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="form-text text-muted">Please select store city</span>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Store Name:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="store_name" value="{{$store->store_name}}"
                                placeholder="Enter your store name" />
                            <span class="form-text text-muted">Please enter your store name</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Owner Name:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" value="{{$store->name}}"
                                placeholder="Enter your name" />
                            <span class="form-text text-muted">Please enter your name</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Mobile:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="tel" class="form-control" id="mobile" value="{{$store->mobile}}"
                                placeholder="Enter mobile" />
                            <span class="form-text text-muted">Please enter your mobile number</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Email address:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="email" class="form-control" id="email" value="{{$store->email}}"
                                placeholder="Enter email" />
                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Details</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Address:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="address" value="{{$store->address}}"
                                placeholder="Enter address" />
                            <span class="form-text text-muted">Enter your store address</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Facebook:</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="facebook" value="{{$store->facebook}}"
                                placeholder="Enter facebook page name" />
                            <span class="form-text text-muted">Enter your store facebook page name</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Instagram:</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="instagram" value="{{$store->instagram}}"
                                placeholder="Enter facebook page name" />
                            <span class="form-text text-muted">Enter your store instagram page name</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Image:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <div class="image-input image-input-empty image-input-outline" id="kt_image_5"
                                style="background-image: url({{Storage::url('stores/'.$store->image)}})">
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
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Settings</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Firebase Server Key:<span
                                class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="firebase_key" value="{{$store->firebase_key}}"
                                placeholder="Enter firebase server key" />
                            <span class="form-text text-muted">Enter your firebase app server key</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Active Account</label>
                        <div class="col-3">
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox" @if($store->active) checked @endif
                                    id="active">
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
    var image = new KTImageInput('kt_image_5');
    function performEdit(){
        let formData = new FormData();
        formData.append('_method', 'PUT');
        formData.append('role_id',document.getElementById('role_id').value);
        formData.append('city_id',document.getElementById('city_id').value);
        formData.append('store_name',document.getElementById('store_name').value);
        formData.append('name',document.getElementById('name').value);
        formData.append('mobile',document.getElementById('mobile').value);
        formData.append('email',document.getElementById('email').value);
        formData.append('address',document.getElementById('address').value);
        formData.append('facebook',document.getElementById('facebook').value);
        formData.append('instagram',document.getElementById('instagram').value);
        formData.append('firebase_key',document.getElementById('firebase_key').value);
        if(image.input.files[0] != undefined){
            formData.append('image',image.input.files[0]);
        }
        formData.append('active',document.getElementById('active').checked);
        store('/cms/admin/stores/{{$store->id}}', formData);
    }
</script>
@endsection