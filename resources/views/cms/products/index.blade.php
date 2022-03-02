@extends('cms.parent')

@section('page-name', 'المنتجات')
@section('main-page', 'ادارة المحتوى')
@section('sub-page', 'المنتجات')
@section('page-name-small', 'المنتجات')

@section('styles')

@endsection

@section('content')
    <!--begin::Advance Table Widget 5-->
    <div class="card card-custom gutter-b">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">المنتجات</span>
                <span class="text-muted mt-3 font-weight-bold font-size-sm"></span>
            </h3>
            <div class="card-toolbar d-inline-block">
                <a href="{{ route('products.create') }}" class="btn btn-info font-weight-bolder font-size-sm"> اضافة منتج جديد</a>
                <a href="{{ route('generate_pdf') }}" target="_blank" class="btn btn-info font-weight-bolder font-size-sm">تصدير لملف pdf </a>

            </div>

        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-0">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_2">
                    <thead>
                        <tr class="text-uppercase">
                            <th style="min-width: 150px"> الصورة</th>
                            <th style="min-width: 150px">  الاسم</th>
                            {{-- <th style="min-width: 120px">Email</th> --}}
                            <th style="min-width: 120px">القسم </th>
                            <th style="min-width: 120px">الحالة</th>

                            <th style="min-width: 120px">السعر</th>
                            <th style="min-width: 120px">الكمية</th>
                            <th style="min-width: 120px">الحجم</th>
                            <th class="pr-0 text-right" style="min-width: 170px">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="pl-0">
                                    <div>
                                        <span class="symbol-label">
                                            <img src="{{ $product->image_path }}"
                                                class="h-75 align-self-end" alt="product image" width="100%" />
                                        </span>
                                    </div>

                                </td>
                                <td>
                                    <div>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $product->name }}</span>

                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg"></span>
                                        <span class="text-muted font-weight-bold d-block">{{@ $product->category->name }}</span>
                                    </div>
                                </td>

                                <td>
                                    <span
                                    class="label label-lg @if ($product->status) label-light-success @else label-light-danger @endif label-inline">
                                    {{ @$product->status }}</span>

                                </td>



                                <td>
                                    <div>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg"></span>
                                        <span class="text-muted font-weight-bold d-block">{{@ $product->price }}</span>
                                    </div>

                                </td>
                                <td>
                                    <div>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg"></span>
                                        <span class="text-muted font-weight-bold d-block">{{@ $product->quantity }}</span>
                                    </div>

                                </td>
                                <td>
                                    <div>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg"></span>
                                        <span class="text-muted font-weight-bold d-block">{{@ $product->size }}</span>
                                    </div>

                                </td>
                                {{-- <td>
                            <span
                                class="text-dart-75 font-weight-bolder d-block font-size-lg">{{$product->email_verifier_at ?? '-'}}</span>
                        <span
                            class="text-muted font-weight-bold">{{!is_null($product->email_verifier_at) ? 'Verified' : 'Not Verified'}}</span>
                        </td> --}}

                                <td class="pr-0 text-right">
                                    {{--  <a href="{{ route('products.show',$product->id) }}"
                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">

                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Shopping\Chart-line1.svg--><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path
                                                        d="M18,6 L11,6 C10.3333333,5.88561808 10,5.55228475 10,5 C10,4.44771525 10.3333333,4.11438192 11,4 L20,4 L20,13 C20,13.6666667 19.6666667,14 19,14 C18.3333333,14 18,13.6666667 18,13 L18,6 Z M6,18 L13,18 C13.6666667,18.1143819 14,18.4477153 14,19 C14,19.5522847 13.6666667,19.8856181 13,20 L4,20 L4,11 C4,10.3333333 4.33333333,10 5,10 C5.66666667,10 6,10.3333333 6,11 L6,18 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <rect fill="#000000" opacity="0.3"
                                                        transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) "
                                                        x="7" y="11" width="10" height="2" rx="1" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>  --}}
                                    {{-- <a href="#" onclick="performChangePassword('{{$product->email}}')"
                                class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-primary">
                                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Lock-overturning.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z"
                                                fill="#000000" opacity="0.3" />
                                            <path
                                                d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z"
                                                fill="#000000" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </a> --}}
                                    <a href="{{ route('products.edit', $product->id) }}"
                                        class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
                                                        fill="#000000" fill-rule="nonzero"
                                                        transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                    <path
                                                        d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
                                                        fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <a href="#" onclick="performDestroy('{{ $product->id }}', this)"
                                        class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                        <span class="svg-icon svg-icon-md svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path
                                                        d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                        fill="#000000" fill-rule="nonzero" />
                                                    <path
                                                        d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                        fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Advance Table Widget 5-->
@endsection

@section('scripts')
    {{-- <script src="{{asset('assets/js/pages/widgets.js')}}"></script> --}}
    <script>
        function performDestroy(id, reference) {
            confirmDestroy('/dashboard/products', id, reference);
        }

        // function performChangePassword(email){
        //     let data = {
        //         guard: 'product',
        //         email: email,
        //     }
        //     product('/cms/admin/reset-password', data);
        // }
    </script>
@endsection
