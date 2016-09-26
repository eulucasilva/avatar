@extends('layouts.app')

@section('main-content')
<div class="row">
    <div class="col-lg-12 margin-tb">
         @section('contentheader_title')
        <div class="pull-left">
            <h2>Administração de Pit</h2>
        </div>
         @endsection 
        <div class="pull-right">
            @permission('gestao_pit-create')
            <a class="btn btn-success" href="{{ route('pit.create') }}"> Criar Novo Projeto</a>
            @endpermission
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
       
        <th>Período Letivo</th>
        <th>Professor</th>
        <th>AEn</th>
        <th>ASin</th>
        <th>AAd</th>
        <th>AAAc</th>
        <th>APe</th>
        <th>AEs</th>
        <th>ECo</th>
        <th>LSS</th>
        <th>OA</th>
     
        <th width="280px">Ação</th>
    </tr>
    @foreach ($pits as $key => $pit)
    <tr>
        
        <td>{{ $pit->fk_periodo_letivo}}</td>
        <td>{{ $pit->fk_professor}}</td> 
        <td>{{ $pit->campo4}} </td>
        <td>{{ $pit->campo8}} </td>
        <td>{{ $pit->campo12}} </td>
        <td>{{ $pit->campo25}} </td>
        <td>{{ $pit->campo29}} </td>
        <td>{{ $pit->campo32}} </td>
        <td>{{ $pit->campo35}} </td>
        <td>{{ $pit->campo39}} </td>
        <td>{{ $pit->campo45}} </td>

       <td>
            @permission('gestao_pit-create')
            <a class="btn btn-info" href="{{ route('pit.show',$pit->id) }}">Visualizar</a>
            @endpermission
            @permission('gestao_pit-edit')
            <a class="btn btn-primary" href="{{ route('pit.edit',$pit->id) }}">Editar</a>
            @endpermission
            @permission('gestao_pit-delete')
            {!! Form::open(['method' => 'DELETE','route' => ['pit.destroy', $pit->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endpermission
        </td>
    </tr>
    @endforeach
</table>
{!! $pits->render() !!}
@endsection	