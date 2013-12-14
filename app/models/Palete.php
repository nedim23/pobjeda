<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class Palete extends Model
{

    /**
     *
     * @var integer
     */
    public $Order;

    /**
     *
     * @var integer
     */
    public $idPalete;
     
    /**
     *
     * @var string
     */
    public $GS1_Code;
     
    /**
     *
     * @var string
     */
    public $Item_Type;
    
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("idPalete", "Pobjeda\Models\Artupal", "Palete");
		$this->belongsTo("Order", "Pobjeda\Models\Order", "idOrder");

    }

}
