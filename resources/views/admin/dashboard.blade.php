@extends('layouts.master')

@section('content')
<div class="bmd-layout-container bmd-drawer-f-l avam-container animated bmd-drawer-in">
    @include('admin.layout.navbar')
    @include('admin.layout.sidebar')
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
                                        <span class="lite-text text-gray">جميع الإحصائيات</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item "><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item active">الرئيسية</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <a href="{{ route('admin.manager.index') }}">
                        <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-chart-bar b-first" aria-hidden="true"></i>
                            <span class="c-first">عدد المشرفين</span>
                            <span class="h3">{{ $managerCount }}</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('admin.agent.index') }}">
                        <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-chart-bar b-first" aria-hidden="true"></i>
                            <span class="c-first">عدد مطورين المبيعات</span>
                            <span class="h3">{{ $agentCount }}</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('admin.vistor.index', 'Allvistorsmanager') }}">
                        <div class="box-card mini animate__animated animate__flipInY   "><i class="fab far fa-chart-bar b-first" aria-hidden="true"></i>
                            <span class="c-first">عدد زيارات المشرفين</span>
                            <span class="h3">{{ $vistorMCount }}</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ route('admin.vistor.index', 'Allvistors') }}">
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

