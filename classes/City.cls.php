<?php
class City{
    private $cityName;
    private $cityId;
    
    
    function __construct($cityId=null,$cityName=null){
        $this->cityId=$cityId;
        $this->cityName=$cityName;
    }
    
    
    
}