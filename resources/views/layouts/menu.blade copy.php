      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              @guest
              <p><a href='#'>ไม่ระบุชื่อ</a></p>
              <a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
              @else
              <p><a href='#'>{{ Auth::user()->name }}</a></p>
              <a href="#"><i class="fa fa-circle text-green"></i> Online</a>
              @endguest
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">เมนูหลัก</li>
            <li class="active">
              <a href="#">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>
            
            {{--  --}}
            <li>
              <a href="#">
                <i class="fa fa-gear"></i> <span>ตั้งค่าระบบ</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-red">a</small>
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-user"></i> <span>จัดการผู้ใช้</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-red">a</small>
                </span>
              </a>
            </li>
    
            <li class="treeview">
                    <a href="#">
                      <i class="fa fa-user-secret"></i>
                      <span>สำหรับหัวหน้า</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="label pull-right bg-red">h</small>
                        <small class="label pull-right bg-red">2</small>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="?main=form"><i class="fa fa-arrow-right"></i> แบบฟอร์มคำขอ</a></li>
                      <li><a href="?kpi=202"><i class="fa fa-arrow-right"></i> Pt UC ไม่เก็บค่าธรรมเนียม</a></li>
                    </ul>
                  </li>
          
              <!-- สำหรับ สมาชิก -->
                  <li>
                    <a href="?main=kpimanage">
                      <i class="fa fa-th"></i> <span>จัดการตัวชี้วัด KPI</span>
                      <span class="pull-right-container">
                        <small class="label pull-right bg-blue">h</small>
                      </span>
                    </a>
                  </li>
          
              <!-- สำหรับ HOSxP User -->
          
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-files-o"></i>
                      <span>สรุปตัวชี้วัด KPI</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="label pull-right bg-green">u</small>
                        <small class="label pull-right bg-red">3</small>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="?kpi=104"><i class="fa fa-arrow-right"></i> ตัวชี้วัดหน่วยงาน</a></li>
                      <li><a href="?kpi=103"><i class="fa fa-arrow-right"></i> สรุปผลตัวชี้วัด</a></li>
                    </ul>
                  </li>
          
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-folder"></i>
                      <span>ข้อมูลและสถิติ</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <small class="label pull-right bg-blue">10</small>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="?stat=opd"><i class="fa fa-arrow-right"></i> ผู้รับบริการ</a></li>
                      <li class="treeview">
                        <a href="#"><i class="fa fa-level-down"></i> ผู้ป่วยใน
                          <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                            <small class="label pull-right bg-red">7</small>
                          </span>
                        </a>
                        <ul class="treeview-menu">
                          <li><a href="?stat=ipd"><i class="fa fa-angle-double-right"></i> ภาพรวมผู้ป่วยใน</a></li>
                          <li><a href="?ward="><i class="fa fa-angle-double-right"></i> ตึกผู้ป่วยใน1</a></li>
                        </ul>
                      </li>
                      <li><a href="?stat=dent"><i class="fa fa-arrow-right"></i> ทันตกรรม</a></li>
                      <li><a href="?stat=ppt"><i class="fa fa-arrow-right"></i> แพทย์แผนไทย</a></li>
                      <li><a href="?stat=er"><i class="fa fa-arrow-right"></i> อุบัติเหตุและฉุกเฉิน</a></li>
                      <li><a href="?stat=or"><i class="fa fa-arrow-right"></i> ผ่าตัดและวิสัญญี</a></li>
                      <li><a href="?stat=cd"><i class="fa fa-arrow-right"></i> โรคติดต่อ CD</a></li>
                      <li><a href="?stat=ncd"><i class="fa fa-arrow-right"></i> โรคไม่ติดต่อ NCD</a></li>
                      <li><a href="?stat=pts"><i class="fa fa-arrow-right"></i> กายภาพบำบัด</a></li>
                      <li><a href="?stat=xray"><i class="fa fa-arrow-right"></i> ชัณสูตรและ X-Ray</a></li>
                    </ul>
                  </li>
          
              <!-- // สำหรับสมาชิก HOSxP login -->
          
                  <li>
                    <a href="?main=reports">
                      <i class="fa fa-files-o"></i> <span>รายงาน End User</span>
                      <span class="pull-right-container">
                        <small class="label pull-right bg-green">u</small>
                      </span>
                    </a>
                  </li>
          
              <!-- สำหรับสมาชิก HOSxP login // -->
          
              <!-- สำหรับสมาชิกที่ลงทะเบียน MIS -->
          
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-pie-chart"></i>
                      <span>คืนข้อมูล Data Export</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="?exp=person"><i class="fa fa-arrow-right"></i> รายชื่อประชากร person (ในเขต)</a></li>
                      <li><a href="?exp=persons"><i class="fa fa-arrow-right"></i> รายชื่อประชากร person</a></li>
                      <li><a href="?exp=patient"><i class="fa fa-arrow-right"></i> รายชื่อผู้ป่วย patient</a></li>
                      <li><a href="?exp=cxr"><i class="fa fa-arrow-right"></i> รายการบริการ CXR</a></li>
                      <li><a href="?exp=rabies"><i class="fa fa-arrow-right"></i> รง.การใช้วัคซีน RABIES</a></li>
                      <li><a href="?exp=tb"><i class="fa fa-arrow-right"></i> เป้าหมายตรวจ TB</a></li>
                      <li><a href="?exp=drugsearch"><i class="fa fa-arrow-right"></i> ผู้รับบริการรับยา</a></li>
                      <li><a href="?exp=moneyopd"><i class="fa fa-arrow-right"></i> สรุปค่าใช้จ่ายผู้ป่วยนอก</a></li>
                      <li><a href="?exp=moneyipd"><i class="fa fa-arrow-right"></i> สรุปค่าใช้จ่ายผู้ป่วยใน</a></li>
                      <li><a href="?exp=dentalcare"><i class="fa fa-arrow-right"></i> คนในเขตตรวจสุขภาพฟัน</a></li>
                      <li><a href="?exp=visitpttype"><i class="fa fa-arrow-right"></i> จำนวนผู้รับบริการผู้ป่วยนอก</a></li>
                      <li><a href="?exp=rxorder"><i class="fa fa-arrow-right"></i> สถิติใบสั่งยา Rx Order</a></li>
                    </ul>
              </li>
    
              <!-- สำหรับสมาชิกที่ลงทะเบียน MIS -->
                  <li>
                    <a href="?main=labsearch">
                      <i class="fa fa-search"></i> <span>ค้นผล LAB</span>
                    </a>
                  </li>
                  <li>
                    <a href="?main=vacsearch">
                      <i class="fa fa-search"></i> <span>ข้อมูล Vaccine</span>
                    </a>
                  </li>
          
              <!-- // สำหรับ Guest -->
                  <li class="header"></li>
          
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-book"></i>
                      <span>คู่มือใช้งาน</span>
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i><span class="label label-primary pull-right">4</span>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a target="_blank" href="https://drive.google.com/file/d/1Yo8K53NkXAUmquN7brfFecMRnNHzfAZB/view?usp=sharing"><i class="fa fa-arrow-right"></i> <span>คู่มือ MIS Web4.0</span></a></li>
                      <li><a href="#"><i class="fa fa-arrow-right"></i> <span>คู่มือรายงาน End User</span></a></li>
                      <li><a href="#"><i class="fa fa-arrow-right"></i> <span>รวม Template</span></a></li>
                      <li><a href="?main=update"><i class="fa fa-arrow-right"></i> <span>Last Update</span></a></li>
                    </ul>
                  </li>
          
              <!-- สำหรับ Guest // -->
          
                  <li class="header">&raquo; Create by GHOST &laquo;
                  </li>
                </ul>
              </section>
              <!-- /.sidebar -->
            </aside>
    