<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\clear as Authenticatable;

class Request extends Model
{
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

    protected $primaryKey = 'id_request';

    public $incrementing = true;

    protected $keyType = 'integer';

    public function user() {
        return $this->belongsTo('App\User');
    }
}
