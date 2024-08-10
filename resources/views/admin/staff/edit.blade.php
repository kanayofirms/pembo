@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit Staff</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Staff</h5>

                        <!-- General Form Elements -->
                        <form action="{{ url('admin/staff/edit/' . $getRecord->id) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="{{ $getRecord->name }}"
                                        required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="last_name"
                                        value="{{ $getRecord->last_name }}">
                                </div>
                            </div>

                            <div class="row
                                        mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Surname</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="surname"
                                        value="{{ $getRecord->surname }}">
                                </div>
                            </div>

                            <div class="row
                                            mb-3">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email"
                                        value="{{ $getRecord->email }}">
                                    <span style="color: red;">{{ $errors->first('email') }}</span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="phone_number"
                                        value="{{ $getRecord->phone_number }}">
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
                                <label for="inputDate" class="col-sm-2 col-form-label">DOB</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date_of_birth"
                                        value="{{ $getRecord->date_of_birth }}">
                                </div>
                            </div>



                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Role</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="is_role" aria-label="Default select example">
                                        <option selected>Select Role Menu</option>
                                        <option {{ $getRecord->is_role == '0' ? 'selected' : '' }} value="0">Staff
                                        </option>
                                        <option {{ $getRecord->is_role == '1' ? 'selected' : '' }} value="1">Admin
                                        </option>
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
