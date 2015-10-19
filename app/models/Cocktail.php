<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 19.10.2015
 * Time: 20:28
 */

use Phalcon\Mvc\Model;

class Cocktail extends AbstractModel {

    /** @var  string */
    protected $title;

    /** @var  string */
    protected $description;

    /** @var  string */
    protected $howTo;

    /** @var  \Season */
    protected $season;


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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getHowTo()
    {
        return $this->howTo;
    }

    /**
     * @param string $howTo
     */
    public function setHowTo($howTo)
    {
        $this->howTo = $howTo;
    }

    /**
     * @return Season
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * @param \Season $season
     */
    public function setSeason(\Season $season)
    {
        $this->season = $season;
    }
}