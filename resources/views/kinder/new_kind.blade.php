@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <form action="{{route('kind.post') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="vorname">Vorname</label>
            <input type="text" class="form-control" placeholder="Vorname" name="vorname" />
        </div>
        <div class="form-group">
            <label for="nachname">Nachname</label>
            <input type="text" class="form-control" placeholder="Nachname" name="nachname" />
        </div>
        <div class="form-group">
            <label for="strasse">Straße</label>
            <input type="text" class="form-control" placeholder="Straße" name="strasse" />
        </div>
        <div class="form-group">
            <label for="ort">Ort</label>
            <input type="text" class="form-control" placeholder="Ort" name="ort" />
        </div>
        <div class="form-group">
            <label for="plz">Postleitzahl</label>
            <input type="text" class="form-control" placeholder="Postleitzahl" name="plz" />
        </div>
        <input type="submit" class="btn btn-success" value="Speichern"/>
    </form>
@endsection

