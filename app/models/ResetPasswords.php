<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class ResetPasswords extends Model
{

    /**
     *
     * @var integer
     */
    public $idReset;
     
    /**
     *
     * @var integer
     */
    public $User;
     
    /**
     *
     * @var string
     */
    public $code;
     
    /**
     *
     * @var integer
     */
    public $createdAt;
     
    /**
     *
     * @var integer
     */
    public $modifiedAt;
     
    /**
     *
     * @var string
     */
    public $reset;


    /**
     * Before create the user assign a password
     */
    public function beforeValidationOnCreate()
    {
        //Timestamp the confirmaton
        $this->createdAt = time();

        //Generate a random confirmation code
        $this->code = preg_replace('/[^a-zA-Z0-9]/', '', base64_encode(openssl_random_pseudo_bytes(24)));

        //Set status to non-confirmed
        $this->reset = 'N';
    }

    /**
     * Sets the timestamp before update the confirmation
     */
    public function beforeValidationOnUpdate()
    {
        //Timestamp the confirmaton
        $this->modifiedAt = time();
    }


     /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->belongsTo("User", "Pobjeda\Models\Users", "idUsers", array(
            'alias' => 'user'
        ));

    }

}
