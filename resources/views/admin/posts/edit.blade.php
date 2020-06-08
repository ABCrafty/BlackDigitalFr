@extends('layouts.admin')

@section('content')
<h1>Modifier mon article</h1>

<div class="form-container">
    {!! Form::model($post, ['route' => ['posts.update'], 'method' => 'put', 'class' => 'form']) !!}
    @csrf
    <div class="field">
        {!! Form::label('title', 'Titre de l\'article', ['class' => 'label']) !!}
        <div class="control">
            {!! Form::text('title', null, ['class' => 'input']) !!}
            {!! $errors->first('title', '<span class="help-block">Ce champ est obligatoire</span>') !!}
        </div>
    </div>

    <div class="field">
        {!! Form::label('slug', 'Slug de l\'article', ['class' => 'label']) !!}
        <div class="control">
            {!! Form::text('slug', null, ['class' => 'input']) !!}
            {!! $errors->first('slug', '<span class="help-block">Ce champ est obligatoire</span>') !!}
        </div>
    </div>

    <div class="field">
        {!! Form::label('hat', 'Chapeau de l\'article', ['class' => 'label']) !!}
        <div class="control">
            {!! Form::textarea('hat', null, ['class' => 'textarea']) !!}
            {!! $errors->first('hat', '<span class="help-block">Ce champ est obligatoire</span>') !!}
        </div>
    </div>

    <div class="field">
        {!! Form::label('body', 'Contenu de l\'article', ['class' => 'label']) !!}
        <div class="control">
            {!! Form::textarea('body', null, ['class' => 'textarea']) !!}
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