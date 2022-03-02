@extends('cms.parent')

@section('page-name', 'الطلب')
@section('main-page', 'ادرة المحتوى')
@section('sub-page', 'الطلب')
@section('page-name-small', '')

@section('styles')

@endsection

@section('content')
    <!--begin::Advance Table Widget 5-->
    <div class="card card-custom gutter-b">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">الطلب</span>
                <span class="text-muted mt-3 font-weight-bold font-size-sm"></span>
            </h3>
            <div class="card-toolbar d-inline-block">


                <a href="{{ route('generate_pdf_order',$orders->id) }}" target="_blank"
                    class="btn btn-info font-weight-bolder font-size-sm"> تصدير لملف pdf</a>

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

                            <th > رقم التسلسلي </th>

                            <th > المنتج </th>
                            <th > الحجم </th>
                            <th > السعر </th>
                            {{-- <th style="min-width: 120px">Email</th> --}}
                            <th >الكمية </th>


                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{dd($orders)  }} --}}
                        @forelse ($orders->products as $product)
                            <tr>




                                <td>
                                    <div>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ $loop->iteration }}</span>

                                    </div>
                                </td>

                                <td>
                                    <div>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ @$product->name }}</span>

                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ @$product->size }}</span>

                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span
                                            class="text-dark-75 font-weight-bolder d-block font-size-lg">{{ @$product->price }}</span>

                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg"></span>
                                        <span class="text-muted font-weight-bold d-block">{{ @$product->quantity }}</span>
                                    </div>
                                </td>


                            </tr>

                        @empty
                            <h3> No Data Found</h3>
                        @endforelse

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
