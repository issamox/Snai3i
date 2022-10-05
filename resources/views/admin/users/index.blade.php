@extends('layouts.app_admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Les utilisateurs</h4>
                            <span>liste de gestion des utilisateurs</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;"><a href="#"> <i class="feather icon-home"></i> </a></li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ route('users.index') }}">Les utilisateurs</a></li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ route('users.create') }}">Nouveau</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="row users-card">
                @foreach( $users as $key => $user )
                    <div class="col-md-6 col-xl-4">
                        <div class="card user-widget-card bg-c-blue">
                            <div class="card-block">
                                <img class="img-fluid img-radius icon-user bg-simple-c-blue card1-icon" src='{{ $user->image ? asset("/uploads/Admin/Users/$user->image") : asset('/admin/files/assets/images/default-image.png') }}' alt="round-img">
                                <h4>{{ $user->name }}</h4>
                                <p>{{ $user->job->name }}</p>
                                <div class="more-info">
                                    <a href="{{ route('users.edit', $user->id ) }}" class="btn btn-out btn-primary btn-square">Modifier</a>
                                    <span style="color: #000">|</span>
                                    <a href="" class="btn btn-out btn-danger btn-square btn_delete">Supprimer</a>
                                    <form method="post" action="{{ route('users.destroy',$user->id) }}" class="delete_form" style="display: none">
                                        @csrf
                                        @method("delete")
                                        <button type="submit" class="delete_form_btn">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $users->links() }}
            </div>

        </div>
    </div>
    {{-- used later --}}
    <form action="j-pro/php/action.php" method="post" class="j-pro" id="j-pro" novalidate="">
        <div class="j-content">
            <!-- start name -->
            <div class="j-unit">
                <label class="j-label">Your name</label>
                <div class="j-input">
                    <label class="j-icon-right" for="name">
                        <i class="feather icon-user"></i>
                    </label>
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <!-- end name -->
            <!-- start email phone -->
            <div class="j-row">
                <div class="j-span6 j-unit">
                    <label class="j-label">Your email</label>
                    <div class="j-input">
                        <label class="j-icon-right" for="email">
                            <i class="feather icon-mail"></i>
                        </label>
                        <input type="email" id="email" name="email">
                    </div>
                </div>
                <div class="j-span6 j-unit">
                    <label class="j-label">Phone/Mobile</label>
                    <div class="j-input">
                        <label class="j-icon-right" for="phone">
                            <i class="feather icon-phone"></i>
                        </label>
                        <input type="text" id="phone" name="phone">
                    </div>
                </div>
            </div>
            <!-- end email phone -->
            <div class="j-divider j-gap-bottom-25"></div>
            <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                <span>Input</span>
            </div>
            <!-- start guests -->
            <div class="j-row">
                <div class="j-span6 j-unit">
                    <label class="j-label">Adult guests</label>
                    <div class="j-input j-success-view">
                        <label class="j-icon-right" for="adults">
                            <i class="icofont icofont-waiter"></i>
                        </label>
                        <input type="text" id="adults" name="adults">
                        <span class="j-tooltip j-tooltip-right-top">Number
                                                                                    of adult guests</span>
                    </div>
                </div>
                <div class="j-span6 j-unit">
                    <label class="j-label">Children
                        guests</label>
                    <div class="j-input j-success-view">
                        <label class="j-icon-right" for="children">
                            <i class="icofont icofont-woman-in-glasses"></i>
                        </label>
                        <input type="text" id="children" name="children">
                        <span class="j-tooltip j-tooltip-right-top">Number
                                                                                    of children</span>
                    </div>
                </div>
            </div>
            <!-- end guests -->
            <!-- start date -->
            <div class="j-divider-text j-gap-top-20 j-gap-bottom-45">
                <span>Input</span>
            </div>
            <div class="j-row">
                <div class="j-span6 j-unit">
                    <label class="j-label">Check-in date</label>
                    <div class="j-input">
                        <label class="j-icon-right" for="date_from">
                            <i class="icofont icofont-ui-calendar"></i>
                        </label>
                        <input type="text" id="date_from" name="date_from" readonly="" class="hasDatepicker">
                    </div>
                </div>
                <div class="j-span6 j-unit">
                    <label class="j-label">Check-out
                        date</label>
                    <div class="j-input">
                        <label class="j-icon-right" for="date_to">
                            <i class="icofont icofont-ui-calendar"></i>
                        </label>
                        <input type="text" id="date_to" name="date_to" readonly="" class="hasDatepicker">
                    </div>
                </div>
            </div>
            <!-- end date -->
            <div class="j-divider j-gap-bottom-25"></div>
            <!-- start message -->
            <div class="j-unit">
                <label class="j-label">Comments/Message</label>
                <div class="j-input">
                    <textarea spellcheck="false" name="message"></textarea>
                </div>
            </div>
            <!-- end message -->
            <!-- start response from server -->
            <div class="j-response"></div>
            <!-- end response from server -->
        </div>
        <!-- end /.content -->
        <div class="j-footer">
            <button type="submit" class="btn btn-primary">Booking</button>
        </div>
        <!-- end /.footer -->
    </form>
@endsection

@section("scripts")
    @include("admin.includes.session_msg")
    <script>
        $(document).ready(function(){

            // Phone masking
            $('#phone').mask('(99) 99-99-99-99', {placeholder:'x'});

            // Validation
            $( "#j-pro" ).justFormsPro({
                rules: {
                    first_name: {
                        required: true
                    },
                    last_name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true
                    },
                    country: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    post_code: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    position: {
                        required: true
                    },
                    message: {
                        required: false
                    },
                    file1: {
                        validate: true,
                        required: false,
                        size: 1,
                        extension: "xls|xlsx|docx|doc|pdf"
                    },
                    file2: {
                        validate: true,
                        required: false,
                        size: 1,
                        extension: "xls|xlsx|docx|doc|pdf"
                    }
                },
                messages: {
                    first_name: {
                        required: "Add your first name"
                    },
                    last_name: {
                        required: "Add your last name"
                    },
                    email: {
                        required: "Add your email",
                        email: "Incorrect email format"
                    },
                    phone: {
                        required: "Add your phone"
                    },
                    country: {
                        required: "Select your country"
                    },
                    city: {
                        required: "Add your city"
                    },
                    post_code: {
                        required: "Add your post code"
                    },
                    address: {
                        required: "Add your address"
                    },
                    position: {
                        required: "Select desired position"
                    },
                    message: {
                        required: "Add your message"
                    },
                    file1: {
                        size_extension: "File types: xls/xlsx/docx/doc. Size: 1Mb"
                    },
                    file2: {
                        size_extension: "File types: xls/xlsx/docx/doc. Size: 1Mb"
                    }
                }
            });
        });
    </script>
@endsection
