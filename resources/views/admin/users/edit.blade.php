@extends('layouts.app_admin')
@section('styles')
    <link rel="stylesheet" href="https://demo.dashboardpack.com/adminty-html/files/bower_components/lightbox2/dist/css/lightbox.min.css">
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Les utilisateurs</h4>
                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;"><a href="../index.html"> <i class="feather icon-home"></i> </a></li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ route('users.index') }}">Les utilisateurs </a></li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ route('users.create') }}">{{ $user->name }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="p-4 bg-white">
                    <form action="{{ route('users.update',$user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        @include('admin.users.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://demo.dashboardpack.com/adminty-html/files/bower_components/lightbox2/dist/js/lightbox.min.js"></script>
    @include("admin.includes.session_msg")
    <script>
        $(document).on('click','.deleteRealisation',function(e){
            e.preventDefault();
            let $this = $(this);
            Swal.fire({
                title:'êtes-vous sûr',
                text: 'Voulez-vous vraiment supprimer ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Non',
                confirmButtonText: 'Oui'
            }).then((result) => {
                if (result.value) {
                    var id = $(this).data("id");
                    var token = $("meta[name='csrf-token']").attr("content");

                    $.ajax({
                        url: "/admin/realisations/"+id,
                        type: 'DELETE',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function (){ $this.parent().parent().parent().hide(400);console.log($this)},
                        error : function (){ location.reload();}
                    });
                }
            });
        });
        $(document).on('click','.deleteService i',function(e){
            e.preventDefault();
            let $this = $(this);
            Swal.fire({
                title:'êtes-vous sûr',
                text: 'Voulez-vous vraiment supprimer ?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Non',
                confirmButtonText: 'Oui'
            }).then((result) => {
                if (result.value) {
                    var id = $(this).data("id");
                    var token = $("meta[name='csrf-token']").attr("content");

                    $.ajax({
                        url: "/admin/services/"+id,
                        type: 'DELETE',
                        data: {
                            "id": id,
                            "_token": token,
                        },
                        success: function (){ $this.parent().parent().hide(400);console.log($this)},
                        error :  function (){ location.reload();}
                    });
                }
            });
        });
    </script>
@endsection
