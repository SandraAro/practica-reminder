<?php

namespace App\Http\Livewire;

use App\Http\Traits\selectsTrait;
use App\Models\Reminder as ModelsReminder;
use Livewire\Component;

class Reminder extends Component
{
    use selectsTrait;

    public $reminder = [
        'title',
        'description',
        'reminder_status_id' => 1,
        'company_id'
    ];

    public function mount()
    {
        $this->loadReminder();
    }

    public function saveReminder()
    {
        $reminder = ModelsReminder::create($this->reminder);
        $this->loadReminder();
    }

    public function render()
    {
        return view('livewire.reminder');
    }
}
