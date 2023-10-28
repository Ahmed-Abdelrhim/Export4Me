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
                                        <h3 class="lite-text ">تقرير زيارات المشرفين</h3>
                                        <span class="lite-text text-gray">إنشاء زيارة جديدة</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item "><a href="{{ route('manager.dashboard') }}"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active">إضافة زيارة</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.messages')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="jumbotron shade pt-5">
                        <div class="table-title-action">
                            <h3 class="display-4">إضافة زيارة جديدة </h3>
                            <a href="{{ url()->previous() }}" class="btn outlined c-third o-third fnt-xxs ">رجوع</a>
                        </div>
                        <hr/>
                        <form method="POST" action="{{route('manager.myvisitor.store')}}">
                            @csrf
                            <input type="hidden" id="latitude" name="lat">
                            <input type="hidden" id="longitude" name="long">
                            <div class="mb-3">
                                <label>رقم اليوزر</label>
                                <input type="text" name="vistor_code" class="form-control" required placeholder="رقم اليوزر" value="Pos_" minlength="10" maxlength="10"/>
                            </div>

                            <div class="mb-3">
                                <label>ملاحظات</label>
                                <textarea required name="notes" class="form-control" id="notes" cols="5" rows="5"></textarea>
                            </div>

                            <div class="mb-3">
                                <button type="button" class="btn outlined c-third o-third fnt-xxs" id="location">
                                    تسجيل موقعك
                               </button>
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn flat f-second btn-block fnt-xxs" value="حفظ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

@section('js')
@include('layouts.messages')
<script>
    $(function(){
        $("#location").on('click', function(){
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    $('#latitude').val(`${position.coords.latitude}`);
                    $('#longitude').val(`${position.coords.longitude}`);
                    if($('#latitude').val().length > 0 || $('#longitude').val().length > 0){
                        $("#location").html('<i class="fa fa-check"></i>')
                    }
                },
                function(failure) {
                    if(failure.message.indexOf("Only secure origins are allowed") == 0) {
                        alert('Only secure origins are allowed by your browser.');
                    }
                }
            )
        })
    })
</script>
@endsection

