<?php

/**
 * This class is used to detect the 5 types of credit card brands
 * used by getnet e-commerce in Brazil.
 *
 * This class was created because getnet don't garenteed brand recognition or
 * throw any error if wrong brand is choose by user.
 *
 * Brands supported by GetNet "Mastercard" "Visa" "Amex" "Elo" "Hipercard".
 *
 * Based on https://github.com/mcred/detect-credit-card-type/blob/master/src/Detector.php
 */
class BrandDetect
{

    public static function isVisa(string $card): bool
    {
        return preg_match("/^4[0-9]{0,15}$/i", $card);
    }

    public static function isMasterCard(string $card): bool
    {
        return preg_match("/^5[1-5][0-9]{5,}|222[1-9][0-9]{3,}|22[3-9][0-9]{4,}|2[3-6][0-9]{5,}|27[01][0-9]{4,}|2720[0-9]{3,}$/i", $card);
    }

    public static function isAmex(string $card): bool
    {
        return preg_match("/^3$|^3[47][0-9]{0,13}$/i", $card);
    }

    /**
     * Verify if some credit card is from Elo brand
     *
     * https://stackoverflow.com/questions/42757853/elo-credit-card-regular-expression
     *
     * @param string $card
     * @return bool
     */
    public static function isElo(string $card): bool
    {
        return preg_match("/^((431274)|(438935)|(451416)|(457393)|(504175)|(627780)|(636297)|(636368)|(40117)[8-9]|(45763)[1-2]|(506)(699|7[1-7][1-8])|(509)[0-9][0-9][0-9]|(65003)[1-3]|(6500)(3[5-9]|4[0-9]|5[0-1])|(6504)(0[5-9]|1[0-9]|2[0-9]|3[0-9])|(650)(4(8[5-9]|9[0-9])|5([0-2][0-9]|3[0-8]))|(6505)(4[1-9]|[5-8][0-9]|9[0-8])|(6507)(0[0-9]|1[0-8])|(65072)[0-7]|(6509)(0[1-9]|1[0-9]|20)|(6516)(5[2-9]|[6-7][0-9])|(6550)[0-1][0-9]|(6550)(2[1-9]|[3-4][0-9]|5[0-8]))/", $card);
    }

    /**
     * Verify is some credit card is Hipercard branda
     *
     * https://gist.github.com/claudiosanches/26d9668f21dbdc787472
     *
     * @param string $card
     * @return bool
     */
    public static function isHiperCard(string $card): bool
    {
        return preg_match("/^(606282\d{10}(\d{3})?)|(3841\d{15})$/", $card);
    }

    /**
     * Detect getnet credit card brand
     *
     * @param string $card
     * @return string
     */
    public static function detect(string $card): string
    {
        $cardTypes = [
            'HiperCard',
            'Visa',
            'Amex',
            'MasterCard',
            'Elo',
        ];

        foreach ($cardTypes as $cardType)
        {
            $method = 'is' . $cardType;

            if (BrandDetect::$method($card))
            {
                return $cardType;
            }
        }

        return null;
    }

}
