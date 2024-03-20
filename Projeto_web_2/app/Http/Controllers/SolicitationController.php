<?php

namespace App\Http\Controllers;

use App\Models\Solicitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SolicitationController extends Controller
{
    public function index(){
        $solicitations = Solicitation::all();
        return view('pages.perfil', compact('solicitations'));
    }

    public function create(){
        return view('pages.solicitacao');
    }

    public function store(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                //os campos aqui são os names dos campos do formulario HTML
                'solicitation_title'=>'required|string',
                'solicitation_date' => 'required|date',
                'solicitation_description' => 'required|string|min:50|max:200',
                'solicitation_classification' => 'required'
            ]
        );
        if($validator->fails()){
            return redirect()->route('solicitation.create')
            ->withErrors($validator)->withInput();
        }
        Solicitation::create($request->all());
        return redirect()->route('solicitation.index');
    }

    public function show(int $id){

    }

    public function edit(int $id){
        $solicitation = Solicitation::findOrFail($id);
        return view('pages.editarSolicitacao', compact('solicitation'));
    }

    public function update(Request $request, int $id){
        $validator = Validator::make(
            $request->all(),
            [
                //os campos aqui são os names dos campos do formulario HTML
                'solicitation_title'=>'required|string',
                'solicitation_date' => 'required|date',
                'solicitation_description' => 'required|string|min:50|max:200',
                'solicitation_classification' => 'required'
            ]
        );
        if($validator->fails()){
            return redirect()->route('solicitation.edit', ['id'=> $id]);
        }
        $solicitation = Solicitation::findOrFail($id);
        $solicitation->update($request->all());
        return redirect()->route('solicitation.index');
    }

    public function destroy(int $id){
        $solicitation = Solicitation::findOrFail($id);
        $solicitation->delete();
        return redirect()->route('solicitation.index');
    }
}
