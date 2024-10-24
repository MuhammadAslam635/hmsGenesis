<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'role',
        'profile_photo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function hospitalAdmins()

    {

        return $this->hasMany(HospitalAdmin::class, 'created_by');

    }


    /**

     * Get the doctors created by the user.

     */

    public function doctors()

    {

        return $this->hasMany(Doctor::class, 'created_by');

    }


    /**

     * Get the employees created by the user.

     */

    public function employees()

    {

        return $this->hasMany(Employee::class, 'created_by');

    }


    /**

     * Get the patients created by the user.

     */

    public function patients()

    {

        return $this->hasMany(Patient::class, 'created_by');

    }


    /**

     * Get the system settings created by the user.

     */

    public function systemSettings()

    {

        return $this->hasMany(SystemSetting::class, 'created_by');

    }


    /**

     * Get the OpenAI models created by the user.

     */

    public function openAiModels()

    {

        return $this->hasMany(OpenAiModel::class, 'created_by');

    }
}
