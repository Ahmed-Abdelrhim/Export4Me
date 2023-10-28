@extends('layouts.master')

@section('content')
<div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
    @include('manager.layout.navbar')
    @include('manager.layout.sidebar')
    <main class="bmd-layout-content">
        <div class="container-fluid">
            <div class="row  m-1 pb-4 mb-3 ">
                <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-2">
                    <div class="page-header breadcrumb-header ">
                        <div class="row align-items-end ">
                            <div class="col-lg-8">
                                <div class="page-header-title text-left-rtl">
                                    <div class="d-inline">
                                        <h3 class="lite-text ">صفحة الزيارات</h3>
                                        <span class="lite-text text-gray">كل الزيارات</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active">صفحة الزيارات</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumbotron shade pt-5">
                <div class="action">
                    @if ($page == 'Allvistors')
                        <a href="{{ route('manager.vistor.export', 'All') }}" class="btn btn-main f-forth fnt-xxs">تصدير كملف اكسل</a>                        
                    @else
                        <a href="{{ route('manager.vistor.export', 'my') }}" class="btn btn-main f-forth fnt-xxs">تصدير كملف اكسل</a>                        
                    @endif
                    <a class="btn btn-main f-success fnt-xxs" href="{{ route('manager.myvisitor.create') }}">إنشاء زيارة  </a>
                    <form method="POST" action="{{route('manager.vistor.deleteAll')}}" style="margin-bottom: 0rem">
                        @csrf
                        <input type="hidden" name="usersType" value="{{ $page }}">
                        <input type="hidden" name="recardsIds" id="recardsIds" value="">
                        <input type="submit" value="حذف الكل" class="btn btn-main f-danger btn-block fnt-xxs " id="deleteAll" disabled>
                    </form>
                </div>
                <div class="table-title-action">
                    <h3 class="display-4">كل تقارير الزيارات</h3>
                </div>
                <hr/>
                <div class="table-responsive">
                    @if ($page == 'Allvistors')
                        <table class="table table-bordered">
                            <tr>
                                <td><input type="checkbox" class="Allcheckbox"></td>
                                <td>كود اليوزر</td>
                                <td>رقم جوال اليوزر</td>
                                <td>رصيد اليوزر</td>
                                <td>عدد الشرائح</td>
                                <td>عدد التفعيلات</td>
                                <td>تاريخ الزيارة</td>
                                <td>وقت الزيارة</td>
                                <td>رقم المنشأة</td>
                                <td>رقم السجل التجارى</td>
                                <td>تاريخ انتهاء السجل</td>
                                <td>رقم هوية المالك</td>
                                <td>تاريخ انتهاء هوية المالك</td>
                                <td>رقم هوية الموظف /البائع</td>
                                <td>تاريخ انتهاء الموظف /البائع</td>
                                <td>ملاحظات</td>
                                <td>الموقع</td>
                            </tr>
                            @foreach ($Allreports as $reports)
                                <input type="hidden" id="latitude" value="{{$reports->lat}}">
                                <input type="hidden" id="longitude" value="{{$reports->long}}">
                                <tr>
                                    <td><input type="checkbox" class="checkbox" value="{{ $reports->id }}"></td>
                                    <td>{{ $reports->vistor_code }}</td>
                                    <td>{{ $reports->vistor_phone }}</td>
                                    <td>{{ $reports->vistor_balance }}</td>
                                    <td>{{ $reports->vistor_count_slides }}</td>
                                    <td>{{ $reports->vistor_count_activity }}</td>
                                    <td>{{ $reports->date }}</td>
                                    <td>{{ $reports->time }}</td>
                                    <td>{{ $reports->place_code }}</td>
                                    <td>{{ $reports->place_trade_number }}</td>
                                    <td>{{ $reports->place_expire_date }}</td>
                                    <td>{{ $reports->Owner_identify_number }}</td>
                                    <td>{{ $reports->Owner_ID_expiry_date }}</td>
                                    <td>{{ $reports->seller_identify_number }}</td>
                                    <td>{{ $reports->seller_ID_expiry_date }}</td>
                                    <td>{{ $reports->notes }}</td>
                                    <td>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modelLoc" class="btn main f-second fnt-xxs showloc" data-lat="{{ $reports->lat }}" data-long="{{$reports->long }}">عرض</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else 
                        <table class="table table-bordered">
                            <tr>
                                <td><input type="checkbox" class="Allcheckbox"></td>
                                <td>كود اليوزر</td>
                                <td>تاريخ الزيارة</td>
                                <td>ملاحظات</td>
                                <td>الموقع</td>
                            </tr>
                            @foreach ($Allreports as $reports)
                                <input type="hidden" id="latitude" value="{{$reports->lat}}">
                                <input type="hidden" id="longitude" value="{{$reports->long}}">
                                <tr>
                                    <td><input type="checkbox" class="checkbox" value="{{ $reports->id }}"></td>
                                    <td>{{ $reports->vistor_code }}</td>
                                    <td>{{ \Carbon\Carbon::parse($reports->vistor_date)->format('Y/m/d')}}</td>
                                    <td>{{ $reports->notes }}</td>
                                    <td>
                                        <button type="button"  data-bs-toggle="modal" data-bs-target="#modelLoc" class="btn main f-second fnt-xxs showloc" data-lat="{{ $reports->lat }}" data-long="{{$reports->long }}">عرض</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>   
                    @endif
                </div>
                @include('layouts.MLoc')
            </div>
        </div>
    </main>
</div>
@endsection

@section('js')
@include('layouts.messages')
<script>
     $(function(){

        $('.showloc').on('click', function(e){
            e.preventDefault();
            let lat = $(this).attr('data-lat');
            let long = $(this).attr('data-long');
            $('.googleMap').html(`<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=${lat}, ${long}+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe>`);
        })

        // user select only

        $(".checkbox").on('change', function(){
            getRecoards();
        });

        // userselect All
        $(".Allcheckbox").on('change', function(){

            $('.checkbox').prop('checked', this.checked);

            getRecoards();

        });

        function getRecoards(){
            let recardsIds = [];

            $.each($('.checkbox:checked'), function(){
                recardsIds.push($(this).val());    
            })
            
            $('#recardsIds').val(JSON.stringify(recardsIds));

            if(recardsIds.length > 0){

                $('#deleteAll').attr('disabled', false);

            }
            else {

                $('#deleteAll').attr('disabled', true);
            }
        
        }

        $("form").on('submit', function(){
            let alertMsg = confirm('هل تريد حذف هذه العناصر بالفعل ؟');
            if(alertMsg == true){
                return true;
            }
            else {
                return false;
            }
        })


    })
</script>
@endsection