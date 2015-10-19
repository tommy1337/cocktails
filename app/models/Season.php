<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 19.10.2015
 * Time: 20:35
 */

use Phalcon\Mvc\Model;

class Season extends AbstractModel {

    /** @var  string */
    protected $title;

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

}