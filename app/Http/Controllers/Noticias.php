<?php

namespace MyApLaravel\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Request;

use MyApLaravel\Noticia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class Noticias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::all();
        return view('welcome')->with(['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
                                    "title" => "required",
                                    "description" => "required"
                                    ]);
        $noticia = new Noticia();
        $noticia->title = $request->title;
        $noticia->description = $request->description;
        
        $img = $request->file('url_image');
        $file_route = time().'_'.$img->getClientOriginalName();
        Storage::disk('imgNoticias')->put($file_route, file_get_contents($img->getRealPath()));
        
        $noticia->url_image = $file_route;
        if($noticia->save())
            return back()->with("msj", "Datos Guardados");
        else
            return back();
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('home')->with(['edit' => true, "noticia" => Noticia::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
                                    "title" => "required",
                                    "description" => "required"
                                    ]);
        $noticia = Noticia::find($id);
        $noticia->title = $request->title;
        $noticia->description = $request->description;
        
        //Storage::disk('imgNoticas')->delete($request->previous_image);
        
        File::delete(public_path().'/imgNoticias/'.$request->previous_image);
        
       
        $img = $request->file('url_image');
        
        $file_route = time().'_'.$img->getClientOriginalName();
        Storage::disk('imgNoticias')->put($file_route, file_get_contents($img->getRealPath()));
        
        $noticia->url_image = $file_route;
        
        if($noticia->save())
            return redirect ('home');
        else
            return back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $noticia = Noticia::find($id);
        File::delete(public_path().'/imgNoticias/'.$noticia->url_image);
        $noticia->delete();
        
        return back();
    }
}
