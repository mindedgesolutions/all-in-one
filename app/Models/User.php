<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Policies\UserProfilePolicy;
use Spatie\Image\Manipulations;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
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
        'phone_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('card')
            ->format(Manipulations::FORMAT_WEBP)
            ->height(200)
            ->nonQueued();
        $this->addMediaConversion('thumb')
            ->format(Manipulations::FORMAT_WEBP)
            ->height(60)
            ->nonQueued();
    }

    public function details()
    {
        return $this->hasOne(UserDetail::class, 'user_id', 'id');
    }

    /*------------- Search related scopes ------------*/
    
    public function scopeFilterByUser($query, $user)
    {
        $query->where(function ($query) use ($user) {
            $query->where('name', 'like', '%' . $user . '%')
                ->orWhere('email', 'like', '%' . $user . '%')
                ->orWhere('phone', 'like', '%' . $user . '%');
        });
    }

    public function scopeFilterFromDetails($query, $job = null, $dob_start = null, $dob_end = null, $dor_start = null, $dor_end = null)
    {
        if ($job) {
            $query = $query->whereHas('details', function ($query) use ($job) {
                $query->where('user_type_id', $job);
            });
        }
        if ($dob_start) {
            $query = $query->whereHas('details', function ($query) use ($dob_start) {
                $query->where('dob', '>=', $dob_start);
            });
        }
        if ($dob_end) {
            $query = $query->whereHas('details', function ($query) use ($dob_end) {
                $query->where('dob', '<=', $dob_end);
            });
        }
        if ($dor_start) {
            $query = $query->whereHas('details', function ($query) use ($dor_start) {
                $query->where('dor', '>=', $dor_start);
            });
        }
        if ($dor_end) {
            $query = $query->whereHas('details', function ($query) use ($dor_end) {
                $query->where('dor', '<=', $dor_end);
            });
        }
    }
}
