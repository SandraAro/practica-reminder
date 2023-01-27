<div>

    <div class="b-card-container">
        <div class="head">Crear Recordatorio</div>
        <div class="body">
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
