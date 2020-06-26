

        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view" style="padding-bottom: 20px;">
            <div class="navbar nav_title" style="border: 0;">
              <a href=" {{ route('home') }}" class="site_title"><i class="fa fa-paw"></i> <span>Bos Page</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              {{-- <div class="profile_pic">
                <img src="bos/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div> --}}
              <div class="profile_info">
                <span>Welcome,</span>
              <h2>{{Auth::user()->name}}</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu" style="overflow-y: visible">
                  <li><a href=" {{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a><i class="fa fa-table"></i> Datas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href=" {{ route('3akuntansi') }}">D III Akuntansi</a></li>
                        <li><a href=" {{ route('3pajak') }}">D III Pajak</a></li>
                        <li><a href=" {{ route('3pbb') }}">D III PBB / Penilai</a></li>
                        <li><a href=" {{ route('3beacukai') }}">D III Bea Cukai</a></li>
                        <li><a href=" {{ route('3kbn') }}">D III KBN</a></li>
                        <li><a href=" {{ route('3manset') }}">D III Manset</a></li>
                        <li><a href=" {{ route('1pajak') }}">D I Pajak</a></li>
                        <li><a href=" {{ route('1beacukai') }}">D I Bea Cukai</a></li>
                        <li><a href=" {{ route('1kbn') }}">D I KBN</a></li>
                      </ul>
                    </li>
                    <li><a href=" {{ route('form') }}"><i class="fa fa-edit"></i> Forms</a>
                    </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- /menu footer buttons -->
          </div>
        </div>

