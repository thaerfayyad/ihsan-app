@extends('cms.parent')

@section('page-name','Create Permission')
@section('main-page','Roles & Permissions')
@section('sub-page','Permissions')
@section('page-name-small','Create Permission')

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
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Auth Type:</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7" id="guard_name"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                    <option value="admin">Admin</option>
                                    <option value="store">Store</option>
                                    <option value="api">User</option>
                                </select>
                            </div>
                            <span class="form-text text-muted">Please select auth type</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Name</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" placeholder="Enter permission name" />
                            <span class="form-text text-muted">Please enter permission name</span>
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
    function performStore(){
        let data = {
            guard_name: document.getElementById('guard_name').value,
            name: document.getElementById('name').value,
        }
        store('/dashboard/permissions',data);
    }
</script>
@endsection
