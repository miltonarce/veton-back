<?php
namespace App\Http\Controllers\Api;

use App\Models\Dewormer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DewormersController extends Controller
{

    /**
     * Retrieve all dewormer
     * @return Response
     */
    public function all()
    {
        try {
            $dewormers = Dewormer::all();
            return response()->json([
                'success' => true,
                'dewormers' => $dewormers
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'success' => false,
                'msg' => 'Se produjo un error al obtener los ultimos desparasitantes.',
                'stack' => $e]);
           }
    }

}
