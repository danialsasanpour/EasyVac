<?php
class City{
    private $cityName;
    private $cityId;
    private $image;
    
    
    function __construct($cityId=null,$cityName=null,$image=null){
        $this->cityId=$cityId;
        $this->cityName=$cityName;
        $this->image=$image;
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
    
    
    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    
    function getCityById($connection){
        $cityId=$this->getCityId();
        $sqlStatement="SELECT * FROM cities WHERE cityId=:cityId";
        $prepare=$connection->prepare("$sqlStatement");
        $prepare->bindValue(':cityId',$cityId,PDO::PARAM_INT);
        $prepare->execute();
        $list=$prepare->fetchAll();
        $cpt=0;
        $listOfCities=array();
        
        foreach($list as $oneCity){
            $city=new City(
                    $oneCity["cityId"],
                    $oneCity["cityName"],
                    $oneCity["image"]
                );
            $listOfCities[$cpt++]=$city;
        }
        return serialize($listOfCities);
        
    }
    
    function getCityByName($connection){
        $cpt=0;
        $cityName=$this->getCityName();
        $sqlStatement="SELECT * FROM cities WHERE cityName=:cityName";
        $prepare=$connection->prepare($sqlStatement);
        $prepare->bindValue(':cityName',$cityName,PDO::PARAM_STR);
        $prepare->execute();
        $list=$prepare->fetchAll();
        $listOfCities=array();
        
        foreach($list as $oneRow){
            $city=new City(
                    $oneRow["cityId"],
                    $oneRow["cityName"],
                    $oneRow["image"]
                );
            $listOfCities[$cpt++]=$city;
        }
        return serialize($listOfCities);
    }
    
    
    
    function getAllCities($connection){
        $cpt=0;
        $sqlStatement="SELECT * FROM cities";
        $list=$connection->query($sqlStatement);
        $listOfCities=array();
        
        foreach($list as $oneRow){
            $city=new City(
                    $oneRow["cityId"],
                    $oneRow["cityName"],
                    $oneRow["image"]
                );
            $listOfCities[$cpt++]=$city;
        }
        return serialize($listOfCities);
    }
    
    
    
}