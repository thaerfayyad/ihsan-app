@extends('cms.parent')

@section('page-name','')
@section('main-page','')
@section('sub-page',__('dashboard/student.edit_student'))
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
                <h3 class="card-title">@lang('dashboard/student.edit_student')</h3>
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
                            <input type="text" class="form-control" id="name" value="{{ $student->name }}" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-1  col-form-label">@lang('dashboard/student.email'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="email" class="form-control" id="email" value="{{ $student->email }}" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-1 col-form-label">@lang('dashboard/student.bio'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <textarea name="" id="bio" cols="30" rows="5" class="form-control">{{ $student->bio }}</textarea>
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-1 col-form-label">@lang('dashboard/student.birth_date'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="date" class="form-control" id="birth_date" value="{{ $student->birth_date }}" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-1 col-form-label">@lang('dashboard/student.address'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="text" class="form-control" id="address" value="{{ $student->address }}" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label class="col-1 col-form-label">@lang('dashboard/student.mobile'): <span class="text-danger">*</span></label>
                        <div class="col-9">
                            <input type="tel" class="form-control" id="mobile" value="{{ $student->mobile }}" placeholder="" />
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">@lang('dashboard/special.choose_uni') :</label>
                        <select class="form-control  col-6" id="university_id">
                            <option value="">@lang('dashboard/special.select') </option>
                            @foreach ($universities as $university)
                            <option value="{{$university->id}}"{{ $student->id == $university->id ? 'selected' :'' }} >{{ $university->name}}</option>
                            @endforeach

                        </select>

                    </div>

                    <div class="form-group">
                        <label for="">@lang('dashboard/special.choose_college') :</label>
                        <select  class="form-control  col-6" id="college_id"  >
                                 <option value="">@lang('dashboard/special.select') </option>
                            @foreach ($colleges as $college )
                                <option value="{{ $college->id }}" {{ $student->id == $college->id ? 'selected' : '' }} > {{ $college->name}} </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">@lang('dashboard/student.choose_specialization'):</label>
                        <select  class="form-control  col-6" id="specialization_id"  >
                            <option value="">@lang('dashboard/special.select') </option>
                            @foreach ($specials as $special )
                                <option value="{{ $special->id }}" {{ $student->id == $special->id ? 'selected' : '' }} >{{ $special->name }}</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-2">@lang('dashboard/student.study_level') :</label>
                        <div class="form-group">
                            <select class="form-control  col-6" id="study_level" title="Select Your Gender">
                                <option value="">@lang('dashboard/special.select') </option>
                                <option value="1" {{ $student->study_level == '1' ? 'selected' : '' }} >Level 1</option>
                                <option value="2" {{ $student->study_level == '2' ? 'selected' : '' }} >Level 2</option>
                                <option value="3" {{ $student->study_level == '3' ? 'selected' : '' }} >Level 3</option>
                                <option value="4" {{ $student->study_level == '4' ? 'selected' : '' }} >Level 4</option>
                                <option value="5" {{ $student->study_level == '5' ? 'selected' : '' }} >Level 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label mt-2">@lang('dashboard/student.choose_city')  :</label>
                        <div class="form-group">
                            <select class="form-control  col-6" id="city_id">
                                <option value="">@lang('dashboard/special.select') </option>
                                @foreach ($cities as $city)
                                <option value="{{$city->id}}"{{ $student->id == $city->id ? 'selected' : '' }} > {{ $city->name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-2">{{ __('trainingad.gender') }}:</label>
                        <div class="form-group">
                            <select class="form-control  col-6" id="gender" title="Select Your Gender">
                                <option value="">@lang('dashboard/special.select') </option>
                                <option value="M" {{ $student->gender == 'M' ? 'selected' : ''   }}  > {{ __('trainingad.Male')}} </option>
                                <option value="F" {{ $student->gender == 'F' ? 'selected' : ''   }} > {{__('trainingad.Female')}} </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">{{ __('dashboard/university.status') }}</label>
                        <div class="col-3">
                            <span class="switch switch-outline switch-icon switch-success">
                                <label>
                                    <input type="checkbox"  {{ $student->status == 1 ? 'checked': ' ' }} id="status">
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
                            <button type="button" onclick="store('{{ $student->id }}')" class="btn btn-info mr-2">@lang('dashboard/university.add')</button>
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
        function store(id) {

            axios.put('/cms/admin/students/'+id, {
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
                    window.location.href = '/cms/admin/students';
                }).catch(function(error) {
                    toastr.error(error.response.data.message)
                });
        }
    </script>
@endsection
