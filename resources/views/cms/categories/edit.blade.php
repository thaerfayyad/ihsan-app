@extends('cms.parent')

@section('page-name','تعديل القسم')
@section('main-page','ادراة المحتوى')
@section('sub-page','الاقسام')
@section('page-name-small','تعديل القسم')

@section('styles')

@endsection

@section('content')
<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">تعديل القسم</h3>
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



                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label"> الاسم:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" value="{{$category->name}}"
                                placeholder="Enter category name" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">الوصف:<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="description" value="{{$category->description}}" placeholder="Enter descriptipn" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-3 col-form-label">حالة القسم</label>
                        <div class="col-3">
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox" @if($category->status) checked="checked" @endif
                                    id="status">
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
                            <button type="button" onclick="performEdit()" class="btn btn-primary mr-2">تحديث</button>
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
    function performEdit(){
        let data = {
            name: document.getElementById('name').value,
            description: document.getElementById('description').value,
            status: document.getElementById('status').checked,
        }
        update('/dashboard/categories/{{$category->id}}', data, '/dashboard/categories');
    }
</script>
@endsection
