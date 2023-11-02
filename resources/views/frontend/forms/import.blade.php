@extends('frontend.layouts.forms')
@section('content')
    <div class="row">
        <form action="{{route('importer.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h3>نموذج المستورد</h3>
            <label for=""> اسم المنشأء </label>
            <input name="company_name" type="text" placeholder="ادخل اسم المنشأء " class="box form-control  @error('company_name') is-invalid @enderror"
                   required value="{{old('company_name')}}"/>
            @error('company_name')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <label for=""> اسم صاحب المنشأء </label>
            <input name="owner_name" type="text" placeholder="ادخل اسم المنشأء " class="box form-control  @error('owner_name') is-invalid @enderror"
                   required value="{{old('owner_name')}}"/>
                @error('owner_name')
                <span class="text-danger">{{$message}}</span>
                @enderror



            <label for=""> اسم المدير المسئول </label>
            <input name="manager_name" type="text" placeholder="ادخل اسم المدير المسئول " class="box form-control  @error('manager_name') is-invalid @enderror"
                   required value="{{old('manager_name')}}"/>
                @error('manager_name')
                <span class="text-danger">{{$message}}</span>
                @enderror


            <label for=""> العنوان تفصيلي</label>
            <input name="address" type="text" placeholder="ادخل  العنوان تفصيلي" class="box form-control  @error('address') is-invalid @enderror "
                   required value="{{old('address')}}"/>
                @error('address')
                <span class="text-danger">{{$message}}</span>
                @enderror



            <label for=""> دولتك </label>
            <input name="country" type="text" placeholder=" ما هي دولتك " class="box form-control  @error('country') is-invalid @enderror"
                   required value="{{old('country')}}"/>
                @error('country')
                <span class="text-danger">{{$message}}</span>
                @enderror



            <label for="">الموقع الالكتروني </label>
            <input name="website" type="text" placeholder=" ادخل الموقع الالكتروني" class="box form-control  @error('website') is-invalid @enderror"
                   value="{{old('website')}}"/>
                @error('website')
                <span class="text-danger">{{$message}}</span>
                @enderror

            <label for=""> صفحه الميديا </label>
            <input name="media" type="text" placeholder=" ادخل صفحه الميديا " class="box form-control  @error('media') is-invalid @enderror "
                   value="{{old('media')}}"/>
                @error('media')
                <span class="text-danger">{{$message}}</span>
                @enderror

            <label for=""> الأيميل الرسمي للمسئول </label>
            <input name="email" type="email" placeholder="ادخل الأيميل" class="box form-control  @error('email') is-invalid @enderror"
                   required value="{{old('email')}}"/>
                @error('email')
                <span class="text-danger">{{$message}}</span>
                @enderror

            <label for=""> التليفون الأرضي </label>
{{--            <input type="number" placeholder="ادخل رقم التليفون الأرضي" class="box form-control" name="landline" required value="{{old('landline')}}" />--}}
            <input type="number" placeholder="02xxxxxxxx" class="box form-control  @error('landline') is-invalid @enderror"
                   name="landline" required value="{{old('landline')}}" />
                @error('landline')
                <span class="text-danger">{{$message}}</span>
                @enderror

            <label for=""> الهاتف المحمول</label>
{{--            <input type="number" placeholder="ادخل رقم الهاتف المحمول" class="box form-control" name="phone_number" required value="{{old('phone_number')}}" />--}}
            <input type="number" placeholder="01xxxxxxxxx" class="box form-control  @error('phone_number') is-invalid @enderror"
                   name="phone_number" required value="{{old('phone_number')}}" />
                @error('phone_number')
                <span class="text-danger">{{$message}}</span>
                @enderror




            <label for=""> اسم المنتج المراد استيراده </label>
            <input name="product_name" type="text" placeholder="ادخل اسم المنتج " class="box form-control  @error('product_name') is-invalid @enderror"
                   required value="{{old('product_name')}}"/>
                @error('product_name')
                <span class="text-danger">{{$message}}</span>
                @enderror



            <label for=""> مينا الوصول </label>
            <input name="harbor_name" type="text" placeholder="ادخل اسم مينا الوصول " class="box form-control  @error('harbor_name') is-invalid @enderror"
                   value="{{old('harbor_name')}}"/>
                @error('harbor_name')
                <span class="text-danger">{{$message}}</span>
                @enderror




            <label for=""> المنشا المطلوب ان وجد </label>
            <input name="origin" type="text" placeholder="ادخل اسم المنشا المطلوب " class="box form-control  @error('origin') is-invalid @enderror"
                   value="{{old('origin')}}"/>
                @error('origin')
                <span class="text-danger">{{$message}}</span>
                @enderror




            <label for=""> شرح تفصيلي للمنتج - وأي ملاحظات خاصه </label>
            <input name="product_description" type="text" placeholder="ملاحظات " required class="box form-control @error('product_description') is-invalid @enderror"
                   value="{{old('product_description')}}"/>
                @error('product_description')
                <span class="text-danger">{{$message}}</span>
                @enderror



            <label for=""> حجم الطلب الشهري او السنوي </label>
            <input name="size" type="text" placeholder="حجم الطلب " class="box form-control  @error('size') is-invalid @enderror "/>
                @error('size')
                <span class="text-danger">{{$message}}</span>
                @enderror




            <label for="">قيمه ماسبق استيراده ان وجد </label>
            <input name="imported_before_value" type="text" placeholder="ادخل القيمه " class="box form-control  @error('imported_before_value') is-invalid @enderror"
                   value="{{old('imported_before_value')}}"/>
                @error('imported_before_value')
                <span class="text-danger">{{$message}}</span>
                @enderror



            <label for="sector"> القطاع الذي تنتمي اليه </label>
            <select name="sector" id="sector" class="form-control  @error('sector') is-invalid @enderror ">
                <option value="1">القطاع 1</option>
                <option value="2">القطاع 2</option>
                <option value="3">القطاع 3</option>
            </select>
                @error('sector')
                <span class="text-danger">{{$message}}</span>
                @enderror




            <label for="is_agreed_to_import"> هل لديك موافقات الاستيراد </label>
            <select name="is_agreed_to_import" id="is_agreed_to_import" class="form-control  @error('is_agreed_to_import') is-invalid @enderror ">
                <option value="1">نعم</option>
                <option value="2">لا</option>
            </select>
                @error('is_agreed_to_import')
                <span class="text-danger">{{$message}}</span>
                @enderror





            <label for="commercial_record"> سنه الانشاء تاريخ السجل التجاري صوره منه حديثه </label>
            <input name="commercial_record" type="file" class="form-control  @error('commercial_record') is-invalid @enderror"
                   accept="image/png, image/jpeg"/>
                @error('commercial_record')
                <span class="text-danger">{{$message}}</span>
                @enderror



            <label for="">
                هل لديك صور او كتالوج للمنتج ؟ لو موجود ارفقه من فضلك
            </label>
            <input name="product_catalog" type="file" class="form-control  @error('product_catalog') is-invalid @enderror "
                   accept="image/png, image/jpeg"/>
                @error('product_catalog')
                <span class="text-danger">{{$message}}</span>
                @enderror


            <button class="butto" type="submit">ارسال النموذج</button>
        </form>
    </div>
@endsection
