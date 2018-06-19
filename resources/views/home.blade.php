@extends('adminlte::page')

@section('title', 'Galeria de Arte')

@section('content_header')
    <section class="content-header">
        <h1>
            Inicio
        </h1>
    </section>
@stop

@section('content')
<div class="box-body">
    <div class="box box-primary box-solid">
        <div class="box-footer">
            <span class=" profile-username text-capitalize" style="line-height: 30px; max-height: 30px; overflow:hidden; display:block">
                <a href="#" class="text-blue">Obras Mais Recentes</a>
            </span>
        </div>
        <div class="box-body">
            @foreach($pecasByDate as $peca)
                <div style="display: inline-block; text-align: center">
                    <a href = "{{url('/peca')}}/{{$peca->id}}">
                        <img src="{{url('storage/pecas_images')}}/{{$peca->imagem}}" style="display:inline-block; width:100px; height:100px;">
                    </a>
                    <br>
                    <span class="box-title"><b>{{$peca->nome}}</b></span>
                    <br>
                    <div style="display:inline-block; height: 10px"></div>
                </div>
            @endforeach
        </div>
        <div class="box-footer">
            <a href="{{url('/peca')}}/byDate/0/30"><button type="button" class="btn pull-right btn-primary">Ver Mais</button></a>
        </div>
    </div>
</div>

<div class="box-body">
    <div class="box box-primary box-solid">
        <div class="box-footer">
            <span class=" profile-username text-capitalize" style="line-height: 30px; max-height: 30px; overflow:hidden; display:block">
                <a href="#" class="text-blue">Peças Mais Votadas</a>
            </span>
        </div>
        <div class="box-body">
            @foreach($pecasByEvaluation as $peca)
                <div style="display: inline-block; text-align: center">
                    <a href = "{{url('/peca')}}/{{$peca->id}}">
                        <img src="{{url('storage/pecas_images')}}/{{$peca->imagem}}" style="display:inline-block; width:100px; height:100px;">
                    </a>
                    <br>
                    <span class="box-title"><b>{{$peca->nome}}</b></span>
                    <br>
                    <div style="display:inline-block; height: 10px"></div>
                </div>
            @endforeach
        </div>
        <div class="box-footer">
            <a href="{{url('/peca')}}/byEvaluation/0/10"><button type="button" class="btn pull-right btn-primary">Ver Mais</button></a>
        </div>
    </div>
</div>

<div class="box-body">
    <div class="box box-primary box-solid">
        <div class="box-footer">
            <span class=" profile-username text-capitalize" style="line-height: 30px; max-height: 30px; overflow:hidden; display:block">
                <a href="#" class="text-blue">Peças De Quem Eu Sigo</a>
            </span>
        </div>
        <div class="box-body">

        </div>
        <div class="box-footer">
            <button type="button" class="btn pull-right btn-primary">Ver Mais</button>
        </div>
    </div>
</div>

@stop
