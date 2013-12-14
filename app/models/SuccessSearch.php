<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class SuccessSearch extends Model
{

    /**
     *
     * @var integer
     */
    public $idSearch;
     
    /**
     *
     * @var integer
     */
    public $User;
     
    /**
     *
     * @var string
     */
    public $ipAddress;
     
    /**
     *
     * @var integer
     */
    public $occurred;
     
    /**
     *
     * @var string
     */
    public $userAgent;
    

    public function beforeValidationOnCreate()
    {
        //Timestamp the confirmaton
        $this->occurred = time();
    }
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->hasMany("idSearch", "Pobjeda\Models\SearchParams", "Search");
		$this->belongsTo("User", "Users", "idUsers", array(
            'alias' => 'user'
        ));
    }
}
