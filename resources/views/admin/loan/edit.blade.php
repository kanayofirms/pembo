@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit Loan</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit Loan</h5>

                        <!-- General Form Elements -->
                        <form action="{{ url('admin/loan/edit/' . $getRecord->id) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Borrower</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="user_id" required>
                                        <option value="">Select Borrower</option>
                                        @foreach ($getLoanUser as $value_0)
                                            <option {{ $value_0->id == $getRecord->user_id ? 'selected' : '' }}
                                                value="{{ $value_0->id }}">
                                                {{ $value_0->first_name }}
                                                {{ $value_0->middle_name }} {{ $value_0->surname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Staff</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="staff_id" required>
                                        <option value="">Select Staff</option>
                                        @foreach ($getStaff as $value_1)
                                            <option {{ $value_1->id == $getRecord->staff_id ? 'selected' : '' }}
                                                value="{{ $value_1->id }}">{{ $value_1->name }}
                                                {{ $value_1->last_name }} {{ $value_1->surname }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Loan Types</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="loan_types_id" required>
                                        <option value="">Select Loan Types</option>
                                        @foreach ($getLoanTypes as $value_2)
                                            <option {{ $value_2->id == $getRecord->loan_types_id ? 'selected' : '' }}
                                                value="{{ $value_2->id }}">{{ $value_2->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Loan Plan</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="loan_plan_id" required>
                                        <option value="">Select Loan Plan</option>
                                        @foreach ($getLoanPlan as $value_3)
                                            <option {{ $value_3->id == $getRecord->loan_plan_id ? 'selected' : '' }}
                                                value="{{ $value_3->id }}">{{ $value_3->months }}
                                                [ {{ $value_3->interest_percent . '% ' . $value_3->penalty_rate }} ]
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="inputNumber" required class="col-sm-2 col-form-label">Loan Amount</label>
                                <div class="col-sm-10">
                                    <input required type="number" class="form-control" name="loan_amount"
                                        value="{{ $getRecord->loan_amount }}"
                                        oninput="javascript: this.value = this.value.replace(/[^0-9]/g, ''); if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLenght);"
                                        maxlength="10">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Purpose</label>
                                <div class="col-sm-10">
                                    <textarea name="purpose" class="form-control">{{ $getRecord->purpose }}</textarea>
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
