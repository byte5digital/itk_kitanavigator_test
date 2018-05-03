@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <form action="{{ action('KitaBasisController@insert') }}" method="post">
        <div class="form-group">
            <label for="kita_name">Kita Name</label>
            <input type="text" class="form-control" placeholder="Kita Name" name="kita_name" readonly value="{{$data->kita_name}}" />
        </div>
        <div class="form-group">
            <label for="strasse">Strasse</label>
            <input type="text" class="form-control" placeholder="Strasse" name="strasse" readonly value="{{$data->strasse}}"/>
        </div>
        <div class="form-group">
            <label for="plz">PLZ</label>
            <input type="text" class="form-control" placeholder="Postleitzahl" name="postleitzahl" readonly value="{{$data->postleitzahl}}" />
        </div>
        <div class="form-group">
            <label for="ort">Ort</label>
            <input type="text" class="form-control" placeholder="Ort" name="ort" readonly value="{{$data->ort}}"/>
        </div>
        <button onclick="window.history.go(-1); return false;" class="btn btn-danger">Zurück</button>
    </form>
@endsection

