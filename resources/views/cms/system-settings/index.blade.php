@extends('cms.parent')

@section('page-name','System Settings')
@section('main-page','System Management')
@section('sub-page','Settings')
@section('page-name-small','')

@section('styles')

@endsection

@section('content')
<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">System Settings</h3>
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
                    <h3 class="text-dark font-weight-bold mb-10">API</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">API Collection:</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{$systemSettings->api_collection}}"
                                disabled />
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">API URL:</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{url('/api')}}" disabled />
                        </div>
                    </div>
                    <h3 class="text-dark font-weight-bold mb-10">Privacy</h3>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Privacy Policy Link:</label>
                        <div class="col-9">
                            <input type="text" class="form-control" value="{{route('privacy-policy')}}" disabled />
                        </div>
                    </div>
                </div>
                <div class="card-footer">

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
@endsection