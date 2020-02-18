<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address_id', 'discount', 'price', 'status', 'type', 'total', 'user_id'
    ];

    /*Importa atributos custom para o retorno padrao do model*/
    protected $appends = [];

    public function burguers() {
        return $this->BelongsToMany('App/Burguer');
    }

    public function drinks() {
        return $this->BelongsToMany('App/Drink');
    }

    public function foods() {
        return $this->BelongsToMany('App/Food');
    }
}