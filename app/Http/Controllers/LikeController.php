<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }
    public function prueba($tipo, $id){
        $user = \Auth::user();
        if ($tipo==1) {
            

        $isset_like = Like::where('id_usuario',$user->id)->where('id_consejo',$id)->count();
        
        if ($isset_like == 0) {
            $like = new Like();
        $like->id_usuario = $user->id;
        $like->id_consejo = (int)$id;
        $like->save();
        return response()->json([
            'like'=>$like
        ]);
        }else{
            return response()->jason([
                'message'=>'Ya diste like'
            ]);
        }
        } else {
            $like = Like::where('id_usuario',$user->id)->where('id_consejo',$id)->first();
        
        if ($like) {
            
        $like->delete();
        return response()->json([
            'like'=>$like,
            'message'=>'Has dado dislike'
        ]);
        }else{
            return response()->jason([
                'messase'=>'El lik no existe'
            ]);
        }
        }
        
    }
    public function like($id){
        $user = \Auth::user();

        $isset_like = Like::where('id_usuario',$user->id)->where('id_consejo',$id)->count();
        
        if ($isset_like == 0) {
            $like = new Like();
        $like->id_usuario = $user->id;
        $like->id_consejo = (int)$id;
        $like->save();
        return response()->json([
            'like'=>$like
        ]);
        }else{
            return response()->jason([
                'message'=>'Ya diste like'
            ]);
        }
        
        
    }

    public function dislike($id){
        $user = \Auth::user();

        $like = Like::where('id_usuario',$user->id)->where('id_consejo',$id)->first();
        
        if ($like) {
            
        $like->delete();
        return response()->json([
            'like'=>$like,
            'message'=>'Has dado dislike'
        ]);
        }else{
            return response()->jason([
                'messase'=>'El lik no existe'
            ]);
        }
        
    }
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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
