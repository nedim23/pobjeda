<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class Artupal extends Model
{    

    /**
     *
     * @var integer
     */
    public $Palete;

    /**
     *
     * @var integer
     */
    public $idArtupal;
     
    /**
     *
     * @var string
     */
    public $Product_Code;
     
    /**
     *
     * @var string
     */
    public $Description;
     
    /**
     *
     * @var string
     */
    public $Lot_Number;
     
    /**
     *
     * @var double
     */
    public $Quantity;
     
    /**
     *
     * @var string
     */
    public $Unit_Of_Measure;
     
    /**
     *
     * @var integer
     */
    public $Count_Of_Units;
     
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
		$this->hasMany("idArtupal", "Pobjeda\Models\Paketi", "Artupal");
		$this->belongsTo("Palete", "Pobjeda\Models\Palete", "idPalete");
    }
}
