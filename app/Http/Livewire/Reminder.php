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
        'company_id',
        'date'
    ], $modal= [], $changeStatus= [];

    public function mount()
    {
        $this->loadReminder();
        $this->loadCompanies();
        $this->loadRemindersStatuses();

        foreach ($this->reminders as $reminder) {
            $this->changeStatus[$reminder->id]= $reminder->status->id;
            // dd($this->changeStatus[$reminder->id]);
        }
    }


    public function saveReminder()
    {
        $this->reminder['reminder_status_id'] = 1;
        ModelsReminder::create($this->reminder);
        $this->loadReminder();
        $this->reminder =[];
    }

    public function delete($id, $confirm = false)
    {
        $this->modal[$id] = true;

        if($confirm){
            $reminder= ModelsReminder::find($id);
            $reminder->delete();
            $this->modal[$id] = false;
            $this->loadReminder();
        }
    }

    public function closeModal()
    {
        $this->modal = [];
    }

    public function changeStatus($id)
    {
        $reminder = ModelsReminder::find($id);
        $reminder->update(['reminder_status_id' => $this->changeStatus[$id]]);
        $this->loadRemindersStatuses();
    }

    public function render()
    {
        return view('livewire.reminder');
    }
}
