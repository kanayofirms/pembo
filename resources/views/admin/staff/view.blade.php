@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>View Staff</h1>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                @include('_message')

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ url('admin/staff/add') }}" class="btn btn-primary">Staff</a>
                        </h5>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
