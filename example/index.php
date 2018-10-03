<?php

ini_set("display_errors", "1"); //desabilita mostrar erros na tela

require_once '../src/branddetect.php';

echo BrandDetect::detect('5155901222280001') . ' - MasterCard' . "<br/>";
echo BrandDetect::detect('5155901222270002') . ' - MasterCard' . "<br/>";
echo BrandDetect::detect('5155901222260003') . ' - MasterCard' . "<br/>";
echo BrandDetect::detect('5155901222250004') . ' - MasterCard' . "<br/>";
echo BrandDetect::detect('5555555555554444') . ' - MasterCard' . "<br/>";
echo BrandDetect::detect('5105105105105100') . ' - MasterCard' . "<br/>";
echo BrandDetect::detect('2221000000000009') . ' - MasterCard' . "<br/>";
echo BrandDetect::detect('2223000048400011') . ' - MasterCard' . "<br/>";
echo BrandDetect::detect('2223016768738313') . ' - MasterCard' . "<br/>";
echo BrandDetect::detect('5105510551055105') . ' - MasterCard' . "<br/>";
echo BrandDetect::detect('4012001037141112') . ' - Visa' . "<br/>";
echo BrandDetect::detect('4012888888881881') . ' - Visa' . "<br/>";
echo BrandDetect::detect('4111111111111111') . ' - Visa' . "<br/>";
echo BrandDetect::detect('378282246310005') . ' - Amex' . "<br/>";
echo BrandDetect::detect('371449635398431') . ' - Amex' . "<br/>";
echo BrandDetect::detect('6362970000457013') . ' - Elo' . "<br/>";
echo BrandDetect::detect('6062825624254001') . ' - HiperCard' . "<br/>";
