<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $guarded = [];

    protected $casts = [
        'experience' => 'array',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function personalInfo(): BelongsTo
    {
        return $this->belongsTo(PersonalInfo::class, 'personal_info_id');
    }
    public function bankInfo(): BelongsTo
    {
        return $this->belongsTo(BankInfo::class, 'bank_info_id');
    }
    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }

    public function isPunchedIn(): bool
    {
        return $this->attendances()
            ->whereDate('date', today())
            ->whereNotNull('punch_in')
            ->whereNull('punch_out')
            ->exists();
    }
}
