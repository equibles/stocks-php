<?php
/**
 * IncomeStatement
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

use \ArrayAccess;
use \EquiblesStocks\ObjectSerializer;

/**
 * IncomeStatement Class Doc Comment
 *
 * @category Class
 * @package  EquiblesStocks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IncomeStatement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'IncomeStatement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'grossProfit' => 'int',
'revenue' => 'int',
'costOfRevenue' => 'int',
'costOfGoodsAndServicesSold' => 'int',
'operatingIncome' => 'int',
'sellingGeneralAndAdministrative' => 'int',
'researchAndDevelopment' => 'int',
'operatingExpenses' => 'int',
'investmentIncomeNet' => 'int',
'netInterestIncome' => 'int',
'interestIncome' => 'int',
'interestExpense' => 'int',
'nonInterestIncome' => 'int',
'otherNonOperatingIncome' => 'int',
'depreciation' => 'int',
'depreciationAndAmortization' => 'int',
'incomeBeforeTax' => 'int',
'incomeTaxExpense' => 'int',
'interestAndDebtExpense' => 'int',
'netIncomeFromContinuingOperations' => 'int',
'comprehensiveIncomeNetOfTax' => 'int',
'ebit' => 'int',
'ebitda' => 'int',
'netIncome' => 'int',
'effectOfAccountingCharges' => 'int',
'taxProvision' => 'int',
'sellingAndMarketingExpenses' => 'int',
'extraordinaryItems' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'grossProfit' => 'int64',
'revenue' => 'int64',
'costOfRevenue' => 'int64',
'costOfGoodsAndServicesSold' => 'int64',
'operatingIncome' => 'int64',
'sellingGeneralAndAdministrative' => 'int64',
'researchAndDevelopment' => 'int64',
'operatingExpenses' => 'int64',
'investmentIncomeNet' => 'int64',
'netInterestIncome' => 'int64',
'interestIncome' => 'int64',
'interestExpense' => 'int64',
'nonInterestIncome' => 'int64',
'otherNonOperatingIncome' => 'int64',
'depreciation' => 'int64',
'depreciationAndAmortization' => 'int64',
'incomeBeforeTax' => 'int64',
'incomeTaxExpense' => 'int64',
'interestAndDebtExpense' => 'int64',
'netIncomeFromContinuingOperations' => 'int64',
'comprehensiveIncomeNetOfTax' => 'int64',
'ebit' => 'int64',
'ebitda' => 'int64',
'netIncome' => 'int64',
'effectOfAccountingCharges' => 'int64',
'taxProvision' => 'int64',
'sellingAndMarketingExpenses' => 'int64',
'extraordinaryItems' => 'int64'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'grossProfit' => 'grossProfit',
'revenue' => 'revenue',
'costOfRevenue' => 'costOfRevenue',
'costOfGoodsAndServicesSold' => 'costOfGoodsAndServicesSold',
'operatingIncome' => 'operatingIncome',
'sellingGeneralAndAdministrative' => 'sellingGeneralAndAdministrative',
'researchAndDevelopment' => 'researchAndDevelopment',
'operatingExpenses' => 'operatingExpenses',
'investmentIncomeNet' => 'investmentIncomeNet',
'netInterestIncome' => 'netInterestIncome',
'interestIncome' => 'interestIncome',
'interestExpense' => 'interestExpense',
'nonInterestIncome' => 'nonInterestIncome',
'otherNonOperatingIncome' => 'otherNonOperatingIncome',
'depreciation' => 'depreciation',
'depreciationAndAmortization' => 'depreciationAndAmortization',
'incomeBeforeTax' => 'incomeBeforeTax',
'incomeTaxExpense' => 'incomeTaxExpense',
'interestAndDebtExpense' => 'interestAndDebtExpense',
'netIncomeFromContinuingOperations' => 'netIncomeFromContinuingOperations',
'comprehensiveIncomeNetOfTax' => 'comprehensiveIncomeNetOfTax',
'ebit' => 'ebit',
'ebitda' => 'ebitda',
'netIncome' => 'netIncome',
'effectOfAccountingCharges' => 'effectOfAccountingCharges',
'taxProvision' => 'taxProvision',
'sellingAndMarketingExpenses' => 'sellingAndMarketingExpenses',
'extraordinaryItems' => 'extraordinaryItems'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'grossProfit' => 'setGrossProfit',
'revenue' => 'setRevenue',
'costOfRevenue' => 'setCostOfRevenue',
'costOfGoodsAndServicesSold' => 'setCostOfGoodsAndServicesSold',
'operatingIncome' => 'setOperatingIncome',
'sellingGeneralAndAdministrative' => 'setSellingGeneralAndAdministrative',
'researchAndDevelopment' => 'setResearchAndDevelopment',
'operatingExpenses' => 'setOperatingExpenses',
'investmentIncomeNet' => 'setInvestmentIncomeNet',
'netInterestIncome' => 'setNetInterestIncome',
'interestIncome' => 'setInterestIncome',
'interestExpense' => 'setInterestExpense',
'nonInterestIncome' => 'setNonInterestIncome',
'otherNonOperatingIncome' => 'setOtherNonOperatingIncome',
'depreciation' => 'setDepreciation',
'depreciationAndAmortization' => 'setDepreciationAndAmortization',
'incomeBeforeTax' => 'setIncomeBeforeTax',
'incomeTaxExpense' => 'setIncomeTaxExpense',
'interestAndDebtExpense' => 'setInterestAndDebtExpense',
'netIncomeFromContinuingOperations' => 'setNetIncomeFromContinuingOperations',
'comprehensiveIncomeNetOfTax' => 'setComprehensiveIncomeNetOfTax',
'ebit' => 'setEbit',
'ebitda' => 'setEbitda',
'netIncome' => 'setNetIncome',
'effectOfAccountingCharges' => 'setEffectOfAccountingCharges',
'taxProvision' => 'setTaxProvision',
'sellingAndMarketingExpenses' => 'setSellingAndMarketingExpenses',
'extraordinaryItems' => 'setExtraordinaryItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'grossProfit' => 'getGrossProfit',
'revenue' => 'getRevenue',
'costOfRevenue' => 'getCostOfRevenue',
'costOfGoodsAndServicesSold' => 'getCostOfGoodsAndServicesSold',
'operatingIncome' => 'getOperatingIncome',
'sellingGeneralAndAdministrative' => 'getSellingGeneralAndAdministrative',
'researchAndDevelopment' => 'getResearchAndDevelopment',
'operatingExpenses' => 'getOperatingExpenses',
'investmentIncomeNet' => 'getInvestmentIncomeNet',
'netInterestIncome' => 'getNetInterestIncome',
'interestIncome' => 'getInterestIncome',
'interestExpense' => 'getInterestExpense',
'nonInterestIncome' => 'getNonInterestIncome',
'otherNonOperatingIncome' => 'getOtherNonOperatingIncome',
'depreciation' => 'getDepreciation',
'depreciationAndAmortization' => 'getDepreciationAndAmortization',
'incomeBeforeTax' => 'getIncomeBeforeTax',
'incomeTaxExpense' => 'getIncomeTaxExpense',
'interestAndDebtExpense' => 'getInterestAndDebtExpense',
'netIncomeFromContinuingOperations' => 'getNetIncomeFromContinuingOperations',
'comprehensiveIncomeNetOfTax' => 'getComprehensiveIncomeNetOfTax',
'ebit' => 'getEbit',
'ebitda' => 'getEbitda',
'netIncome' => 'getNetIncome',
'effectOfAccountingCharges' => 'getEffectOfAccountingCharges',
'taxProvision' => 'getTaxProvision',
'sellingAndMarketingExpenses' => 'getSellingAndMarketingExpenses',
'extraordinaryItems' => 'getExtraordinaryItems'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['grossProfit'] = isset($data['grossProfit']) ? $data['grossProfit'] : null;
        $this->container['revenue'] = isset($data['revenue']) ? $data['revenue'] : null;
        $this->container['costOfRevenue'] = isset($data['costOfRevenue']) ? $data['costOfRevenue'] : null;
        $this->container['costOfGoodsAndServicesSold'] = isset($data['costOfGoodsAndServicesSold']) ? $data['costOfGoodsAndServicesSold'] : null;
        $this->container['operatingIncome'] = isset($data['operatingIncome']) ? $data['operatingIncome'] : null;
        $this->container['sellingGeneralAndAdministrative'] = isset($data['sellingGeneralAndAdministrative']) ? $data['sellingGeneralAndAdministrative'] : null;
        $this->container['researchAndDevelopment'] = isset($data['researchAndDevelopment']) ? $data['researchAndDevelopment'] : null;
        $this->container['operatingExpenses'] = isset($data['operatingExpenses']) ? $data['operatingExpenses'] : null;
        $this->container['investmentIncomeNet'] = isset($data['investmentIncomeNet']) ? $data['investmentIncomeNet'] : null;
        $this->container['netInterestIncome'] = isset($data['netInterestIncome']) ? $data['netInterestIncome'] : null;
        $this->container['interestIncome'] = isset($data['interestIncome']) ? $data['interestIncome'] : null;
        $this->container['interestExpense'] = isset($data['interestExpense']) ? $data['interestExpense'] : null;
        $this->container['nonInterestIncome'] = isset($data['nonInterestIncome']) ? $data['nonInterestIncome'] : null;
        $this->container['otherNonOperatingIncome'] = isset($data['otherNonOperatingIncome']) ? $data['otherNonOperatingIncome'] : null;
        $this->container['depreciation'] = isset($data['depreciation']) ? $data['depreciation'] : null;
        $this->container['depreciationAndAmortization'] = isset($data['depreciationAndAmortization']) ? $data['depreciationAndAmortization'] : null;
        $this->container['incomeBeforeTax'] = isset($data['incomeBeforeTax']) ? $data['incomeBeforeTax'] : null;
        $this->container['incomeTaxExpense'] = isset($data['incomeTaxExpense']) ? $data['incomeTaxExpense'] : null;
        $this->container['interestAndDebtExpense'] = isset($data['interestAndDebtExpense']) ? $data['interestAndDebtExpense'] : null;
        $this->container['netIncomeFromContinuingOperations'] = isset($data['netIncomeFromContinuingOperations']) ? $data['netIncomeFromContinuingOperations'] : null;
        $this->container['comprehensiveIncomeNetOfTax'] = isset($data['comprehensiveIncomeNetOfTax']) ? $data['comprehensiveIncomeNetOfTax'] : null;
        $this->container['ebit'] = isset($data['ebit']) ? $data['ebit'] : null;
        $this->container['ebitda'] = isset($data['ebitda']) ? $data['ebitda'] : null;
        $this->container['netIncome'] = isset($data['netIncome']) ? $data['netIncome'] : null;
        $this->container['effectOfAccountingCharges'] = isset($data['effectOfAccountingCharges']) ? $data['effectOfAccountingCharges'] : null;
        $this->container['taxProvision'] = isset($data['taxProvision']) ? $data['taxProvision'] : null;
        $this->container['sellingAndMarketingExpenses'] = isset($data['sellingAndMarketingExpenses']) ? $data['sellingAndMarketingExpenses'] : null;
        $this->container['extraordinaryItems'] = isset($data['extraordinaryItems']) ? $data['extraordinaryItems'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets grossProfit
     *
     * @return int
     */
    public function getGrossProfit()
    {
        return $this->container['grossProfit'];
    }

    /**
     * Sets grossProfit
     *
     * @param int $grossProfit grossProfit
     *
     * @return $this
     */
    public function setGrossProfit($grossProfit)
    {
        $this->container['grossProfit'] = $grossProfit;

        return $this;
    }

    /**
     * Gets revenue
     *
     * @return int
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue
     *
     * @param int $revenue revenue
     *
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

        return $this;
    }

    /**
     * Gets costOfRevenue
     *
     * @return int
     */
    public function getCostOfRevenue()
    {
        return $this->container['costOfRevenue'];
    }

    /**
     * Sets costOfRevenue
     *
     * @param int $costOfRevenue costOfRevenue
     *
     * @return $this
     */
    public function setCostOfRevenue($costOfRevenue)
    {
        $this->container['costOfRevenue'] = $costOfRevenue;

        return $this;
    }

    /**
     * Gets costOfGoodsAndServicesSold
     *
     * @return int
     */
    public function getCostOfGoodsAndServicesSold()
    {
        return $this->container['costOfGoodsAndServicesSold'];
    }

    /**
     * Sets costOfGoodsAndServicesSold
     *
     * @param int $costOfGoodsAndServicesSold costOfGoodsAndServicesSold
     *
     * @return $this
     */
    public function setCostOfGoodsAndServicesSold($costOfGoodsAndServicesSold)
    {
        $this->container['costOfGoodsAndServicesSold'] = $costOfGoodsAndServicesSold;

        return $this;
    }

    /**
     * Gets operatingIncome
     *
     * @return int
     */
    public function getOperatingIncome()
    {
        return $this->container['operatingIncome'];
    }

    /**
     * Sets operatingIncome
     *
     * @param int $operatingIncome operatingIncome
     *
     * @return $this
     */
    public function setOperatingIncome($operatingIncome)
    {
        $this->container['operatingIncome'] = $operatingIncome;

        return $this;
    }

    /**
     * Gets sellingGeneralAndAdministrative
     *
     * @return int
     */
    public function getSellingGeneralAndAdministrative()
    {
        return $this->container['sellingGeneralAndAdministrative'];
    }

    /**
     * Sets sellingGeneralAndAdministrative
     *
     * @param int $sellingGeneralAndAdministrative sellingGeneralAndAdministrative
     *
     * @return $this
     */
    public function setSellingGeneralAndAdministrative($sellingGeneralAndAdministrative)
    {
        $this->container['sellingGeneralAndAdministrative'] = $sellingGeneralAndAdministrative;

        return $this;
    }

    /**
     * Gets researchAndDevelopment
     *
     * @return int
     */
    public function getResearchAndDevelopment()
    {
        return $this->container['researchAndDevelopment'];
    }

    /**
     * Sets researchAndDevelopment
     *
     * @param int $researchAndDevelopment researchAndDevelopment
     *
     * @return $this
     */
    public function setResearchAndDevelopment($researchAndDevelopment)
    {
        $this->container['researchAndDevelopment'] = $researchAndDevelopment;

        return $this;
    }

    /**
     * Gets operatingExpenses
     *
     * @return int
     */
    public function getOperatingExpenses()
    {
        return $this->container['operatingExpenses'];
    }

    /**
     * Sets operatingExpenses
     *
     * @param int $operatingExpenses operatingExpenses
     *
     * @return $this
     */
    public function setOperatingExpenses($operatingExpenses)
    {
        $this->container['operatingExpenses'] = $operatingExpenses;

        return $this;
    }

    /**
     * Gets investmentIncomeNet
     *
     * @return int
     */
    public function getInvestmentIncomeNet()
    {
        return $this->container['investmentIncomeNet'];
    }

    /**
     * Sets investmentIncomeNet
     *
     * @param int $investmentIncomeNet investmentIncomeNet
     *
     * @return $this
     */
    public function setInvestmentIncomeNet($investmentIncomeNet)
    {
        $this->container['investmentIncomeNet'] = $investmentIncomeNet;

        return $this;
    }

    /**
     * Gets netInterestIncome
     *
     * @return int
     */
    public function getNetInterestIncome()
    {
        return $this->container['netInterestIncome'];
    }

    /**
     * Sets netInterestIncome
     *
     * @param int $netInterestIncome netInterestIncome
     *
     * @return $this
     */
    public function setNetInterestIncome($netInterestIncome)
    {
        $this->container['netInterestIncome'] = $netInterestIncome;

        return $this;
    }

    /**
     * Gets interestIncome
     *
     * @return int
     */
    public function getInterestIncome()
    {
        return $this->container['interestIncome'];
    }

    /**
     * Sets interestIncome
     *
     * @param int $interestIncome interestIncome
     *
     * @return $this
     */
    public function setInterestIncome($interestIncome)
    {
        $this->container['interestIncome'] = $interestIncome;

        return $this;
    }

    /**
     * Gets interestExpense
     *
     * @return int
     */
    public function getInterestExpense()
    {
        return $this->container['interestExpense'];
    }

    /**
     * Sets interestExpense
     *
     * @param int $interestExpense interestExpense
     *
     * @return $this
     */
    public function setInterestExpense($interestExpense)
    {
        $this->container['interestExpense'] = $interestExpense;

        return $this;
    }

    /**
     * Gets nonInterestIncome
     *
     * @return int
     */
    public function getNonInterestIncome()
    {
        return $this->container['nonInterestIncome'];
    }

    /**
     * Sets nonInterestIncome
     *
     * @param int $nonInterestIncome nonInterestIncome
     *
     * @return $this
     */
    public function setNonInterestIncome($nonInterestIncome)
    {
        $this->container['nonInterestIncome'] = $nonInterestIncome;

        return $this;
    }

    /**
     * Gets otherNonOperatingIncome
     *
     * @return int
     */
    public function getOtherNonOperatingIncome()
    {
        return $this->container['otherNonOperatingIncome'];
    }

    /**
     * Sets otherNonOperatingIncome
     *
     * @param int $otherNonOperatingIncome otherNonOperatingIncome
     *
     * @return $this
     */
    public function setOtherNonOperatingIncome($otherNonOperatingIncome)
    {
        $this->container['otherNonOperatingIncome'] = $otherNonOperatingIncome;

        return $this;
    }

    /**
     * Gets depreciation
     *
     * @return int
     */
    public function getDepreciation()
    {
        return $this->container['depreciation'];
    }

    /**
     * Sets depreciation
     *
     * @param int $depreciation depreciation
     *
     * @return $this
     */
    public function setDepreciation($depreciation)
    {
        $this->container['depreciation'] = $depreciation;

        return $this;
    }

    /**
     * Gets depreciationAndAmortization
     *
     * @return int
     */
    public function getDepreciationAndAmortization()
    {
        return $this->container['depreciationAndAmortization'];
    }

    /**
     * Sets depreciationAndAmortization
     *
     * @param int $depreciationAndAmortization depreciationAndAmortization
     *
     * @return $this
     */
    public function setDepreciationAndAmortization($depreciationAndAmortization)
    {
        $this->container['depreciationAndAmortization'] = $depreciationAndAmortization;

        return $this;
    }

    /**
     * Gets incomeBeforeTax
     *
     * @return int
     */
    public function getIncomeBeforeTax()
    {
        return $this->container['incomeBeforeTax'];
    }

    /**
     * Sets incomeBeforeTax
     *
     * @param int $incomeBeforeTax incomeBeforeTax
     *
     * @return $this
     */
    public function setIncomeBeforeTax($incomeBeforeTax)
    {
        $this->container['incomeBeforeTax'] = $incomeBeforeTax;

        return $this;
    }

    /**
     * Gets incomeTaxExpense
     *
     * @return int
     */
    public function getIncomeTaxExpense()
    {
        return $this->container['incomeTaxExpense'];
    }

    /**
     * Sets incomeTaxExpense
     *
     * @param int $incomeTaxExpense incomeTaxExpense
     *
     * @return $this
     */
    public function setIncomeTaxExpense($incomeTaxExpense)
    {
        $this->container['incomeTaxExpense'] = $incomeTaxExpense;

        return $this;
    }

    /**
     * Gets interestAndDebtExpense
     *
     * @return int
     */
    public function getInterestAndDebtExpense()
    {
        return $this->container['interestAndDebtExpense'];
    }

    /**
     * Sets interestAndDebtExpense
     *
     * @param int $interestAndDebtExpense interestAndDebtExpense
     *
     * @return $this
     */
    public function setInterestAndDebtExpense($interestAndDebtExpense)
    {
        $this->container['interestAndDebtExpense'] = $interestAndDebtExpense;

        return $this;
    }

    /**
     * Gets netIncomeFromContinuingOperations
     *
     * @return int
     */
    public function getNetIncomeFromContinuingOperations()
    {
        return $this->container['netIncomeFromContinuingOperations'];
    }

    /**
     * Sets netIncomeFromContinuingOperations
     *
     * @param int $netIncomeFromContinuingOperations netIncomeFromContinuingOperations
     *
     * @return $this
     */
    public function setNetIncomeFromContinuingOperations($netIncomeFromContinuingOperations)
    {
        $this->container['netIncomeFromContinuingOperations'] = $netIncomeFromContinuingOperations;

        return $this;
    }

    /**
     * Gets comprehensiveIncomeNetOfTax
     *
     * @return int
     */
    public function getComprehensiveIncomeNetOfTax()
    {
        return $this->container['comprehensiveIncomeNetOfTax'];
    }

    /**
     * Sets comprehensiveIncomeNetOfTax
     *
     * @param int $comprehensiveIncomeNetOfTax comprehensiveIncomeNetOfTax
     *
     * @return $this
     */
    public function setComprehensiveIncomeNetOfTax($comprehensiveIncomeNetOfTax)
    {
        $this->container['comprehensiveIncomeNetOfTax'] = $comprehensiveIncomeNetOfTax;

        return $this;
    }

    /**
     * Gets ebit
     *
     * @return int
     */
    public function getEbit()
    {
        return $this->container['ebit'];
    }

    /**
     * Sets ebit
     *
     * @param int $ebit ebit
     *
     * @return $this
     */
    public function setEbit($ebit)
    {
        $this->container['ebit'] = $ebit;

        return $this;
    }

    /**
     * Gets ebitda
     *
     * @return int
     */
    public function getEbitda()
    {
        return $this->container['ebitda'];
    }

    /**
     * Sets ebitda
     *
     * @param int $ebitda ebitda
     *
     * @return $this
     */
    public function setEbitda($ebitda)
    {
        $this->container['ebitda'] = $ebitda;

        return $this;
    }

    /**
     * Gets netIncome
     *
     * @return int
     */
    public function getNetIncome()
    {
        return $this->container['netIncome'];
    }

    /**
     * Sets netIncome
     *
     * @param int $netIncome netIncome
     *
     * @return $this
     */
    public function setNetIncome($netIncome)
    {
        $this->container['netIncome'] = $netIncome;

        return $this;
    }

    /**
     * Gets effectOfAccountingCharges
     *
     * @return int
     */
    public function getEffectOfAccountingCharges()
    {
        return $this->container['effectOfAccountingCharges'];
    }

    /**
     * Sets effectOfAccountingCharges
     *
     * @param int $effectOfAccountingCharges effectOfAccountingCharges
     *
     * @return $this
     */
    public function setEffectOfAccountingCharges($effectOfAccountingCharges)
    {
        $this->container['effectOfAccountingCharges'] = $effectOfAccountingCharges;

        return $this;
    }

    /**
     * Gets taxProvision
     *
     * @return int
     */
    public function getTaxProvision()
    {
        return $this->container['taxProvision'];
    }

    /**
     * Sets taxProvision
     *
     * @param int $taxProvision taxProvision
     *
     * @return $this
     */
    public function setTaxProvision($taxProvision)
    {
        $this->container['taxProvision'] = $taxProvision;

        return $this;
    }

    /**
     * Gets sellingAndMarketingExpenses
     *
     * @return int
     */
    public function getSellingAndMarketingExpenses()
    {
        return $this->container['sellingAndMarketingExpenses'];
    }

    /**
     * Sets sellingAndMarketingExpenses
     *
     * @param int $sellingAndMarketingExpenses sellingAndMarketingExpenses
     *
     * @return $this
     */
    public function setSellingAndMarketingExpenses($sellingAndMarketingExpenses)
    {
        $this->container['sellingAndMarketingExpenses'] = $sellingAndMarketingExpenses;

        return $this;
    }

    /**
     * Gets extraordinaryItems
     *
     * @return int
     */
    public function getExtraordinaryItems()
    {
        return $this->container['extraordinaryItems'];
    }

    /**
     * Sets extraordinaryItems
     *
     * @param int $extraordinaryItems extraordinaryItems
     *
     * @return $this
     */
    public function setExtraordinaryItems($extraordinaryItems)
    {
        $this->container['extraordinaryItems'] = $extraordinaryItems;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}