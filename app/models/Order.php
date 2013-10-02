<?php


class Order extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idOrder;
     
    /**
     *
     * @var integer
     */
    public $User;

    /**
     *
     * @var integer
     */
    public $createdAt;


    public function beforeValidationOnCreate()
    {
        //Timestamp the confirmaton
        $this->createdAt = time();
    }     
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("idOrder", "PackingList", "Order");
		$this->hasMany("idOrder", "Palete", "Order");
		$this->belongsTo("User", "Users", "idUsers");

    }

}
