@extends('layouts.admin-layout')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user-friends"></i>
              </div>
              <div class="mr-5">Team Member</div>
              @php
              $team = DB::table('teams')->count();
              @endphp
              <strong style="font-size: 20px;">{{$team}}</strong>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{ route('/Teamall') }}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Slider</div>
              @php
              $slider = DB::table('sliders')->count();
              @endphp
              <strong style="font-size: 20px;">{{$slider}}</strong>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{ route('/sliderall') }}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fab fa-fw fa-servicestack"></i>
              </div>
              <div class="mr-5">Service</div>
              @php
              $Service = DB::table('services')->count();
              @endphp
              <strong style="font-size: 20px;">{{$Service}}</strong>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{ route('/Serviceall') }}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-eye"></i>
              </div>
              <div class="mr-5">visitor</div>
              @php
              $visitors = DB::table('visits')->count();
              @endphp
              <strong style="font-size: 20px;">{{$visitors}}</strong>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>

      <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col-md-3 col-sm-4 col-6 mt-2">
            <a href="" style="text-decoration: none; color:#000;">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <i class="fa fa-user fa-3x"></i>
                  <h4>Slider</h4>
                </div>
              </div>
            </a>  
          </div>
          <div class="col-md-3 col-sm-4 col-6 mt-2">
            <a href="" style="text-decoration: none; color:#000;">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <i class="fa fa-user fa-3x"></i>
                  <h4>Service</h4>
                </div>
              </div>
            </a>  
          </div>
          <div class="col-md-3 col-sm-4 col-6 mt-2">
            <a href="" style="text-decoration: none; color:#000;">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <i class="fa fa-user fa-3x"></i>
                  <h4>Portfolio</h4>
                </div>
              </div>
            </a>  
          </div>
          <div class="col-md-3 col-sm-4 col-6 mt-2">
            <a href="" style="text-decoration: none; color:#000;">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <i class="fa fa-user fa-3x"></i>
                  <h4>Team</h4>
                </div>
              </div>
            </a>  
          </div>
           <div class="col-md-3 col-sm-4 col-6 mt-2">
            <a href="" style="text-decoration: none; color:#000;">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <i class="fa fa-user fa-3x"></i>
                  <h4>Slider</h4>
                </div>
              </div>
            </a>  
          </div>
          <div class="col-md-3 col-sm-4 col-6 mt-2">
            <a href="" style="text-decoration: none; color:#000;">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <i class="fa fa-user fa-3x"></i>
                  <h4>Service</h4>
                </div>
              </div>
            </a>  
          </div>
          <div class="col-md-3 col-sm-4 col-6 mt-2">
            <a href="" style="text-decoration: none; color:#000;">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <i class="fa fa-user fa-3x"></i>
                  <h4>Portfolio</h4>
                </div>
              </div>
            </a>  
          </div>
          <div class="col-md-3 col-sm-4 col-6 mt-2">
            <a href="" style="text-decoration: none; color:#000;">
              <div class="card bg-light">
                <div class="card-body text-center">
                  <i class="fa fa-user fa-3x"></i>
                  <h4>Team</h4>
                </div>
              </div>
            </a>  
          </div>
        </div>
      </div>
    
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Visitor List</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                 <th>SL</th>
                  <th>IP</th>
                  <th>city</th>
                  <th>postal</th>
                  <th>region</th>
                  <th>loc</th>
                  <th>Country</th>
                  <th>timezone</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>SL</th>
                  <th>IP</th>
                  <th>city</th>
                  <th>postal</th>
                  <th>region</th>
                  <th>loc</th>
                  <th>Country</th>
                  <th>timezone</th>
                </tr>
              </tfoot>
              <tbody>
                  @php
                    $visit = App\visit::orderBy('id', 'desc')->get();
                  @endphp
                <tr>
                @foreach($visit as $key => $visits)
                  <td>{{++$key}}</td>
                  <td>{{$visits->ip}}</td>
                   <th>{{$visits->city}}</th>
                  <th>{{$visits->postal}}</th>
                  <th>{{$visits->region}}</th>
                  <th>{{$visits->loc}}</th>
                  <th>{{$visits->name}}</th>
                  <th>{{$visits->timezone}}</th>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
@endsection