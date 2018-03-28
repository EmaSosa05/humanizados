@extends('layouts.app')

@section('content')
<section class="hero" id="home">
    <div class="content">
        <h1>Bienvenidos al sitio de Humanizados</h1>
        <p>Entrevistas y diálogos íntimos con los personajes más reconocidos del ambiente.</p>
        <a class="cta-entrevistas" href="#entrevistas">Entrevistas <i class="fa fa-camera"></i></a>
    </div>
</section>
@endsection

@section('interviews')
<section id="entrevistas" class="interviews">
    <div class="feature-interview">
        <div class="column">
            <iframe width="900" height="400" src="https://www.youtube.com/embed/WJfhB3Vj_G8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
            <p>BITCONNEEEEECT</p>
            </iframe>
        </div>
    </div>
    <div class="interview-list">
        <div class="columns">
            <div class="column">
                <iframe width="350" height="200" src="https://www.youtube.com/embed/v1Q_Cr6M1Ms" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="column">
                <iframe width="350" height="200" src="https://www.youtube.com/embed/XKDGZ-VWLMg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="column">
                <iframe width="350" height="200" src="https://www.youtube.com/embed/QYYWV7wqVps" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <iframe width="350" height="200" src="https://www.youtube.com/embed/0ld5H-X8XIE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="column">
                <iframe width="350" height="200" src="https://www.youtube.com/embed/dDL0joDF96U" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="column">
                <iframe width="350" height="200" src="https://www.youtube.com/embed/ps8D1Fu-K8E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
        <div class="search-interviews">
            <button name="search" type="submit" id="searchInterviews" data-submit="Buscando...">Buscar más</button>
        </div>
    </div>
</section>
@endsection

@section('contact')
<section id="contacto">
    <div class="contact-form">  
        <form id="contact" action="" method="post">
            <h3>Dejanos un mensaje!</h3>
            <br>
            <fieldset>
                <input placeholder="Nombre" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Email" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Escribinos tu mensaje...." tabindex="3" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
</section>
@endsection