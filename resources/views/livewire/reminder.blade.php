<div class="row">
    <div class="col-4">
        <div class="b-card}">
            <div b-head capsule tx="blue">Crear Recordatorio</div>
            <div b-content>
                <div class="b-input-area">
                    <label >Titulo:</label>
                    <div class="b-input" color="white">
                        <input type="text" placeholder="titulo" wire:model='reminder.title' />
                    </div>
                </div>
                <div class="b-input-area">
                    <label >Descripción:</label>
                    <div class="b-input" color="white">
                        <input type="text" placeholder="titulo" wire:model='reminder.description' />
                    </div>
                </div>
            </div>
            <div class="footer tc"><button class="b-btn-gradient mt2 w100" rd="all" color="primary" wire:click="saveReminder">Guardar</button></div>
        </div>
    </div>

    <div class="col-8 row">
        {{-- <div class="col-12" bg="ok,range"> --}}
            @foreach ($reminders as $reminder)
            <div class="col-4">
                <div class="b-card m1 w100">
                    <div b-head capsule>
                        <div class="b-input-area" tx="blue">
                            <h2 class="fw-bold text-info m0">{{$reminder->title}}</h2>
                        </div>
                    </div>
                    <div b-content>
                        <div class="b-input-area" tx="indigo">
                            <p>{{$reminder->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        {{-- </div> --}}
    </div>
</div>
