<?php

namespace App\Http\Controllers;

$autoloader = join(DIRECTORY_SEPARATOR,[__DIR__,'vendor','autoload.php']);
require $autoloader;

use PHPOnCouch\CouchClient;
use PHPOnCouch\Exceptions;

$config = join(DIRECTORY_SEPARATOR,[__DIR__,'..','p','pr01-config.php']);
$cfg = require $config;


class CouchDBDAO
{
    
    private $dsn='';

    public function __construct()
    {
    }

    private function init() {
        $this->$dsn='http://(user):(pass)@(host):(port)';
        $this->$dsn = str_replace('(user)',$cfg['user'],$this->$dsn);
        $this->$dsn = str_replace('(pass)',$cfg['pass'],$this->$dsn);
        $this->$dsn = str_replace('(host)',$cfg['host'],$this->$dsn);
        $this->$dsn = str_replace('(port)',$cfg['port'],$this->$dsn);        
    }

    public function connect() {
        try {
            $client = new CouchClient($dsn, $cfg['name']);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        
    }

    //CRUD

    public function createExercise($exercise) {

    }

    public function readExercise($id) {

    }

    public function updateExercise($exercise) {

    }

    public function deleteExercise($exercise) {

    }

    //Search

    public function findAllExercises()
    {
        
    }

    public function findExercise($id) {
        return $this->readExercise($id);
    }


}
