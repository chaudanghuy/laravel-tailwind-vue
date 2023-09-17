@if(session('success'))
    <div class="success alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
