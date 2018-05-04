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
	<?php use App\kinder_base; /** @var kinder_base $aktuellesKind */ ?>
    @foreach($data as $aktuellesKind)
        <div class="row">
            <div class="col-4">
                <a href="{{route('kind.details',['id' => $aktuellesKind->id], true)}}">
                    {{$aktuellesKind->vorname}} {{$aktuellesKind->nachname}}
                </a>
            </div>
            <div class="col-4">
                {{$aktuellesKind->strasse}}
            </div>
            <div class="col-4">
                {{$aktuellesKind->plz}} {{$aktuellesKind->ort}}
            </div>
        </div>
    @endforeach
@endsection