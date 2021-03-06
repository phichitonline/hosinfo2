@extends('layouts.theme')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Smart Card Reader
            <small>{{ config('app.name') }}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Smart Card Reader</li>
        </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Smart Card Reader</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-12"><h1>ข้อมูลลงทะเบียนเจ้าหน้าที่ใหม่</h1></div>
    </div>
    <hr>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->

      <div class="text-center">
        <img src="http://api.tphcp.go.th/hosinfo-v2/images/blankuser.png" id="smartcardImg" class="avatar img-circle img-thumbnail" alt="avatar">
      </div></hr><br>

          <div class="panel panel-default">
            <div class="panel-heading">รูปภาพ</div>
          </div>
          
<!-- 
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
 -->               
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">ข้อมูลบุคคล</a></li>
                    <li><a data-toggle="tab" href="#family">ข้อมูลเจ้าหน้าที่</a></li>
                    <li><a data-toggle="tab" href="#health">กำหนดรหัสผ่าน</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                  <form class="form" action="#" method="GET" id="registrationForm">
                        <div class="form-group">
                          
                                <div class="col-xs-12">
                                <label for="cid"><h4>เลขที่บัตรประจำตัวประชาชน </h4></label>
                                    <input type="text" class="form-control" name="cid" id="cid" value="" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                          
                          <div class="col-xs-4">
                              <label for="prename"><h4>คำนำหน้า</h4></label>
                              <input type="text" class="form-control" name="prename" id="prename" value="">
                          </div>
                      </div>
                      <div class="form-group">
                          
                            <div class="col-xs-4">
                                <label for="fname"><h4>ชื่อ</h4></label>
                                <input type="text" class="form-control" name="fname" id="fname" value="">
                            </div>
                        </div>
                        <div class="form-group">
                          
                          <div class="col-xs-4">
                            <label for="lname"><h4>นามสกุล</h4></label>
                              <input type="text" class="form-control" name="lname" id="lname" value="">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                            <div class="col-xs-4">
                                <label for="gender"><h4>เพศ</h4></label>
                                <input type="text" class="form-control" name="gender" id="gender" value="">
                            </div>
                        </div>

                        <div class="form-group">
                          
                          <div class="col-xs-8">
                              <label for="dob"><h4>วันเกิด</h4></label>
                              <input type="text" class="form-control" name="dob" id="dob" value="">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="issue_date"><h4>วันที่ออกบัตร</h4></label>
                              <input type="text" class="form-control" name="issue_date" id="issue_date" value="">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="expire_date"><h4>บัตรหมดอายุ</h4></label>
                              <input type=text" class="form-control" name="expire_date" id="expire_date" value="">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-12">
                              <label for="address"><h4>ที่อยู่</h4></label>
                              <input type="address" class="form-control" id="address" value="">
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" onclick="getSmartcard()"><i class="glyphicon glyphicon-ok-sign"></i> อ่านข้อมูลบัตร</button>
                               	<button class="btn btn-lg" onclick="clearsmartcardAlldata()"><i class="glyphicon glyphicon-repeat"></i> ล้างหน้าจอ</button>
                   
                            </div>
                      </div>
              	<!-- </form> -->
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="family">
               
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="faname_e"><h4>ชื่อ (ภาษาอังกฤษ)</h4></label>
                              <input type="text" class="form-control" name="faname_e" id="faname_e" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="laname_e"><h4>นามสกุล (ภาษาอังกฤษ)</h4></label>
                              <input type="text" class="form-control" name="laname_e" id="laname_e" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="position"><h4>ตำแหน่ง</h4></label>
                              <input type="text" class="form-control" name="position" id="position" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="licance_no"><h4>เลขที่ใบประกอบวิชาชีพ</h4></label>
                              <input type="text" class="form-control" name="licance_no" id="licance_no" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-12">
                              <label for="department"><h4>ฝ่ายงาน/แผนกที่ปฏิบัติงาน</h4></label>
                              <input type="text" class="form-control" name="department" id="department" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="date_work"><h4>วันที่เริ่มปฏิบัติงาน</h4></label>
                              <input type="date" class="form-control" name="date_work" id="date_work" placeholder="รูปแบบ ววดดปปปป 31122562" required>
                          </div>
                      </div>
          
              	<!-- </form> -->
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="health">
            		
                      <div class="form-group">
                          <div class="col-xs-12">
                              <label for="username"><h4>ชื่อผู้ใช้ Username</h4></label>
                              <input type="text" class="form-control" name="username" id="username" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="password"><h4>รหัสผ่าน Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" required>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-6">
                              <label for="password_confirm"><h4>ยืนยันรหัสผ่านอีกครั้ง</h4></label>
                              <input type="password" class="form-control" name="password_confirm" id="password_confirm" required>
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> บันทึกข้อมูล</button>
                               	<!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
    <script>
            function getSmartcardData() {
                var result;
                var settings = {
                    "async": false,
                    "url": "http://localhost:8084/smartcard/data/",
                    "method": "GET",
                }
    
                $.ajax(settings).done(function (response) {
                    console.log(response);
                    result = response;
                });
                return result;
            }
    
            function showSmartcardData(smartcardData) {
                smartcardData = JSON.parse(smartcardData);
                $("#cid").val(smartcardData.cid);
                $("#prename").val(smartcardData.prename);
                $("#fname").val(smartcardData.fname);
                $("#lname").val(smartcardData.lname);
                $("#gender").val(smartcardData.gender);
                $("#dob").val(smartcardData.dob);
                $("#address").val(smartcardData.address);
                $("#address_no").val(smartcardData.address_no);
                $("#address_moo").val(smartcardData.address_moo);
                $("#address_soi").val(smartcardData.address_soi);
                $("#address_road").val(smartcardData.address_road);
                $("#address_tambol").val(smartcardData.address_tambol);
                $("#address_amphur").val(smartcardData.address_amphur);
                $("#address_province").val(smartcardData.address_province);
                $("#issue_date").val(smartcardData.issue_date);
                $("#expire_date").val(smartcardData.expire_date);
            }
    
            function clearSmartcardData() {
                $("#cid").val("");
                $("#prename").val("");
                $("#fname").val("");
                $("#lname").val("");
                $("#gender").val("");
                $("#dob").val("");
                $("#address").val("");
                $("#address_no").val("");
                $("#address_moo").val("");
                $("#address_soi").val("");
                $("#address_road").val("");
                $("#address_tambol").val("");
                $("#address_amphur").val("");
                $("#address_province").val("");
                $("#issue_date").val("");
                $("#expire_date").val("");
             }
    
            function getSmartcardPicture() {
                var url_img = "http://localhost:8084/smartcard/picture/?" + new Date().getTime();
                $("#smartcardImg").attr('src', url_img);
            }
    
            function clearSmartcardPicture() {
                var url_img = "";
                $("#smartcardImg").attr('src', url_img);
            }
    
            function getSmartcard() {
                clearSmartcardData();
                var smartcardData = getSmartcardData();
                showSmartcardData(smartcardData);
    
                clearSmartcardPicture();
                getSmartcardPicture();
            }
    
            function getPictureCard() {
                var url_img = "http://api.tphcp.go.th/hosinfo-v2/images/blankuser.png";
                $("#smartcardImg").attr('src', url_img);
            }
    
            function clearsmartcardAlldata() {
                clearSmartcardData();
                clearSmartcardPicture();
                getPictureCard();
            }
        </script>


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