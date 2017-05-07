<?php
namespace Model;

class TestScenario {

    public $id;
	public $name;
    public $featureId;
    public $stepDefinitions;

    public function __construct(string $name, int $featureId, int $id = NULL, array $stepDefinitions)
    {
        $this->setName($name);
        $this->setFeatureId($featureId);
        if ($id != NULL) {
            $this->id = $id;
        }
        $this->setStepDefinitions($stepDefinitions);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFeatureId()
    {
        return $this->featureId;
    }

    /**
     * @param mixed $featureId
     */
    public function setFeatureId($featureId)
    {
        $this->featureId = $featureId;
    }

    /**
     * @return mixed
     */
    public function getStepDefinitions()
    {
        return $this->stepDefinitions;
    }

    /**
     * @param mixed $stepDefinitions
     */
    public function setStepDefinitions($stepDefinitions)
    {
        $this->stepDefinitions = $stepDefinitions;
    }

}