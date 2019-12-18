<?php

class MobileNumberValidator{

    //Constructor.
    public function __construct() {}
     
    //Destructor
    public function __destruct(){}

    public function IsValid(){
        return $this->is_valid;
    }

    public function GetFormattedNumber(){
        return $this->formatted_number;
    }

    private $is_valid = false;
    private $formatted_number = "";

    //Validate a mobile number and then return as '880171223344'
    public function Validate($MobileNumberString){
        //Reinitialize the private variables.
        $this->is_valid = false;
        $this->formatted_number = "";

        $MobileNumber = trim($MobileNumber);
    
        //$invalid= array(false,$MobileNumber);
       
        if(empty($MobileNumber)){
            $this->is_valid = false;
            return false;
        }
    
        if(!is_numeric($MobileNumber)){
            $this->is_valid = false;
            return false;
        }
    
        if(strlen($MobileNumber)<10){
            $this->is_valid = false;
            return false;
        }
    
        $OperatorCodes = array( "013", "014", "015", "016", "017", "018", "019" );
        
        if(startsWith($MobileNumber,"1")){
            //if the number is 1711781878, it's length must be 10 digits        
            if(strlen($MobileNumber) != 10){
                $this->is_valid = false;
                return false;
            }
    
            $firstTwoDigits = substr($MobileNumber, 0, 2); //returns 17, 18 etc,
            $operatorCode = "0" . $firstTwoDigits; //Making first two digits a valid operator code with adding 0.
    
            if (!in_array($operatorCode, $OperatorCodes)) {
                $this->is_valid = false;
                return false;
            }
    
            $finalNumberString = "880" . $MobileNumber;
    
            $this->is_valid = true;
            $this->formatted_number = $finalNumberString;
            return true;
        }
        
        if(startsWith($MobileNumber,"01")){
            //if the number is 01711781878, it's length must be 11 digits        
            if(strlen($MobileNumber) != 11){
                $this->is_valid = false;
                return false;
            }
    
            $operatorCode = substr($MobileNumber, 0, 3); //returns 017, 018 etc,
            
            if (!in_array($operatorCode, $OperatorCodes)) {
                $this->is_valid = false;
                return false;
            }
    
            $finalNumberString = "88" . $MobileNumber;
    
            $this->is_valid = true;
            $this->formatted_number = $finalNumberString;
            return true;
        }
    
        if(startsWith($MobileNumber,"8801")){
            //if the number is 8801711781878, it's length must be 13 digits    
            if(strlen($MobileNumber) != 13){
                $this->is_valid = false;
                return false;
            }
    
            $operatorCode = substr($MobileNumber, 2, 3); //returns 017, 018 etc,
            
            if (!in_array($operatorCode, $OperatorCodes)) {
                $this->is_valid = false;
                return false;
            }        
    
            $this->is_valid = true;
            $this->formatted_number = $MobileNumber;
            return true;
        }
    
        return $this->is_valid;
    }

}//class

?>