<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 19.10.2015
 * Time: 20:37
 */

use Phalcon\Mvc\Model;

class Comment extends AbstractModel {

    /** @var  string */
    protected $name;

    /** @var  string */
    protected $text;

    function __construct(){
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }



}