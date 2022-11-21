@extends('template')
@section('content')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endsection

@section('js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
@endsection

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
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>5</h3>

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
            <div class="small-box bg-success">
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
            <div class="small-box bg-warning">
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

    <!-- Default box -->
    <div class="card collapsed-card">
        <div class="card-header ">
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
                    <label for="name" class="col-md-4 col-form-label text-md-end">School Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control " name="school_name" value="" required autocomplete="name" autofocus>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="address" class="col-md-4 col-form-label text-md-end">School Address</label>
                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control " name="school_address" value="" required autocomplete="address">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="city" class="col-md-4 col-form-label text-md-end">School City</label>
                    <div class="col-md-6">
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



</section>
<!-- /.content -->
@endsection
