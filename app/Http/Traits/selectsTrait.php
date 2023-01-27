<?php

namespace App\Http\Traits;

use App\Models\Reminder;

trait selectsTrait
{
    public $reminders;

    protected function loadReminder()
    {
        $this->reminders = Reminder::get();
        dd($this->reminders);
    }

}
