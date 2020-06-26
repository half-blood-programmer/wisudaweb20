@extends('layoutbos.master')
@section('content')

@if(Auth::user()->id_level === 1)
    {@section('content')
        @include('member')
    @endsection}
@else

<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row p-4" style="display: inline-block;margin-left: 40%" >
    <div class="tile_count">
      <div class="col-md-12 col-sm-4  tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
        <div class="count">
            {{$countAll}}
        </div>
      </div>
    </div>
  </div>
    <!-- /top tiles -->

    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="dashboard_graph">

          <div class="row x_title">
            <div class="col-md-6">
              <h3>Details</h3>
            </div>
            <div class="col-md-6">
              {{-- <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span>December 30, 2014 - January 28, 2015</span></b>
              </div> --}}
            </div>
          </div>



<section class="bar-graph bar-graph-horizontal bar-graph-one col-md-12">
    <div class="bar-one col-md-12">
      <span class="labelprodi col-md-4">D III Akuntansi</span>
      <div class="barbg col-md-6">
      <div class="bar" data-percentage="{{$countAk3/$countAll*100}}%"
                            data="{{$countAk3}}"></div>
        </div>
    </div>
    <div class="bar-two col-md-12">
      <span class="labelprodi col-md-4">D III Pajak</span>
      <div class="barbg col-md-6">
        <div class="bar" data-percentage="{{$countPj3/$countAll*100}}%"
                              data="{{$countPj3}}"></div>
          </div>
    </div>
    <div class="bar-one col-md-12">
      <span class="labelprodi col-md-4">D III PBB / Penilai</span>
      <div class="barbg col-md-6">
        <div class="bar" data-percentage="{{$countPbb3/$countAll*100}}%"
                              data="{{$countPbb3}}"></div>
          </div>
    </div>
    <div class="bar-two col-md-12">
      <span class="labelprodi col-md-4">D III Bea Cukai</span>
      <div class="barbg col-md-6">
        <div class="bar" data-percentage="{{$countBc3/$countAll*100}}%"
                              data="{{$countBc3}}"></div>
          </div>
    </div>
    <div class="bar-one  col-md-12">
      <span class="labelprodi col-md-4">D III KBN</span>
      <div class="barbg col-md-6">
        <div class="bar" data-percentage="{{$countKbn3/$countAll*100}}%"
                              data="{{$countKbn3}}"></div>
          </div>
    </div>
    <div class="bar-two col-md-12">
      <span class="labelprodi col-md-4">D III Manset</span>
      <div class="barbg col-md-6">
        <div class="bar" data-percentage="{{$countMa3/$countAll*100}}%"
                              data="{{$countMa3}}"></div>
          </div>
    </div>
    <div class="bar-one  col-md-12">
      <span class="labelprodi col-md-4">D I Pajak</span>
      <div class="barbg col-md-6">
        <div class="bar" data-percentage="{{$countPj1/$countAll*100}}%"
                              data="{{$countPj1}}"></div>
          </div>
    </div>
    <div class="bar-two col-md-12">
      <span class="labelprodi col-md-4">D I Bea Cukai</span>
      <div class="barbg col-md-6">
        <div class="bar" data-percentage="{{$countBc1/$countAll*100}}%"
                              data="{{$countBc1}}"></div>
          </div>
    </div>
    <div class="bar-one  col-md-12">
      <span class="labelprodi col-md-4">D I KBN</span>
      <div class="barbg col-md-6">
        <div class="bar" data-percentage="{{$countKbn1/$countAll*100}}%"
                              data="{{$countKbn1}}"></div>
          </div>
    </div>
  </section>


          <div class="clearfix"></div>
        </div>
      </div>

    </div>
    <br />

    <div class="row">

        <!-- bar char -->





  </div>
</div>
@endif
@stop
