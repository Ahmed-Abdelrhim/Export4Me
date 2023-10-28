@extends('frontend.layouts.app')
@section('css')

@endsection
@section('content')
    <div class="row">
        <form action="">
            <h3>نموذج المستخلص</h3>
            <label for=""> اسم المنشأء </label>
            <input type="text" placeholder="ادخل اسم المنشأء " class="box"/>

            <label for=""> اسم صاحب المنشأء </label>
            <input type="text" placeholder="ادخل اسم المنشأء " class="box"/>

            <label for=""> اسم المدير المسئول </label>
            <input type="text" placeholder="ادخل اسم المدير المسئول " class="box"/>

            <label for=""> العنوان بالتفصيل </label>
            <input type="text" placeholder="ادخل العنوان بالتفصيل   " class="box"/>

            <label for="">الموقع الالكتروني ان وجد </label>
            <input type="text" placeholder=" ادخل الموقع الالكتروني" class="box"/>

            <label for=""> صفحه الميديا </label>
            <input type="text" placeholder=" ادخل صفحه الميديا " class="box"/>

            <label for=""> الأيميل الرسمي للمسئول </label>
            <input type="email" placeholder="ادخل الأيميل" class="box"/>

            <label for=""> التليفون الأرضي </label>
            <input
                type="number"
                placeholder="ادخل رقم التليفون الأرضي"
                class="box"
            />

            <label for=""> الهاتف المحمول</label>
            <input
                type="number"
                placeholder="ادخل رقم الهاتف المحمول"
                class="box"
            />

            <label for=""> أنواع الشحن </label>
            <input type="number" placeholder="ادخل أنواع الشحن" class="box"/>

            <label for=""> المواني الذي تعمل بها </label>
            <select name="" id="">
                <option value="">صادر</option>
                <option value="">وارد</option>
            </select>

            <label for=""> التخليص بحري؟ جوي؟ بري؟</label>
            <select name="" id="">
                <option value="">بحري</option>
                <option value="">جوي</option>
                <option value="">بري</option>
            </select>

            <label for=""> سنه الانشاء تاريخ السجل التجاري صوره منه حديثه </label>
            <input type="file" class="" name="" accept="image/png, image/jpeg"/>

            <label for=""> تاريخ رخصه المزاوله وارفاق صوره منها </label>
            <input type="file" class="" name="" accept="image/png, image/jpeg"/>

            <button class="button" type="submit">ارسال النموذج</button>
        </form>
    </div>
@endsection
