<?php


class Person {

    protected $name;
    protected $midname;
    protected $lastname;


    public function __construct($name, $midname, $lastname) {
        $this->name = $name;
        $this->midname = $midname;
        $this->lastname = $lastname;
    }

//    Com fer un get i set en un metodo junt:

public function completed($completed=null){
    if($completed=null){
        return $this->completed();
    }
    $this->completed = $completed;
}


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMidname()
    {
        return $this->midname;
    }

    /**
     * @param mixed $midname
     */
    public function setMidname($midname)
    {
        $this->midname = $midname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }














}