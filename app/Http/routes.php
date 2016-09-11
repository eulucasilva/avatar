<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::group(['middleware' => ['auth']], function() {

	Route::get('/home', 'HomeController@index');

	Route::resource('users','UserController');

	//rotas de roles
	Route::group(['prefix'=>'roles','where'=>['id'=>'[0-9]+']], function(){
	Route::get('',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
	});

	//rotas de Item
	Route::group(['prefix'=>'itemCRUD2','where'=>['id'=>'[0-9]+']], function(){
	Route::get('',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
	Route::get('/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);
	Route::post('/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);
	Route::get('/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);
	Route::get('/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);
	Route::patch('/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);
	Route::delete('/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);
	});

	//rotas de periodo letivo
	Route::group(['prefix'=>'periodoLetivo','where'=>['id'=>'[0-9]+']], function(){
	Route::get('',['as'=>'periodoLetivo.index','uses'=>'PeriodoLetivoController@index','middleware' => ['permission:gestao_periodo_letivo-list|gestao_periodo_letivo-create|gestao_periodo_letivo-edit|gestao_periodo_letivo-delete']]);
	Route::get('/create',['as'=>'periodoLetivo.create','uses'=>'PeriodoLetivoController@create','middleware' => ['permission:gestao_periodo_letivo-create']]);
	Route::post('/create',['as'=>'periodoLetivo.store','uses'=>'PeriodoLetivoController@store','middleware' => ['permission:gestao_periodo_letivo-create']]);
	Route::get('/{id}',['as'=>'periodoLetivo.show','uses'=>'PeriodoLetivoController@show']);
	Route::get('/{id}/edit',['as'=>'periodoLetivo.edit','uses'=>'PeriodoLetivoController@edit','middleware' => ['permission:gestao_periodo_letivo-edit']]);
	Route::patch('/{id}',['as'=>'periodoLetivo.update','uses'=>'PeriodoLetivoController@update','middleware' => ['permission:gestao_periodo_letivo-edit']]);
	Route::delete('/{id}',['as'=>'periodoLetivo.destroy','uses'=>'PeriodoLetivoController@destroy','middleware' => ['permission:gestao_periodo_letivo-delete']]);
	});

	//rotas de professor
	Route::group(['prefix'=>'professor','where'=>['id'=>'[0-9]+']], function(){
	Route::get('',['as'=>'professor.index','uses'=>'ProfessorController@index','middleware' => ['permission:gestao_professor-list|gestao_professor-create|gestao_professor-edit|gestao_professor-delete']]);
	Route::get('/create',['as'=>'professor.create','uses'=>'ProfessorController@create','middleware' => ['permission:gestao_professor-create']]);
	Route::post('/create',['as'=>'professor.store','uses'=>'ProfessorController@store','middleware' => ['permission:gestao_professor-create']]);
	Route::get('/{id}',['as'=>'professor.show','uses'=>'ProfessorController@show']);
	Route::get('/{id}/edit',['as'=>'professor.edit','uses'=>'ProfessorController@edit','middleware' => ['permission:gestao_professor-edit']]);
	Route::patch('/{id}',['as'=>'professor.update','uses'=>'ProfessorController@update','middleware' => ['permission:gestao_professor-edit']]);
	Route::delete('/{id}',['as'=>'professor.destroy','uses'=>'ProfessorController@destroy','middleware' => ['permission:gestao_professor-delete']]);
	});

	//rotas de aluno
	Route::group(['prefix'=>'aluno','where'=>['id'=>'[0-9]+']], function(){
	Route::get('',['as'=>'aluno.index','uses'=>'AlunoController@index','middleware' => ['permission:gestao_aluno-list|gestao_aluno-create|gestao_aluno-edit|gestao_aluno-delete']]);
	Route::get('/create',['as'=>'aluno.create','uses'=>'AlunoController@create','middleware' => ['permission:gestao_aluno-create']]);
	Route::post('/create',['as'=>'aluno.store','uses'=>'AlunoController@store','middleware' => ['permission:gestao_aluno-create']]);
	Route::get('/{id}',['as'=>'aluno.show','uses'=>'AlunoController@show']);
	Route::get('/{id}/edit',['as'=>'aluno.edit','uses'=>'AlunoController@edit','middleware' => ['permission:gestao_aluno-edit']]);
	Route::patch('/{id}',['as'=>'aluno.update','uses'=>'AlunoController@update','middleware' => ['permission:gestao_aluno-edit']]);
	Route::delete('/{id}',['as'=>'aluno.destroy','uses'=>'AlunoController@destroy','middleware' => ['permission:gestao_aluno-delete']]);
	});

	//rotas de coordenação
	Route::group(['prefix'=>'coordenacao','where'=>['id'=>'[0-9]+']], function(){
	Route::get('',['as'=>'coordenacao.index','uses'=>'CoordenacaoController@index','middleware' => ['permission:gestao_coordenacao-list|gestao_coordenacao-create|gestao_coordenacao-edit|gestao_coordenacao-delete']]);
	Route::get('/create',['as'=>'coordenacao.create','uses'=>'CoordenacaoController@create','middleware' => ['permission:gestao_coordenacao-create']]);
	Route::post('/create',['as'=>'coordenacao.store','uses'=>'CoordenacaoController@store','middleware' => ['permission:gestao_coordenacao-create']]);
	Route::get('/{id}',['as'=>'coordenacao.show','uses'=>'CoordenacaoController@show']);
	Route::get('/{id}/edit',['as'=>'coordenacao.edit','uses'=>'CoordenacaoController@edit','middleware' => ['permission:gestao_coordenacao-edit']]);
	Route::patch('/{id}',['as'=>'coordenacao.update','uses'=>'CoordenacaoController@update','middleware' => ['permission:gestao_coordenacao-edit']]);
	Route::delete('/{id}',['as'=>'coordenacao.destroy','uses'=>'CoordenacaoController@destroy','middleware' => ['permission:gestao_coordenacao-delete']]);
	});

	//rotas de secretario
	Route::group(['prefix'=>'secretario','where'=>['id'=>'[0-9]+']], function(){
	Route::get('',['as'=>'secretario.index','uses'=>'SecretarioController@index','middleware' => ['permission:gestao_secretario-list|gestao_secretario-create|gestao_secretario-edit|gestao_secretario-delete']]);
	Route::get('/create',['as'=>'secretario.create','uses'=>'SecretarioController@create','middleware' => ['permission:gestao_secretario-create']]);
	Route::post('/create',['as'=>'secretario.store','uses'=>'SecretarioController@store','middleware' => ['permission:gestao_secretario-create']]);
	Route::get('/{id}',['as'=>'secretario.show','uses'=>'SecretarioController@show']);
	Route::get('/{id}/edit',['as'=>'secretario.edit','uses'=>'SecretarioController@edit','middleware' => ['permission:gestao_secretario-edit']]);
	Route::patch('/{id}',['as'=>'secretario.update','uses'=>'SecretarioController@update','middleware' => ['permission:gestao_secretario-edit']]);
	Route::delete('/{id}',['as'=>'secretario.destroy','uses'=>'SecretarioController@destroy','middleware' => ['permission:gestao_secretario-delete']]);
	});

    //rotas de colegiado
	Route::group(['prefix'=>'colegiado','where'=>['id'=>'[0-9]+']], function(){
	Route::get('',['as'=>'colegiado.index','uses'=>'ColegiadoController@index','middleware' => ['permission:gestao_colegiado-list|gestao_colegiado-create|gestao_colegiado-edit|gestao_colegiado-delete']]);
	Route::get('/create',['as'=>'colegiado.create','uses'=>'ColegiadoController@create','middleware' => ['permission:gestao_colegiado-create']]);
	Route::post('/create',['as'=>'colegiado.store','uses'=>'ColegiadoController@store','middleware' => ['permission:gestao_colegiado-create']]);
	Route::get('/{id}',['as'=>'colegiado.show','uses'=>'ColegiadoController@show']);
	Route::get('/{id}/edit',['as'=>'colegiado.edit','uses'=>'ColegiadoController@edit','middleware' => ['permission:gestao_colegiado-edit']]);
	Route::patch('/{id}',['as'=>'colegiado.update','uses'=>'ColegiadoController@update','middleware' => ['permission:gestao_colegiado-edit']]);
	Route::delete('/{id}',['as'=>'colegiado.destroy','uses'=>'ColegiadoController@destroy','middleware' => ['permission:gestao_colegiado-delete']]);
	});

	//rotas de disciplina
	Route::group(['prefix'=>'disciplina','where'=>['id'=>'[0-9]+']], function(){
	Route::get('',['as'=>'disciplina.index','uses'=>'DisciplinaController@index','middleware' => ['permission:gestao_disciplina-list|gestao_disciplina-create|gestao_disciplina-edit|gestao_disciplina-delete']]);
        Route::get('/create',['as'=>'disciplina.create','uses'=>'DisciplinaController@create','middleware' => ['permission:gestao_disciplina-create']]);
	Route::post('/create',['as'=>'disciplina.store','uses'=>'DisciplinaController@store','middleware' => ['permission:gestao_disciplina-create']]);
        Route::get('/{id}',['as'=>'disciplina.show','uses'=>'DisciplinaController@show']);
	Route::get('/{id}/edit',['as'=>'disciplina.edit','uses'=>'DisciplinaController@edit','middleware' => ['permission:gestao_disciplina-edit']]);
	Route::patch('/{id}',['as'=>'disciplina.update','uses'=>'DisciplinaController@update','middleware' => ['permission:gestao_disciplina-edit']]);
        Route::delete('/{id}',['as'=>'disciplina.destroy','uses'=>'DisciplinaController@destroy','middleware' => ['permission:gestao_disciplina-delete']]);
    });

    //rotas de departamento
        Route::group(['prefix'=>'departamento','where'=>['id'=>'[0-9]+']], function(){
        Route::get('',['as'=>'departamento.index','uses'=>'DepartamentoController@index','middleware' => ['permission:gestao_departamento-list|gestao_departamento-create|gestao_departamento-edit|gestao_departamento-delete']]);
	Route::get('/create',['as'=>'departamento.create','uses'=>'DepartamentoController@create','middleware' => ['permission:gestao_departamento-create']]);
	Route::post('/create',['as'=>'departamento.store','uses'=>'DepartamentoController@store','middleware' => ['permission:gestao_departamento-create']]);
	Route::get('/{id}',['as'=>'departamento.show','uses'=>'DepartamentoController@show']);
	Route::get('/{id}/edit',['as'=>'departamento.edit','uses'=>'DepartamentoController@edit','middleware' => ['permission:gestao_departamento-edit']]);
	Route::patch('/{id}',['as'=>'departamento.update','uses'=>'DepartamentoController@update','middleware' => ['permission:gestao_departamento-edit']]);
        Route::delete('/{id}',['as'=>'departamento.destroy','uses'=>'DepartamentoController@destroy','middleware' => ['permission:gestao_departamento-delete']]);
    });

	//rotas de área
        Route::group(['prefix'=>'area','where'=>['id'=>'[0-9]+']], function(){
        Route::get('',['as'=>'area.index','uses'=>'AreaController@index','middleware' => ['permission:gestao_areas-list|gestao_areas-create|gestao_areas-edit|gestao_areas-delete']]);
	Route::get('/create',['as'=>'area.create','uses'=>'AreaController@create','middleware' => ['permission:gestao_areas-create']]);
	Route::post('/create',['as'=>'area.store','uses'=>'AreaController@store','middleware' => ['permission:gestao_areas-create']]);
	Route::get('/{id}',['as'=>'area.show','uses'=>'AreaController@show']);
	Route::get('/{id}/edit',['as'=>'area.edit','uses'=>'AreaController@edit','middleware' => ['permission:gestao_areas-edit']]);
	Route::patch('/{id}',['as'=>'area.update','uses'=>'AreaController@update','middleware' => ['permission:gestao_areas-edit']]);
        Route::delete('/{id}',['as'=>'area.destroy','uses'=>'AreaController@destroy','middleware' => ['permission:gestao_areas-delete']]);
    });
    
    //rotas de projeto
    Route::group(['prefix'=>'projeto','where'=>['id'=>'[0-9]+']], function(){
    Route::get('',['as'=>'projeto.index','uses'=>'ProjetoController@index','middleware' => ['permission:gestao_projeto-list|gestao_projeto-create|gestao_projeto-edit|gestao_projeto-delete']]);
	Route::get('/create',['as'=>'projeto.create','uses'=>'ProjetoController@create','middleware' => ['permission:gestao_projeto-create']]);
	Route::post('/create',['as'=>'projeto.store','uses'=>'ProjetoController@store','middleware' => ['permission:gestao_projeto-create']]);
	Route::get('/{id}',['as'=>'projeto.show','uses'=>'ProjetoController@show']);
	Route::get('/{id}/edit',['as'=>'projeto.edit','uses'=>'ProjetoController@edit','middleware' => ['permission:gestao_projeto-edit']]);
	Route::patch('/{id}',['as'=>'projeto.update','uses'=>'ProjetoController@update','middleware' => ['permission:gestao_projeto-edit']]);
    Route::delete('/{id}',['as'=>'projeto.destroy','uses'=>'ProjetoController@destroy','middleware' => ['permission:gestao_projeto-delete']]);
    });
    
    
    //rotas de substituicao
    Route::group(['prefix'=>'substituicao','where'=>['id'=>'[0-9]+']], function(){
    Route::get('',['as'=>'substituicao.index','uses'=>'SubstituicaoController@index','middleware' => ['permission:gestao_substituicao-list|gestao_substituicao-create|gestao_substituicao-edit|gestao_substituicao-delete']]);
	Route::get('/create',['as'=>'substituicao.create','uses'=>'SubstituicaoController@create','middleware' => ['permission:gestao_substituicao-create']]);
	Route::post('/create',['as'=>'substituicao.store','uses'=>'SubstituicaoController@store','middleware' => ['permission:gestao_substituicao-create']]);
	Route::get('/{id}',['as'=>'substituicao.show','uses'=>'SubstituicaoController@show']);
	Route::get('/{id}/edit',['as'=>'substituicao.edit','uses'=>'SubstituicaoController@edit','middleware' => ['permission:gestao_substituicao-edit']]);
	Route::patch('/{id}',['as'=>'substituicao.update','uses'=>'SubstituicaoController@update','middleware' => ['permission:gestao_substituicao-edit']]);
    Route::delete('/{id}',['as'=>'substituicao.destroy','uses'=>'SubstituicaoController@destroy','middleware' => ['permission:gestao_substituicao-delete']]);
    });

     //rotas de atividade administrativa
    Route::group(['prefix'=>'atividade_administrativa','where'=>['id'=>'[0-9]+']], function(){
    Route::get('',['as'=>'atividadeAdministrativa.index','uses'=>'AtividadeAdministrativaController@index','middleware' => ['permission:gestao_atividade_administrativa-list|gestao_atividade_administrativa-create|gestao_atividade_administrativa-edit|gestao_atividade_administrativa-delete']]);
	Route::get('/create',['as'=>'atividadeAdministrativa.create','uses'=>'AtividadeAdministrativaController@create','middleware' => ['permission:gestao_atividade_administrativa-create']]);
	Route::post('/create',['as'=>'atividadeAdministrativa.store','uses'=>'AtividadeAdministrativaController@store','middleware' => ['permission:gestao_atividade_administrativa-create']]);
	Route::get('/{id}',['as'=>'atividadeAdministrativa.show','uses'=>'AtividadeAdministrativaController@show']);
	Route::get('/{id}/edit',['as'=>'atividadeAdministrativa.edit','uses'=>'AtividadeAdministrativaController@edit','middleware' => ['permission:gestao_atividade_administrativa-edit']]);
	Route::patch('/{id}',['as'=>'atividadeAdministrativa.update','uses'=>'AtividadeAdministrativaController@update','middleware' => ['permission:gestao_atividade_administrativa-edit']]);
    Route::delete('/{id}',['as'=>'atividadeAdministrativa.destroy','uses'=>'AtividadeAdministrativaController@destroy','middleware' => ['permission:gestao_atividade_administrativa-delete']]);
    });

     //rotas de atividade de ensino
    Route::group(['prefix'=>'atividade_ensino','where'=>['id'=>'[0-9]+']], function(){
    Route::get('',['as'=>'atividadeEnsino.index','uses'=>'AtividadeEnsinoController@index','middleware' => ['permission:gestao_atividade_ensino-list|gestao_atividade_ensino-create|gestao_atividade_ensino-edit|gestao_atividade_ensino-delete']]);
	Route::get('/create',['as'=>'atividadeEnsino.create','uses'=>'AtividadeEnsinoController@create','middleware' => ['permission:gestao_atividade_ensino-create']]);
	Route::post('/create',['as'=>'atividadeEnsino.store','uses'=>'AtividadeEnsinoController@store','middleware' => ['permission:gestao_atividade_ensino-create']]);
	Route::get('/{id}',['as'=>'atividadeEnsino.show','uses'=>'AtividadeEnsinoController@show']);
	Route::get('/{id}/edit',['as'=>'atividadeEnsino.edit','uses'=>'AtividadeEnsinoController@edit','middleware' => ['permission:gestao_atividade_ensino-edit']]);
	Route::patch('/{id}',['as'=>'atividadeEnsino.update','uses'=>'AtividadeEnsinoController@update','middleware' => ['permission:gestao_atividade_ensino-edit']]);
    Route::delete('/{id}',['as'=>'atividadeEnsino.destroy','uses'=>'AtividadeEnsinoController@destroy','middleware' => ['permission:gestao_atividade_ensino-delete']]);
    });

      //rotas de atividade complementar
    Route::group(['prefix'=>'atividade_complementar','where'=>['id'=>'[0-9]+']], function(){
    Route::get('',['as'=>'atividadeComplementar.index','uses'=>'AtividadeComplementarController@index','middleware' => ['permission:gestao_atividade_complementar-list|gestao_atividade_complementar-create|gestao_atividade_complementar-edit|gestao_atividade_complementar-delete']]);
	Route::get('/create',['as'=>'atividadeComplementar.create','uses'=>'AtividadeComplementarController@create','middleware' => ['permission:gestao_atividade_complementar-create']]);
	Route::post('/create',['as'=>'atividadeComplementar.store','uses'=>'AtividadeComplementarController@store','middleware' => ['permission:gestao_atividade_complementar-create']]);
	Route::get('/{id}',['as'=>'atividadeComplementar.show','uses'=>'AtividadeComplementarController@show']);
	Route::get('/{id}/edit',['as'=>'atividadeComplementar.edit','uses'=>'AtividadeComplementarController@edit','middleware' => ['permission:gestao_atividade_complementar-edit']]);
	Route::patch('/{id}',['as'=>'atividadeComplementar.update','uses'=>'AtividadeComplementarController@update','middleware' => ['permission:gestao_atividade_complementar-edit']]);
    Route::delete('/{id}',['as'=>'atividadeComplementar.destroy','uses'=>'AtividadeComplementarController@destroy','middleware' => ['permission:gestao_atividade_complementar-delete']]);
    });


      //rotas de atividade administrativa acadêmica
    Route::group(['prefix'=>'atividade_administrativa_acd','where'=>['id'=>'[0-9]+']], function(){
    Route::get('',['as'=>'atividadeAdministrativaAcd.index','uses'=>'AtividadeAdministrativaAcdController@index','middleware' => ['permission:gestao_atividade_administrativa_acd-list|gestao_atividade_administrativa_acd-create|gestao_atividade_administrativa_acd-edit|gestao_atividade_administrativa_acd-delete']]);
	Route::get('/create',['as'=>'atividadeAdministrativaAcd.create','uses'=>'AtividadeAdministrativaAcdController@create','middleware' => ['permission:gestao_atividade_administrativa_acd-create']]);
	Route::post('/create',['as'=>'atividadeAdministrativaAcd.store','uses'=>'AtividadeAdministrativaAcdController@store','middleware' => ['permission:gestao_atividade_administrativa_acd-create']]);
	Route::get('/{id}',['as'=>'atividadeAdministrativaAcd.show','uses'=>'AtividadeAdministrativaAcdController@show']);
	Route::get('/{id}/edit',['as'=>'atividadeAdministrativaAcd.edit','uses'=>'AtividadeAdministrativaAcdController@edit','middleware' => ['permission:gestao_atividade_administrativa_acd-edit']]);
	Route::patch('/{id}',['as'=>'atividadeAdministrativaAcd.update','uses'=>'AtividadeAdministrativaAcdController@update','middleware' => ['permission:gestao_atividade_administrativa-edit']]);
    Route::delete('/{id}',['as'=>'atividadeAdministrativaAcd.destroy','uses'=>'AtividadeAdministrativaAcdController@destroy','middleware' => ['permission:gestao_atividade_administrativa_acd-delete']]);
    });


      //rotas de atividade de pesquisa
    Route::group(['prefix'=>'atividade_pesquisa','where'=>['id'=>'[0-9]+']], function(){
    Route::get('',['as'=>'atividadePesquisa.index','uses'=>'AtividadePesquisaController@index','middleware' => ['permission:gestao_atividade_pesquisa-list|gestao_atividade_pesquisa-create|gestao_atividade_pesquisa-edit|gestao_atividade_pesquisa-delete']]);
	Route::get('/create',['as'=>'atividadePesquisa.create','uses'=>'AtividadePesquisaController@create','middleware' => ['permission:gestao_atividade_pesquisa-create']]);
	Route::post('/create',['as'=>'atividadePesquisa.store','uses'=>'AtividadePesquisaController@store','middleware' => ['permission:gestao_atividade_pesquisa-create']]);
	Route::get('/{id}',['as'=>'atividadePesquisa.show','uses'=>'AtividadePesquisaController@show']);
	Route::get('/{id}/edit',['as'=>'atividadePesquisa.edit','uses'=>'AtividadePesquisaController@edit','middleware' => ['permission:gestao_atividade_pesquisa-edit']]);
	Route::patch('/{id}',['as'=>'atividadePesquisa.update','uses'=>'AtividadePesquisaController@update','middleware' => ['permission:gestao_atividade_pesquisa-edit']]);
    Route::delete('/{id}',['as'=>'atividadePesquisa.destroy','uses'=>'AtividadePesquisaController@destroy','middleware' => ['permission:gestao_atividade_pesquisa-delete']]);
    });

      //rotas de atividade projeto de extensao
    Route::group(['prefix'=>'atividade_projeto_extensao','where'=>['id'=>'[0-9]+']], function(){
    Route::get('',['as'=>'atividadeProjetoExtensao.index','uses'=>'AtividadeProjetoExtensaoController@index','middleware' => ['permission:gestao_atividade_projeto_extensao-list|gestao_aatividade_projeto_extensao-create|gestao_atividade_projeto_extensao-edit|gestao_atividade_projeto_extensao-delete']]);
	Route::get('/create',['as'=>'atividadeProjetoExtensao.create','uses'=>'AtividadeProjetoExtensaoController@create','middleware' => ['permission:gestao_atividade_projeto_extensao-create']]);
	Route::post('/create',['as'=>'atividadeProjetoExtensao.store','uses'=>'AtividadeProjetoExtensaoController@store','middleware' => ['permission:gestao_atividade_projeto_extensao-create']]);
	Route::get('/{id}',['as'=>'atividadeProjetoExtensao.show','uses'=>'AtividadeProjetoExtensaoController@show']);
	Route::get('/{id}/edit',['as'=>'atividadeProjetoExtensao.edit','uses'=>'AtividadeProjetoExtensaoController@edit','middleware' => ['permission:gestao_atividade_projeto_extensao-edit']]);
	Route::patch('/{id}',['as'=>'atividadeProjetoExtensao.update','uses'=>'AtividadeProjetoExtensaoController@update','middleware' => ['permission:gestao_atividade_projeto_extensao-edit']]);
    Route::delete('/{id}',['as'=>'atividadeProjetoExtensao.destroy','uses'=>'AtividadeProjetoExtensaoController@destroy','middleware' => ['permission:gestao_atividade_projeto_extensao-delete']]);
    });
    
    //rotas de curso
    Route::group(['prefix'=>'curso','where'=>['id'=>'[0-9]+']], function(){
    Route::get('',['as'=>'curso.index','uses'=>'CursoController@index','middleware' => ['permission:gestao_curso-list|gestao_curso-create|gestao_curso-edit|gestao_curso-delete']]);
	Route::get('/create',['as'=>'curso.create','uses'=>'CursoController@create','middleware' => ['permission:gestao_curso-create']]);
	Route::post('/create',['as'=>'curso.store','uses'=>'CursoController@store','middleware' => ['permission:gestao_curso-create']]);
	Route::get('/{id}',['as'=>'curso.show','uses'=>'CursoController@show']);
	Route::get('/{id}/edit',['as'=>'curso.edit','uses'=>'CursoController@edit','middleware' => ['permission:gestao_curso-edit']]);
	Route::patch('/{id}',['as'=>'curso.update','uses'=>'CursoController@update','middleware' => ['permission:gestao_curso-edit']]);
    Route::delete('/{id}',['as'=>'curso.destroy','uses'=>'CursoController@destroy','middleware' => ['permission:gestao_curso-delete']]);
    });
    
});

