@extends('layouts.master')
@section('content')
    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
        @include('admin.layout.navbar')
        @include('admin.layout.sidebar')
        <main class="bmd-layout-content">
            <div class="container-fluid">
                <div class="row  m-1 pb-4 mb-3 ">
                    <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-2">
                        <div class="page-header breadcrumb-header ">
                            <div class="row align-items-end ">
                                <div class="col-lg-8">
                                    <div class="page-header-title text-left-rtl">
                                        <div class="d-inline">
                                            <h3 class="lite-text ">صفحة المصدرين</h3>
                                            <span class="lite-text text-gray">كل المصدرين</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item active">صفحة المصدر</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.messages')
                <div class="jumbotron shade pt-5">
{{--                    <div dir="ltr" class="input-group mb-3">--}}
{{--                        --}}
{{--                                    <input type="text" class="form-control" placeholder="search... "--}}
{{--                                        aria-label="Recipient's username" aria-describedby="button-addon2">--}}
{{--                                    <div class="input-group-append">--}}
{{--                                        <button class="btn btn-outline-secondary  c-primary" type="button"--}}
{{--                                            id="button-addon2"><i class="fab fas fa-search"></i></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}



                    <div class="table-title-action">
                        <h3 class="display-4">جدول المصدر</h3>
                        <!-- <a href="#" class="btn main f-first fnt-xxs">إضافة مصدر جديد</a> -->
                    </div>
                    <hr/>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>اسم المنشأ</td>
                                <td>اسم صاحب المنشأ</td>
                                <td>اسم المدير المسئول</td>

                                <td>عنوان المصنع</td>

                                <td>الدوله</td>
                                <td>الموقع</td>
                                <td>الميديا</td>
                                <td>بريد المصدر</td>

                                <td>التليفون الأرضي</td>
                                <td>الهاتف المحمول</td>

                                <td>اسم المنتج المراد تصديره</td>

                                <td>شرح تفصيلي للمنتج </td>
                                <td>كميه الإنتاج الشهري /السنوي </td>
                                <td> هل تبيع في السوق المحلي </td>
                                <td>بلد صدرت لها من قبل ان وجدت </td>
                                <td>قيمه ماسبق التصدير </td>
                                <td>البلد او المنطقه او القاره </td>
                                <td> شركه شحن تم التعامل معها من قبل </td>
                                <td>القطاع </td>

                                <td>هل لديك سجل مصدرين ساري </td>
                                <td>هل تربد تدبير أوراق تصدير </td>
                                <td>هل علي استعداد استقبال فريق التصوير </td>


                                <td>السجل التجاري </td>
                                <td>بروشور للمنتج </td>

                                <td> تاريخ الإنشاء</td>
                                <td>اتخاذ إجراء</td>
                            </tr>
                            @forelse ($exporters as $exporter)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $exporter->company_name }}</td>
                                    <td>{{ $exporter->owner_name }}</td>
                                    <td>{{ $exporter->manager_name }}</td>
                                    <td>{{ $exporter->factory_address }}</td>



                                    <td>{{ $exporter->country }}</td>
                                    <td>{{ $exporter->website }}</td>
                                    <td>{{ $exporter->media }}</td>
                                    <td>{{ $exporter->email }}</td>
                                    <td>{{ $exporter->landline }}</td>
                                    <td>{{ $exporter->mobile_phone }}</td>


                                    <td>{{ $exporter->product_name }}</td>
                                    <td>{{ $exporter->product_description }}</td>


                                    <td>{{ $exporter->production_quantity }}</td>
                                    <td>{{ $exporter->local_selling == 1 ? 'نعم' : 'لا' }}</td>


                                    <td>{{ $exporter->country_export_to_before }}</td>
                                    <td>{{ $exporter->country_export_to_before_value }}</td>
                                    <td>{{ $exporter->exporter_place }}</td>
                                    <td>{{ $exporter->shipping_worked_before }}</td>


                                    <td>{{ $exporter->sector }}</td>
                                    <td>{{ $exporter->exporter_record == 1 ? 'نعم' : 'لا' }}</td>
                                    <td>{{ $exporter->export_paper == 1 ? 'نعم' : 'لا' }}</td>
                                    <td>{{ $exporter->photo_team == 1 ? 'نعم' : 'لا' }}</td>


                                    <td>{{ $exporter->commercial_record }}</td>
                                    <td>{{ $exporter->product_brochure }}</td>
                                    <td>{{ $exporter->created_at }}</td>

                                    <td>
                                        <!-- <a class="btn flat f-second fnt-xxs" href="#">تعديل</a> -->
                                        <a class="btn outlined c-danger o-danger fnt-xxs" href="{{route('admin.exporter.destroy' , $exporter->id)}}">حذف</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>لا يوجد مصدرين بعد</td>
                                </tr>
                            @endforelse
                        </table>


                            <nav dir="ltr" aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{ $exporters->links() }}
                                </ul>
                            </nav>

                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection

