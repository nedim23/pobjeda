<?php

namespace Pobjeda\Models;

use Phalcon\Mvc\Model;

class SearchParams extends Model
{

    /**
     *
     * @var integer
     */
    public $idParams;
     
    /**
     *
     * @var integer
     */
    public $Search;
     
    /**
     *
     * @var string
     */
    public $name;
     
    /**
     *
     * @var string
     */
    public $value;
     
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
		$this->belongsTo("Search", "Pobjeda\Models\SuccessSearch", "idSearch", array(
            'alias' => 'search'
        ));
    }

}
