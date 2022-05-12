<?php
/**
 * Recommendation
 *
 * PHP version 5
 *
 * @category Class
 * @package  EquiblesStocks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Stocks
 *
 * <h3>Rate limits</h3>                     Free subscriptions are subject to daily limits. To know how much requests you have left look at the following headers in the response.<br />                     1. <strong>x-ratelimit-limit</strong> - The total number of requests that you are allowed to make in a given period (hour/day)<br />                     2. <strong>x-ratelimit-remaining</strong> - The number of remaining requests that you can perform in the current period.<br />                     3. <strong>x-ratelimit-reset</strong> - The number of seconds until the current period resets.<br />                     <br />                     <br />                     You don't have an API key? <a href=\"https://www.equibles.com/api/pricing\" target=\"_blank\">Get one for free here.</a>
 *
 * OpenAPI spec version: v1
 * Contact: contact@equibles.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace EquiblesStocks\Models;
use \EquiblesStocks\ObjectSerializer;

/**
 * Recommendation Class Doc Comment
 *
 * @category Class
 * @package  EquiblesStocks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Recommendation
{
    /**
     * Possible values of this enum
     */
    const STRONG_BUY = 'StrongBuy';
const BUY = 'Buy';
const HOLD = 'Hold';
const SELL = 'Sell';
const STRONG_SELL = 'StrongSell';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STRONG_BUY,
self::BUY,
self::HOLD,
self::SELL,
self::STRONG_SELL,        ];
    }
}