@extends('layouts.app_admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Les métiers</h4>
                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;"><a href="../index.html"> <i class="feather icon-home"></i> </a></li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ route('jobs.index') }}">Les métiers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="row users-card jobs-admin-container">
                @foreach( $jobs as $key => $job )
                 <div class="col-lg-6 col-xl-3 col-md-6">
                    <div class="card rounded-card user-card">
                        <div class="card-block">
                            <div class="img-hover">
                                <img class="img-fluid img-radius" src='{{ $job->image ? asset("uploads/Admin/Jobs/$job->image") : asset('admin/files/assets/images/default-image.png') }}' alt="round-img">
                                <div class="img-overlay img-radius">
                                    <span>
                                        <a href="{{ route('jobs.edit', $job->id ) }}" class="btn btn-sm btn-primary" data-popup="lightbox"><i class="feather icon-edit-1"></i></a>
                                        <a href="" class="btn btn-sm btn-danger btn_delete"><i class="feather icon-trash"></i></a>

                                          <form method="post" action="{{ route('jobs.destroy',$job->id) }}" class="delete_form" style="display: none">
                                              @csrf
                                              @method("delete")
                                             <input type="submit" value="Supprimer" class="delete_form_btn">
                                          </form>
                                    </span>
                                </div>
                            </div>
                            <div class="user-content">
                                <h4 class="">{{ $job->name }}</h4>
                                <p class="m-b-0 text-muted">Network engineer</p>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $jobs->links() }}
            </div>

        </div>
    </div>
@endsection

@section("scripts")
    @include("admin.includes.session_msg")
@endsection
