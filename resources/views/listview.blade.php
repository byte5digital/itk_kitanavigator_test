@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="row">
        <div class="col-4">
            Name
        </div>
        <div class="col-4">
            Straße
        </div>
        <div class="col-4">
            Ort
        </div>
    </div>
	<?php use App\kita_basis; /** @var kita_basis $aktuelleKita */ ?>
    @foreach($data as $aktuelleKita)
        <div class="row">
            <div class="col-4">
                <a href="{{route('showdetail',['id' => $aktuelleKita->id], true)}}">
                    {{$aktuelleKita->kita_name}}
                </a>
            </div>
            <div class="col-4">
                {{$aktuelleKita->strasse}}
            </div>
            <div class="col-4">
                {{$aktuelleKita->postleitzahl}} {{$aktuelleKita->ort}}
            </div>
        </div>
    @endforeach
@endsection