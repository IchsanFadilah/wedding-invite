<div class="container ucapandoa mb-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="my-3 p-3 rounded shadow-sm">
        <form>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" wire:model='nama'>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ucapan" class="col-sm-2 col-form-label">Ucapan</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control" style="height: 25vh" wire:model='ucapan'> </textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="button" class="btn btn-primary" name="submit" wire:click='store()'>KIRIM</button>
                </div>
            </div>
        </form>
    </div>
    <div style="height: 50vh; overflow-y: scroll">
        @foreach ($dataUcapans as $key => $value)
            <div class="border-bottom border-2 border-dark p-3 rounded shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fs-5">{{ $value->nama }}</h5>
                    <p class="card-text text-muted fs-6">{{ $value->ucapan }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
