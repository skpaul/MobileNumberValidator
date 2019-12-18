<?php

class MobileNumberValidator{

    //Constructor.
    public function __construct() {
       
    }

    //Destructor
    public function __destruct(){
     
    }

    //Validate a mobile number and then return as '880171223344'
    public function Validate($MobileNumberString){
        $MobileNumber = trim($MobileNumber);
    
        $invalid= array(false,$MobileNumber);
    
        if(empty($MobileNumber)){
            return $invalid;
        }
    
        if(!is_numeric($MobileNumber)){
            return $invalid;
        }
    
    
        if(strlen($MobileNumber)<10){
            return $invalid;
        }
    
    
        $OperatorCodes = array( "013", "014", "015", "016", "017", "018", "019" );
    
        
        if(startsWith($MobileNumber,"1")){
            //if the number is 1711781878, it's length must be 10 digits        
            if(strlen($MobileNumber) != 10){
                return $invalid;
            }
    
            $firstTwoDigits = substr($MobileNumber, 0, 2); //returns 17, 18 etc,
            $operatorCode = "0" . $firstTwoDigits; //Making first two digits a valid operator code with adding 0.
    
            if (!in_array($operatorCode, $OperatorCodes)) {
                return $invalid;
            }
    
            $finalNumberString = "880" . $MobileNumber;
    
            return array(true, $finalNumberString);
        }
        
        if(startsWith($MobileNumber,"01")){
            //if the number is 01711781878, it's length must be 11 digits        
            if(strlen($MobileNumber) != 11){
                return $invalid;
            }
    
            $operatorCode = substr($MobileNumber, 0, 3); //returns 017, 018 etc,
            
            if (!in_array($operatorCode, $OperatorCodes)) {
                return $invalid;
            }
    
            $finalNumberString = "88" . $MobileNumber;
    
            return array(true, $finalNumberString);
        }
    
        if(startsWith($MobileNumber,"8801")){
            //if the number is 8801711781878, it's length must be 13 digits    
            if(strlen($MobileNumber) != 13){
                return $invalid;
            }
    
            $operatorCode = substr($MobileNumber, 2, 3); //returns 017, 018 etc,
            
            if (!in_array($operatorCode, $OperatorCodes)) {
                return $invalid;
            }        
    
            return array(true, $MobileNumber);
        }
    
        return $invalid;
    }













}//class




?>