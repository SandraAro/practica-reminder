<?php

namespace App\Http\Traits;

use App\Models\Company;
use App\Models\Reminder;
use App\Models\ReminderStatus;

trait selectsTrait
{
    public $reminders, $companies, $remindersStatuses;

    protected function loadReminder()
    {
        $this->reminders = Reminder::get();
    }

    protected function loadCompanies()
    {
        $this->companies = Company::pluck('name', 'id');
    }

    protected function loadRemindersStatuses()
    {
        $this->remindersStatuses = ReminderStatus::pluck('name', 'id');
    }

}
