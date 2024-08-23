@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Loan User List</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                        </h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>
                                        User Name
                                    </th>
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
                                        <td>{{ $value->user_id }}</td>
                                        <td>{{ $value->loan_types_id }}</td>
                                        <td>{{ $value->loan_plan_id }}</td>
                                        <td>{{ $value->loan_amount }}</td>
                                        <td>{{ $value->purpose }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
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
