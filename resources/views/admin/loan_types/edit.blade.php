@extends('admin.layouts.app')

@section('content')
    <div class="pagetitle">
        <h1>Edit Loan Type</h1>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Loan Type</h5>
                        <!-- General Form Elements -->
                        <form action="{{ url('admin/loan_types/edit') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Type Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="type_name"
                                        value="{{ old('type_name') }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" name="description" {{ old('description') }}></textarea>
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
