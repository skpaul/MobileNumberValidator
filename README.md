# MobileNumberValidator v0.0.1
Validate Bangladeshi Mobile Numbers

## What is it
MobileNumberValidator is a php library used to validate and to format mobile numbers of Bangladesh.


## Installation
Import the file in your project-
```sh
require_once("MobileNumberValidator.php");
```
## How to use
Create new instance-
```sh
$validator = new MobileNumberValidator();
```
Take the number you want to validate-
```sh
$result = $validator->Validate($mobile_number_string); //It returns true/false.
```

Get the formatted number
```sh
$formatted_number = $validator->GetFormattedNumber(); //Returns "8801#########"
```