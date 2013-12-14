<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class PackingList extends Model
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
    public $idPacking_List;
     
    /**
     *
     * @var string
     */
    public $Shipment_Number;
     
    /**
     *
     * @var string
     */
    public $Shipment_Date;
     
    /**
     *
     * @var string
     */
    public $Delivery_Note;
     
    /**
     *
     * @var string
     */
    public $Sender_Name;
     
    /**
     *
     * @var string
     */
    public $Sender_Code;
     
    /**
     *
     * @var string
     */
    public $Receiver_Name;
     
    /**
     *
     * @var string
     */
    public $Receiver_Code;
     
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
		$this->belongsTo("Order", "Pobjeda\Models\Order", "idOrder");

    }

}
