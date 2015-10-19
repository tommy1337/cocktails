<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 19.10.2015
 * Time: 20:38
 */

use Phalcon\Mvc\Model;

class Ingredient extends AbstractModel {

    /** @var  string */
    protected $title;

    /** @var  string */
    protected $unit;

    function __construct(){
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

}