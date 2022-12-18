@extends('volunteer.mainVolunteerDashboard')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.data-table').DataTable();
        });
    </script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><b>View Request Detail</b></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Volunteer</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="d-flex justify-content-end">
            <a type="button" class="btn btn-primary" href="{{ url()->previous() }}">
                <i class="fas fa-backward"></i>
                Back
            </a>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card my-3 shadow">
                    <div class="card-header">
                        <h3 class="card-title pt-2">
                            <i class="fa fa-eye"></i>
                            <b>Detail Request</b></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-primary" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                                Detail Request
                            </button>
                        </div>
                    </div>
                    <div class="card-body" >
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-end">School Name</label>
                            <label class="col-md-9 col-form-label text-md-end">: {{$request->school_name}}</label>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-end">School Address</label>
                            <label class="col-md-9 col-form-label text-md-end">: {{$request->school_address}}</label>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-end">School City</label>
                            <label class="col-md-9 col-form-label text-md-end">: {{$request->school_city}}</label>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-end">Description</label>
                            <label class="col-md-9 col-form-label text-md-end">: {{$request->req_description}}</label>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-end">Student Level</label>
                            <label class="col-md-9 col-form-label text-md-end">: {{$request->student_level}}</label>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-end">Student Amount</label>
                            <label class="col-md-9 col-form-label text-md-end">: {{$request->student_amount}}</label>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3 col-form-label text-md-end">Request Date</label>
                            <label class="col-md-9 col-form-label text-md-end">: {{date('j F Y', strtotime($request->req_request_date))}}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card my-3 card-warning">
                    <div class="card-header">
                        <h3 class="card-title pt-2">
                            <i class="fa fa-laptop"></i>
                            <b>Request Resource</b></h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-primary" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                                Request Resource
                            </button>
                        </div>
                    </div>
                    <div class="card-body" >
                        <form method="POST" action="{{ route('submitRequestResource') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="description" class="col-md-3 col-form-label text-md-end">Description</label>

                                <div class="col-md-9">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description" autofocus></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3 form-group">
                                <label for="resource_type" class="col-md-3 col-form-label text-md-end">Resource Type</label>

                                <div class="col-md-9">
                                    <select id="resource_type" class="form-control @error('resource_type') is-invalid @enderror" type="text"
                                            name="resource_type">
                                        <option value="" disabled selected></option>
                                        <option value="mobile_device">Mobile Device</option>
                                        <option value="personal_computer">Personal Computer</option>
                                        <option value="networking_equipment">Networking Equipment</option>
                                    </select>

                                    @error('resource_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="number_required" class="col-md-3 col-form-label text-md-end">Number Required</label>

                                <div class="col-md-9">
                                    <input id="number_required" type="number" min="1" class="form-control @error('number_required') is-invalid @enderror" name="number_required" required autocomplete="number_required" autofocus>
                                    @error('number_required')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0 mt-5">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Request Resource
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
@endsection
