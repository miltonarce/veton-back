<?php

namespace App\Http\Controllers\Api;

use App\Models\ClinicalHistory;
use App\Models\Consultation;
use App\Models\Veterinary;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ConsultationsController extends Controller
{
    /**
     * Retrieve all consultations
     * @return Response
     */
    public function all()
    {
        $consultations = Consultation::all();
        return response()->json($consultations);
    }

    /**
     * Save consultation with idHistory
     * @param int $idHistory
     * @param Request request
     * @return Response
     */
    public function store($idHistory, Request $request)
    {
       try {
        $request['id_history'] = $idHistory;
        $request->validate(Consultation::$rules, Consultation::$errorMessages);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->image;
            $nameImage = time() . "." . $file->extension();
            $file->move(public_path('/imgs'), $nameImage);
            $data['image'] = 'imgs/' . $nameImage;
        } else {
            $data['image'] = '';
        }
        if ($request->has('id_vaccine') && $request->id_vaccine == 8){
           $data['next_dosis_vaccine']= Carbon::now()->addyear();
        }
        if ($request->has('id_vaccine') && $request->id_vaccine == 15){
           $data['next_dosis_vaccine']= Carbon::now()->addyear();
        }
        if ($request->has('id_dewormer')){
            $data['next_dosis_dewormer']= Carbon::now()->addmonth();
        }
       if ($request->has('id_vaccine') && $request->id_vaccine == 16){
           $data['id_vaccine']= null;
       }
       if ($request->has('id_dewormer')&& $request->id_dewormer == 8){
           $data['id_dewormer']= null;
       }
        Consultation::create($data);
        return response()->json([
            'success' => true,
            'msg' => 'La nueva consulta se creo exitosamente.',
            'stack' => ''
        ]);
       } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al crear la consulta',
                'stack' => $e]);
        }
    }

    /**
     * Retrieve consultations with id history
     * @param int $id
     * @return Response
     */
    public function findById($id)
    {
        $consultations = Consultation::all()->where('id_history', '=', $id);
        return response()->json($consultations);
    }

    /**
     * Retrieve consultation with id_consultation
     * @param int $id
     * @return Response
     */
    public function findOneById($id)
    {
        $consultation = Consultation::where('id_consultation',$id)->first();
        return response()->json($consultation);
    }

    /**
     * Update consultation
     * @param Request $request
     * @param int $idConsultation
     * @return Response
     */
    public function editConsultation(Request $request, $idConsultation)
    {
        try {
            $request->validate(Consultation::$rules, Consultation::$errorMessages);
            $data = $request->all();
            $consultation = Consultation::findOrFail($idConsultation);
            $consultation->update($data);
            return response()->json([
                'success' => true,
                'msg' => 'La consulta se editó correctamente.',
                'stack'=>''
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al editar la consulta',
                'stack' => $e
            ]);
        }
    }

    /**
     * Delte consultation by id
     * @param int $id
     * @return Response
     */
    public function removeConsultation($id)
    {
        try {
            $consultation = Consultation::findOrFail($id);
            $consultation->delete();
            return response()->json([
                'success' => true,
                'msg' => 'La consulta se eliminó correctamente.',
                'stack' => ''
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' =>'La consulta no pudo ser eliminada',
                'stack' => $e
            ]);
        }
    }

    /**
     * Retrieve statics from consultations
     * @param int $idVet
     * @return Response
     */
    public function statistics($idUser)
    {
        $statistics = DB::select(
            "SELECT v.fantasy_name Veterinaria,
            count( c.id_consultation ) Cant,
            MONTH( c.created_at ) Mes FROM consultations c INNER JOIN clinicalhistories ch
            ON ( ch.id_history = c.id_history) INNER JOIN veterinaries v
            ON (v.id_veterinary = ch.id_veterinary) WHERE v.id_user IN ($idUser) 
            AND c.created_at > DATE_ADD(NOW(), INTERVAL -12 MONTH) 
            GROUP BY v.id_veterinary, v.fantasy_name,
            MONTH( c.created_at )");

        return response()->json([
            'success' => true,
            'msg' => null,
            'data' => $statistics
        ]);
    }
}
