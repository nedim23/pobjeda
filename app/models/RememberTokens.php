<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class RememberTokens extends Model
{

    /**
     *
     * @var integer
     */
    public $idTokens;
     
    /**
     *
     * @var integer
     */
    public $User;
     
    /**
     *
     * @var string
     */
    public $token;
     
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
     
}
