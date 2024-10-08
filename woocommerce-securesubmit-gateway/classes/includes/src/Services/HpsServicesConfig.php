<?php

/**
 * Class HpsServicesConfig
 */
class HpsServicesConfig implements HpsConfigInterface
{
    public $credentialToken = null;
    public $secretApiKey    = null;
    public $publicApiKey    = null;
    public $licenseId       = null;
    public $siteId          = null;
    public $deviceId        = null;
    public $versionNumber   = null;
    public $username        = null;
    public $password        = null;
    public $developerId     = null;
    public $siteTrace       = null;
    public $useProxy        = null;
    public $proxyOptions    = null;
    public $soapServiceUri  = "https://cert.api2.heartlandportico.com/Hps.Exchange.PosGateway/PosGatewayService.asmx";
    public $payPlanBaseUri  = null;
    public $curlOptions     = null;
    /**
     * @return string
     */
    public function serviceUri()
    {
        return $this->soapServiceUri;
    }
    /**
     * @param $value
     *
     * @return mixed|void
     */
    public function setServiceUri($value)
    {
        $this->soapServiceUri = $value;
    }
    /**
     * @param $keyType
     *
     * @return bool
     */
    public function validate($keyType)
    {
        return ($keyType == self::KEY_TYPE_PUBLIC && $this->validatePublicApiKey())
            || ($keyType == self::KEY_TYPE_SECRET && $this->validateSecretApiKey());
    }
    /**
     * @param $keyType
     *
     * @return string
     */
    public function getKeyType($keyType)
    {
        $key = trim($keyType == self::KEY_TYPE_SECRET ? $this->secretApiKey : $this->publicApiKey);
        switch (true) {
            case substr($key, 0, 6) == 'skapi_':
                return self::KEY_TYPE_SECRET;
                break;
            case substr($key, 0, 6) == 'pkapi_':
                return self::KEY_TYPE_PUBLIC;
                break;
            default:
                return self::KEY_TYPE_UNKNOWN;
                break;
        }
    }
    /**
     * @return bool
     */
    protected function validateSecretApiKey()
    {
        return is_string($this->secretApiKey)
            && $this->getKeyType(self::KEY_TYPE_SECRET) == self::KEY_TYPE_SECRET
            && strlen($this->secretApiKey) >= 48;
    }
    /**
     * @return bool
     */
    protected function validatePublicApiKey()
    {
        return is_string($this->publicApiKey)
            && $this->getKeyType(self::KEY_TYPE_PUBLIC) == self::KEY_TYPE_PUBLIC
            && strlen($this->publicApiKey) >= 28;
    }
}
