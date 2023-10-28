@extends('frontend.layouts.app')
@section('content')
    <div class="row">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <h3>نموذج شركات التامين البحري</h3>
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

            <label for=""> سنه الانشاء تاريخ السجل التجاري صوره منه حديثه </label>
            <input type="file" class="" name="" accept="image/png, image/jpeg"/>

            <button class="button" type="submit">ارسال النموذج</button>
        </form>
    </div>
@endsection

