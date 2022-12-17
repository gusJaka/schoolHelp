@extends('schoolAdmin.mainDashboardSchool')

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
                <h1>Dashboard <b>{{$school_data->school_name}}</b></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard School</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$school_count}}</h3>

                    <p>School</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px"></sup></h3>

                    <p>Volunteer</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$user_count}}</h3>

                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title pt-2"><b>Request Tutorial</b></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            Request Tutorial
                        </button>
                    </div>
                </div>
                <div class="card-body" >
                    <form method="POST" action="{{ route('submitRequest') }}">
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

                        <div class="row mb-3">
                            <label for="student_level" class="col-md-3 col-form-label text-md-end">Student Level</label>

                            <div class="col-md-9">
                                <input id="student_level" type="text" class="form-control @error('student_level') is-invalid @enderror" name="student_level" required autocomplete="student_level" autofocus>
                                @error('student_level')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="student_amount" class="col-md-3 col-form-label text-md-end">Student Amount</label>

                            <div class="col-md-9">
                                <input id="student_amount" type="number" min="1" class="form-control @error('student_amount') is-invalid @enderror" name="student_amount" required autocomplete="student_amount" autofocus>
                                @error('student_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 mt-5">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Register School
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">School Datatable</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="20">NO</th>
                            <th>School Name</th>
                            <th>School Address</th>
                            <th>School City</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0; $i<count($school); $i++)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$school[$i]->school_name}}</td>
                                <td>{{$school[$i]->school_address}}</td>
                                <td>{{$school[$i]->school_city}}</td>
                                <td class="d-flex justify-content-center">
                                    <a type="button" class="btn btn-primary text-center mx-3"
                                       href="{{route('makeSchoolAccount', ['id' => \Illuminate\Support\Facades\Crypt::encrypt($school[$i]->id_school)])}}"
                                       title="Create Admin Account">
                                        <i class="fa fa-user text-white"></i>
                                    </a>
                                    <a type="button" class="btn btn-warning text-center mx-3"
                                       href="{{route('editSchool', ['id' => \Illuminate\Support\Facades\Crypt::encrypt($school[$i]->id_school)])}}"
                                       title="Edit School">
                                        <i class="fa fa-school text-white"></i>
                                    </a>
                                    <a type="button" class="btn btn-danger text-center mx-3"
                                       onclick="return confirm('Are you sure?')"
                                       href="{{route('deleteSchool', ['id' => \Illuminate\Support\Facades\Crypt::encrypt($school[$i]->id_school)])}}"
                                       title="Delete Account">
                                        <i class="fa fa-trash text-white"></i>
                                    </a>
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
@endsection
