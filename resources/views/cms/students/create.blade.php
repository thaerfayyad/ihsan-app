@extends('cms.parent')

@section('page-name',__('dashboard/student.add_student'))
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
                <h3 class="card-title">@lang('dashboard/student.add_student')</h3>
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
                        <label class="col-1 col-form-label">@lang('dashboard/student.name'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="name" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-1  col-form-label">@lang('dashboard/student.email') : <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="email" class="form-control" id="email" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-1 col-form-label">@lang('dashboard/student.mobile'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="tel" class="form-control" id="mobile" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>

                    <div class="form-group row mt-4">
                        <label class="col-1 col-form-label">@lang('dashboard/student.bio'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <textarea name="" id="bio" cols="30" rows="5" class="form-control"></textarea>
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-1 col-form-label">@lang('dashboard/student.birth_date'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="date" class="form-control" id="birth_date" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-1 col-form-label">@lang('dashboard/student.address'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="address" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('dashboard/special.choose_uni') :</label>
                        <select class="form-control  col-6" id="university_id">
                            <option value="">@lang('dashboard/special.select') </option>
                            @foreach ($universities as $university)
                            <option value="{{$university->id}}" >{{$university->name}}</option>
                            @endforeach

                        </select>

                    </div>

                    <div class="form-group">
                        <label for="">@lang('dashboard/special.choose_college') :</label>
                        <select  class="form-control  col-6" id="college_id"  >
                            <option value="">@lang('dashboard/special.select') </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">@lang('dashboard/student.choose_specialization'):</label>
                        <select  class="form-control  col-6" id="specialization_id"  >
                            <option value="">@lang('dashboard/special.select') </option>
                        </select>
                    </div>
                    <div class="form-group">

                        <div class="form-group">
                            <label class="form-label mt-2">@lang('dashboard/student.study_level'):</label>
                            <select class="form-control  col-6" id="study_level" title="Select Your Gender">
                                <option value="">@lang('dashboard/special.select') </option>
                                <option value="1">Level 1</option>
                                <option value="2">Level 2</option>
                                <option value="3">Level 3</option>
                                <option value="4">Level 4</option>
                                <option value="5">Level 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label mt-2">@lang('dashboard/student.choose_city'):</label>
                        <div class="form-group">
                            <select class="form-control  col-6" id="city_id">
                                <option value="">@lang('dashboard/special.select') </option>
                                @foreach ($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-2">{{ __('trainingad.gender') }}:</label>
                        <div class="form-group">
                            <select class="form-control  col-6" id="gender" title="Select Your Gender">
                                <option value="">@lang('dashboard/special.select') </option>
                                <option value="M">{{__('trainingad.Male')}}</option>
                                <option value="F">{{__('trainingad.Female')}}</option>
                            </select>
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
                            <button type="button" onclick="store()" class="btn btn-primary mr-2">@lang('dashboard/university.add')</button>
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
                    });
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
    $(document).ready(function() {
        $('#college_id').on('change',function() {
            var college_id = $(this).val();
            var locale = "{{ app()->getLocale() }}"

            if(college_id){
               $.ajax({
                   url:'/cms/admin/getSpecialization/'+college_id,
                   type:'GET',
                   success: function(data){
                       $('#specialization_id').empty();
                       $.each(data, function (key, value) {
                        var obj = jQuery.parseJSON(value.name);
                        {{-- console.log(obj); --}}
                        if(locale == 'ar') {
                            $('#specialization_id').append('<option value=" ' + value.id + '">' + obj.ar + '</option>');

                        }else {
                        $('#specialization_id').append('<option value=" ' + value.id + '">' + obj.en + '</option>');

                        }
                    });
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
        function store() {

            axios.post('/cms/admin/students', {
                   name: document.getElementById('name').value,
                   email: document.getElementById('email').value,
                   mobile: document.getElementById('mobile').value,
                   birth_date: document.getElementById('birth_date').value,
                   college_id: document.getElementById('college_id').value,
                   city_id: document.getElementById('city_id').value,
                   gender:document.getElementById('gender').value,
                   study_level:document.getElementById('study_level').value,
                   university_id:document.getElementById('university_id').value,
                   specialization_id:document.getElementById('specialization_id').value,
                   bio:document.getElementById('bio').value,
                   address:document.getElementById('address').value,
                   status: document.getElementById('status').checked,

                }).then(function(response) {
                    window.location.href = '/cms/admin/students/create';
                }).catch(function(error) {
                    toastr.error(error.response.data.message)
                });
        }
    </script>
@endsection
