@extends('template')

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
                <h1><b>Dashboard SchoolHelp</b></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard SchoolHelp</li>
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
                    <h3>44</h3>

                    <p>Request</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

{{--    <!-- Default box -->--}}
{{--    <div class="card collapsed-card">--}}
{{--        <div class="card-header ">--}}
{{--            <h3 class="card-title pt-2"><b>Register School Account</b></h3>--}}

{{--            <div class="card-tools">--}}
{{--                <button type="button" class="btn btn-primary" data-card-widget="collapse" title="Collapse">--}}
{{--                    <i class="fas fa-plus"></i>--}}
{{--                    Register School--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="card-body" style="display: none">--}}
{{--            <form method="POST" action="{{ route('registerSchool') }}">--}}
{{--                @csrf--}}

{{--                <div class="row mb-3">--}}
{{--                    <label for="name" class="col-md-4 col-form-label text-md-end">School Name</label>--}}

{{--                    <div class="col-md-6">--}}
{{--                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" required autocomplete="name" autofocus>--}}

{{--                        @error('name')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row mb-3">--}}
{{--                    <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>--}}

{{--                    <div class="col-md-6">--}}
{{--                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="email">--}}
{{--                        <input type="hidden" name="level_user" value="school_admin" >--}}

{{--                        @error('email')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row mb-3">--}}
{{--                    <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>--}}

{{--                    <div class="col-md-6">--}}
{{--                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                        @error('password')--}}
{{--                        <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row mb-3">--}}
{{--                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>--}}

{{--                    <div class="col-md-6">--}}
{{--                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="row mb-0 mt-5">--}}
{{--                    <div class="col-md-12 ">--}}
{{--                        <button type="submit" class="btn btn-primary btn-block">--}}
{{--                            Register School--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row">
        <div class="col-4">
            <div class="card collapsed-card card-warning">
                <div class="card-header">
                    <h3 class="card-title pt-2"><b>Register School</b></h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-primary" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-plus"></i>
                            Register School
                        </button>
                    </div>
                </div>
                <div class="card-body" style="display: none">
                    <form method="POST" action="{{ route('registerSchool') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label text-md-end">School Name</label>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control " name="school_name" value="" required autocomplete="name" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-3 col-form-label text-md-end">School Address</label>
                            <div class="col-md-9">
                                <input id="address" type="text" class="form-control " name="school_address" value="" required autocomplete="address">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="city" class="col-md-3 col-form-label text-md-end">School City</label>
                            <div class="col-md-9">
                                <input id="city" type="text" class="form-control" name="school_city" required autocomplete="city">
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
        <div class="col-8">
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
                                    <a class="text-center">

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
