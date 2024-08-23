@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Loan List</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('admin/loan/add') }}" class="btn btn-primary">Add New Loan</a>
                        </h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>
                                        User Name
                                    </th>
                                    <th>Staff Name</th>
                                    <th>Loan Type</th>
                                    <th>Loan Plan</th>
                                    <th>Loan Amount</th>
                                    <th>Purpose</th>
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRecord as $value)
                                    <tr>
                                        <th>{{ $value->id }}</th>
                                        <td>{{ $value->getUserName->first_name }} {{ $value->getUserName->middle_name }}
                                            {{ $value->getUserName->surname }}</td>
                                        <td>{{ $value->getStaffName->name }} {{ $value->getStaffName->last_name }}
                                            {{ $value->getStaffName->surname }}</td>
                                        <td>{{ $value->getLoanType->type_name }}</td>
                                        <td>{{ $value->getLoanPlan->months . ' [' . $value->getLoanPlan->interest_percent . '% ' . $value->getLoanPlan->penalty_rate . ']' }}
                                        </td>
                                        <td>{{ $value->loan_amount }}</td>
                                        <td>{{ $value->purpose }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                                        <td>
                                            <a href="{{ url('admin/loan/edit/' . $value->id) }}" class="btn btn-success"><i
                                                    class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{ url('admin/loan/delete/' . $value->id) }}"
                                                onclick="return confirm('Are You Sure You Want To Delete?')"
                                                class="btn btn-danger"><i class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
