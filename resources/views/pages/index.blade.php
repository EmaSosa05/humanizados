@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="content">
        <h1>Bienvenidos al sitio de Humanizados</h1>
        <p>Entrevistas y diálogos íntimos con los personajes más reconocidos del ambiente.</p>
        <a class="cta-entrevistas" href="#interviews">Entrevistas <i class="fa fa-camera"></i></a>
    </div>
</section>
@endsection

@section('interviews')
<section name="interviews" class="interviews">
    <div class="columns">
        <div class="column">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/v1Q_Cr6M1Ms" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="column">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/XKDGZ-VWLMg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="column">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/QYYWV7wqVps" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
    <div class="columns">
        <div class="column">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/0ld5H-X8XIE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="column">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/dDL0joDF96U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="column">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/ps8D1Fu-K8E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
</section>
@endsection