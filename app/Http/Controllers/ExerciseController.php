<?php

namespace App\Http\Controllers;

use App\Model\Exercise;
use App\DAO\CouchDBDAO;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    
    private $dao;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->$dao=new CouchDBDAO();
    }

    public function findAll()
    {
        return response()->json($this->$dao::findAll());
    }
}
