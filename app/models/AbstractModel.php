<?php
/**
 * Created by PhpStorm.
 * User: tommy
 * Date: 19.10.2015
 * Time: 20:42
 */

use Phalcon\Mvc\Model;

class AbstractModel extends Model {

    /** @var  int */
    protected $uid;

    /** @var  timestamp */
    protected $crdate;

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return timestamp
     */
    public function getCrdate()
    {
        return $this->crdate;
    }

    /**
     * @param timestamp $crdate
     */
    public function setCrdate($crdate)
    {
        $this->crdate = $crdate;
    }



}