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
                                            <h3 class="lite-text ">صفحة المستوردين</h3>
                                            <span class="lite-text text-gray">كل المستوردين</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item active">صفحة المستورد</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.messages')
                <div class="jumbotron shade pt-5">
                    <div class="table-title-action">
                        <h3 class="display-4">جدول المستورد</h3>
                        <!-- <a href="#" class="btn main f-first fnt-xxs">إضافة مستورد جديد</a> -->
                    </div>
                    <hr/>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>#</td>
                                <td>اسم المنشأ</td>
                                <td>اسم صاحب المنشأ</td>
                                <td>اسم المدير المسئول</td>

                                <td> العنوان</td>
                                <td>الدوله</td>
                                <td>الموقع</td>
                                <td>الميديا</td>
                                <td>بريد المستورد</td>
                                <td>التليفون الأرضي</td>
                                <td>الهاتف المحمول</td>

                                <td>اسم المنتج المراد استيراده</td>
                                <td>مينا الوصول</td>
                                <td>المنشا المطلوب</td>
                                <td>شرح تفصيلي للمنتج</td>


                                <td> حجم الطلب الشهري او السنوي</td>
                                <td>قيمه ماسبق استيراده</td>



                                <td>القطاع الذي تنتمي اليه</td>
                                <td>موافقات الاستيراد</td>
                                <td>السجل التجاري</td>
                                <td>كتالوج للمنتج</td>


                                <td> تاريخ الإنشاء</td>
                                <td>اتخاذ إجراء</td>
                            </tr>

                            @forelse ($importers as $importer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $importer->company_name }}</td>
                                    <td>{{ $importer->owner_name }}</td>
                                    <td>{{ $importer->manager_name }}</td>

                                    <td>{{ $importer->address }}</td>
                                    <td>{{ $importer->country }}</td>
                                    <td>{{ $importer->website }}</td>
                                    <td>{{ $importer->media }}</td>
                                    <td>{{ $importer->email }}</td>
                                    <td>{{ $importer->landline }}</td>
                                    <td>{{ $importer->mobile_phone }}</td>


                                    <td>{{ $importer->product_name }}</td>
                                    <td>{{ $importer->harbor_name }}</td>
                                    <td>{{ $importer->origin }}</td>
                                    <td>{{ $importer->product_description }}</td>



                                    <td>{{ $importer->size }}</td>
                                    <td>{{ $importer->imported_before_value }}</td>

                                    <td>{{ $importer->sector }}</td>
                                    <td>{{ $importer->is_agreed_to_import == 1 ? 'نعم' : 'لا' }}</td>



                                    <!-- Importer Commercial Record  -->
                                    <td>
                                        @if(!empty($importer->commercial_record))
                                            <img src="{{asset('images/importers/commercial_records/'. $importer->commercial_record )}}"
                                                 alt="not-found" width="100px" height="100px;"/>
                                        @else
                                            No Image Uploaded
                                        @endif
                                    </td>


                                    <!-- Importer Product Catalog   -->
                                    <td>
                                        @if(!empty($importer->product_catalog))
                                            <img src="{{asset('images/importers/product_catalog/'. $importer->product_catalog )}}"
                                                 alt="not-found" width="100px" height="100px;"/>
                                        @else
                                            No Image Uploaded
                                        @endif
                                    </td>



                                    <!-- Created At -->
                                    <td>
                                        {{ \Carbon\Carbon::parse($importer->created_at)->format('d-M-Y H:i') }}
                                    </td>
                                    <td>
                                        <a class="btn outlined c-danger o-danger fnt-xxs" href="{{route('admin.importer.destroy' , $importer->id)}}">حذف</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>لا يوجد مستوردين بعد</td>
                                </tr>
                            @endforelse
                        </table>
                        <nav dir="ltr" aria-label="Page navigation example">
                                <ul class="pagination ">
                                    {{ $importers->links() }}
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection

