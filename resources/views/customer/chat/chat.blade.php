@extends('customer.layout.master')

@section('content')
<br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col align-self-center">
                            <h4 class="page-title pb-md-0">Chat</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Chat</li>
                            </ol>
                        </div>
                        <!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">
                                    @php
                                        echo date('d M');
                                    @endphp
                                </span>
                                <i data-feather="calendar" class="align-self-center icon-xs ms-1"></i>
                            </a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="chat-box-left">
                    <ul class="nav nav-tabs mb-3 nav-justified" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active"id="general_chat_tab" data-bs-toggle="tab" href="#general_chat"
                            role="tab">General</a>
                        </li>
                    </ul>
                    <!--end chat-search-->
                    <div class="chat-body-left" data-simplebar>
                        {{-- @foreach($admins as $admin) --}}
                        <div class="tab-content chat-list" id="pills-tabContent">
                            @foreach ($admins as $admin)
                                <div class="tab-pane fade show active" id="general_chat">
                                    <a href="{{ route('customer.chat_detail2', $admin->id) }}">
                                        <div class="media-left">
                                            @if ($admin->foto_profile == null)
                                                <img src="/dapuranita/default.jpg" alt="profile-user"
                                                    class="rounded-circle thumb-md" />
                                            @else
                                                <img src="/foto_profile/{{ $admin->foto_profile }}" alt="profile-user"
                                                    class="rounded-circle thumb-md" />
                                            @endif
                                        </div><!-- media-left -->
                                        <div class="media-body">
                                            <div class="d-inline-block">
                                                <h6>{{ Str::title($admin->name) }}</h6>
                                            </div>
                                        </div><!-- end media-body -->
                                </a>
                                <!--end media-->
                            </div>
                            @endforeach
                        </div> 
                        <!--end tab-content-->
                    </div>
                    </div>
                <!--end chat-box-left -->

                <!--end chat-box-right -->
            </div> <!-- end col -->
        </div>
    </div>
@endsection

