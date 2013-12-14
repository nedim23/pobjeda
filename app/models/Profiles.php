<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class Profiles extends Model
{

    /**
     *
     * @var integer
     */
    public $idProfiles;
     
    /**
     *
     * @var string
     */
    public $name;
     
    /**
     *
     * @var string
     */
    public $active;
     
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->hasMany("idProfiles", "Pobjeda\Models\Permissions", "Profiles", array(
            'alias' => 'permissions'
        ));
        
        $this->hasMany("idProfiles", "Pobjeda\Models\Users", "Profiles", array(
            'alias' => 'users',
            'foreignKey' => array(
                'message' => 'Profile cannot be deleted because it\'s used on Users'
            )
        ));

    }

}