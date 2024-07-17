@if (session('messages.' . $type))
<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
  {{ session('messages.' . $type) }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
