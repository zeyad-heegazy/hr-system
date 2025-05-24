<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $guarded = [];

    protected $casts = [
        'files' => 'array',
    ];

    public function lead(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'lead_employee_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function getTimeLeftAttribute(): string
    {
        if (!$this->start_date || !$this->end_date) {
            return 'N/A';
        }

        $now = Carbon::now();
        $end = Carbon::parse($this->end_date);

        if ($end->isPast()) {
            return 'Ended';
        }

        $diff = $now->diff($end);

        if ($diff->y > 0 || $diff->m > 0) {
            return $diff->y > 0
                ? "{$diff->y} year(s) {$diff->m} month(s) left"
                : "{$diff->m} month(s) left";
        }

        return "{$diff->d} day(s) left";
    }
}
