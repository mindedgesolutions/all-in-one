<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'address',
    ];

    public function scopeFilterData($query, $client = null, $contact = null)
    {
        if ($client) {
            $query = $query->where('name', 'like', '%' . $client . '%');
        }
        if ($contact) {
            $query = $query->whereHas('contacts', function ($query) use ($contact) {
                $query = $query->where('contact_person', 'like', '%' . $contact . '%')
                    ->orWhere('email', 'like', '%' . $contact . '%')
                    ->orWhere('phone_1', 'like', '%' . $contact . '%')
                    ->orWhere('phone_2', 'like', '%' . $contact . '%');
            });
        }
    }

    public function contacts()
    {
        return $this->hasMany(ClientContact::class, 'client_id', 'id');
    }
}
