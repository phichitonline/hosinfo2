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
              <h3 class="box-title">{{ $rep_name }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="form-inline" method="GET" action="#">
                    <!-- Selecter Date -->
                    <div class="form-group">
                        <label for="dateselect">ประมวลผลช่วงวันที่ : </label>
                        <div class="input-group">
                        <input type="text" class="btn btn-default pull-right" id="daterange-btn" name="dateselect">
                        </div>
                    </div>
                    <!-- Selecter Date //-->

                    <!-- Selecter TypeArea -->
                    <div class="input-group">
                        <select name="typearea[]" class="form-control select2" multiple="multiple" data-placeholder="เลือก Type Area" style="width: 100%;">
                        <option value="1">[1] มีชื่อมีตัวอยู่จริง</option>
                        <option value="2">[2] มีชื่อแต่ตัวไม่อยู่</option>
                        <option value="3">[3] มาอาศัยอยู่ในเขต</option>
                        <option value="4">[4] บุคคลนอกเขต</option>
                        <option value="5">[5] คนเร่ร่อน</option>
                        </select>
                    </div>
                    <!-- Selecter TypeArea //-->

                    <!-- Selecter In/Out Area -->
                    <div class="input-group">
                        <label><input type="radio" name="inoutarea" value="1" class="minimal"> ในเขต </label>
                        <label><input type="radio" name="inoutarea" value="0" class="minimal-red"> นอกเขต</label>
                    </div>
                    <!-- Selecter In/Out Area //-->

                    <!-- Selecter PtType -->
                    <div class="input-group">
                        <select name="pttype[]" class="form-control select2" multiple="multiple" data-placeholder="เลือกสิทธิ์รักษาฯ" style="width: 100%;">
                        <option value="1">ข้าราชการ</option>
                        <option value="2">UC</option>
                        <option value="3">ประกันสังคม</option>
                        <option value="4">อื่นๆ</option>
                        <option value="5">ชำระเงินเอง</option>
                        </select>
                    </div>
                    <!-- Selecter PtType //-->

                    <!-- Selecter In/Out Time -->
                    <div class="input-group">
                        <label><input type="radio" name="inouttime" value="1" class="minimal"> ในเวลา </label>
                        <label><input type="radio" name="inouttime" value="0" class="minimal-red"> นอกเวลา</label>
                    </div>
                    <!-- Selecter In/Out Time //-->


                    <button type="submit" class="btn btn-default"> ประมวลผล </button> {{ $fulldate_start }} ถึง {{ $fulldate_end }}
                </form>

            <div class="table-responsive">
              <table id="DataTableExport" class="table table-bordered table-hover">
                <thead>
                <!-- หัวตารางจากฟิลด์ rep_reports.rep_column -->
                  <tr>
                  @foreach (explode(",",$rep_column) as $c)
                    <th class="text-center">{{ $c }}</th>
                  @endforeach
                  </tr>
                </thead>
                <tbody>
                    @foreach ($rep_detail as $data)
                    <tr>

                    <!-- นำ array ข้อมูลแต่ละ record มาแสดงตามคอลัมน์ -->
                        @foreach ($data as $data_record)
                            <td>{{ $data_record }}</td>
                        @endforeach

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
