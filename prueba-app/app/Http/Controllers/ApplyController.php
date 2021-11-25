<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;


class ApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     * Need to be login
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = $request->query('filter');

      
    
       
        $applies = array();
       
        if (!empty($filter)) {
            $applies = Apply::where('applies.name', 'like', '%'.$filter.'%')
                ->orderBy('estado', 'ASC')->paginate(5);
        }
        else {
            $applies=Apply::orderBy('estado','ASC')->paginate(5);
        }
        return view('Apply.index',compact('applies'))->with('filter', $filter);; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Apply.toApply');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ 'name'=>'required', 'last_name'=>'required', 'email'=>'required', 'contact'=>'required', 'program'=>'required']);
        Apply::create($request->all());
        return redirect('/gracias');
    }

 

    /**
     * Change the state of a Apply the specified resource.
     *
     * @param  int  $id
     * @param  int  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $estado)
    {
        $apply = Apply::find($id);
        $apply->estado=$estado;
        $apply->update();
        
        return back()->withInput();
       
    }

   

   
 
}
