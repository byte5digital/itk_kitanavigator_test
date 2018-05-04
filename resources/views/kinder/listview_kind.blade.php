@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="row">
        <div class="col-3">
            Name
        </div>
        <div class="col-3">
            Straße
        </div>
        <div class="col-3">
            Ort
        </div>
        <div class="col-3">
            Kita
        </div>
    </div>
	<?php use App\kinder_base; /** @var kinder_base $aktuellesKind */ ?>
    @foreach($data as $aktuellesKind)
        <div class="row">
            <div class="col-3">
                <a href="{{route('kind.details',['id' => $aktuellesKind->id], true)}}">
                    {{$aktuellesKind->vorname}} {{$aktuellesKind->nachname}}
                </a>
            </div>
            <div class="col-3">
                {{$aktuellesKind->strasse}}
            </div>
            <div class="col-3">
                {{$aktuellesKind->plz}} {{$aktuellesKind->ort}}
            </div>
            <div class="col-3">
                <a href="{{$aktuellesKind->kita != null ? route('kita.details', ['id' => $aktuellesKind->kita->kita->id]) : '#'}}">
                    {{$aktuellesKind->kita != null ? $aktuellesKind->kita->kita->kita_name : 'Keine Kita'}}
                </a>
            </div>
        </div>
    @endforeach
@endsection