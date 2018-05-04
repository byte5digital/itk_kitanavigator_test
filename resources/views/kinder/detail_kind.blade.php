@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <form action="{{route('kind.update') }}" method="post">
        @csrf

	    <?php use App\kinder_base; /** @var kinder_base $data */ ?>
        <input type="hidden" name="id" id="id" value="{{$data->id}}"/>
        <div class="form-group">
            <label for="vorname">Vorname</label>
            <input type="text" class="form-control" placeholder="Vorname" name="vorname" value="{{$data->vorname}}"/>
        </div>
        <div class="form-group">
            <label for="nachname">Nachname</label>
            <input type="text" class="form-control" placeholder="Nachname" name="nachname" value="{{$data->nachname}}" readonly/>
        </div>
        <div class="form-group">
            <label for="strasse">Straße</label>
            <input type="text" class="form-control" placeholder="Straße" name="strasse" value="{{$data->strasse}}" readonly/>
        </div>
        <div class="form-group">
            <label for="ort">Ort</label>
            <input type="text" class="form-control" placeholder="Ort" name="ort" value="{{$data->ort}}" readonly/>
        </div>
        <div class="form-group">
            <label for="plz">Postleitzahl</label>
            <input type="text" class="form-control" placeholder="Postleitzahl" name="plz" value="{{$data->plz}}" readonly />
        </div>
        <button onclick="window.history.go(-1); return false;" class="btn btn-danger">Zurück</button>
        <input type="submit" class="btn btn-success" value="Update Kind"/>
        <a href="{{route('kind.delete',['id' => $data->id])}}" class="btn btn-danger">Kind löschen</a>
    </form>
@endsection

