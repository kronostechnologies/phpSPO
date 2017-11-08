<?php

/**
 * Generated by phpSPO model generator 2020-05-26T22:12:31+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class ManagedDeviceOverview extends ClientObject
{
    /**
     * @return integer
     */
    public function getEnrolledDeviceCount()
    {
        if (!$this->isPropertyAvailable("EnrolledDeviceCount")) {
            return null;
        }
        return $this->getProperty("EnrolledDeviceCount");
    }
    /**
     * @var integer
     */
    public function setEnrolledDeviceCount($value)
    {
        $this->setProperty("EnrolledDeviceCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getMdmEnrolledCount()
    {
        if (!$this->isPropertyAvailable("MdmEnrolledCount")) {
            return null;
        }
        return $this->getProperty("MdmEnrolledCount");
    }
    /**
     * @var integer
     */
    public function setMdmEnrolledCount($value)
    {
        $this->setProperty("MdmEnrolledCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getDualEnrolledDeviceCount()
    {
        if (!$this->isPropertyAvailable("DualEnrolledDeviceCount")) {
            return null;
        }
        return $this->getProperty("DualEnrolledDeviceCount");
    }
    /**
     * @var integer
     */
    public function setDualEnrolledDeviceCount($value)
    {
        $this->setProperty("DualEnrolledDeviceCount", $value, true);
    }
    /**
     * @return DeviceOperatingSystemSummary
     */
    public function getDeviceOperatingSystemSummary()
    {
        if (!$this->isPropertyAvailable("DeviceOperatingSystemSummary")) {
            return null;
        }
        return $this->getProperty("DeviceOperatingSystemSummary");
    }
    /**
     * @var DeviceOperatingSystemSummary
     */
    public function setDeviceOperatingSystemSummary($value)
    {
        $this->setProperty("DeviceOperatingSystemSummary", $value, true);
    }
    /**
     * @return DeviceExchangeAccessStateSummary
     */
    public function getDeviceExchangeAccessStateSummary()
    {
        if (!$this->isPropertyAvailable("DeviceExchangeAccessStateSummary")) {
            return null;
        }
        return $this->getProperty("DeviceExchangeAccessStateSummary");
    }
    /**
     * @var DeviceExchangeAccessStateSummary
     */
    public function setDeviceExchangeAccessStateSummary($value)
    {
        $this->setProperty("DeviceExchangeAccessStateSummary", $value, true);
    }
}