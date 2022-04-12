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
    
    

    // Constructor
    function __construct($activityId=null,$cityId=null,$activityName=null,$description=null,
                         $location=null,$duration=null,$price=null,$discount=null){
        
        $this->activityId=$activityId;
        $this->cityId=$cityId;
        $this->activityName=$activityName;
        $this->description=$description;
        $this->location=$location;
        $this->duration=$duration;
        $this->price=$price;
        $this->discount=$discount;
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
    
    
    

    // Display all activities
    public function GetAllActivities($connection)
    {
        
    }
    
    
    // After choosing an activity, display that activity's details
    public function GetActivityById($connection)
    {
        
    }
    
    // After choosing destination, get activities in that destination
    public function GetActivitiesByCity($connection)
    {
        $cityId=$this->getCityId();
        $cpt=0;
        $sqlStatement="SELECT * FROM activities WHERE cityId=$cityId";
        $list=$connection->query($sqlStatement);
        $listOfActivities=array();
        
        foreach($list as $oneRow){
            $activity=new Activity();
            
            $activity->setCityId($oneRow["cityId"]);
            $activity->setActivityId($oneRow["activityId"]);
            $activity->setActivityName($oneRow["activityName"]);
            $listOfActivities[$cpt++]=$activity;
            
        }
        
        return serialize($listOfActivities);
    }

}