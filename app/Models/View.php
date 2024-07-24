<?php

namespace App\Models;

use App\Models\User;
use App\Models\Thread;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class View extends Model
{
    use HasFactory;

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function threads(): BelongsTo
    {
        return $this->belongsTo(Thread::class);
    }
}
