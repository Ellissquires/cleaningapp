<?php

namespace App\Http\Controllers;
use Validator;
use App\Contract;
use App\Http\Requests;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $contracts = Contract::all();

        return view('contracts.index', ['contracts' => $contracts]);

    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'contractname' => 'required|max:255',
            'startdate' => 'required|max:255',
            'enddate' => 'required',
            'totalhours' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contracts.index')
                        ->withErrors($validator, 'createcontract')
                        ->withInput();
        }

        $contract = Contract::create([

            'contractname' => $request['contractname'],
            'startdate' => $request['startdate'],
            'enddate' => $request['enddate'],
            'totalhours' => $request['totalhours'],
            'hoursneeded' => $request['totalhours'],

            ]);
        return redirect()->back();


    }

    public function destroy($contract)
    {
        $deletedRows = Contract::where('idContract', $contract)->delete();

        return redirect()->route('contracts.index');
    }
}
