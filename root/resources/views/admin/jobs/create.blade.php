@extends('admin.base')

@section('title', '職業')
@section('subtitle', '新規')
@section('css')

@endsection

@section('content')
<form action="{{ route('admin.jobs.store') }}" method="POST">
  @csrf
  @include('admin.jobs.form-controls', ['readOnly' => false])
  <div class="form-group row">
    <div class="col-3">
      <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary">一覧へ</a>
    </div>
    <div class="col-9 text-right">
      <button type="submit" class="btn btn-primary">登録</button>
    </div>
  </div>
</form>
@endsection

@section('script')

@endsection
