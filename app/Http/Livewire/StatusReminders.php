<?php

namespace App\Http\Livewire;

use App\Http\Traits\selectsTrait;
use App\Models\Reminder;
use App\Models\ReminderStatus;
use Livewire\Component;

class StatusReminders extends Component
{
    use selectsTrait;

    public $status = [];

    public function saveStatus()
    {
        $this->status['reminder_status_id'] = 1;
        ReminderStatus::created($this->status);
        // $this->loadReminder();
        $this->status = [];
    }

    public function render()
    {
        return view('livewire.status-reminders');
    }
}
