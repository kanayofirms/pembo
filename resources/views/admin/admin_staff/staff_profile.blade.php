@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Update Profile</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Profile
                        </h5>

                        <form action="{{ url('staff/profile_update') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{ $getRecord->name }}"
                                        required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="last_name" class="form-control"
                                        value="{{ $getRecord->last_name }}" required>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Surname</label>
                                <div class="col-sm-10">
                                    <input type="text" name="surname" class="form-control"
                                        value="{{ $getRecord->surname }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email"
                                        value="{{ $getRecord->email }}" required>
                                    <span style="color: red;">{{ $errors->first('email') }}</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Profile Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="profile_image">
                                    @if (!empty($getRecord->profile_image))
                                        <img src="{{ $getRecord->getProfileImage() }}" alt="Profile Image" height="100px"
                                            width="100px">
                                    @endif
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" value="">(Leave Blank
                                    If You Are Not Changing The
                                    Password.)
                                    <span style="color: red;">{{ $errors->first('password') }}</span>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                    </div>
                    </form>


                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
