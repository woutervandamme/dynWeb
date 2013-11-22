<?php

class Identifiable {
    private $_id;

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = $id;
    }

    function __get($property)
    {
        $method = "get{$property}";
        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }

    // Bijvoorbeeld fetchObject methode van DB roept deze op
    // voordat de defaultconstructor wordt opgeroepen
    // zo worden de instantievars van het object juist gezet
    public function __set($property, $value)
    {
        $method = "set{$property}";
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }

}