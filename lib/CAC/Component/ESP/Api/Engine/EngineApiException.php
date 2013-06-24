<?php

namespace CAC\Component\ESP\Api\Engine;

class EngineApiException extends \Exception
{
    private $engineCode;

    public function setEngineCode($code)
    {
        $this->engineCode = $code;
    }
}
