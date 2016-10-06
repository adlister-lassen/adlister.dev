<?php

class Input
{

    /**
     * @param $key as a string
     * @return boolean
     */
    public static function has($key)
    {
        if(isset($_REQUEST[$key])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return value at $_SESSION[$key] if set, else return null
     */
    public static function get($key, $default = null)
    {
        if(isset($_REQUEST[$key])) {
            return htmlspecialchars(strip_tags($_REQUEST[$key]));
        } else {
            return $default;
        }
    }

    // returns entire array from request super global
    public static function all()
    {
        return $_REQUEST;
    }


    /**
     * Check if a value is numeric
     *
     * @param string $key index to look for in index
     * @return bool value passed in request
     */
    public static function checkNumeric($key)
    {
        return is_numeric(trim(static::get($key)));
    }


    public static function getString($key, $default = null)
    {
        // check parameters are the correct type 
        if (!is_string($key)){
            throw new Exception ("Invalid Argument");
        }

        //check for missing key
        if (!self::has($key) && $default === null) {
            throw new Exception("$key does not exist");
        } 

        //check values for the correct type
        if (!is_string(self::get($key, $default))){
            throw new Exception("Value must be a string");
        } 

        return self::get($key, $default);
       
    }
    
    public static function getNumber($key, $default = null)
    {
        // check parameters are the correct type 
        if (!is_string($key)){
            throw new Exception ("Invalid Argument");
        }

        //check for missing key, min and max
        if (!self::has($key) && $default === null) {
            throw new Exception("$key does not exist");
        } 

        //check values for the correct type
        if (!is_numeric(self::get($key, $default))){
            throw new Exception("Value must be a number");
        } 

        return floatval(self::get($key, $default));
    }



    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}




}
