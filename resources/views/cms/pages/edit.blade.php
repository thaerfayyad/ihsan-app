@extends('cms.parent')

@section('page-name','Edit Page')
@section('main-page','Content Management')
@section('sub-page','Pages')
@section('page-name-small','Edit Page')

@section('styles')

@endsection

@section('content')
<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Edit {{$page->title}} Page</h3>
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
                    <h3 class="text-dark font-weight-bold mb-10">Base Info:</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Title:</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="title" value="{{$page->title}}"
                                placeholder="Enter title" />
                            <span class="form-text text-muted">Please enter title</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Author:</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="author" value="{{$page->auther}}"
                                placeholder="Enter author name" />
                            <span class="form-text text-muted">Please author name</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Details</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Details:</label>
                        <div class="col-9">
                            <textarea class="summernote" id="details">{{$page->detail}}</textarea>
                            <span class="form-text text-muted">Please enter details</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-3 col-form-label">Vision:</label>
                        <div class="col-9">
                            <textarea class="summernote" id="vision">{{$page->vision ?? ''}}</textarea>
                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Values:</label>
                        <div class="col-9">
                            <textarea class="summernote" id="value">{{$page->value ?? ''}}</textarea>
                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Message:</label>
                        <div class="col-9">
                            <textarea class="summernote" id="message">{{$page->message ?? ''}}</textarea>
                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                        </div>
                    </div>

                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Image</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Image:</label>
                        <div class="col-9">
                            <div class="image-input image-input-empty image-input-outline" id="kt_image_5"
                                style="background-image: url({{Storage::url('pages/'.$page->image)}})">
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
                            <button type="button" onclick="performUpdate()" class="btn btn-primary mr-2">Submit</button>
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
<script src="{{asset('assets/js/pages/crud/forms/editors/summernote.js')}}"></script>
<script src="{{asset('assets/js/pages/crud/file-upload/image-input.js')}}"></script>
<script>
    var KTSummernoteDemo = function () {
        // Private functions
        var textEditors = function () {
            $('#details').summernote({height: 130,placeholder: 'Enter details'});
            $('#vision').summernote({height: 130,placeholder: 'Enter vision'});
            $('#value').summernote({height: 130,placeholder: 'Enter value'});
            $('#message').summernote({height: 130,placeholder: 'Enter message'});
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
    function performUpdate(){
        let formData = new FormData();
        formData.append('_method', 'PUT');
        formData.append('title', document.getElementById('title').value);
        formData.append('author', document.getElementById('author').value);
        formData.append('details', $("#details").summernote("code"));
        formData.append('vision', $("#vision").summernote("code"));
        formData.append('value', $("#value").summernote("code"));
        formData.append('message', $("#message").summernote("code"));
        if(image.input.files[0] != undefined){
            formData.append('image', image.input.files[0]);
        }
        store('/cms/admin/pages/{{$page->id}}' ,formData, '/cms/admin/pages');
    }
</script>
@endsection