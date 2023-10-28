@extends('layouts.master')

@section('content')
    <div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
        @include('Agent.layout.navbar')
        @include('Agent.layout.sidebar')
        <main class="bmd-layout-content">
            <div class="container-fluid">
                <div class="row  m-1 pb-4 mb-3 ">
                    <div class="col-xs-12  col-sm-12  col-md-12  col-lg-12 p-2">
                        <div class="page-header breadcrumb-header ">
                            <div class="row align-items-end ">
                                <div class="col-lg-8">
                                    <div class="page-header-title text-left-rtl">
                                        <div class="d-inline">
                                            <h3 class="lite-text ">تقرير الزيارة</h3>
                                            <span class="lite-text text-gray">إنشاء تقرير جديد</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item "><a href="{{ route('Agent.dashboard') }}"><i
                                                    class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item active">إضافة تقرير</li>
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
                                <h3 class="display-4">إضافة تقرير جديد</h3>
                                <a href="{{ route('vistor.index') }}"
                                   class="btn outlined c-third o-third fnt-xxs ">رجوع</a>
                            </div>
                            <hr/>
                            <form method="POST" action="{{route('vistor.store')}}">
                                @csrf
                                <input type="hidden" id="latitude" name="lat">
                                <input type="hidden" id="longitude" name="long">
                                <div class="row">
                                    <div class="col-md-6">


                                        {{--First Required--}}
                                        <div class="mb-3">
                                            <label>رقم اليوزر</label>
                                            <input type="text" name="vistor_code" class="form-control" required
                                                   placeholder="رقم اليوزر" value="Pos_" minlength="10" maxlength="10"/>
                                        </div>


                                        {{--Second Required--}}
                                        <div class="mb-3">
                                            <label>رقم جوال صاحب اليوزر</label>
                                            <input type="text" pattern="\d*" required name="vistor_phone"
                                                   class="form-control" value="05" minlength="10" maxlength="10"/>
                                        </div>



{{--                                        <div class="mb-3">--}}
{{--                                            <label>كم عدد التفعيلات</label>--}}
{{--                                            <input type="number" name="vistor_count_activity" class="form-control"--}}
{{--                                                   required/>--}}
{{--                                        </div>--}}

{{--                                        <div class="mb-3">--}}
{{--                                            <label>رقم هوية الموظف /البائع</label>--}}
{{--                                            <input type="text" pattern="\d*" name="seller_identify_number"--}}
{{--                                                   class="form-control" minlength="10" maxlength="10"/>--}}
{{--                                        </div>--}}

                                    </div>

                                    <div class="col-md-6">
                                        {{--Third Required--}}
                                        <div class="mb-3">
                                            <label>كم الرصيد في اليوزر</label>
                                            <input type="number" name="vistor_balance" class="form-control" required/>
                                        </div>


                                        {{--Fourth Required--}}
                                        <div class="mb-3">
                                            <label>كم عدد الشرائح الجديدة</label>
                                            <input type="number" name="vistor_count_slides" class="form-control"
                                                   required/>
                                        </div>

                                    </div>



{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label>رقم المنشأة</label>--}}
{{--                                            <input type="text" pattern="\d*" name="place_code" class="form-control"--}}
{{--                                                   minlength="10" maxlength="10"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label>رقم السجل التجارى</label>--}}
{{--                                            <input type="text" pattern="\d*" name="place_trade_number"--}}
{{--                                                   class="form-control" minlength="10" maxlength="10"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label>تاريخ انتهاء السجل</label>--}}
{{--                                            <input type="text" name="place_expire_date" class="form-control"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label>رقم هوية المالك</label>--}}
{{--                                            <input type="text" pattern="\d*" name="Owner_identify_number"--}}
{{--                                                   class="form-control" minlength="10" maxlength="10"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <label>تاريخ انتهاء هوية المالك</label>--}}
{{--                                            <input type="text" name="Owner_ID_expiry_date" class="form-control"/>--}}
{{--                                        </div>--}}

{{--                                        <div class="mb-3">--}}
{{--                                            <label>تاريخ انتهاء هوية الموظف / البائع</label>--}}
{{--                                            <input type="text" name="seller_ID_expiry_date" class="form-control"/>--}}
{{--                                        </div>--}}

{{--                                    </div>--}}



                                </div>


                                {{--  Required Notes --}}
                                <div class="mb-3">
                                    <label>ملاحظات</label>
                                    <textarea required name="notes" class="form-control" id="notes" cols="5"
                                              rows="5"></textarea>
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

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


    <script>
        $(function () {
            $("#location").on('click', function () {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        $('#latitude').val(`${position.coords.latitude}`);
                        $('#longitude').val(`${position.coords.longitude}`);
                        if ($('#latitude').val().length > 0 || $('#longitude').val().length > 0) {
                            $("#location").html('<i class="fa fa-check"></i>')
                        }
                    },
                    function (failure) {
                        if (failure.message.indexOf("Only secure origins are allowed") == 0) {
                            alert('Only secure origins are allowed by your browser.');
                        }
                    }
                )
            })
        })
    </script>
@endsection

