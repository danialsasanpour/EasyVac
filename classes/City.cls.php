<?php
class City{
    private $cityName;
    private $cityId;
    
    
    function __construct($cityId=null,$cityName=null){
        $this->cityId=$cityId;
        $this->cityName=$cityName;
    }
    
    
    
    
    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @return string
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param string $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    
    function getAllCities($connection){
        $cpt=0;
        $sqlStatement="SELECT * FROM cities";
        $list=$connection->query($sqlStatement);
        $listOfCities=array();
        
        foreach($list as $oneRow){
            $city=new City(
                    $oneRow["cityId"],
                    $oneRow["cityName"]
                );
            $listOfCities[$cpt++]=$city;
        }
        return serialize($listOfCities);
    }
    
    
    
}