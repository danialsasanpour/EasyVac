<?php

class Trip {
    
    private $tripId;
    private $user;
    private $city;
    private $listOfActivities;
    
    function __construct($tripId = null, $user = null, $city = null, $listOfActivities = null)
    {
        $this->tripId=$tripId;
        $this->user=$user;
        $this->city=$city;
        $this->listOfActivities=$listOfActivities;
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
    public function getUser()
    {
        return $this->user;
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
    public function getListOfActivities()
    {
        return $this->listOfActivities;
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
    public function setUser($user)
    {
        $this->user = $user;
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
    public function setListOfActivities($listOfActivities)
    {
        $this->listOfActivities = $listOfActivities;
    }

    
    public function displayTrips($connection)
    {
        
    }
    
    
    
}