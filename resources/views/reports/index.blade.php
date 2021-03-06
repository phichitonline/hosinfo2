@extends('layouts.theme')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ $controller_name }}
            <small>{{ config('app.name') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ $controller_name }}</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">รายงานทั้งหมด</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="DataTable" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="text-center">กลุ่มรายงาน</th>
                    <th class="text-center">ชื่อรายงาน</th>
                    <th class="text-center">ผู้ทำรายงาน</th>
                    <th class="text-center">ปรับปรุงล่าสุด</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($replist as $data)
                  <tr>
                    <td>{{ $data->rep_cat_name }}</td>
                    <td>{{ $data->rep_name }}</td>
                    <td>{{ $data->rep_user_reporter }}</td>
                    <td class="text-center">{{ $data->rep_update }}</td>
                    <td class="text-center"><a href="{{ url('/') }}/reports/{{ $data->repid}}">ทำรายงาน</a></td>
                  </tr>
                  @endforeach

                </tbody>
                {{-- <tfoot>
                  <tr>
                    <th>รวม</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                </tfoot> --}}
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- ./Main content -->

</div>
<!-- ./Content Wrapper -->

@endsection