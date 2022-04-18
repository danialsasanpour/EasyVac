<?php

class User {
    
    private $firstName;
    private $username;
    private $email;
    private $password;
    private $userId;
    private $paymentId;
    private $lastName;
    private $phoneNumber;
    
    
    
    
    function __construct($firstName = null, $username = null, $email = null, $password = null,$userId=null, $paymentId=null, $lastName=null,$phoneNumber=null)
    {
        $this->firstName=$firstName;
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
        $this->userId=$userId;
        $this->paymentId=$paymentId;
        $this->lastName=$lastName;
        $this->phoneNumber=$phoneNumber;
    }
    
    
    
    
    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getPaymentId()
    {
        return $this->paymentId;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @param string $paymentId
     */
    public function setPaymentId($paymentId)
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
    
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    
    
    
    
    
    
    
    public static function Login(string $enteredEmail, string $enteredPassword, $connection)
    {
      
        $loginResult = false;
        
        if ($connection == false) {
            die(mysqli_connect_error());
            error("ERROR: Could Not Connect To Database!");
            
        } else {
            $query = "SELECT * FROM user WHERE email='$enteredEmail' and userPassword='$enteredPassword'";
            $result = $connection->query($query);
            $count = mysqli_num_rows($result);
            if ($count == 0) {
                //error("No Account With The Credentials You Entered Was Found!");
                $loginResult = false;
            } elseif ($count == 1) {
                $loginResult = true;
                
            } else {
                error("Something Is Wrong! Contact The Adminstration.");
                $loginResult = false;
            }
           
            return $loginResult;
        }
    }
    
}



