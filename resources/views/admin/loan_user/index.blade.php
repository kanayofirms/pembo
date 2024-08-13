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
                            <a href="{{ url('admin/loan_user/add') }}" class="btn btn-primary">Add Loan User</a>
                        </h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>Address</th>
                                    <th>Contact & Email</th>
                                    <th>BVN & TAX ID</th>
                                    {{-- <th>TAX ID</th> --}}
                                    <th>Created Date</th>
                                    <th>Updated Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRecord as $value)
                                    <tr>
                                        <th>{{ $value->id }}</th>
                                        <td>
                                            <p>First Name:<b>{{ $value->first_name }}</b></p>
                                            <p>Middle Name:<b>{{ $value->middle_name }}</b></p>
                                            <p>Surname:<b>{{ $value->surname }}</b></p>
                                        </td>
                                        <td>{{ $value->address }}</td>
                                        <td>
                                            <p>Contact:<b>{{ $value->contact }}</b></p>
                                            <p>Email:<b>{{ $value->email }}</b></p>
                                        </td>
                                        <td>
                                            <p>BVN:<b>{{ $value->bvn_id }}</b></p>
                                            <p>TAX:<b>{{ $value->tax_id }}</b></p>
                                        </td>

                                        <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->updated_at)) }}</td>
                                        <td>
                                            <a href="{{ url('admin/loan_user/edit/' . $value->id) }}"
                                                class="btn btn-success"><i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{ url('admin/loan_user/delete/' . $value->id) }}"
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
