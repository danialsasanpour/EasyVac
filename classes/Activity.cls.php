<?php

class Activity {

    private $activityId;
    private $cityId;
    private $activityName;
    private $description;
    private $location;
    private $duration;
    private $price;
    private $discount;
    private $image;
    
    

    // Constructor
    function __construct($activityId=null,$cityId=null,$activityName=null,$description=null,
                         $location=null,$duration=null,$price=null,$discount=null,$image=null){
        
        $this->activityId=$activityId;
        $this->cityId=$cityId;
        $this->activityName=$activityName;
        $this->description=$description;
        $this->location=$location;
        $this->duration=$duration;
        $this->price=$price;
        $this->discount=$discount;
        $this->image=$image;
    }
    
    
    
    
    
    
    /**
     * @return string
     */
    public function getActivityId()
    {
        return $this->activityId;
    }
    
    /**
     * @return string
     */
    public function getCityId()
    {
        return $this->cityId;
    }
    
    /**
     * @return string
     */
    public function getActivityName()
    {
        return $this->activityName;
    }
    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
    
    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }
    
    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }
    
    /**
     * @param string $activityId
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
    }
    
    /**
     * @param string $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }
    
    /**
     * @param string $activityName
     */
    public function setActivityName($activityName)
    {
        $this->activityName = $activityName;
    }
    
    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    
    /**
     * @param string $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
    
    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    
    /**
     * @param string $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    
    
    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * @param string $activityId
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
    
    

    
    // After choosing destination, get activities in that destination
    public function GetActivitiesByCity($connection)
    {
        $cityId=$this->getCityId();
        $cpt=0;
        $sqlStatement="SELECT * FROM activities WHERE cityId=:cityId";
        $prepare=$connection->prepare($sqlStatement);
        $prepare->bindValue(':cityId',$cityId,PDO::PARAM_INT);
        $prepare->execute();
        $list=$prepare->fetchAll();
        $listOfActivities=array();
        
        foreach($list as $oneRow){
            $activity=new Activity();
            
            $activity->setCityId($oneRow["cityId"]);
            $activity->setActivityId($oneRow["activityId"]);
            $activity->setActivityName($oneRow["activityName"]);
            $activity->setDescription($oneRow["description"]);
            $activity->setDuration($oneRow["durationMinutes"]);
            $activity->setLocation($oneRow["location"]);
            $activity->setPrice($oneRow["price"]);
            $activity->setDiscount($oneRow["discount"]);
            $activity->setImage($oneRow["image"]);
            $listOfActivities[$cpt++]=$activity;
            
        }
        
        return serialize($listOfActivities);
    }

}