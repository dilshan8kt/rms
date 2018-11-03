<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Select2Controller extends Controller
{
    public function GetSuggestionsForSelect2(Request $request)
    {
        $id = trim($request->id);
        $term = trim($request->q);
        $table = trim($request->t);
        $column = trim($request->c);
        $id_to_select=trim($request->cid);
        if (empty($term)) {
            return \Response::json([]);
        }
        $results = array();
        $results = $this->GetData($id,$column,$table,$term,$id_to_select);
        return response()->json($results);
    }

    
    public function GetData($id,$column,$table,$term,$id_to_select)
    {
        $data=NULL;
        switch ($id) {
            case 0://general//
                $data= DB::table($table)->where(DB::raw('CONCAT('.$column.')'), '=', $term);
                break;
            case 1:
                $data= DB::table($table)->where(DB::raw('CONCAT('.$column.')'), '=', $term);
                break;
            default:
                # code...
                break;
        }
        if($data){
            return $data->orWhere(DB::raw('CONCAT('.$column.')'), 'LIKE', '%' . $term . '%')
                        ->get([$id_to_select.' as id', DB::raw('CONCAT('.$column.') as value')]);
        }
    }
}
