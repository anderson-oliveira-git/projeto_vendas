<div>
    @if (session()->has('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucesso: </strong> {{ session('msg') }}
        </div>
    @endif
</div>
