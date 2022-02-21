@extends('cms.parent')

@section('page-name','')
@section('main-page','')
@section('sub-page','')
@section('page-name-small',' ')

@section('styles')

@endsection

@section('content')
<!--begin::Container-->
<div class="row">
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">@lang('dashboard/special.new_specialization')</h3>
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
                    <div class="form-group">
                        <label for="">@lang('dashboard/special.choose_uni') :</label>
                        <select name="college" class="form-control" id="university_id">
                            <option value="">@lang('dashboard/special.select') </option>
                            @foreach ($universities as $university)
                            <option value="{{$university->id}}">{{$university->name}}</option>
                            @endforeach

                        </select>

                    </div>

                    <div class="form-group">
                        <label for="">@lang('dashboard/special.choose_college') :</label>
                        <select name="college" id="college_id"
                            class="form-control">
                            <option value="">@lang('dashboard/special.select') </option>
                        </select>
                    </div>

                    <div class="form-group row mt-4">

                        <label class="col-3 col-form-label">@lang('dashboard/university.name_ar') :<span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name_ar" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-3 col-form-label">@lang('dashboard/university.name_en'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name_en" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">{{ __('dashboard/university.status') }}</label>
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
                            <button type="button" onclick="performStore()" class="btn btn-primary mr-2">@lang('dashboard/university.add')</button>
                            {{--  <button type="reset" class="btn btn-secondary">Cancel</button>  --}}
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
<script src="{{ asset('js/jquery.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#university_id').on('change',function() {
                var university_id = $(this).val();
                var locale = "{{ app()->getLocale() }}"
                console.log(locale)
                if(university_id){
                   $.ajax({
                       url:'/cms/admin/getCollege/'+university_id,
                       type:'GET',
                       success: function(data){
                           $('#college_id').empty();
                           $.each(data, function (key, value) {
                            var obj = jQuery.parseJSON(value.name);
                            {{-- console.log(obj); --}}
                            if(locale == 'ar') {
                                $('#college_id').append('<option value=" ' + value.id + '">' + obj.ar + '</option>');

                            }else {
                            $('#college_id').append('<option value=" ' + value.id + '">' + obj.en + '</option>');

                            }

                        })


                       }

                   });
                }else{
                    console.log('AJAX load did not work');
                    {{--  $('select[name="college"]').empty();  --}}
                }

            });
        });


    </script>


     <script>
        function performStore(){
            let data = {
                name_ar: document.getElementById('name_ar').value,
                name_en: document.getElementById('name_en').value,
                college_id: document.getElementById('college_id').value,
                status: document.getElementById('status').checked,
            }

            store('/cms/admin/specializations',data,'/cms/admin/specializations/create');
        }
    </script>
@endsection
