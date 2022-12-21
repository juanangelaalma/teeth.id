<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Error;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function client()
    {
        return $this->hasOne(Client::class);
    }
    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function isDoctor()  
    {
        return $this->role === 'doctor';
    }

    public function isUser()
    {
        return $this->role === 'user';
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isVerified() {
        return $this->doctor->is_verified;
    }

    public function rate() {
        return $this->hasMany(Feedback::class);
    }

    public function hasRatedWebsite() {
        return $this->rate()->count() !== 0;
    }

    public function certificates() {
        return $this->hasManyThrough(Certification::class, Doctor::class);
    }

    public function clinic() {
        return $this->hasOne(Clinic::class);
    }

    public function schedules() {
        return $this->hasManyThrough(ClinicSchedule::class, Clinic::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function appointment() {
        return $this->hasMany(Order::class);
    }
}
