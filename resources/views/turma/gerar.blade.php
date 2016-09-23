@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Alocação de Turmas</h2>
            </div>
            <div class="pull-right">
                @permission('gestao_projeto-create')
                <a class="btn btn-success" href="{{ route('turma.index') }}"> Solicitações Pendentes</a>
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
                    <th>No</th>
                    <th>Professor</th>
                    <th>Tipo de Turma</th>
                    <th>Carga Horária Semestral</th>
                    <th>Carga Horária Semanal</th>
                    <th>Local</th>
                    <th width="280px">Ação</th>
                </tr>
                @foreach ($turmas as $key => $turma)
                    <tr>
                        <td>{{ $turma-> id }}</td>
                        <td>{{ $turma-> fk_professor }}</td>
                        <td>{{ $turma-> tipo_turma }}</td>
                        <td>{{ $turma-> ch_semestral_turma }}</td>
                        <td>{{ $turma-> ch_semanal_turma }}</td>
                        <td>{{ $turma-> local_turma }}</td>

                        <td>
                            @permission('gestao_turma-create')
                                <a class="btn btn-primary" href="{{ route('turma.edit', $turmas->id) }}">Alocar Turma</a>
                            @endpermission
                        
                            @permission('gestao_turma-delete')
                                {!! Form::open(['method' => 'DELETE','route' => ['turma.destroy', $turma->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            @endpermission
                        </td>
                    </tr>
                @endforeach
            </table>
         
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    				<button type="submit" class="btn btn-primary">Salvar</button>
            </div>
    	</div>
@endsection

