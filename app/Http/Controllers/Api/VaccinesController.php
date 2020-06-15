<?php
namespace App\Http\Controllers\Api;

use App\Models\Vaccine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VaccinesController extends Controller
{

    /**
     * Retrieve all vaccines
     * @return Response
     */
    public function all()
    {
        try {
            $vaccines = Vaccine::all();
            return response()->json([
                'success' => true,
                'vaccines' => $vaccines
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al obtener las últimas vacunas.',
                'stack' => $e]);
           }
    }

}
