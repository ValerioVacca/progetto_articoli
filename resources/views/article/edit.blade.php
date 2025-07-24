<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center fw-bold">Modifica Articolo</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
               <livewire:article-edit-form :article="$article" />
            </div>
        </div>
    </div>
</x-layout>