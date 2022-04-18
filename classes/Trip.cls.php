<?php
require_once 'Activity.cls.php';

class Trip {
    
    private $tripId;
    private $userId;
    private $cityId;
    private $activityId;
    
    function __construct($tripId = null, $user = null, $city = null, $activityId=null)
    {
        $this->tripId=$tripId;
        $this->userId=$user;
        $this->cityId=$city;
        $this->activityId=$activityId;
    }
    
    
    /**
     * @return mixed
     */
    public function getTripId()
    {
        return $this->tripId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @return mixed
     */
    public function getActivityId()
    {
        return $this->activityId;
    }

    /**
     * @param mixed $tripId
     */
    public function setTripId($tripId)
    {
        $this->tripId = $tripId;
    }

    /**
     * @param mixed $user
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @param mixed $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @param mixed $listOfActivities
     */
    public function setActivityId($activityId)
    {
        $this->activityId = $activityId;
    }

    
    function getTripsByUserId($connection){
        $userId=$this->userId;
        
        $sqlStatement="SELECT user.userId, trip.tripId, trip.cityId
                       FROM user JOIN 
                                user_trips on user.userId = user_trips.userId JOIN 
                                trip on trip.tripId = user_trips.tripId
                       WHERE user.userId = :userId";
        $prepare=$connection->prepare($sqlStatement);
        $prepare->bindValue(':userId',$userId,PDO::PARAM_INT);
        $prepare->execute();
        
        $list=$prepare->fetchAll();
        $listOfTrips = array();
        $cpt=0;
        
        if (sizeof($list) > 0) {
            foreach ($list as $oneRow) {
                $trip = new Trip();
                $trip->setUserId($oneRow["userId"]);
                $trip->setTripId($oneRow["tripId"]);
                $trip->setCityId($oneRow["cityId"]);
                
                $listOfTrips[$cpt++]=$trip;
            }
            
            return serialize($listOfTrips);
        }
        
        

    }
        
        
    function getActivitiesByTripId($connection){
        $tripId=$this->tripId;
        
        $sqlStatement="SELECT * FROM trip_activities WHERE tripId=:tripId";
        $prepare=$connection->prepare($sqlStatement);
        $prepare->bindValue(':tripId',$tripId,PDO::PARAM_INT);
        $prepare->execute();
        
        $list=$prepare->fetchAll();
        $listOfActivities = array();
        $cpt=0;
        
        if (sizeof($list) > 0) {
            foreach ($list as $oneRow) {
                $activity = new Activity();
                $activity->setActivityId($oneRow["activityId"]);
                
                $listOfActivities[$cpt++]=$activity;
            }
            
            return serialize($listOfActivities);
        }
    
        
    }
    
    
}