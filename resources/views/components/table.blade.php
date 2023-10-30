<div class="d-flex justify-content-between mb-3">
    <div class="d-flex align-items-center">
        <span>Mostrar</span>
        <select class="form-control mx-1">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        <span>Entradas</span>
    </div>
    <div>
        <input type="text" class="form-control" placeholder="buscar">
    </div>
</div>

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                {{ $thead }}
            </tr>
        </thead>
        <tbody>
            {{ $tbody }}
        </tbody>
    </table>
</div>
