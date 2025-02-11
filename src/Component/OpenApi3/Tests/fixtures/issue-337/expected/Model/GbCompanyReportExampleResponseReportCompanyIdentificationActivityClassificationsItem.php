<?php

namespace CreditSafe\API\Model;

class GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $classification;
    /**
     * 
     *
     * @var GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItem[]
     */
    protected $activities;
    /**
     * 
     *
     * @return string
     */
    public function getClassification() : string
    {
        return $this->classification;
    }
    /**
     * 
     *
     * @param string $classification
     *
     * @return self
     */
    public function setClassification(string $classification) : self
    {
        $this->initialized['classification'] = true;
        $this->classification = $classification;
        return $this;
    }
    /**
     * 
     *
     * @return GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItem[]
     */
    public function getActivities() : array
    {
        return $this->activities;
    }
    /**
     * 
     *
     * @param GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItemActivitiesItem[] $activities
     *
     * @return self
     */
    public function setActivities(array $activities) : self
    {
        $this->initialized['activities'] = true;
        $this->activities = $activities;
        return $this;
    }
}