@extends('frontend.layouts.forms')
@section('css')

@endsection
@section('content')
    <div class="row">
        <form action="{{route('extractor.store')}}" method="POST" enctype="multipart/form-data">
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


            <h3>نموذج المستخلص</h3>
            <label for=""> اسم المنشأء </label>
            <input name="company_name" type="text" placeholder="ادخل اسم المنشأء " class="box form-control  @error('company_name') is-invalid @enderror "
            required value="{{old('company_name')}}" />
            @error('company_name')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for=""> اسم صاحب المنشأء </label>
            <input name="owner_name" type="text" placeholder="ادخل اسم المنشأء " class="box form-control  @error('owner_name') is-invalid @enderror "
            required value="{{old('owner_name')}}" />
            @error('owner_name')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <label for=""> اسم المدير المسئول </label>
            <input name="manager_name" type="text" placeholder="ادخل اسم المدير المسئول " class="box form-control  @error('manager_name') is-invalid @enderror"
            required value="{{old('manager_name')}}"/>
            @error('name="manager_name"')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <label for=""> العنوان بالتفصيل </label>
            <input name="address" type="text" placeholder="ادخل العنوان بالتفصيل   " class="box form-control  @error('address') is-invalid @enderror "
            required value="{{old('address')}}"/>
            @error('address')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="">الموقع الالكتروني ان وجد </label>
            <input name="website" type="text" placeholder=" ادخل الموقع الالكتروني" class="box form-control  @error('website') is-invalid @enderror"
            value="{{old('website')}}"/>
            @error('website')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for=""> صفحه الميديا </label>
            <input name="media" type="text" placeholder=" ادخل صفحه الميديا " class="box form-control  @error('media') is-invalid @enderror"
                   value="{{old('media')}}"/>
            @error('media')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="email"> الأيميل الرسمي للمسئول </label>
            <input name="email" type="email" placeholder="ادخل الأيميل" class="box form-control  @error('email') is-invalid @enderror"
                   id="email" required value="{{old('email')}}"/>
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for=""> التليفون الأرضي </label>
{{--            <input name="landline" type="number" placeholder="ادخل رقم التليفون الأرضي" form-control  @error('commercial_record') is-invalid @enderror required value="{{old('landline')}}"/>--}}
            <input name="landline" type="text" placeholder="02xxxxxxxx" class="box form-control  @error('landline') is-invalid @enderror "
            required value="{{old('landline')}}"/>
            @error('landline')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="phone_number"> الهاتف المحمول</label>
{{--            <input name="phone_number" type="number" placeholder="ادخل رقم الهاتف المحمول" form-control  @error('commercial_record') is-invalid @enderror id="phone_number" required value="{{old('phone_number')}}"/>--}}
            <input name="phone_number" type="text" placeholder="01xxxxxxxxx" class="box form-control  @error('phone_number') is-invalid @enderror"
            id="phone_number" required value="{{old('phone_number')}}"/>
            @error('phone_number')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="shipping_types"> أنواع الشحن </label>
            <input name="shipping_types" type="text" placeholder="ادخل أنواع الشحن" class="box form-control  @error('shipping_types') is-invalid @enderror "
            id="shipping_types" required value="{{old('shipping_types')}}"/>
            @error('shipping_types')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="harbor_type"> المواني الذي تعمل بها </label>
            <select name="harbor_type" id="harbor_type" required class="box form-control  @error('harbor_type') is-invalid @enderror">
                <option value="1">صادر</option>
                <option value="2">وارد</option>
            </select>
            @error('harbor_type')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="clearance_type"> التخليص بحري؟ جوي؟ بري؟</label>
            <select name="clearance_type" id="clearance_type" required class="box form-control  @error('clearance_type') is-invalid @enderror">
                <option value="1">بحري</option>
                <option value="2">جوي</option>
                <option value="3">بري</option>
            </select>
            @error('clearance_type')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="commercial_record"> سنه الانشاء تاريخ السجل التجاري صوره منه حديثه </label>
            <input name="commercial_record" type="file" class="box form-control  @error('commercial_record') is-invalid @enderror"
                   accept="image/png, image/jpeg, image/jpg, image/webp" id="commercial_record"/>
            @error('commercial_record')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="license"> تاريخ رخصه المزاوله وارفاق صوره منها </label>
            <input name="license" type="file" class="box form-control  @error('license') is-invalid @enderror"
                   accept="image/png, image/jpeg, image/jpg, image/webp" id="license"/>
            @error('license')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <button class="butto" type="submit">ارسال النموذج</button>
        </form>
    </div>
@endsection
