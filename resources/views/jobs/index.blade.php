@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <div class="panel panel-default">
                <div class="panel-heading">Jobs</div>
                  <div class="panel-body">
                    @can('manager-auth')
                       @endcan
                 </div>
               </div>
              </div>
          </div>
         </div>
    </div>
@endsection
