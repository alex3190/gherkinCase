<?php
namespace Model;


class TestSuite
{
    public $id;
    public $name;

    public function __construct(string $name, $id = NULL)
    {
        $this->setName($name);
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

}