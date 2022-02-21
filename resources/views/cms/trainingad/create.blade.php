@extends('cms.parent')

@section('page-name', __('trainingad.Create Training Advertisment'))
@section('main-page', __('trainingad.system content'))
@section('sub-page', __('trainingad.trainingAd'))
@section('page-name-small', __('trainingad.Create Training Advertisment'))

@section('styles')

@endsection

@section('content')
    <!--begin::Container-->
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                {{-- <div class="card-header">
                    <h3 class="card-title">Horizontal Form Layout</h3>
                     <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div>
                </div> --}}
                <!--begin::Form-->
                <form id="create-form">
                    <div class="card-body">

                        <h3 class="text-dark font-weight-bold mb-10">{{ __('trainingad.Base info') }}</h3>

                        <div class="form-group row mt-4">
                            <div class="col-6">
                                <label class="form-label">English Title</label>
                                <input type="text" class="form-control" id="title_en"
                                    placeholder="Please! Enter English title" />
                                <span class="form-text text-muted">Please Enter English Title</span>
                            </div>
                            <div class="col-6">
                                <label class="form-label">العنوان باللغة العربية</label>
                                <input type="text" class="form-control" id="title_ar"
                                    placeholder="الرجاء! إدخال العنوان باللغة العربية" />
                                <span class="form-text text-muted">الرجاء! إدخال العنوان باللغة العربية</span>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-6">
                                <label class="form-label">English Describtion</label>
                                <textarea class="summernote" id="describtion_en">{{ $page->details ?? '' }}</textarea>
                                <span class="form-text text-muted">Please! Enter English Describtion</span>
                            </div>
                            <div class="col-6">
                                <label class="form-label">الوصف باللغة العربية</label>
                                <textarea class="summernote" id="describtion_ar">{{ $page->details ?? '' }}</textarea>
                                <span class="form-text text-muted">الرجاء! ادخال الوصف باللغة العربية</span>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-4">
                                <label class="form-label">{{ __('trainingad.start_date') }}</label>
                                <input type="date" class="form-control" id="st_date" placeholder="{{__('trainingad.Enter Start Date')}}" />
                                <span class="form-text text-muted">{{__('trainingad.Please Enter Start Date')}}</span>
                            </div>
                            <div class="col-4">
                                <label class="form-label">{{ __('trainingad.end_date') }}</label>
                                <input type="date" class="form-control" id="end_date" placeholder="{{__('trainingad.Enter End Date')}}" />
                                <span class="form-text text-muted">{{__('trainingad.Please Enter End Date')}}</span>
                            </div>


                            <div class="col-4">
                                <label class="form-label">{{ __('trainingad.limit') }}</label>

                                <input type="text" class="form-control" id="limit" placeholder="{{__('trainingad.Enter Maximum Number Of Requests')}}" />
                                <span class="form-text text-muted">{{__('trainingad.Please Enter Maximum Number of Rquest')}}</span>
                            </div>
                        </div>
                        <div class="row">
                            <label class="form-label mt-2">{{ __('trainingad.gender') }}:</label>

                            <div class="dropdown bootstrap-select form-control dropup ">
                                <select class="form-control selectpicker" id="gender" title="Select Your Gender"
                                    tabindex="null" data-live-search="true">
                                    <option value="M">{{__('trainingad.Male')}}</option>
                                    <option value="F">{{__('trainingad.Female')}}</option>

                                </select>
                            </div>
                        </div>
                        <div class="row mt-6">
                            <label class="form-label mt-2">{{ __('trainingad.companies') }}</label>

                            <div class="dropdown bootstrap-select form-control dropup ">
                                <select class="form-control selectpicker" id="company" title="Select Company"
                                    tabindex="null" data-live-search="true">
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">{{ __('trainingad.status') }}</label>
                            <div class="col-3">
                                <span class="switch switch-outline switch-icon switch-success">
                                    <label>
                                        <input type="checkbox" checked="checked" id="status">
                                        <span></span>
                                    </label>
                                </span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <h3 class="text-dark font-weight-bold mb-10">{{ __('trainingad.image') }}</h3>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">{{ __('trainingad.image') }}</label>
                            <div class="col-9">
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_5"
                                    style="background-image:{{url(Storage::url($trainingad->image))}}">
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
                        {{-- <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">Author:</label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="author" placeholder="Enter author name" />
                                <span class="form-text text-muted">Please author name</span>
                            </div>
                        </div> --}}
                        {{-- <div class="separator separator-dashed my-10"></div>
                        <h3 class="text-dark font-weight-bold mb-10">Details</h3>
                        <div class="form-group row mt-4">
                            <label class="col-3 col-form-label">Details:</label>
                            <div class="col-9">
                                <textarea class="summernote" id="details">{{ $page->details ?? '' }}</textarea>
                                <span class="form-text text-muted">Please enter details</span>
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label class="col-3 col-form-label">Vision:</label>
                            <div class="col-9">
                                <textarea class="summernote" id="vision">{{ $page->vision ?? '' }}</textarea>
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group row">
                            <label class="col-3 col-form-label">Values:</label>
                            <div class="col-9">
                                <textarea class="summernote" id="value">{{ $page->value ?? '' }}</textarea>
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group row">
                            <label class="col-3 col-form-label">Message:</label>
                            <div class="col-9">
                                <textarea class="summernote" id="message">{{ $page->message ?? '' }}</textarea>
                                <span class="form-text text-muted">We'll never share your email with anyone else</span>
                            </div>
                        </div> --}}
                        {{-- <div class="separator separator-dashed my-10"></div>
                        <h3 class="text-dark font-weight-bold mb-10">Image</h3>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Image:</label>
                            <div class="col-9">
                                <div class="image-input image-input-empty image-input-outline" id="kt_image_5"
                                    style="background-image: url({{ asset('assets/media/users/blank.png') }})">
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
                        </div> --}}
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3">

                            </div>
                            <div class="col-9">
                                <button type="button" onclick="performStore()" class="btn btn-primary mr-2">{{__('trainingad.Submit')}}</button>
                                <button type="reset" class="btn btn-secondary">{{__('trainingad.Cancel')}}</button>
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
    <script src="{{ asset('assets/js/pages/crud/forms/editors/summernote.js') }}"></script>
    <script src="{{ asset('assets/js/pages/crud/file-upload/image-input.js') }}"></script>
    <script>
        var KTSummernoteDemo = function() {
            // Private functions
            var textEditors = function() {
                $('#describtion_en').summernote({
                    height: 130,
                    placeholder: 'Enter English Describtion'
                });
                $('#describtion_ar').summernote({
                    height: 130,
                    placeholder: 'الرجاء! ادخال الوصف باللغة العربية'
                });

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

        function performStore() {
            let formData = new FormData();
            formData.append('title_ar', document.getElementById('title_ar').value);
            formData.append('title_en', document.getElementById('title_en').value);
            formData.append('describtion_en', $("#describtion_en").summernote("code"));
            formData.append('describtion_ar', $("#describtion_ar").summernote("code"));
            formData.append('start_date', document.getElementById('st_date').value);
            formData.append('end_date', document.getElementById('end_date').value);
            formData.append('limit', document.getElementById('limit').value);
            formData.append('gender', document.getElementById('gender').value);
            formData.append('company_id', document.getElementById('company').value);
            formData.append('status', document.getElementById('status').checked);
            formData.append('image', image.input.files[0]);
            store('/cms/admin/trainingads', formData);
        }
    </script>
@endsection
