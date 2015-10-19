<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 19.10.2015
 * Time: 20:37
 */

use Phalcon\Mvc\Model;

class Raiting extends AbstractModel {

    /** @var  boolean */
    protected $rated;

    /** @var  string */
    protected $ip;

    function __construct(){
    }

    /**
     * @return boolean
     */
    public function isRated()
    {
        return $this->rated;
    }

    /**
     * @param boolean $rated
     */
    public function setRated($rated)
    {
        $this->rated = $rated;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

}