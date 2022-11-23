@extends('masterAdmin.mainUsers')

@section('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            console.log($('.btn-modal').html())
        });
    </script>
    <script type="text/javascript" charset="utf8" src="{{asset('js/javascript.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><b>Manage User</b></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manage User</li>
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
                <div class="small-box bg-success">
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

            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">User Datatable</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th width="20">NO</th>
                            <th>User Name</th>
                            <th>User Email Address</th>
                            <th>User Level Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for($i=0; $i<count($user); $i++)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$user[$i]->name}}</td>
                                <td>{{$user[$i]->email}}</td>
                                @if($user[$i]->level_user === 'master_admin')
                                    <td class="text-success">{{$user[$i]->level_user}}</td>
                                @elseif ($user[$i]->level_user === 'volunteer')
                                    <td class="text-primary">{{$user[$i]->level_user}}</td>
                                @else
                                    <td class="text-warning">{{$user[$i]->level_user}}</td>
                                @endif
                                <td class="d-flex justify-content-center">
                                    <a class="text-center btn-modal"
                                       href="javascript:;"
                                       data-route=""
                                       title="Edit">
                                        <i class="fa fa-user text-warning"></i>
                                    </a>
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>

    </section>
    <!-- /.content -->
@endsection
