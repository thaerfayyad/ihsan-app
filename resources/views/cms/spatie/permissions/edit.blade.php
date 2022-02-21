@extends('cms.parent')

@section('page-name','Edit Permission')
@section('main-page','permissions & Permissions')
@section('sub-page','Permissions')
@section('page-name-small','Edit Permission')

@section('styles')

@endsection

@section('content')
<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Edit Permission</h3>
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
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Auth Type:</label>
                        <div class="col-lg-4 col-md-9 col-sm-12">
                            <div class="dropdown bootstrap-select form-control dropup">
                                <select class="form-control selectpicker" data-size="7" id="guard_name"
                                    title="Choose one of the following..." tabindex="null" data-live-search="true">
                                    <option value="admin" @if($permission->guard_name == 'admin') selected @endif>Admin
                                    </option>
                                    <option value="store" @if($permission->guard_name == 'store') selected @endif>Store
                                    </option>
                                    <option value="api" @if($permission->guard_name == 'api') selected @endif>User
                                    </option>
                                </select>
                            </div>
                            <span class="form-text text-muted">Please select auth type</span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">Name</label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" value="{{$permission->name}}"
                                placeholder="Enter permission name" />
                            <span class="form-text text-muted">Please enter permission name</span>
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
<script>
    function performEdit(){
        let data = {
            guard_name: document.getElementById('guard_name').value,
            name: document.getElementById('name').value,
        }
        update('/dashboard/permissions/{{$permission->id}}', data, '/cms/admin/permissions');
    }
</script>
@endsection
