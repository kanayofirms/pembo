@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit Loan Plan</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Loan Plan</h5>

                        <!-- General Form Elements -->
                        <form action="{{ url('admin/loan_plan/edit/' . $getRecord->id) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}




                            <div class="row mb-3">
                                <label for="inputNumber" required class="col-sm-2 col-form-label">Months</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="months"
                                        value="{{ $getRecord->months }}"
                                        oninput="javascript: this.value = this.value.replace(/[^0-9]/g, ''); if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLenght);"
                                        maxlength="10">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Interest Percent</label>
                                <div class="col-sm-10">
                                    <input type="number" required class="form-control" name="interest_percent"
                                        value="{{ $getRecord->interest_percent }}"
                                        oninput="javascript: this.value = this.value.replace(/[^0-9]/g, ''); if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLenght);"
                                        maxlength="10">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Penalty Rate</label>
                                <div class="col-sm-10">
                                    <input type="number" required class="form-control" name="penalty_rate"
                                        value="{{ $getRecord->penalty_rate }}"
                                        oninput="javascript: this.value = this.value.replace(/[^0-9]/g, ''); if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLenght);"
                                        maxlength="10">
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
