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
                                            <h3 class="lite-text ">صفحة المستخرجين</h3>
                                            <span class="lite-text text-gray">كل المستخرجين</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item active">صفحة المستخرج</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.messages')
                <div class="jumbotron shade pt-5">
                    <div class="table-title-action">
                        <h3 class="display-4">جدول المستخرج</h3>
                        <a href="#" class="btn main f-first fnt-xxs">إضافة مستخرج جديد</a>
                    </div>
                    <hr/>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>رقم المستخرج</td>
                                <td>اسم المنشأ</td>
                                <td>اسم صاحب المنشأ</td>
                                <td>اسم المدير المسئول</td>
                                <td>العنوان</td>

                                <td>الموقع</td>
                                <td>الميديا</td>
                                <td>بريد المستورد</td>
                                <td>التليفون الأرضي</td>
                                <td>الهاتف المحمول</td>

                                <td>أنواع الشحن</td>
                                <td>المواني الذي تعمل بها</td>
                                <td>التخليص بحري؟ جوي؟ بري؟</td>


                                <td>السجل التجاري</td>
                                <td> الرخصه</td>

                                <td> تاريخ الإنشاء</td>
                                <td>اتخاذ إجراء</td>
                            </tr>
                            {{--                            17 --}}
                            @forelse ($extractors as $extractor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $extractor->company_name }}</td>
                                    <td>{{ $extractor->owner_name }}</td>
                                    <td>{{ $extractor->manager_name }}</td>
                                    <td>{{ $extractor->address }}</td>


                                    <td>{{ $extractor->website }}</td>
                                    <td>{{ $extractor->media }}</td>
                                    <td>{{ $extractor->email }}</td>
                                    <td>{{ $extractor->landline }}</td>
                                    <td>{{ $extractor->mobile_phone }}</td>


                                    <td>{{ $extractor->shipping_types }}</td>
                                    <td>{{ $extractor->harbor_type }}</td>
                                    <td>{{ $extractor->clearance_type }}</td>


                                    <td>{{ $extractor->commercial_record }}</td>
                                    <td>{{ $extractor->license }}</td>

                                    <td>{{ $extractor->created_at }}</td>
                                    <td>
                                        <a class="btn flat f-second fnt-xxs" href="#">تعديل</a>
                                        <a class="btn outlined c-danger o-danger fnt-xxs" href="#">حذف</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>لا يوجد مستخرجين بعد</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection

