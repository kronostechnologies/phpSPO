<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:10:14+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class WorkbookWorksheetProtection extends ClientObject
{
    /**
     * @return bool
     */
    public function getProtected()
    {
        if (!$this->isPropertyAvailable("Protected")) {
            return null;
        }
        return $this->getProperty("Protected");
    }
    /**
     * @var bool
     */
    public function setProtected($value)
    {
        $this->setProperty("Protected", $value, true);
    }
    /**
     * @return WorkbookWorksheetProtectionOptions
     */
    public function getOptions()
    {
        if (!$this->isPropertyAvailable("Options")) {
            return null;
        }
        return $this->getProperty("Options");
    }
    /**
     * @var WorkbookWorksheetProtectionOptions
     */
    public function setOptions($value)
    {
        $this->setProperty("Options", $value, true);
    }
}