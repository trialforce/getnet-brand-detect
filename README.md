# Utility to determine credit card type by PAN.
This class is used to detect the 5 types of credit card brands.
This class was created because getnet don't garenteed brand recognition or throw any error if wrong brand is choose by user.
Only support GETNET brazillian e-commerce card brands.
Brands supported by GetNet "Mastercard" "Visa" "Amex" "Elo" "Hipercard".
Based on https://github.com/mcred/detect-credit-card-type/blob/master/src/Detector.php

# Usage

```
require "PATH_TO/vendor/autoload.php";

echo BrandDetect::dected('4111111111111111'); //Visa
```
