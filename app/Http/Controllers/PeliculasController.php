<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;
use App\Models\YearEstreno;
class PeliculasController extends Controller
{
    
    public function index()
    {
        return view("peliculas.index");
     
    }

    public function create()
    {
       
        return view("peliculas.create");
    }

      public function store(Request $request)
    {
 
        
       try{
            $peliculas = new Peliculas;
            $peliculas->nombre        = $request->input('nombre');
            $peliculas->year_a        = $request->input('year_a');
            $peliculas->sipnosis        = $request->input('sipnosis');
            $peliculas->idioma        = $request->input('idioma');
            $peliculas->calidad_cal        = $request->input('calidad_cal');
            $peliculas->director        = $request->input('director');
            $peliculas->calificacion_clf        = $request->input('calificacion_clf');
            $peliculas->genero_gen        = $request->input('genero_gen');
            $peliculas->categoria_cat        = $request->input('categoria_cat');

/*
            if(!$peliculas->save()){
                \DB::rollback();
                return redirect('peliculas/create')
                        ->withErrors($e->getErrors())
                        ->withInput();
            }
            //\DB::commit();
        }catch(ValidationException $e)
        {
            // Rollback and then redirect
            // back to form with errors
            //\DB::rollback();
            return redirect('peliculas/create')
                        ->withErrors($e->getErrors())
                        ->withInput();
        } catch(\Exception $e)
        {
            //\DB::rollback();
            throw $e;
        }    

        //return view('medida.store')->with('medida_id', $medida->id);
        return redirect()->route('peliculas.index');
*/

    }
    public function show($id)
    {
        
    }


    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
