@if(session()->has('ok'))
    <div class="flash-message">
        <p class="alert alert-success">
            {{ session()->get('ok') }}
        </p>
    </div>
@endif
