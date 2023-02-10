<div class="of-auto h100" fixed bg-img="{{asset('shubham-dhage-d96PxKZrJN8-unsplash.jpg')}}" b-scroll>
    <boxy>
        sandra: blue;
    </boxy>
    <div class="div-sm-12 div-lg-4 p1">
        <div class="b-card w100" bg="blue 1" blur night  hover shadow>
            <div bx-title capsule bg="dark-gray" tx="white">Crear Recordatorio</div>
            <div bx-section>
                <div class="b-input-area ">
                    <label tx="white">Titulo:</label>
                    <div class="b-input div-sm-12 div-lg-8" color="white">
                        <input type="text" placeholder="titulo" bg="blue 2" tx="white" wire:model='reminder.title' />
                    </div>
                </div>
                <div class="b-input-area div-sm-12 div-lg-8">
                    <label tx="white">Descripción:</label>
                    <input type="text" placeholder="Descripción" bg="blue 2" tx="white" wire:model='reminder.description' />
                    <label tx="white">Fecha de creación: </label>
                    <input type="datetime-local" tx="white" bg="blue 2" wire:model.defer="reminder.date">
                    <label tx="white">Empresa:</label>
                    <div class="b-select-area" >
                        <span bx-icon separated >
                            <i class="fa-solid fa-trash"></i>
                        </span>
                        <select wire:model="reminder.company_id" bg="blue 2">
                            <option bg="blue 2">Selecciona una empresa</option>
                            @foreach ($companies as $key => $company)
                                <option value="{{ $key }}" bg="blue 2">{{ $company }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div bx-section>
                <button class="b-btn mt2" size="sm" rd="all" color="sandra" wire:click="saveReminder">Guardar</button>
            </div>
        </div>
    </div>
    <div class="div-sm-12 div-lg-8">
        @foreach ($reminders as $reminder)
            <div class="div-sm-12 div-lg-4 p1">
                <div class="b-card w100" bg="blue 1" blur night hover shadow>
                    <div bx-title tx="sandra" class="flex" bg="dark-gray" capsule>
                        <h2 class="fw-bold m0 expand" tx="blue">{{ $reminder->title }}</h2>
                        <button icon class="b-btn" wire:click="delete({{ $reminder->id }})" color="blue">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                    <div bx-section capsule>
                        <p tx="white" class="div-12 mb-2">{{ $reminder->description }}</p>

                        <div class="div-6">
                            <span class="badge bg-primary" tx="white">{{ $reminder->date }}</span>
                        </div>
                        <div class="div-6 b-select-area">
                            <select wire:change="changeStatus({{$reminder->id}})" wire:model="changeStatus.{{$reminder->id}}" bg="blue 2">
                                <option>Selecciona el estado</option>
                                @foreach ($remindersStatuses as $key => $status)
                                    <option value="{{$key}}">{{$status}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        @if (@$modal[$reminder->id])
        <div class="modal show d-block" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Recordatorios</h5>
                    <button type="button" class="btn-close" wire:click="closeModal"></button>
                </div>
                <div class="modal-body">
                    <p>¿Eliminar recordatorio?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal">No</button>
                    <button type="button" class="btn btn-primary" wire:click="delete({{ $reminder->id}},true)">Si</button>
                </div>
              </div>
            </div>
        </div>
        @endif
        @endforeach
        {{-- </div> --}}
    </div>
</div>
