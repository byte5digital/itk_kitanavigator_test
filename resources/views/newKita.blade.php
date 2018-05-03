@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <form action="{{ action('KitaBasisController@insert') }}" method="post">
        {{ csrf_field() }}
       <div class="form-group">
           <label for="kita_name">Kita Name</label>
           <input type="text" class="form-control" placeholder="Kita Name" name="kita_name" />
       </div>
        <div class="form-group">
           <label for="strasse">Strasse</label>
           <input type="text" class="form-control" placeholder="Strasse" name="strasse" />
       </div>
        <div class="form-group">
            <label for="plz">PLZ</label>
            <input type="text" class="form-control" placeholder="Postleitzahl" name="postleitzahl" />
        </div>
        <div class="form-group">
            <label for="ort">Ort</label>
            <input type="text" class="form-control" placeholder="Ort" name="ort" />
        </div>

        <input type="submit" class="btn btn-success" value="Speichern"/>
    </form>
@endsection

