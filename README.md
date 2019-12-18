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
//It returns an array.
$result = $validator->Validate($mobile_number_string);
```
Check whether the number is valid-
```sh
$is_valid = $result[0];
```

Get the formatted number
```sh
$formatted_number = $result[1];
```