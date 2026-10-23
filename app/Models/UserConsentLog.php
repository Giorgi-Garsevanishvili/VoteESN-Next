<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserConsentLog extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'accepted',
        'terms_version',
    ];

    protected function casts(): array
    {
        return [
            'accepted' => 'boolean',
            'created_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
