@extends('layouts.admin')

@section('content')
    <h1>Créer un nouvel article</h1>

    <div class="form-container">
    {!! Form::open(['route' => ['posts.store'], 'method' => 'post', 'class' => 'form']) !!}
    @csrf
    <div class="field">
        {!! Form::label('title', 'Titre de l\'article', ['class' => 'label']) !!}
        <div class="control">
            {!! Form::text('title', old('title'), ['class' => 'input']) !!}
            {!! $errors->first('title', '<span class="help-block">Ce champ est obligatoire</span>') !!}
        </div>
    </div>

    <div class="field">
        {!! Form::label('slug', 'Slug de l\'article', ['class' => 'label']) !!}
        <div class="control">
            {!! Form::text('slug', old('slug'), ['class' => 'input']) !!}
            {!! $errors->first('slug', '<span class="help-block">Ce champ est obligatoire</span>') !!}
        </div>
    </div>

    <div class="field">
        {!! Form::label('hat', 'Chapeau de l\'article', ['class' => 'label']) !!}
        <div class="control">
            {!! Form::textarea('hat', old('hat'), ['class' => 'textarea']) !!}
            {!! $errors->first('hat', '<span class="help-block">Ce champ est obligatoire</span>') !!}
        </div>
    </div>

    <div class="field">
        {!! Form::label('body', 'Contenu de l\'article', ['class' => 'label']) !!}
        <div class="control">
            {!! Form::textarea('body', old('body'), ['class' => 'textarea']) !!}
            {!! $errors->first('body', '<span class="help-block">Ce champ est obligatoire</span>') !!}
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-fullwidth is-primary btn-custom">Me connecter</button>
        </div>
    </div>
    {!! Form::close() !!}
    
    </div>
    
@endsection