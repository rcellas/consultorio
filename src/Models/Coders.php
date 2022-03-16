<?php

namespace App\Models;

use App\Database;

class Coders{

    private int $id;
    private string $coder;
    private string $issue;
    private string $date_time;

    private $database;
    private $table="appointments";

    public function __contruct(int $id = null, string $coder= '',string $issue=null, string $date_time = null){

        $this->id =$id;
        $this->coder = $coder;
        $this->issue =$issue;
        $this->date_time =$date_time;

        if(!$this->database){
            $this->database = new Database;
        }
    }

    public function all(){
        $query = $this->database->mysql->query("select * from {$this->table}");
        $codersArray = $query->fetchAll();

        $codersList = [];

        foreach($codersArray as $coder){
            $codersItem = new Coders ($coder["id"], $coder["coders"], $coder["issue"],$coder["date_time"]);
            
            array_push($codersList,$codersItem);
        }

        return $codersList;
    }
}
