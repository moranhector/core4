<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatehistorialoperacionesRequest;
use App\Http\Requests\UpdatehistorialoperacionesRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\historialoperaciones;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\DB;

class historialoperacionesController extends AppBaseController
{
    /**
     * Display a listing of the historialoperaciones.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var historialoperaciones $historialoperaciones */
        //$historialoperaciones = historialoperaciones::all();
        $historialoperaciones = DB::table('historialoperaciones')->paginate(25);

        return view('historialoperaciones.index')
            ->with('historialoperaciones', $historialoperaciones);
    }




    /**
     * Show the form for creating a new historialoperaciones.
     *
     * @return Response
     */
    public function create()
    {
        return view('historialoperaciones.create');
    }

    /**
     * Store a newly created historialoperaciones in storage.
     *
     * @param CreatehistorialoperacionesRequest $request
     *
     * @return Response
     */
    public function store(CreatehistorialoperacionesRequest $request)
    {
        $input = $request->all();

        /** @var historialoperaciones $historialoperaciones */
        $historialoperaciones = historialoperaciones::create($input);

        Flash::success('Historialoperaciones saved successfully.');

        return redirect(route('historialoperaciones.index'));
    }

    /**
     * Display the specified historialoperaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var historialoperaciones $historialoperaciones */
        $historialoperaciones = historialoperaciones::find($id);

        if (empty($historialoperaciones)) {
            Flash::error('Historialoperaciones not found');

            return redirect(route('historialoperaciones.index'));
        }

        return view('historialoperaciones.show')->with('historialoperaciones', $historialoperaciones);
    }

    /**
     * Show the form for editing the specified historialoperaciones.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var historialoperaciones $historialoperaciones */
        $historialoperaciones = historialoperaciones::find($id);

        if (empty($historialoperaciones)) {
            Flash::error('Historialoperaciones not found');

            return redirect(route('historialoperaciones.index'));
        }

        return view('historialoperaciones.edit')->with('historialoperaciones', $historialoperaciones);
    }

    /**
     * Update the specified historialoperaciones in storage.
     *
     * @param int $id
     * @param UpdatehistorialoperacionesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehistorialoperacionesRequest $request)
    {
        /** @var historialoperaciones $historialoperaciones */
        $historialoperaciones = historialoperaciones::find($id);

        if (empty($historialoperaciones)) {
            Flash::error('Historialoperaciones not found');

            return redirect(route('historialoperaciones.index'));
        }

        $historialoperaciones->fill($request->all());
        $historialoperaciones->save();

        Flash::success('Historialoperaciones updated successfully.');

        return redirect(route('historialoperaciones.index'));
    }

    /**
     * Remove the specified historialoperaciones from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var historialoperaciones $historialoperaciones */
        $historialoperaciones = historialoperaciones::find($id);

        if (empty($historialoperaciones)) {
            Flash::error('Historialoperaciones not found');

            return redirect(route('historialoperaciones.index'));
        }

        $historialoperaciones->delete();

        Flash::success('Historialoperaciones deleted successfully.');

        return redirect(route('historialoperaciones.index'));
    }






    public function graficar($opcion)   // Menu Principal  
    {

 

        //dd($opcion);

        $hoy = getdate();




        switch ($opcion) {
            case "0":
                $cMes = substr("00".$hoy["mon"],-2);
                //$cMes = "09";

                

                $cAnio = substr($hoy["year"],-4);
                //$cAnio = "2019" ;

                $mes = "Agosto 2022";
                //echo "i es igual a 0";
                // NECESITO OBTENER EL PERIODO ACTUAL

                $cPeriodo = $cAnio.$cMes ;
                // '201909'

                $mes = substr($hoy["month"],-10)." ".$cAnio ;


                break;
            case "202207":
                $cMes = "07";
                $cAnio = "2022" ;
                $mes = "Julio 2022";
                $cPeriodo = $cAnio.$cMes ;                
                break;
    
            default:
                $cMes = substr($opcion ,-2);
                $cAnio = substr($opcion ,0,4);
                $cPeriodo = $cAnio.$cMes ;                                
                $mes = $opcion ;                
                break;            

            

        }

 

        //dd($cPeriodo);        

        $expedientes = Historialoperaciones::selectRaw('count(*) cantidad')
        ->whereraw( 'year(registrado_at)=2022' )        
        ->count();

        $expedientes2021 = Historialoperaciones::selectRaw('count(*) cantidad')
        ->whereraw( 'year(registrado_at)=2021' )        
        ->count();        



        //->where( 'year(registrado_at)=2022' )

        //dd($cPeriodo);
  
            //$cantidad = DB::table('encuestas')
            //->whereraw('MONTH(created_at) ='.$cMes )        
            //->count('consultatel')  ;             
            


 

        //$prom_atencion_tel = Encuesta::selectRaw('AVG(consultatel) AS promedio FROM encuestas')->get();
        /* EJEMPLO DE PROMEDIO 
        https://medium.com/@panjeh/laravel-query-builder-method-finding-maximum-minimum-average-and-sum-of-a-column-ce06530303d1
       
        $price = DB::table('orders')
        ->where('finalized', 1)
        ->avg('price');

         */
        /* SELECT AVG(consultatel) FROM encuestas WHERE YEAR(created_at)=2019 AND MONTH(created_at)=9        */

      
        //dd($prom_atencion_tel);

        //return view('encuestas.graficos', compact('cantidad'));
        //return view('encuestas.graficos')->with('cantidad',$cantidadencuestas->cantidad);




        return view('historialoperaciones.graficos', [
        'cantidad' => $expedientes,
        'periodo'=> $cPeriodo,
        'expedientes'=> $expedientes,
        'expedientes2021'=> $expedientes2021,
        'mes'=> $mes,                         
        ]); 
    }    





}
