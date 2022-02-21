@extends('cms.parent')

@section('page-name','Manage Settings')
@section('main-page','System Management')
@section('sub-page','Settings')
@section('page-name-small','Manage Settings')

@section('styles')

@endsection

@section('content')
<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Horizontal Form Layout</h3>
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
                    <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Name (En):</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name_en" placeholder="Enter english name" />
                            <span class="form-text text-muted">Please enter english name</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Details</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">API Collection:</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="api_collection"
                                value="{{$systemSettings->api_collection}}" placeholder="Enter API link" />
                            <span class="form-text text-muted">Please enter API collection link</span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <h3 class="text-dark font-weight-bold mb-10">Settings</h3>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Maintenance Mode:</label>
                        <div class="col-3">
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox" @if($systemSettings->maintenance_mode)
                                    checked="checked" @endif
                                    id="maintenance_mode">
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
                            <button type="button" onclick="performStore()" class="btn btn-primary mr-2">Submit</button>
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
<script>
    var image = new KTImageInput('kt_image_5');
    
    function performStore(){
        let data = {
            api_collection: document.getElementById('api_collection').value,
            maintenance_mode: document.getElementById('maintenance_mode').checked,
        }
        update('/cms/admin/system-settings/{{$systemSettings->id}}',data);
    }
</script>
@endsection