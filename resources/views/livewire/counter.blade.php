<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">{{$value}}</h2>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-6 d-flex justify-content-center">
            <button class="btn btn-danger w-50" wire:click="decrement">-1</button>
        </div>

        <div class="col-6 d-flex justify-content-center">
            <button class="btn btn-success w-50" wire:click="increment">+1</button>
        </div>

          <div class="col-6 d-flex justify-content-center">
            <button class="btn btn-warning w-50" wire:click="incrementByNumber({{ $five }})">+5</button>
         </div>

        <div class="col-6 d-flex justify-content-center">
            <input type="number" wire:model="number">
            <button class="btn btn-primary w-50" wire:click="incrementByInput()">Incrementa</button>
         </div>



</div>
