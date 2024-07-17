@extends('admin.base')

@section('title', '職業')
@section('subtitle', '更新確認')
@section('css')

@endsection

@section('content')
<div class="alert alert-info" role="alert">入力内容に間違いなければページ下の<strong>更新ボタン</strong>を押して確定してください。</div>
<form action="{{ route('admin.jobs.update', ['job' => $job]) }}" method="POST">
  @method('PATCH')
  @csrf
  @include('admin.jobs.form-controls', ['readOnly' => false])
  <div class="form-group row">
    <div class="col-3">
      <a href="{{ route('admin.jobs.edit', ['job' => $job]) }}" class="btn btn-secondary">戻る</a>
    </div>
    <div class="col-9 text-right">
      <button type="submit" class="btn btn-primary">更新</button>
    </div>
  </div>
</form>
@endsection

@section('script')

@endsection
