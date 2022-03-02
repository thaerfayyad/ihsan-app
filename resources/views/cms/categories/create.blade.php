@extends('cms.parent')

@section('page-name','اضافة قسم')
@section('main-page','ادارة المحتوى')
@section('sub-page','الاقسام')
@section('page-name-small','اضافة  قسم')

@section('styles')

@endsection

@section('content')
<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">اضافة قسم جديد</h3>
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

                    {{-- <h3 class="text-dark font-weight-bold mb-10">Basic Info</h3> --}}
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">الاسم:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" placeholder="ادخل اسم القسم" />
                            <span class="form-text text-muted">رجاء ادخال اسم القسم</span>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">الوصف:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="description" placeholder="ادخل الوصف" />
                            <span class="form-text text-muted">رجاء ادخال الوصف  </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-3 col-form-label">الحالة</label>
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
<script>
    function performStore(){
        let data = {
            name: document.getElementById('name').value,
            description: document.getElementById('description').value,
            status: document.getElementById('status').checked,
        }

        store('/dashboard/categories',data,'/dashboard/categories/create');
    }
</script>
@endsection
