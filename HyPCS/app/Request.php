<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
