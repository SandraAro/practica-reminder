<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'reminder_status_id',
        'company_id',
        'date'
    ];

    public function status()
    {
        return $this->hasOne(ReminderStatus::class, 'id', 'reminder_status_id');
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
}
