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
                                        <th>{{ $value->getUserName->first_name }} {{ $value->getUserName->middle_name }}
                                            {{ $value->getUserName->surname }}</th>
                                        <th>{{ $value->staff_id }}</th>
                                        <th>{{ $value->loan_types_id }}</th>
                                        <th>{{ $value->loan_plan_id }}</th>
                                        <th>{{ $value->loan_amount }}</th>
                                        <th>{{ $value->purpose }}</th>
                                        <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                                        <td>
                                            <a href="{{ url('admin/loan_plan/edit/' . $value->id) }}"
                                                class="btn btn-success"><i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{ url('admin/loan_plan/delete/' . $value->id) }}"
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
