@extends('panel.edit.form')

@section('input')
    <div class="row">
        <dl>Имя</dl>
        <input name="name" value="{{ $item->name }}" type="text" maxlength="127" />
    </div>
@endsection