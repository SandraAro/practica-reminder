<div class="of-auto h100" fixed bg-img="{{asset('shubham-dhage-d96PxKZrJN8-unsplash.jpg')}}" b-scroll>
    <boxy>
        sandra: blue;
    </boxy>
    <div class="div-sm-12 div-lg-4 p1">
        <div class="b-card w100" bg="blue 1" blur night  hover shadow>
            <div bx-title capsule bg="dark-gray" tx="white">Crear Estado</div>
            <div bx-section>
                <div class="b-input-area ">
                    <label tx="white">Nombre:</label>
                    <div class="b-input div-sm-12 div-lg-8" color="white">
                        <input type="text" placeholder="titulo" bg="blue 2" tx="white" wire:model.defer='reminder.title' />
                    </div>
                </div>
                {{-- <div class="b-input-area div-sm-12 div-lg-8">
                    <label tx="white">Descripción:</label>
                    <input type="text" placeholder="Descripción" bg="blue 2" tx="white" wire:model.defer='reminder.description' />
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
                </div> --}}
            </div>
            <div bx-section>
                <button class="b-btn mt2" size="sm" rd="all" color="sandra" wire:click="saveReminder">Guardar</button>
            </div>
        </div>
    </div>
</div>
