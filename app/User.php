<?php
namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    

    protected $table='p_user';
    protected $primaryKey='id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_email', 'user_nik',
        'user_name','user_password', 
        'user_phone','id_profile',
        'modify_date','user_modify',
        'created_date','user_created',
        'last_login','is_active'
    ];

    public $timestamps = false;

    protected $hidden = [
        'user_password',
    ];

    public function getAuthPassword() {
        return $this->user_password;
      }


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}