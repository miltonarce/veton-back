<?php

namespace App\Http\Controllers\Api;

use App\Models\Pet;
use App\Models\User;
use App\Models\Veterinary;
use App\Models\VeterinaryPendingApproval;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Hash;

class VeterinariesController extends Controller
{
    /**
     * Retrieve all veterinaries
     * @return Response
     */
    public function all()
    {
        try{
            $veterinaries = Veterinary::all();
            return response()->json([
                'success'      => true,
                'veterinaries' => $veterinaries
            ]);
        }catch(QueryException $e){
            return response()->json([
                'success' => false,
                'msg'     => 'Se produjo un error al obtener la lista de veterinarias',
                'stack'   => $e
            ]);
        }
    }

    public function index()
    {
        $veterinariesList = Veterinary::all();
        return view('veterinaries.admin_list_vets', compact('veterinariesList'));
    }

    /**
     * Save vet pending approve to validate
     * @param Request $request
     * @return Response
     */
    /*public function storePendingApproval(Request $request)
    {
        try {
            $request->validate(VeterinaryPendingApproval::$rules, VeterinaryPendingApproval::$errorMessages);
            $data = $request->all();
            $data['approved'] = 1;
            VeterinaryPendingApproval::create($data);
            return response()->json([
                'success' => true,
                'msg' => 'Se creo la veterinaria',
                'stack' => ''
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al crear una veterinaria',
                'stack' => $e]);
        }
    }*/

    /**
     * Retrieve all veterinaries form user by id
     * @param int $idUser
     * @return Response
     */
    public function findByUser($idUser)
    {
        try{
            $veterinaries_approved = Veterinary::where('id_user', '=', $idUser)->get();
            $veterinaries_pending_approval = VeterinaryPendingApproval::where('id_user', '=', $idUser)->get();
            $veterinaries = array_merge($veterinaries_approved->toArray(), $veterinaries_pending_approval->toArray());
            return response()->json([
                'success'    => true,
                'veterinary' => $veterinaries
            ]);
        }catch(QueryException $e){
            return response()->json([
                'success' => false,
                'msg'     => 'Se produjo un error al obtener la veterinaria',
                'stack'   => $e
            ]);
        }

    }

    public function findById($idVet)
    {
        try{
            $veterinary = Veterinary::where('id_veterinary', '=', $idVet)->first();
            $users = Veterinary::find($idVet)->workUsers()->get();
            return response()->json([
                'success'    => true,
                'veterinary' => $veterinary,
                'doctors' => $users
            ]);
        }catch(QueryException $e){
            return response()->json([
                'success' => false,
                'msg'     => 'Se produjo un error al obtener la veterinaria',
                'stack'   => $e
            ]);
        }

    }

    public function store(Request $request)
    {
        try {
            $request->validate(Veterinary::$rules, Veterinary::$errorMessages);
            $data = $request->all();
            $data['approved'] = 1;
            Veterinary::create($data);
            return response()->json([
                'success' => true,
                'msg' => 'Se creo la veterinaria',
                'stack' => ''
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al crear una veterinaria',
                'stack' => $e]);
        }
    }

    /**
     * Save doc vet , validate fields, save image
     * @param Request $request
     */
    public function storeDoc(Request $request)
    {
        DB::beginTransaction();
        try {
            $request->validate(User::$rules, User::$errorMessages);
            $data = $this->saveImageIfExists($request, $request->all());
            $data['password'] = Hash::make($request['password']);
            User::create($data);
            $id_user= DB::getPdo()->lastInsertId();
            $data = [
                'id_user'=>$id_user,
                'id_veterinary'=>$request['id_vet'],
            ];
            DB::table('user_veterinary')->insert($data);
            DB::commit();
            return response()->json([
                'success' => true,
                'msg' => 'El médico se creó exitosamente',
                'stack' => ''
            ]);
        } catch (QueryException $e) {
            DB::rollback();
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al crear el médico',
                'stack' => $e]);
        }
    }

    /**
     * Update veterinary
     * @param Request $request
     * @param int $idVet
     * @return Response
     */
    public function editVet(Request $request, $idVet)
    {
        try {
            $request->validate(Veterinary::$rules, Veterinary::$errorMessages);
            $data = $this->saveImageIfExists($request, $request->all());
            $veterinary = Veterinary::findOrFail($idVet);
            $veterinary->update($data);
            return response()->json([
                'success' => true,
                'msg' => 'La veterinaria se editó correctamente.',
                'stack'=>''
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al editar la veterinaria',
                'stack' => $e
            ]);
        }
    }

    private function saveImageIfExists($request, $data)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $nameImageWithExtension = time() . "." . $image->extension();
            $image->move(public_path('./imgs'), $nameImageWithExtension);
            $data['image'] = $nameImageWithExtension;
        } else {
            $data['image'] = '';
        }
        return $data;
    }

}
