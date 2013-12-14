<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class PasswordChanges extends Model
{

    /**
     *
     * @var integer
     */
    public $idChanges;
     
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
     * @var string
     */
    public $userAgent;
     
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
		$this->belongsTo("User", "Pobjeda\Models\Users", "idUsers");

    }

}
