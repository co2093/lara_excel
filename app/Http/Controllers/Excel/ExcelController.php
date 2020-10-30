<?php

namespace App\Http\Controllers\Excel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Imports\UsersImport;


class ExcelController extends Controller
{
    //

    public function importExcel(Request $request){

    	$file = $request->file('file');
    	Excel::import(new UsersImport, $file);


    	return back()->with('success','Excel importado de manera exitosa');
    }

}
