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
                                        <h3 class="lite-text ">الإحصائيات</h3>
                                        <span class="lite-text text-gray">صفحة التقارير</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active">الإحصائيات</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('manager.agent.index') }}">
                        <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-chart-bar b-first" aria-hidden="true"></i>
                            <span class="c-first">مطورين المبيعات</span>
                            <span class="h3">{{ $agentCount }}</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('manager.vistor.index', 'myvistors') }}">
                        <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-chart-bar b-first" aria-hidden="true"></i>
                            <span class="c-first">عدد زياراتك</span>
                            <span class="h3">{{ $myvistorCount }}</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('manager.vistor.index', 'Allvistors') }}">
                        <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-chart-bar b-first" aria-hidden="true"></i>
                            <span class="c-first">عدد زيارات المطورين</span>
                            <span class="h3">{{ $vistorCount }}</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection

