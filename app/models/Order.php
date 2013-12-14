<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class Order extends Model
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
		$this->hasMany("idOrder", "Pobjeda\Models\PackingList", "Order");
		$this->hasMany("idOrder", "Pobjeda\Models\Palete", "Order");
		$this->belongsTo("User", "Pobjeda\Models\Users", "idUsers");
    }
}
