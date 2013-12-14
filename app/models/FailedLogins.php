<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class FailedLogins extends Model
{

    /**
     *
     * @var integer
     */
    public $idFailed;
     
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
    public $attempted;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo("User", "Pobjeda\Models\Users", "idUsers");

    }

}
