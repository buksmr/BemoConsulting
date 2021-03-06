<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable {
    use Uuids, Notifiable, HasApiTokens;
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'email', 'user_privilege', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Establish a connection with the tenant's database.
     */
    public function connect() {
        if (!$this->connected()) {
            tenant_connect(
                $this->db_name
            );
        }
    }
    /**
     * Check if the current tenant connection settings matches the company's database settings.
     *
     * @return bool
     */
    private function connected() {
        $connection = config('database.connections.tenant');
        return
        $connection['database'] == $this->db_name;
    }
}
