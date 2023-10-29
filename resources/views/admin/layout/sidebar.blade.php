<div id="dw-s1" class="bmd-layout-drawer bg-faded" aria-expanded="true" aria-hidden="true">

    <div class="container-fluid side-bar-container">
        <header class="pb-0">
            <a class="navbar-brand">
                {{ auth()->user()->name }}
            </a>
        </header>
        <p class="side-comment">أساسي</p>
        <li class="side a-collapse short ">
            <a href="{{ route('admin.dashboard') }}" class="side-item selected"><i class="fas fa-home  mr-1"></i>الرئيسية</a>
        </li>


        <ul class="side a-collapse short">

            <a class="ul-text"><i class="fas fa-users mr-1"></i> البيانات
                <!-- <span class="badge badge-info">4</span> -->
                <i class="fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container ">

                <li class="side-item">
                    <a href="{{ route('admin.exporter.index') }}">
                        {{--                        <i class="fas fa-angle-right mr-2"></i>--}}
                        المصدرين
                    </a>
                </li>

                <li class="side-item">
                    <a href="{{ route('admin.importer.index') }}">
                        {{--                        <i class="fas fa-angle-right mr-2"></i>--}}
                        المستوردين
                    </a>
                </li>


                <li class="side-item">
                    <a href="{{ route('admin.extractor.index') }}">
                        {{--                        <i class="fas fa-angle-right mr-2"></i>--}}
                        المستخرجين
                    </a>
                </li>


                <li class="side-item">
                    <a href="{{ route('admin.shipping.index') }}">
                        {{--                        <i class="fas fa-angle-right mr-2"></i>--}}
                        شركات الشحن
                    </a>
                </li>


                <li class="side-item">
                    <a href="{{ route('admin.insurance.index') }}">
                        {{--                        <i class="fas fa-angle-right mr-2"></i>--}}
                        شركات التأمين
                    </a>
                </li>

                {{--                <li class="side-item">--}}
                {{--                    <a href="{{ route('admin.agent.index') }}">--}}
                {{--                        <i class="fas fa-angle-right mr-2"></i>--}}
                {{--                        إضافة مطور مبيعات--}}
                {{--                    </a>--}}
                {{--                </li>--}}


            </div>


        </ul>


        <p class="side-comment">الإعدادات</p>
        <ul class="side a-collapse short">
            <a class="ul-text"><i class="fas fa-cog mr-1"></i> الإعدادات
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item"><a href="{{route('admin.profile.index')}}"><i class="fas fa-angle-right mr-2"></i>الملف
                        الشخصي</a></li>
            </div>
        </ul>

    </div>

</div>
