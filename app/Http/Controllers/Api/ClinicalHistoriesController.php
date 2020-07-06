<?php

namespace App\Http\Controllers\Api;

use App\Models\ClinicalHistory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClinicalHistoriesController extends Controller
{
    /**
     * Retrieve all clininical histories
     * @return Response
     */
    public function all()
    {
        $clinicalhistories = ClinicalHistory::all();
        return response()->json($clinicalhistories);
    }

    /**
     * Save clinical histroy with pet
     * @param int $idPet
     * @param Request $request
     * @return Response
     */
    public function store($idPet, Request $request)
    {
        try {
            $request->validate(ClinicalHistory::$rules, ClinicalHistory::$errorMessages);
            $data = $this->saveImageIfExists($request, $request->all());
            $data['id_pet'] = $idPet;
            ClinicalHistory::create($data);
            return response()->json([
                'success' => true,
                'msg' => 'La historia clinica se creo correctamente',
                'stack' => '',
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al crear la historia clínica',
                'stack' => $e]);
        }
    }

    /**
     * Update clinical history
     * @param Request $request
     * @param int $idHistory
     * @return Response
     */
    public function editHistory(Request $request, $idHistory) 
    {
        try {
            $request->validate(ClinicalHistory::$rules, ClinicalHistory::$errorMessages);
            $data = $request->all();
            $history = ClinicalHistory::findOrFail($idHistory);
            $history->update($data);
            return response()->json([
                'success' => true,
                'msg' => 'La historia clinica ha sido guardada',
                'stack' => ''
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al editar la historia clínica',
                'stack' => $e]);
        }
    }

    /**
     * Remove clinical history by id
     * @param int $idHistory
     * @return Response
     */
    public function removeHistory($idHistory) 
    {
        try {
            $history = ClinicalHistory::findOrFail($idHistory);
            $history->delete();
            return response()->json([
                'success' => true,
                'msg' => 'La historia clinica se eliminó correctamente',
                'stack' => ''
            ]);
        } catch(QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al borrar la historia clínica',
                'stack' => $e]);
        }
    }

    /**
     * Retrieve clinical history by id pet
     * @param int $id
     * @return Response
     */
    public function findById($id) 
    {
        $clinicalHistories = ClinicalHistory::all()->where('id_pet', '=', $id);
        return response()->json($clinicalHistories);
    }

    /**
     * Retrieve one clinical history by id
     * @param int $id
     * @return Response
     */
    public function findOneById($id)
    {
        $clinicalHistory = ClinicalHistory::where('id_history',$id)->first();
        return response()->json($clinicalHistory);
    }

    /**
     * Retrieve clinical histories by veterinary with id
     * @param int $idVet
     * @return Response
     */
    public function findByVeterinaries($idVet)
    {
        $clinicalhistories = ClinicalHistory::where('id_veterinary', '=', $idVet)->get();
        return response()->json($clinicalhistories);
    }


    private function requireImage($request ,$nameProp)
    {   
        $image = $request->file($nameProp);
        $nameImageWithExtension = time() . "." . $image->extension();
        $image->move(public_path('./imgs/historiesimages/'), $nameImageWithExtension);
        return $nameImageWithExtension;
    }

       /**
     * Handle input images from save and move to folder assets
     * @param Request $request
     * @param array $data
     * @return array
     */
    private function saveImageIfExists($request, $data) 
    {   
        
        if($request->hasFile('image1'))
            $data['image_1'] = $this->requireImage($request, 'image1');
        if($request->hasFile('image2'))
            $data['image_2'] = $this->requireImage($request, 'image2');
        if($request->hasFile('image3'))
            $data['image_3'] = $this->requireImage($request, 'image3');
        if($request->hasFile('image4'))
            $data['image_4'] = $this->requireImage($request, 'image4');
        if($request->hasFile('image5'))
            $data['image_5'] = $this->requireImage($request, 'image5');

        return $data;
    }

    
}
