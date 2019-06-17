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

    private $txtcid;
    private $txtname;
    private $txttel;
    private $txtsal;

    /**
     * Customer constructor.
     * @param $txtcid
     * @param $txtname
     * @param $txttel
     * @param $txtsal
     */
    public function __construct($txtcid, $txtname, $txttel, $txtsal)
    {
        $this->txtcid = $txtcid;
        $this->txtname = $txtname;
        $this->txttel = $txttel;
        $this->txtsal = $txtsal;
    }

    /**
     * @return mixed
     */
    public function getTxtcid()
    {
        return $this->txtcid;
    }

    /**
     * @param mixed $txtcid
     */
    public function setTxtcid($txtcid)
    {
        $this->txtcid = $txtcid;
    }

    /**
     * @return mixed
     */
    public function getTxtname()
    {
        return $this->txtname;
    }

    /**
     * @param mixed $txtname
     */
    public function setTxtname($txtname)
    {
        $this->txtname = $txtname;
    }

    /**
     * @return mixed
     */
    public function getTxttel()
    {
        return $this->txttel;
    }

    /**
     * @param mixed $txttel
     */
    public function setTxttel($txttel)
    {
        $this->txttel = $txttel;
    }

    /**
     * @return mixed
     */
    public function getTxtsal()
    {
        return $this->txtsal;
    }

    /**
     * @param mixed $txtsal
     */
    public function setTxtsal($txtsal)
    {
        $this->txtsal = $txtsal;
    }


}

?>
