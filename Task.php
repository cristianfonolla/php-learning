<?php

class Task {

    public $description;
    public $completed;



    public function __construct($description,$completed) {
        $this->description = $description;
        $this->completed = $description;
    }

    public function complete(){

        $this->completed = true;

    }

    public function description($description){
        $this->description = $description;
    }

    public function completed(){
        return $this->completed;
    }












}



