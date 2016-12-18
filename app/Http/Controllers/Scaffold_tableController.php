<?php
namespace MyApLaravel\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use MyApLaravel\Scaffold_table;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class Scaffold_tableController.
 *
 * @author  The scaffold-interface created at 2016-12-17 08:47:44pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Scaffold_tableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - scaffold_table';
        $scaffold_tables = Scaffold_table::paginate(6);
        
        return view('scaffold_table.index',compact('scaffold_tables','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - scaffold_table';
        
        return view('scaffold_table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $scaffold_table = new Scaffold_table();

        
        $scaffold_table->Name = $request->Name;

        
        $scaffold_table->born = $request->born;

        
        $scaffold_table->isActive = $request->isActive;

        
        
        $scaffold_table->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new scaffold_table has been created !!']);

        return redirect('scaffold_table');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - scaffold_table';

        if($request->ajax())
        {
            return URL::to('scaffold_table/'.$id);
        }

        $scaffold_table = Scaffold_table::findOrfail($id);
        return view('scaffold_table.show',compact('title','scaffold_table'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - scaffold_table';
        if($request->ajax())
        {
            return URL::to('scaffold_table/'. $id . '/edit');
        }

        
        $scaffold_table = Scaffold_table::findOrfail($id);
        return view('scaffold_table.edit',compact('title','scaffold_table'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $scaffold_table = Scaffold_table::findOrfail($id);
    	
        $scaffold_table->Name = $request->Name;
        
        $scaffold_table->born = $request->born;
        
        $scaffold_table->isActive = $request->isActive;
        
        
        $scaffold_table->save();

        return redirect('scaffold_table');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/scaffold_table/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$scaffold_table = Scaffold_table::findOrfail($id);
     	$scaffold_table->delete();
        return URL::to('scaffold_table');
    }
}
