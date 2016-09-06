@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @can('manager-auth')
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Add a contract</div>

                    <div class="panel-body">
                    <form action="{{ route('contracts.store') }}" name ="createcontract" method="post" autocomplete="off">
                         <div class="form-group{{ $errors->createcontract->has('contractname') ? ' has-error' : '' }}">
                            <label for="Contractname">Contract Name</label>
                            <input type="text" name="contractname" id="contractname" placeholder="Contract name" class="form-control">

                           <div class="help-block">{{ $errors->createcontract->first('contractname') }}</div>
                        </div>
                        <div class="form-group{{ $errors->createcontract->has('totalhours') ? ' has-error' : '' }}">
                            <label for="password">Number of hours</label>
                            <input type="text" name="totalhours" id="totalhours" placeholder="Hours" class="form-control">
                            <div class="help-block">{{ $errors->createcontract->first('totalhours') }}</div>
                        </div>

                          <div>
                          <div class="form-group{{ $errors->createcontract->has('startdate') ? ' has-error' : '' }}">
                              <label for="input-date">Start date</label>
                              <input id="input-date"  name = "startdate" class = "form-control" type="date">
                              <div class="help-block">{{ $errors->createcontract->first('startdate') }}</div>

                          </div>
                        <div class="form-group{{ $errors->createcontract->has('enddate') ? ' has-error' : '' }}">
                              <label for="input-date">End date</label>
                              <input id="input-date" name = "enddate" class = "form-control" type="date">
                              <div class="help-block">{{ $errors->createcontract->first('enddate') }}</div>

                          </div>
                        </div>
                        <button type="submit" name = 'submit' class="btn btn-default">Add Contract</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            @endcan
        </div>
        <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Contracts</div>

                      <div class="panel-body">
                        @if ($contracts->count())
                          <table class="table table-striped table-condensed">

                            <thead>
                              <th>Contract name</th>
                              <th>Total Hours</th>
                              <th>Hours needed</th>
                              <th>Start date</th>
                              <th>End date</th>
                              @can('manager-auth')
                                <th>Delete</th>
                              @endcan
                           </thead>
                           <tbody>
                             @foreach ($contracts as $contract)
                              <tr>
                                <td>{{ $contract->contractname }}</td>

                                <td>{{ $contract->totalhours }}</td>

                                <td>{{ $contract->hoursneeded }}</td>

                                <td>{{ $contract->startdate }}</td>

                                <td>{{ $contract->enddate }}</td>


                              @can('manager-auth')
                                <td>
                                  <form action="{{ route('contracts.destroy', $contract->idContract) }}" method="POST">
                                    <center><button type="submit" class="btn btn-secondary" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button></center>
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                  </form>
                                </td>
                              @endcan
                              </tr>
                             @endforeach
                           </tbody>



                        @else
                          <p>No contracts created </p>

                        @endif
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
