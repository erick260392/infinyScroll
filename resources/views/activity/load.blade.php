@foreach ($activity as $act)
    <div class="card mb-4">
        <div class="card-header">
            {{ $act->id }} : {{ $act->action }}
        </div>
        <div class="card-body">
            <p>{{ $act->details }}</p>
        </div>
    </div>
@endforeach
