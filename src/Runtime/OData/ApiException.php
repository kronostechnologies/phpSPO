<?php


namespace Office365\Runtime\OData;


class ApiException extends \Exception
{
    protected $apiErrorCode;

    public function __construct($message, $apiErrorCode)
    {
        $this->message = $message;
        $this->apiErrorCode = $apiErrorCode;
    }

    /**
     * @return string
     */
    public function getApiErrorCode()
    {
        return $this->apiErrorCode;
    }
}
