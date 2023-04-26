<?php

namespace App\Http\Livewire;

use App\Http\Traits\selectsTrait;
use App\Models\Reminder as ModelsReminder;
use Livewire\Component;
use PhpParser\Node\Stmt\Switch_;

class Reminder extends Component
{
    use selectsTrait;

    public $reminder = [], $modal= [], $changeStatus= [], $title, $isEdit = [];

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

    public function editTitle($id, $title)
    {
        $this->isEdit[$id] = true;
        $this->title = $title;

    }

    public function update($id)
    {
        $reminder = ModelsReminder::find($id);
        $reminder->update(['title' => $this->title]);
        $this->isEdit[$id] = false;
        $this->title = null;
        $this->loadReminders();
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
        $this->loadReminder();
    }

    public function changeColor($status)
    {
        switch ($status) {
            case '1':
                return 'bg-warning';
                break;
            case '2':
                return 'bg-info';
                break;
            case '3':
                return 'bg-success';
                break;
            case '4':
                return 'bg-danger';
                break;
            case '5':
                return 'bg-secondary';
                break;
        }
    }

    public function render()
    {
        return view('livewire.reminder');
    }
}
