@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">User details</div>

                <div class="panel-body">
                    <div class="col-md-3 col-lg-3 " align="center">
                    <img alt="User Pic" src="http://players.grupodial.cl/player/radio/img/male_big.gif" class="img-circle img-responsive">
                    <legend></legend>
                    <h4>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h4>
                    <h5> {{ Auth::user()->email }} </h5>
                    <legend></legend>
                </div>

                <div class=" col-md-9 col-lg-9 ">
                  <h3 align="center">Availability</h3>
                  <div class="table-responsive">
                  <table class="table table-condensed">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                        <th>Sun</th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td>Am</td>

                        <td>

                        @if(Auth::user()->mondayam == 1)
                          <i class="fa fa-check" aria-hidden="true"></i>

                        @else
                            <i class="fa fa-times" aria-hidden="true"></i>
                        @endif

                         </td>
                         <td>

                         @if(Auth::user()->tuesdayam == 1)
                           <i class="fa fa-check" aria-hidden="true"></i>

                         @else
                             <i class="fa fa-times" aria-hidden="true"></i>
                         @endif

                        </td>
                        <td>

                        @if(Auth::user()->wednesdayam == 1)
                          <i class="fa fa-check" aria-hidden="true"></i>

                        @else
                            <i class="fa fa-times" aria-hidden="true"></i>
                        @endif

                       </td>
                       <td>

                       @if(Auth::user()->thursdayam == 1)
                         <i class="fa fa-check" aria-hidden="true"></i>

                       @else
                           <i class="fa fa-times" aria-hidden="true"></i>
                       @endif

                      </td>
                      <td>

                      @if(Auth::user()->fridayam == 1)
                        <i class="fa fa-check" aria-hidden="true"></i>

                      @else
                          <i class="fa fa-times" aria-hidden="true"></i>
                      @endif

                     </td>
                     <td>

                     @if(Auth::user()->saturdayam == 1)
                       <i class="fa fa-check" aria-hidden="true"></i>

                     @else
                         <i class="fa fa-times" aria-hidden="true"></i>
                     @endif

                    </td>
                    <td>

                    @if(Auth::user()->sundayam == 1)
                      <i class="fa fa-check" aria-hidden="true"></i>

                    @else
                        <i class="fa fa-times" aria-hidden="true"></i>
                    @endif

                   </td>
                   </tr>
                    <tr>
                        <td>Pm</td>
                        <td>
                          @if(Auth::user()->mondaypm == 1)
                            <i class="fa fa-check" aria-hidden="true"></i>

                          @else
                              <i class="fa fa-times" aria-hidden="true"></i>
                          @endif
                        </td>
                        <td>

                        @if(Auth::user()->tuesdaypm == 1)
                          <i class="fa fa-check" aria-hidden="true"></i>

                        @else
                            <i class="fa fa-times" aria-hidden="true"></i>
                        @endif

                       </td>
                       <td>

                       @if(Auth::user()->wednesdaypm == 1)
                         <i class="fa fa-check" aria-hidden="true"></i>

                       @else
                           <i class="fa fa-times" aria-hidden="true"></i>
                       @endif

                       </td>
                       <td>

                       @if(Auth::user()->thursdaypm == 1)
                        <i class="fa fa-check" aria-hidden="true"></i>

                       @else
                          <i class="fa fa-times" aria-hidden="true"></i>
                       @endif

                       </td>
                       <td>

                       @if(Auth::user()->fridaypm == 1)
                       <i class="fa fa-check" aria-hidden="true"></i>

                       @else
                         <i class="fa fa-times" aria-hidden="true"></i>
                       @endif

                       </td>
                       <td>

                       @if(Auth::user()->saturdaypm == 1)
                       <i class="fa fa-check" aria-hidden="true"></i>

                       @else
                        <i class="fa fa-times" aria-hidden="true"></i>
                       @endif

                       </td>
                       <td>

                       @if(Auth::user()->sundaypm == 1)
                       <i class="fa fa-check" aria-hidden="true"></i>

                       @else
                       <i class="fa fa-times" aria-hidden="true"></i>
                       @endif

                       </td>
                      </tr>
                    </tbody>


                  </table>
                 </div>

                 <div id="authorize-div" class="authorize-div" style="display: none">

                   <!--Button for the user to click to initiate auth sequence -->

                 </div>
                 <pre id="output"></pre>
                 <button id="authorize-button" class ="btn btn-default" onclick="handleAuthClick(event)">

                   Authorise access to google calender
                 </button>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
