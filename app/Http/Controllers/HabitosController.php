<?php

namespace App\Http\Controllers;

use App\Habito;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HabitoRequest;

class HabitosController extends Controller
{
    public function index(){
        $habitos = Habito::orderBy('nome')->paginate(1);
        return view('habitos.index', ['habitos'=>$habitos]);
    }
    public function create(){
        return view('habitos.create');
    }
    public function store(HabitoRequest $request) {
        $novo_habito = $request->all();
        Habito::create($novo_habito);

        return redirect()->route('habitos');
    }

    public function destroy($id){
        try{
            Habito::find($id)->delete();
            $ret = array('status'=>'ok', 'msg'=>"null");
        } catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>'erro', 'msg'=>$e->getMessage());
        }
        catch (\PDOException $e) {
            $ret = array('status'=>'erro', 'msg'=>$e->getMenssage());
        }
        return $ret;
        
    }
    public function edit($id){
        $habito = Habito::find($id);
        return view('habitos.edit', compact('habito'));
    }
    public function update(HabitoRequest $request, $id){
        Habito::find($id)->update($request->all());
        return redirect()->route('habitos');
    }
}
