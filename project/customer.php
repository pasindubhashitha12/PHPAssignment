<?php
/**
 * Created by IntelliJ IDEA.
 * User: HP
 * Date: 6/17/2019
 * Time: 11:12 AM
 */
?>

<?php

class Customer{

    private $cid;
    private $name;
    private $mobile;
    private $address;

    /**
     * Customer constructor.
     * @param $cid
     * @param $name
     * @param $mobile
     * @param $address
     */
    public function __construct($cid, $name, $mobile, $address)
    {
        $this->cid = $cid;
        $this->name = $name;
        $this->mobile = $mobile;
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
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
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }


}

?>
