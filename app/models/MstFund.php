<?php

class MstFund extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $fund_id;

    /**
     *
     * @var string
     */
    public $fund_name;
	
	 /**
     *
     * @var string
     */
    public $fund_name_kana;

    
    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mst_fund';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return MstFund[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return MstFund
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
