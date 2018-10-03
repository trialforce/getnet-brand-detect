<p>Utility to determine credit card type by PAN.</p>
<p>This class is used to detect the 5 types of credit card brands.</p>
<p>This class was created because getnet don't garenteed brand recognition or throw any error if wrong brand is choose by user.</p>
<p>Only support GETNET brazillian e-commerce card brands.</p>
<p>Brands supported by GetNet "Mastercard" "Visa" "Amex" "Elo" "Hipercard".</p>
<p>Based on https://github.com/mcred/detect-credit-card-type/blob/master/src/Detector.php</p>

### Usage

```
require "PATH_TO/vendor/autoload.php";

echo BrandDetect::dected('4111111111111111'); //Visa
```
