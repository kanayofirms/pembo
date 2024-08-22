@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>View Staff</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('admin/staff/add') }}" class="btn btn-primary">Staff</a>
                        </h5>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Staff ID</div>
                            <div class="col-lg-9 col-md-8">{{ $getRecord->id }}</div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">First Name</div>
                            <div class="col-lg-9 col-md-8">{{ $getRecord->name }}</div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Last Name</div>
                            <div class="col-lg-9 col-md-8">{{ $getRecord->last_name }}</div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Surame</div>
                            <div class="col-lg-9 col-md-8">{{ $getRecord->surname }}</div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Email</div>
                            <div class="col-lg-9 col-md-8">{{ $getRecord->email }}</div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Phone Number</div>
                            <div class="col-lg-9 col-md-8">{{ $getRecord->phone_number }}</div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Profile Image</div>
                            <div class="col-lg-9 col-md-8">
                                @if (!empty($getRecord->profile_image))
                                    <img src="{{ $getRecord->getProfileImage() }}" alt="Profile Image" height="100px"
                                        width="100px">
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Date Of Birth</div>
                            <div class="col-lg-9 col-md-8">{{ date('d-m-Y', strtotime($getRecord->date_of_birtht)) }}</div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Role</div>
                            <div class="col-lg-9 col-md-8">{{ !empty($getRecord->is_role) ? 'admin' : 'staff' }}</div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Created Date</div>
                            <div class="col-lg-9 col-md-8">{{ date('d-m-Y', strtotime($getRecord->created_at)) }}</div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Updated Date</div>
                            <div class="col-lg-9 col-md-8">{{ date('d-m-Y', strtotime($getRecord->updated_at)) }}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
