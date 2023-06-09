<?php

namespace Untek\Component\FormatAdapter\Drivers;

use Untek\Lib\Components\Format\Encoders\XmlEncoder;

class Xml extends BaseEncoderDriver implements DriverInterface
{

    public function __construct()
    {
        $encoder = new XmlEncoder(true, 'UTF-8', false);
        $this->setEncoder($encoder);
    }
}