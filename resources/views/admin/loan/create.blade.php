@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Add New Loan</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New Loan</h5>

                        <!-- General Form Elements -->
                        <form action="{{ url('admin/loan/add') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="user_id" required>
                                        <option value="">Select Username</option>
                                        <option value="0">Staff</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Loan Types</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="loan_types_id" required>
                                        <option value="">Select Loan Types</option>
                                        @foreach ($getLoanTypes as $value_1)
                                            <option value="{{ $value_1->id }}">{{ $value_1->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Loan Plan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="loan_plan_id" required>
                                        <option value="">Select Loan Plan</option>
                                        <option value="0">Staff</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputNumber" required class="col-sm-2 col-form-label">Loan Amount</label>
                                <div class="col-sm-10">
                                    <input required type="number" class="form-control" name="loan_amount"
                                        value="{{ old('loan_amount') }}"
                                        oninput="javascript: this.value = this.value.replace(/[^0-9]/g, ''); if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLenght);"
                                        maxlength="10">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Purpose</label>
                                <div class="col-sm-10">
                                    <textarea name="purpose" class="form-control"></textarea>
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
