@foreach ($activity as $act)
    <div class="card mb-4">
        <div class="card-header">
            {{ $act->id }} : {{ $act->action }}
        </div>
        <div class="card-body">
            <p>{{ $act->details }}</p>
        </div>
    </div>
    <div id="loading" style="display: none; text-align: center;">
        <p>Cargando más actividades...</p>
    </div>
@endforeach
