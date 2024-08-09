@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Staff List</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('admin/staff/add') }}" class="btn btn-primary">Add Staff</a>
                        </h5>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>
                                        First Name
                                    </th>
                                    <th>Last Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th> Created Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRecord as $value)
                                    <tr>
                                        <th>{{ $value->id }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->last_name }}</td>
                                        <td>{{ $value->surname }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ !empty($value->is_role) ? 'admin' : 'staff' }}</td>
                                        <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                        <td>
                                            <a href="" class="btn btn-success"><i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="{{ url('admin/staff/delete/' . $value->id) }}"
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
