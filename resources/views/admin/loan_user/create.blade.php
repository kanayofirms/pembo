@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Add Loan User</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Loan User</h5>

                        <!-- General Form Elements -->
                        <form action="{{ url('admin/loan_user/add') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row mb-3">
                                <label for="inputNumber" required class="col-sm-2 col-form-label">First Name <span
                                        style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="first_name"
                                        value="{{ old('first_name') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" required class="col-sm-2 col-form-label">Middle Name<span
                                        style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="middle_name"
                                        value="{{ old('middle_name') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" required class="col-sm-2 col-form-label">Surname<span
                                        style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Address<span
                                        style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="address" value="{{ old('address') }}"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Contact<span
                                        style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" required class="form-control" name="contact"
                                        value="{{ old('contact') }}"
                                        oninput="javascript: this.value = this.value.replace(/[^0-9]/g, ''); if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLenght);"
                                        maxlength="10">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" required class="col-sm-2 col-form-label">Email<span
                                        style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" required class="col-sm-2 col-form-label">BVN ID<span
                                        style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="bvn_id" value="{{ old('bvn_id') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" required class="col-sm-2 col-form-label">TAX ID<span
                                        style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="tax_id" value="{{ old('tax_id') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
