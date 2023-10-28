@extends('frontend.layouts.app')
@section('content')
    <!--==================== CONTACT ====================-->
    <div class="row">
        <form action="{{route('exporter.store')}}" method="POST" enctype="multipart/form-data">
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


            <h3> نموذج المصدر </h3>
            <label for="company_name"> اسم المنشأء </label>
            <input name="company_name" type="text" placeholder="ادخل اسم المنشأء " class="box @error('company_name') is-invalid @enderror"
                   id="company_name" required />
            @error('company_name')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="owner_name"> اسم صاحب المنشأء </label>
            <input name="owner_name" type="text" placeholder="ادخل اسم المنشأء " class="box is-invalid "
                   id="owner_name" required />
            @error('owner_name')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <label for="manager_name"> اسم المدير المسئول </label>
            <input name="manager_name" type="text" placeholder="ادخل اسم المدير المسئول " class="box @error('manager_name') is-invalid @enderror"
                   id="manager_name" required />
            @error('manager_name')
            <span class="text-danger">{{$message}}</span>
            @enderror



            <label for="factory_address"> عنوان المصنع </label>
            <input name="factory_address" type="text" placeholder="ادخل عنوان المصنع " class="box @error('factory_address') is-invalid @enderror"
                   id="factory_address" required />
            @error('factory_address')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="country"> دولتك </label>
            <input name="country" type="text" placeholder=" ما هي دولتك " class="box"  id="country" />
            @error('country')
            <span class="text-danger">{{$message}}</span>
            @enderror



            <label for="website">الموقع الالكتروني </label>
            <input name="website" type="text" placeholder=" ادخل الموقع الالكتروني" class="box" id="website" />
            @error('website')
            <span class="text-danger">{{$message}}</span>
            @enderror



            <label for="media"> صفحه الميديا </label>
            <input name="media" type="text" placeholder=" ادخل صفحه الميديا " class="box" id="media" />
            @error('media')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="email"> الأيميل الرسمي للمسئول </label>
            <input name="email" type="email" placeholder="ادخل الأيميل" class="box" id="email" />
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="landline"> التليفون الأرضي </label>
            <input name="landline" type="number" placeholder="ادخل رقم التليفون الأرضي" class="box"  id="landline" />
            @error('landline')
            <span class="text-danger">{{$message}}</span>
            @enderror




            <label for="phone_number"> الهاتف المحمول</label>
            <input name="phone_number" type="number" placeholder="ادخل رقم الهاتف المحمول" class="box" id="phone_number" />
            @error('phone_number')
            <span class="text-danger">{{$message}}</span>
            @enderror




            <label for="product_name"> اسم المنتج المراد تصديره </label>
            <input name="product_name" type="text" placeholder="ادخل اسم المنتج " class="box" id="product_name" />
            @error('product_name')
            <span class="text-danger">{{$message}}</span>
            @enderror




            <label for="product_description"> شرح تفصيلي للمنتج - وأي ملاحظات خاصه </label>
            <input name="product_description" type="text" placeholder="ملاحظات " class="box" id="product_description" />
            @error('product_description')
            <span class="text-danger">{{$message}}</span>
            @enderror





            <label for="production_quantity"> كميه الإنتاج الشهري /السنوي </label>
            <input name="production_quantity" type="text" placeholder="كميه الإنتاج " class="box" id="production_quantity" />
            @error('production_quantity')
            <span class="text-danger">{{$message}}</span>
            @enderror




            <label for="local_selling"> هل تبيع في السوق المحلي - وأين </label>
            <input name="local_selling" type="text" placeholder="اين تبيع" class="box" id="local_selling"/>
            @error('local_selling')
            <span class="text-danger">{{$message}}</span>
            @enderror




            <label for="country_export_to_before"> أي بلد صدرت لها من قبل ان وجدت </label>
            <input name="country_export_to_before" type="text" placeholder="ادخل  بلد صدرت لها " class="box" id="country_export_to_before"/>
            @error('country_export_to_before')
            <span class="text-danger">{{$message}}</span>
            @enderror




            <label for="country_export_to_before_value">قيمه ماسبق التصدير </label>
            <input name="country_export_to_before_value" type="text" placeholder="ادخل القيمه " class="box" id="country_export_to_before_value"/>
            @error('country_export_to_before_value')
            <span class="text-danger">{{$message}}</span>
            @enderror



            <label for="exporter_place"> البلد او المنطقه او القاره الراغب التصدير اليها ان وجدت ؟ ولماذا ؟</label>
            <input name="exporter_place" type="text" placeholder="ادخل البلد " class="box" id="exporter_place" required />
            @error('exporter_place')
            <span class="text-danger">{{$message}}</span>
            @enderror




            <label for="shipping_worked_before">لو تعاملت مع شركه شحن من قبل اكتب بياناتها والشخص المسئول </label>
            <textarea name="shipping_worked_before" placeholder="ادخل شركه شحن " class="box" id="shipping_worked_before"></textarea>
            @error('shipping_worked_before')
            <span class="text-danger">{{$message}}</span>
            @enderror



            <label for="sector"> القطاع الذي تنتمي اليه </label>
            <select name="sector" id="sector">
                <option value="1">القطاع 1</option>
                <option value="2">القطاع 2</option>
                <option value="3">القطاع 3</option>
            </select>
            @error('sector')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <label for="exporter_record"> هل لديك سجل مصدرين ساري؟ </label>
            <select name="exporter_record" id="exporter_record">
                <option value="1">نعم</option>
                <option value="2"> لا</option>
            </select>
            @error('exporter_record')
            <span class="text-danger">{{$message}}</span>
            @enderror



            <label for="export_paper"> هل تربد تدبير أوراق تصدير ؟ </label>
            <select name="export_paper" id="export_paper">
                <option value="1">نعم</option>
                <option value="2"> لا</option>
            </select>
            @error('export_paper')
            <span class="text-danger">{{$message}}</span>
            @enderror



            <label for="photo_team">هل علي استعداد استقبال فريق التصوير لزيارة مصنعك </label>
            <select name="photo_team" id="photo_team">
                <option value="1">نعم</option>
                <option value="2"> لا</option>
            </select>
            @error('photo_team')
            <span class="text-danger" >{{$message}}</span>
            @enderror



            <label for="commercial_record"> سنه الانشاء تاريخ السجل التجاري صوره منه حديثه </label>
            <input type="file" class="commercial_record" name="commercial_record" accept="image/png, image/jpeg, image/jpeg, image/webp" id="commercial_record" />
            @error('commercial_record')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <!--   0223769380     01152067271  -->


            <label for="product_brochure"> هل لديك بروشور للمنتج ؟ لو موجود ارفقه من فضلك </label>
            <input type="file" class="product_brochure" name="product_brochure" accept="image/png, image/jpeg, image/jpeg, image/webp" id="product_brochure" />
            @error('product_brochure')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <button class="button" type="submit">
                ارسال النموذج
            </button>

        </form>
    </div>
@endsection


