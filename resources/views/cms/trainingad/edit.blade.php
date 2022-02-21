@extends('cms.parent')

@section('page-name', __('trainingad.Edit Training Advertisment'))
@section('main-page', __('trainingad.system content'))
@section('sub-page', __('trainingad.trainingAd'))
@section('page-name-small', __('trainingad.Edit Training Advertisment'))
@section('styles')

@endsection

@section('content')
    <!--begin::Container-->
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Card-->
            <div class="card card-custom gutter-b example example-compact">
                <!--begin::Form-->
                <form>
                    <div class="card-body">

                        <h3 class="text-dark font-weight-bold mb-10">{{ __('trainingad.Base info') }}</h3>

                        <div class="form-group row mt-4">
                            <div class="col-6">
                                <label class="form-label">English Title</label>
                                <input type="text" class="form-control" id="title_en" placeholder="Please! Enter English title"
                                    value="{{ $trainingad->getTranslation('title', 'en') }}" />
                            </div>
                            <div class="col-6">
                                <label class="form-label">العنوان باللغة العربية</label>

                                <input type="text" class="form-control" id="title_ar" placeholder="الرجاء! إدخال العنوان باللغة العربية"
                                    value="{{ $trainingad->getTranslation('title', 'ar') }}" />
                            </div>
                        </div>
                        <div class="form-group row mt-4">
                            <div class="col-6">
                                <label class="form-label">English Describtion</label>
                                <textarea class="summernote"
                                    id="describtion_en">{{ $trainingad->getTranslation('description', 'en') ?? '' }}</textarea>
                            </div>
                            <div class="col-6">
                                <label class="form-label">الوصف باللغة العربية</label>
                                <textarea class="summernote"
                                    id="describtion_ar">{{ $trainingad->getTranslation('description', 'ar') ?? '' }}</textarea>
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <div class="col-4">
                                <label class="form-label">{{ __('trainingad.start_date') }}</label>

                                <input type="date" class="form-control" id="st_date" placeholder="Enter Start Date"
                                    value="{{ $trainingad->start_date }}" />
                            </div>
                            <div class="col-4">
                                <label class="form-label">{{ __('trainingad.end_date') }}</label>
                                <input type="date" class="form-control" id="end_date" placeholder="Enter End title"
                                    value="{{ $trainingad->end_date }}" />
                            </div>

                            <div class="col-4">
                                <label class="form-label">{{ __('trainingad.limit') }}</label>
                                <input type="text" class="form-control" value="{{ $trainingad->limit }}" id="limit"
                                    placeholder="Enter Limit Request" />
                            </div>


                        </div>
                        <div class="row">
                            <label class="form-label mt-2">{{ __('trainingad.gender') }}:</label>

                            <div class="dropdown bootstrap-select form-control dropup ">
                                <select class="form-control selectpicker" title="Select Your Gender" id="gender"
                                    tabindex="null" data-live-search="true">
                                    <option value="M" @if ($trainingad->gender == 'M') selected @endif>{{__('trainingad.Male')}}</option>
                                    <option value="F" @if ($trainingad->gender == 'F') selected @endif>{{__('trainingad.Female')}}</option>
                                    <option value="All" @if ($trainingad->gender == 'All') selected @endif>{{__('trainingad.All')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-6">
                            <label class="form-label mt-2">{{ __('trainingad.companies') }}</label>

                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7" id="company_id"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}" @if ($company->id == $trainingad->company_id) selected @endif>{{ $company->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">{{ __('trainingad.status') }}</label>
                            <div class="col-3">
                                <span class="switch switch-outline switch-icon switch-success">
                                    <label>
                                        <input type="checkbox" @if ($trainingad->status) checked="checked" @endif id="status">
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
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-3">

                            </div>
                            <div class="col-9">
                                <button type="button" onclick="performEdit()" class="btn btn-primary mr-2">{{__('trainingad.Submit')}}</button>
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
                    placeholder: "Enter English Describtion"
                });
                $('#describtion_ar').summernote({
                    height: 130,
                    placeholder: 'Enter Arabic Describtion'
                });
                $('#value').summernote({
                    height: 130,
                    placeholder: 'Enter value'
                });
                $('#message').summernote({
                    height: 130,
                    placeholder: 'Enter message'
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

        function performEdit() {
            let formData = new FormData();
            // formData.append('_method', 'PUT');
            formData.append('title_ar', document.getElementById('title_ar').value);
            formData.append('title_en', document.getElementById('title_en').value);
            formData.append('describtion_en', $("#describtion_en").summernote("code"));
            formData.append('describtion_ar', $("#describtion_ar").summernote("code"));
            formData.append('start_date', document.getElementById('st_date').value);
            formData.append('end_date', document.getElementById('end_date').value);
            formData.append('limit', document.getElementById('limit').value);
            formData.append('gender', document.getElementById('gender').value);
            formData.append('company_id', document.getElementById('company_id').value);
            formData.append('status', document.getElementById('status').checked);
            // if (image.input.files[0] != undefined) {
            //     formData.append('image', image.input.files[0]);
            // }

            store('/cms/admin/trainingads/{{ $trainingad->id }}', formData, '/cms/admin/trainingads');
        }
    </script>
@endsection
