<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\clear as Authenticatable;

class Request extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_request',
        'id_customer',
        'id_admin',
        'id_consultant',
        'schedule',
        'subject',
        'description',
        'importance',
        'date_created',
        'deadline',
        'solved'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $primaryKey = 'id_request';


}
