
<div class="form-group row">
  <label for="inputId" class="col-sm-2 col-form-label">ID</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputId" value="{{ $job->id ?? '' }}" disabled>
  </div>
</div>
<div class="form-group row">
  <label for="inputName" class="col-sm-2 col-form-label">名称</label>
  <div class="col-sm-10">
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputName" name="name" placeholder="名称を入力してください。" value="{{ old('name', $job->name ?? '') }}"{{ $readOnly ? ' readonly="readonly"' : '' }}>
    @error('name')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
</div>
