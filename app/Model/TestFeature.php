<?php
/**
 * Created by PhpStorm.
 * User: Alexandru
 * Date: 5/4/2017
 * Time: 11:48 PM
 */

namespace Model;


class TestFeature
{
    public $id;
    public $name;
    public $suiteId;

    public function __construct(string $name, int $suiteId, $id = NULL)
    {
        $this->setName($name);
        $this->setSuiteId($suiteId);
        if ($id != NULL) {
            $this->id = $id;
        }
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getSuiteId()
    {
        return $this->suiteId;
    }

    /**
     * @param mixed $suiteId
     */
    public function setSuiteId($suiteId)
    {
        $this->suiteId = $suiteId;
    }


}