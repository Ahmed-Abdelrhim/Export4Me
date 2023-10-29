@extends('frontend.layouts.app')
@section('content')
    <div class="row">
        <form action="{{route('insurance.company.store')}}" method="POST" enctype="multipart/form-data">
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

            <h3>نموذج شركات التامين البحري</h3>

            <label for="company_name"> اسم المنشأء </label>
            <input name="company_name" type="text" placeholder="ادخل اسم المنشأء " class="box" required value="{{old('company_name')}}" id="company_name"/>
            @error('company_name')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for=""> اسم صاحب المنشأء </label>
            <input name="owner_name" type="text" placeholder="ادخل اسم المنشأء " class="box" required value="{{old('owner_name')}}" />
            @error('owner_name')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <label for=""> اسم المدير المسئول </label>
            <input name="manager_name" type="text" placeholder="ادخل اسم المدير المسئول " required class="box" value="{{old('manager_name')}}"/>
            @error('name="manager_name"')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <label for=""> العنوان بالتفصيل </label>
            <input name="address" type="text" placeholder="ادخل العنوان بالتفصيل   " required class="box" value="{{old('address')}}"/>
            @error('address')
            <span class="text-danger">{{$message}}</span>
            @enderror







            <label for="">الموقع الالكتروني ان وجد </label>
            <input name="website" type="text" placeholder=" ادخل الموقع الالكتروني" class="box" value="{{old('website')}}"/>
            @error('website')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for=""> صفحه الميديا </label>
            <input name="media" type="text" placeholder=" ادخل صفحه الميديا " class="box" value="{{old('media')}}"/>
            @error('media')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="email"> الأيميل الرسمي للمسئول </label>
            <input name="email" type="email" placeholder="ادخل الأيميل" class="box" id="email" required value="{{old('email')}}"/>
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for=""> التليفون الأرضي </label>
            <input name="landline" type="number" placeholder="ادخل رقم التليفون الأرضي" class="box" required value="{{old('landline')}}"/>
            @error('landline')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="phone_number"> الهاتف المحمول</label>
            <input name="phone_number" type="number" placeholder="ادخل رقم الهاتف المحمول" class="box" id="phone_number" required value="{{old('phone_number')}}"/>
            @error('phone_number')
            <span class="text-danger">{{$message}}</span>
            @enderror



            <label for="commercial_record"> سنه الانشاء تاريخ السجل التجاري صوره منه حديثه </label>
            <input name="commercial_record" type="file" class=""  accept="image/png, image/jpeg, image/jpg, image/webp" id="commercial_record"/>
            @error('commercial_record')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <button class="button" type="submit">ارسال النموذج</button>
        </form>
    </div>
@endsection

