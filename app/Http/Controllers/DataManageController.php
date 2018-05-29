<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;

class DataManageController extends Controller
{
    //
    public function data_manage(Request $request){




      $history = History::simplePaginate(5);
      return view('admin.data_manage',['histories'=>$history]);
    }
}
