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
                                            <h3 class="lite-text ">صفحة شركات الشحن</h3>
                                            <span class="lite-text text-gray">كل شركات الشحن</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item active">صفحة شركه الشحن</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.messages')
                <div class="jumbotron shade pt-5">
                    <div class="table-title-action">
                        <h3 class="display-4">جدول شركه الشحن</h3>
                        <!-- <a href="#" class="btn main f-first fnt-xxs">إضافة شركه شحن جديده</a> -->
                    </div>
                    <hr/>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>رقم شركه الشحن</td>
                                <td>اسم المنشأ</td>
                                <td>اسم صاحب المنشأ</td>
                                <td>اسم المدير المسئول</td>
                                <td>العنوان</td>




                                <td>الموقع</td>
                                <td>الميديا</td>
                                <td>الأيميل الرسمي للمسئول</td>
                                <td>التليفون الأرضي</td>
                                <td>الهاتف المحمول</td>


                                <td>أنواع الشحن</td>


                                <td>السجل التجاري</td>
                                <td> تاريخ الإنشاء</td>
                                <td>اتخاذ إجراء</td>
                            </tr>
                            @forelse ($shippings as $shipping)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $shipping->company_name }}</td>
                                    <td>{{ $shipping->owner_name }}</td>
                                    <td>{{ $shipping->manager_name }}</td>
                                    <td>{{ $shipping->address }}</td>


                                    <td>{{ $shipping->website }}</td>
                                    <td>{{ $shipping->media }}</td>
                                    <td>{{ $shipping->email }}</td>
                                    <td>{{ $shipping->landline }}</td>
                                    <td>{{ $shipping->mobile_phone }}</td>


                                    <td>{{ $shipping->shipping_types }}</td>
                                    <td>{{ $shipping->commercial_record }}</td>

                                    <td>{{ $shipping->created_at }}</td>
                                    <td>
                                        <!-- <a class="btn flat f-second fnt-xxs" href="#">تعديل</a> -->
                                        <a class="btn outlined c-danger o-danger fnt-xxs" href="{{route('admin.shipping.destroy' , $shipping->id)}}">حذف</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>لا يوجد شركات شحن بعد</td>
                                </tr>
                            @endforelse
                        </table>
                        <nav dir="ltr" aria-label="Page navigation example">
                                <ul class="pagination ">
                                    {{ $shippings->links() }}
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
