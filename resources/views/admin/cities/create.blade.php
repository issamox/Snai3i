@extends('layouts.app_admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Les villes</h4>
                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;"><a href="../index.html"> <i class="feather icon-home"></i> </a></li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ route('cities.index') }}">Les villes</a></li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ route('cities.create') }}">Nouveau</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 push-2">
                <div class="p-4 bg-white">
                    <form action="{{ route('cities.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('admin.cities.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
