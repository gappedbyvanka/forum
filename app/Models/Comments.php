<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comments extends Model
{
    /** @use HasFactory<\Database\Factories\CommentsFactory> */
    use HasFactory;

    public function User(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }

    public function Post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
