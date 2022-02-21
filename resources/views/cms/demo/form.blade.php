@extends('cms.parent')

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
            <form class="form">
                <div class="card-body">
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Full Name:</label>
                        <div class="col-9">
                            <input type="email" class="form-control" placeholder="Enter full name" />
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Email address:</label>
                        <div class="col-9">
                            <input type="email" class="form-control" placeholder="Enter email" />
                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                        </div>
                    </div>
                    <div class="form-group row mb-1">
                        <label class="col-3 col-form-label">Communication:</label>
                        <div class="col-9">
                            <div class="checkbox-inline">
                                <label class="checkbox checkbox-outline">
                                    <input type="checkbox" />
                                    <span></span>
                                    Email
                                </label>
                                <label class="checkbox checkbox-outline">
                                    <input type="checkbox" />
                                    <span></span>
                                    SMS
                                </label>
                                <label class="checkbox checkbox-outline">
                                    <input type="checkbox" />
                                    <span></span>
                                    Phone
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-3">

                        </div>
                        <div class="col-9">
                            <button type="reset" class="btn btn-primary mr-2">Submit</button>
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

@section('styles')

@endsection