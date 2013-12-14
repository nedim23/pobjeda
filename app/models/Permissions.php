<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class Permissions extends Model
{

    /**
     *
     * @var integer
     */
    public $idPermissions;
     
    /**
     *
     * @var integer
     */
    public $Profiles;
     
    /**
     *
     * @var string
     */
    public $resource;
     
    /**
     *
     * @var string
     */
    public $action;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo("Profiles", "Pobjeda\Models\Profiles", "idProfiles");

    }

}
