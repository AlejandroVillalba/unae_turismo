<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    static $rules = [
		'name' => 'required',
		'email' => 'required',
        'password' => 'required',
    ];

    protected $perPage = 20;
   
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }

    //relacion uno a mucho
    public function alojamientos(){
        return $this->hasMany(Alojamiento::class);
    }

    public function adminlte_image(){

        return 'https://picsum.photos/300/300' ;
        
    }

    public function adminlte_desc(){
        
        $user = User::find(auth()->id());

        foreach ($user->roles as $role){
            return  $role->name;
        }

    }

    public function adminlte_profile_url()
    {
        return 'user/profile';
    }
}
