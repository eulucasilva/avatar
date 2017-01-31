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

Route::get('/', 'HomeController@index');

Route::auth();

Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index');
    Route::get('/areas/{id}', 'AreaController@getAreas');

    //rotas de users
    Route::group(['prefix' => 'users', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'users.index', 'uses' => 'UserController@index', 'middleware' => ['permission:gestao_usuario-list|gestao_usuario-create|gestao_usuario-edit|gestao_usuario-delete']]);
        Route::get('/create', ['as' => 'users.create', 'uses' => 'UserController@create', 'middleware' => ['permission:gestao_usuario-create']]);
        Route::post('/create', ['as' => 'users.store', 'uses' => 'UserController@store', 'middleware' => ['permission:gestao_usuario-create']]);
        Route::get('/{id}', ['as' => 'users.show', 'uses' => 'UserController@show']);
        Route::get('/{id}/edit', ['as' => 'users.edit', 'uses' => 'UserController@edit', 'middleware' => ['permission:gestao_usuario-edit']]);
        Route::patch('/{id}', ['as' => 'users.update', 'uses' => 'UserController@update', 'middleware' => ['permission:gestao_usuario-edit']]);
        Route::delete('/{id}', ['as' => 'users.destroy', 'uses' => 'UserController@destroy', 'middleware' => ['permission:gestao_usuario-delete']]);
    });

    //rotas de roles
    Route::group(['prefix' => 'roles', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'roles.index', 'uses' => 'RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
        Route::get('/create', ['as' => 'roles.create', 'uses' => 'RoleController@create', 'middleware' => ['permission:role-create']]);
        Route::post('/create', ['as' => 'roles.store', 'uses' => 'RoleController@store', 'middleware' => ['permission:role-create']]);
        Route::get('/{id}', ['as' => 'roles.show', 'uses' => 'RoleController@show']);
        Route::get('/{id}/edit', ['as' => 'roles.edit', 'uses' => 'RoleController@edit', 'middleware' => ['permission:role-edit']]);
        Route::patch('/{id}', ['as' => 'roles.update', 'uses' => 'RoleController@update', 'middleware' => ['permission:role-edit']]);
        Route::delete('/{id}', ['as' => 'roles.destroy', 'uses' => 'RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    });

    //rotas de Item
    Route::group(['prefix' => 'itemCRUD2', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'itemCRUD2.index', 'uses' => 'ItemCRUD2Controller@index', 'middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
        Route::get('/create', ['as' => 'itemCRUD2.create', 'uses' => 'ItemCRUD2Controller@create', 'middleware' => ['permission:item-create']]);
        Route::post('/create', ['as' => 'itemCRUD2.store', 'uses' => 'ItemCRUD2Controller@store', 'middleware' => ['permission:item-create']]);
        Route::get('/{id}', ['as' => 'itemCRUD2.show', 'uses' => 'ItemCRUD2Controller@show']);
        Route::get('/{id}/edit', ['as' => 'itemCRUD2.edit', 'uses' => 'ItemCRUD2Controller@edit', 'middleware' => ['permission:item-edit']]);
        Route::patch('/{id}', ['as' => 'itemCRUD2.update', 'uses' => 'ItemCRUD2Controller@update', 'middleware' => ['permission:item-edit']]);
        Route::delete('/{id}', ['as' => 'itemCRUD2.destroy', 'uses' => 'ItemCRUD2Controller@destroy', 'middleware' => ['permission:item-delete']]);
    });

    //rotas de local
    Route::group(['prefix' => 'local', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'local.index', 'uses' => 'LocalController@index', 'middleware' => ['permission:local-list|local-create|local-edit|local-delete']]);
        Route::get('/create', ['as' => 'local.create', 'uses' => 'LocalController@create', 'middleware' => ['permission:local-create']]);
        Route::post('/create', ['as' => 'local.store', 'uses' => 'LocalController@store', 'middleware' => ['permission:local-create']]);
        Route::get('/{id}', ['as' => 'local.show', 'uses' => 'LocalController@show']);
        Route::get('/{id}/edit', ['as' => 'local.edit', 'uses' => 'LocalController@edit', 'middleware' => ['permission:local-edit']]);
        Route::patch('/{id}', ['as' => 'local.update', 'uses' => 'LocalController@update', 'middleware' => ['permission:local-edit']]);
        Route::delete('/{id}', ['as' => 'local.destroy', 'uses' => 'LocalController@destroy', 'middleware' => ['permission:local-delete']]);
    });

    //rotas de sala
    Route::group(['prefix' => 'sala', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'sala.index', 'uses' => 'SalaController@index', 'middleware' => ['permission:sala-list|sala-create|sala-edit|sala-delete']]);
        Route::get('/create', ['as' => 'sala.create', 'uses' => 'SalaController@create', 'middleware' => ['permission:sala-create']]);
        Route::post('/create', ['as' => 'sala.store', 'uses' => 'SalaController@store', 'middleware' => ['permission:sala-create']]);
        Route::get('/{id}', ['as' => 'sala.show', 'uses' => 'SalaController@show']);
        Route::get('/{id}/edit', ['as' => 'sala .edit', 'uses' => 'SalaController@edit', 'middleware' => ['permission:sala-edit']]);
        Route::patch('/{id}', ['as' => 'sala.update', 'uses' => 'SalaController@update', 'middleware' => ['permission:sala-edit']]);
        Route::delete('/{id}', ['as' => 'sala.destroy', 'uses' => 'SalaController@destroy', 'middleware' => ['permission:sala-delete']]);
    });

    //rotas de reservaSala
    Route::group(['prefix' => 'reservaSala', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'reservasala.index', 'uses' => 'ReservaSalaController@index', 'middleware' => ['permission:reservasala-list|reservasala-create|reservasala-edit|reservasala-delete']]);
        Route::get('/create', ['as' => 'reservasala.create', 'uses' => 'ReservaSalaController@create', 'middleware' => ['permission:reservasala-create']]);
        Route::post('/create', ['as' => 'reservasala.store', 'uses' => 'ReservaSalaController@store', 'middleware' => ['permission:reservasala-create']]);
        Route::get('/{id}', ['as' => 'reservasala.show', 'uses' => 'ReservaSalaController@show']);
        Route::get('/{id}/edit', ['as' => 'reservasala.edit', 'uses' => 'ReservaSalaController@edit', 'middleware' => ['permission:reservasala-edit']]);
        Route::patch('/{id}', ['as' => 'reservasala.update', 'uses' => 'ReservaSalaController@update', 'middleware' => ['permission:reservasala-edit']]);
        Route::delete('/{id}', ['as' => 'reservasala.destroy', 'uses' => 'ReservaSalaController@destroy', 'middleware' => ['permission:reservasala-delete']]);
    });

    //rotas de coordenação
    Route::group(['prefix' => 'coordenacao', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'coordenacao.index', 'uses' => 'CoordenacaoController@index', 'middleware' => ['permission:gestao_coordenacao-list|gestao_coordenacao-create|gestao_coordenacao-edit|gestao_coordenacao-delete']]);
        Route::get('/create', ['as' => 'coordenacao.create', 'uses' => 'CoordenacaoController@create', 'middleware' => ['permission:gestao_coordenacao-create']]);
        Route::post('/create', ['as' => 'coordenacao.store', 'uses' => 'CoordenacaoController@store', 'middleware' => ['permission:gestao_coordenacao-create']]);
        Route::get('/{id}', ['as' => 'coordenacao.show', 'uses' => 'CoordenacaoController@show']);
        Route::get('/{id}/edit', ['as' => 'coordenacao.edit', 'uses' => 'CoordenacaoController@edit', 'middleware' => ['permission:gestao_coordenacao-edit']]);
        Route::patch('/{id}', ['as' => 'coordenacao.update', 'uses' => 'CoordenacaoController@update', 'middleware' => ['permission:gestao_coordenacao-edit']]);
        Route::delete('/{id}', ['as' => 'coordenacao.destroy', 'uses' => 'CoordenacaoController@destroy', 'middleware' => ['permission:gestao_coordenacao-delete']]);
    });

    //rotas de secretario
    Route::group(['prefix' => 'secretario', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'secretario.index', 'uses' => 'SecretarioController@index', 'middleware' => ['permission:gestao_secretario-list|gestao_secretario-create|gestao_secretario-edit|gestao_secretario-delete']]);
        Route::get('/create', ['as' => 'secretario.create', 'uses' => 'SecretarioController@create', 'middleware' => ['permission:gestao_secretario-create']]);
        Route::post('/create', ['as' => 'secretario.store', 'uses' => 'SecretarioController@store', 'middleware' => ['permission:gestao_secretario-create']]);
        Route::get('/{id}', ['as' => 'secretario.show', 'uses' => 'SecretarioController@show']);
        Route::get('/{id}/edit', ['as' => 'secretario.edit', 'uses' => 'SecretarioController@edit', 'middleware' => ['permission:gestao_secretario-edit']]);
        Route::patch('/{id}', ['as' => 'secretario.update', 'uses' => 'SecretarioController@update', 'middleware' => ['permission:gestao_secretario-edit']]);
        Route::delete('/{id}', ['as' => 'secretario.destroy', 'uses' => 'SecretarioController@destroy', 'middleware' => ['permission:gestao_secretario-delete']]);
    });

    //rotas de colegiado
    Route::group(['prefix' => 'colegiado', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'colegiado.index', 'uses' => 'ColegiadoController@index', 'middleware' => ['permission:gestao_colegiado-list|gestao_colegiado-create|gestao_colegiado-edit|gestao_colegiado-delete']]);
        Route::get('/create', ['as' => 'colegiado.create', 'uses' => 'ColegiadoController@create', 'middleware' => ['permission:gestao_colegiado-create']]);
        Route::post('/create', ['as' => 'colegiado.store', 'uses' => 'ColegiadoController@store', 'middleware' => ['permission:gestao_colegiado-create']]);
        Route::get('/{id}', ['as' => 'colegiado.show', 'uses' => 'ColegiadoController@show']);
        Route::get('/{id}/edit', ['as' => 'colegiado.edit', 'uses' => 'ColegiadoController@edit', 'middleware' => ['permission:gestao_colegiado-edit']]);
        Route::patch('/{id}', ['as' => 'colegiado.update', 'uses' => 'ColegiadoController@update', 'middleware' => ['permission:gestao_colegiado-edit']]);
        Route::delete('/{id}', ['as' => 'colegiado.destroy', 'uses' => 'ColegiadoController@destroy', 'middleware' => ['permission:gestao_colegiado-delete']]);
    });

    //rotas de disciplina
    Route::group(['prefix' => 'disciplina', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'disciplina.index', 'uses' => 'DisciplinaController@index', 'middleware' => ['permission:gestao_disciplina-list|gestao_disciplina-create|gestao_disciplina-edit|gestao_disciplina-delete']]);
        Route::get('/create', ['as' => 'disciplina.create', 'uses' => 'DisciplinaController@create', 'middleware' => ['permission:gestao_disciplina-create']]);
        Route::post('/create', ['as' => 'disciplina.store', 'uses' => 'DisciplinaController@store', 'middleware' => ['permission:gestao_disciplina-create']]);
        Route::get('/{id}', ['as' => 'disciplina.show', 'uses' => 'DisciplinaController@show']);
        Route::get('/{id}/edit', ['as' => 'disciplina.edit', 'uses' => 'DisciplinaController@edit', 'middleware' => ['permission:gestao_disciplina-edit']]);
        Route::patch('/{id}', ['as' => 'disciplina.update', 'uses' => 'DisciplinaController@update', 'middleware' => ['permission:gestao_disciplina-edit']]);
        Route::delete('/{id}', ['as' => 'disciplina.destroy', 'uses' => 'DisciplinaController@destroy', 'middleware' => ['permission:gestao_disciplina-delete']]);
    });

    //rotas de departamento
    Route::group(['prefix' => 'departamento', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'departamento.index', 'uses' => 'DepartamentoController@index', 'middleware' => ['permission:gestao_departamento-list|gestao_departamento-create|gestao_departamento-edit|gestao_departamento-delete']]);
        Route::get('/create', ['as' => 'departamento.create', 'uses' => 'DepartamentoController@create', 'middleware' => ['permission:gestao_departamento-create']]);
        Route::post('/create', ['as' => 'departamento.store', 'uses' => 'DepartamentoController@store', 'middleware' => ['permission:gestao_departamento-create']]);
        Route::get('/{id}', ['as' => 'departamento.show', 'uses' => 'DepartamentoController@show']);
        Route::get('/{id}/edit', ['as' => 'departamento.edit', 'uses' => 'DepartamentoController@edit', 'middleware' => ['permission:gestao_departamento-edit']]);
        Route::patch('/{id}', ['as' => 'departamento.update', 'uses' => 'DepartamentoController@update', 'middleware' => ['permission:gestao_departamento-edit']]);
        Route::delete('/{id}', ['as' => 'departamento.destroy', 'uses' => 'DepartamentoController@destroy', 'middleware' => ['permission:gestao_departamento-delete']]);
    });

    //rotas de área
    Route::group(['prefix' => 'area', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'area.index', 'uses' => 'AreaController@index', 'middleware' => ['permission:gestao_areas-list|gestao_areas-create|gestao_areas-edit|gestao_areas-delete']]);
        Route::get('/create', ['as' => 'area.create', 'uses' => 'AreaController@create', 'middleware' => ['permission:gestao_areas-create']]);
        Route::post('/create', ['as' => 'area.store', 'uses' => 'AreaController@store', 'middleware' => ['permission:gestao_areas-create']]);
        Route::get('/{id}', ['as' => 'area.show', 'uses' => 'AreaController@show']);
        Route::get('/{id}/edit', ['as' => 'area.edit', 'uses' => 'AreaController@edit', 'middleware' => ['permission:gestao_areas-edit']]);
        Route::patch('/{id}', ['as' => 'area.update', 'uses' => 'AreaController@update', 'middleware' => ['permission:gestao_areas-edit']]);
        Route::delete('/{id}', ['as' => 'area.destroy', 'uses' => 'AreaController@destroy', 'middleware' => ['permission:gestao_areas-delete']]);
    });


    //rotas de projeto
    Route::group(['prefix' => 'projeto', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'projeto.index', 'uses' => 'ProjetoController@index', 'middleware' => ['permission:gestao_projeto-list|gestao_projeto-create|gestao_projeto-edit|gestao_projeto-delete']]);
        Route::get('/create', ['as' => 'projeto.create', 'uses' => 'ProjetoController@create', 'middleware' => ['permission:gestao_projeto-create']]);
        Route::post('/create', ['as' => 'projeto.store', 'uses' => 'ProjetoController@store', 'middleware' => ['permission:gestao_projeto-create']]);
        Route::get('/{id}', ['as' => 'projeto.show', 'uses' => 'ProjetoController@show']);
        Route::get('/{id}/edit', ['as' => 'projeto.edit', 'uses' => 'ProjetoController@edit', 'middleware' => ['permission:gestao_projeto-edit']]);
        Route::patch('/{id}', ['as' => 'projeto.update', 'uses' => 'ProjetoController@update', 'middleware' => ['permission:gestao_projeto-edit']]);
        Route::delete('/{id}', ['as' => 'projeto.destroy', 'uses' => 'ProjetoController@destroy', 'middleware' => ['permission:gestao_projeto-delete']]);
    });
    


    //rotas de substituicao
    Route::group(['prefix' => 'substituicao', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'substituicao.index', 'uses' => 'SubstituicaoController@index', 'middleware' => ['permission:gestao_substituicao-list|gestao_substituicao-create|gestao_substituicao-edit|gestao_substituicao-delete']]);
        Route::get('/create', ['as' => 'substituicao.create', 'uses' => 'SubstituicaoController@create', 'middleware' => ['permission:gestao_substituicao-create']]);
        Route::post('/create', ['as' => 'substituicao.store', 'uses' => 'SubstituicaoController@store', 'middleware' => ['permission:gestao_substituicao-create']]);
        Route::get('/{id}', ['as' => 'substituicao.show', 'uses' => 'SubstituicaoController@show']);
        Route::get('/{id}/edit', ['as' => 'substituicao.edit', 'uses' => 'SubstituicaoController@edit', 'middleware' => ['permission:gestao_substituicao-edit']]);
        Route::patch('/{id}', ['as' => 'substituicao.update', 'uses' => 'SubstituicaoController@update', 'middleware' => ['permission:gestao_substituicao-edit']]);
        Route::delete('/{id}', ['as' => 'substituicao.destroy', 'uses' => 'SubstituicaoController@destroy', 'middleware' => ['permission:gestao_substituicao-delete']]);
    });

    //rotas de atividade administrativa
    Route::group(['prefix' => 'atividade_administrativa', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'atividadeAdministrativa.index', 'uses' => 'AtividadeAdministrativaController@index', 'middleware' => ['permission:gestao_atividade_administrativa-list|gestao_atividade_administrativa-create|gestao_atividade_administrativa-edit|gestao_atividade_administrativa-delete']]);
        Route::get('/create', ['as' => 'atividadeAdministrativa.create', 'uses' => 'AtividadeAdministrativaController@create', 'middleware' => ['permission:gestao_atividade_administrativa-create']]);
        Route::post('/create', ['as' => 'atividadeAdministrativa.store', 'uses' => 'AtividadeAdministrativaController@store', 'middleware' => ['permission:gestao_atividade_administrativa-create']]);
        Route::get('/{id}', ['as' => 'atividadeAdministrativa.show', 'uses' => 'AtividadeAdministrativaController@show']);
        Route::get('/{id}/edit', ['as' => 'atividadeAdministrativa.edit', 'uses' => 'AtividadeAdministrativaController@edit', 'middleware' => ['permission:gestao_atividade_administrativa-edit']]);
        Route::patch('/{id}', ['as' => 'atividadeAdministrativa.update', 'uses' => 'AtividadeAdministrativaController@update', 'middleware' => ['permission:gestao_atividade_administrativa-edit']]);
        Route::delete('/{id}', ['as' => 'atividadeAdministrativa.destroy', 'uses' => 'AtividadeAdministrativaController@destroy', 'middleware' => ['permission:gestao_atividade_administrativa-delete']]);
    });

   //rotas de aluno
    Route::group(['prefix' => 'aluno', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'aluno.index', 'uses' => 'AlunoController@index', 'middleware' => ['permission:aluno-list|aluno-create|aluno-edit|aluno-delete']]);
        Route::get('/create', ['as' => 'aluno.create', 'uses' => 'AlunoController@create', 'middleware' => ['permission:aluno-create']]);
        Route::post('/create', ['as' => 'aluno.store', 'uses' => 'AlunoController@store', 'middleware' => ['permission:aluno-create']]);
        Route::get('/{id}', ['as' => 'aluno.show', 'uses' => 'AlunoController@show']);
        Route::get('/{id}/edit', ['as' => 'aluno.edit', 'uses' => 'AlunoController@edit', 'middleware' => ['permission:aluno-edit']]);
        Route::patch('/{id}', ['as' => 'aluno.update', 'uses' => 'AlunoController@update', 'middleware' => ['permission:aluno-edit']]);
        Route::delete('/{id}', ['as' => 'aluno.destroy', 'uses' => 'AlunoController@destroy', 'middleware' => ['permission:aluno-delete']]);
    });
     //rotas de professor
    Route::group(['prefix' => 'professor', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'professor.index', 'uses' => 'ProfessorController@index', 'middleware' => ['permission:professor-list|professor-create|professor-edit|professor-delete']]);
        Route::get('/create', ['as' => 'professor.create', 'uses' => 'ProfessorController@create', 'middleware' => ['permission:professor-create']]);
        Route::post('/create', ['as' => 'professor.store', 'uses' => 'ProfessorController@store', 'middleware' => ['permission:professor-create']]);
        Route::get('/{id}', ['as' => 'professor.show', 'uses' => 'ProfessorController@show']);
        Route::get('/{id}/edit', ['as' => 'professor.edit', 'uses' => 'ProfessorController@edit', 'middleware' => ['permission:professor-edit']]);
        Route::patch('/{id}', ['as' => 'professor.update', 'uses' => 'ProfessorController@update', 'middleware' => ['permission:professor-edit']]);
        Route::delete('/{id}', ['as' => 'professor.destroy', 'uses' => 'ProfessorController@destroy', 'middleware' => ['permission:professor-delete']]);
    });
//rotas de projetos
    Route::group(['prefix' => 'projetos', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'projetos.index', 'uses' => 'ProjetoController@index', 'middleware' => ['permission:projeto-list|projeto-create|projeto-edit|projeto-delete']]);
        Route::get('/create', ['as' => 'projetos.create', 'uses' => 'ProjetoController@create', 'middleware' => ['permission:projeto-create']]);
        Route::post('/create', ['as' => 'projetos.store', 'uses' => 'ProjetoController@store', 'middleware' => ['permission:projeto-create']]);
        Route::get('/{id}', ['as' => 'projetos.show', 'uses' => 'ProjetoController@show']);
        Route::get('/{id}/edit', ['as' => 'projetos.edit', 'uses' => 'ProjetoController@edit', 'middleware' => ['permission:projeto-edit']]);
        Route::patch('/{id}', ['as' => 'projetos.update', 'uses' => 'ProjetoController@update', 'middleware' => ['permission:projeto-edit']]);
        Route::delete('/{id}', ['as' => 'projetos.destroy', 'uses' => 'ProjetoController@destroy', 'middleware' => ['permission:projeto-delete']]);
    });
    //rotas de atividade complementar
    Route::group(['prefix' => 'atividade_complementar', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'atividadeComplementar.index', 'uses' => 'AtividadeComplementarController@index', 'middleware' => ['permission:gestao_atividade_complementar-list|gestao_atividade_complementar-create|gestao_atividade_complementar-edit|gestao_atividade_complementar-delete']]);
        Route::get('/create', ['as' => 'atividadeComplementar.create', 'uses' => 'AtividadeComplementarController@create', 'middleware' => ['permission:gestao_atividade_complementar-create']]);
        Route::post('/create', ['as' => 'atividadeComplementar.store', 'uses' => 'AtividadeComplementarController@store', 'middleware' => ['permission:gestao_atividade_complementar-create']]);
        Route::get('/{id}', ['as' => 'atividadeComplementar.show', 'uses' => 'AtividadeComplementarController@show']);
        Route::get('/{id}/edit', ['as' => 'atividadeComplementar.edit', 'uses' => 'AtividadeComplementarController@edit', 'middleware' => ['permission:gestao_atividade_complementar-edit']]);
        Route::patch('/{id}', ['as' => 'atividadeComplementar.update', 'uses' => 'AtividadeComplementarController@update', 'middleware' => ['permission:gestao_atividade_complementar-edit']]);
        Route::delete('/{id}', ['as' => 'atividadeComplementar.destroy', 'uses' => 'AtividadeComplementarController@destroy', 'middleware' => ['permission:gestao_atividade_complementar-delete']]);
    });


    //rotas de atividade administrativa acadêmica
    Route::group(['prefix' => 'atividade_administrativa_acd', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'atividadeAdministrativaAcd.index', 'uses' => 'AtividadeAdministrativaAcdController@index', 'middleware' => ['permission:gestao_atividade_administrativa_acd-list|gestao_atividade_administrativa_acd-create|gestao_atividade_administrativa_acd-edit|gestao_atividade_administrativa_acd-delete']]);
        Route::get('/create', ['as' => 'atividadeAdministrativaAcd.create', 'uses' => 'AtividadeAdministrativaAcdController@create', 'middleware' => ['permission:gestao_atividade_administrativa_acd-create']]);
        Route::post('/create', ['as' => 'atividadeAdministrativaAcd.store', 'uses' => 'AtividadeAdministrativaAcdController@store', 'middleware' => ['permission:gestao_atividade_administrativa_acd-create']]);
        Route::get('/{id}', ['as' => 'atividadeAdministrativaAcd.show', 'uses' => 'AtividadeAdministrativaAcdController@show']);
        Route::get('/{id}/edit', ['as' => 'atividadeAdministrativaAcd.edit', 'uses' => 'AtividadeAdministrativaAcdController@edit', 'middleware' => ['permission:gestao_atividade_administrativa_acd-edit']]);
        Route::patch('/{id}', ['as' => 'atividadeAdministrativaAcd.update', 'uses' => 'AtividadeAdministrativaAcdController@update', 'middleware' => ['permission:gestao_atividade_administrativa-edit']]);
        Route::delete('/{id}', ['as' => 'atividadeAdministrativaAcd.destroy', 'uses' => 'AtividadeAdministrativaAcdController@destroy', 'middleware' => ['permission:gestao_atividade_administrativa_acd-delete']]);
    });


    //rotas de atividade de pesquisa
    Route::group(['prefix' => 'atividade_pesquisa', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'atividadePesquisa.index', 'uses' => 'AtividadePesquisaController@index', 'middleware' => ['permission:gestao_atividade_pesquisa-list|gestao_atividade_pesquisa-create|gestao_atividade_pesquisa-edit|gestao_atividade_pesquisa-delete']]);
        Route::get('/create', ['as' => 'atividadePesquisa.create', 'uses' => 'AtividadePesquisaController@create', 'middleware' => ['permission:gestao_atividade_pesquisa-create']]);
        Route::post('/create', ['as' => 'atividadePesquisa.store', 'uses' => 'AtividadePesquisaController@store', 'middleware' => ['permission:gestao_atividade_pesquisa-create']]);
        Route::get('/{id}', ['as' => 'atividadePesquisa.show', 'uses' => 'AtividadePesquisaController@show']);
        Route::get('/{id}/edit', ['as' => 'atividadePesquisa.edit', 'uses' => 'AtividadePesquisaController@edit', 'middleware' => ['permission:gestao_atividade_pesquisa-edit']]);
        Route::patch('/{id}', ['as' => 'atividadePesquisa.update', 'uses' => 'AtividadePesquisaController@update', 'middleware' => ['permission:gestao_atividade_pesquisa-edit']]);
        Route::delete('/{id}', ['as' => 'atividadePesquisa.destroy', 'uses' => 'AtividadePesquisaController@destroy', 'middleware' => ['permission:gestao_atividade_pesquisa-delete']]);
    });

    //rotas de atividade projeto de extensao
    Route::group(['prefix' => 'atividade_projeto_extensao', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'atividadeProjetoExtensao.index', 'uses' => 'AtividadeProjetoExtensaoController@index', 'middleware' => ['permission:gestao_atividade_projeto_extensao-list|gestao_aatividade_projeto_extensao-create|gestao_atividade_projeto_extensao-edit|gestao_atividade_projeto_extensao-delete']]);
        Route::get('/create', ['as' => 'atividadeProjetoExtensao.create', 'uses' => 'AtividadeProjetoExtensaoController@create', 'middleware' => ['permission:gestao_atividade_projeto_extensao-create']]);
        Route::post('/create', ['as' => 'atividadeProjetoExtensao.store', 'uses' => 'AtividadeProjetoExtensaoController@store', 'middleware' => ['permission:gestao_atividade_projeto_extensao-create']]);
        Route::get('/{id}', ['as' => 'atividadeProjetoExtensao.show', 'uses' => 'AtividadeProjetoExtensaoController@show']);
        Route::get('/{id}/edit', ['as' => 'atividadeProjetoExtensao.edit', 'uses' => 'AtividadeProjetoExtensaoController@edit', 'middleware' => ['permission:gestao_atividade_projeto_extensao-edit']]);
        Route::patch('/{id}', ['as' => 'atividadeProjetoExtensao.update', 'uses' => 'AtividadeProjetoExtensaoController@update', 'middleware' => ['permission:gestao_atividade_projeto_extensao-edit']]);
        Route::delete('/{id}', ['as' => 'atividadeProjetoExtensao.destroy', 'uses' => 'AtividadeProjetoExtensaoController@destroy', 'middleware' => ['permission:gestao_atividade_projeto_extensao-delete']]);
    });

    //rotas de curso
    Route::group(['prefix' => 'curso', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'curso.index', 'uses' => 'CursoController@index', 'middleware' => ['permission:gestao_curso-list|gestao_curso-create|gestao_curso-edit|gestao_curso-delete']]);
        Route::get('/create', ['as' => 'curso.create', 'uses' => 'CursoController@create', 'middleware' => ['permission:gestao_curso-create']]);
        Route::post('/create', ['as' => 'curso.store', 'uses' => 'CursoController@store', 'middleware' => ['permission:gestao_curso-create']]);
        Route::get('/{id}', ['as' => 'curso.show', 'uses' => 'CursoController@show']);
        Route::get('/{id}/edit', ['as' => 'curso.edit', 'uses' => 'CursoController@edit', 'middleware' => ['permission:gestao_curso-edit']]);
        Route::patch('/{id}', ['as' => 'curso.update', 'uses' => 'CursoController@update', 'middleware' => ['permission:gestao_curso-edit']]);
        Route::delete('/{id}', ['as' => 'curso.destroy', 'uses' => 'CursoController@destroy', 'middleware' => ['permission:gestao_curso-delete']]);
    });
    //rotas de orientação
    Route::group(['prefix' => 'orientacao', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'orientacao.index', 'uses' => 'OrientacaoController@index', 'middleware' => ['permission:gestao_orientacao-list|gestao_orientacao-create|gestao_orientacao-edit|gestao_orientacao-delete']]);
        Route::get('/create', ['as' => 'orientacao.create', 'uses' => 'OrientacaoController@create', 'middleware' => ['permission:gestao_orientacao-create']]);
        Route::post('/create', ['as' => 'orientacao.store', 'uses' => 'OrientacaoController@store', 'middleware' => ['permission:gestao_orientacao-create']]);
        Route::get('/{id}', ['as' => 'orientacao.show', 'uses' => 'OrientacaoController@show']);
        Route::get('/{id}/edit', ['as' => 'orientacao.edit', 'uses' => 'OrientacaoController@edit', 'middleware' => ['permission:gestao_orientacao-edit']]);
        Route::patch('/{id}', ['as' => 'orientacao.update', 'uses' => 'OrientacaoController@update', 'middleware' => ['permission:gestao_orientacao-edit']]);
        Route::delete('/{id}', ['as' => 'orientacao.destroy', 'uses' => 'OrientacaoController@destroy', 'middleware' => ['permission:gestao_orientacao-delete']]);
    });
//Rotas de orientação de projeto
    Route::group(['prefix' => 'orientacao_projeto', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'orientacao_projeto.index', 'uses' => 'Orientacao_projetoController@index', 'middleware' => ['permission:gestao_orientacao_projeto-list|gestao_orientacao_projeto-create|gestao_orientacao_projeto-edit|gestao_orientacao_projeto-delete']]);
        Route::get('/create', ['as' => 'orientacao_projeto.create', 'uses' => 'Orientacao_projetoController@create', 'middleware' => ['permission:gestao_orientacao_projeto-create']]);
        Route::post('/create', ['as' => 'orientacao_projeto.store', 'uses' => 'Orientacao_projetoController@store', 'middleware' => ['permission:gestao_orientacao_projeto-create']]);
        Route::get('/{id}', ['as' => 'orientacao_projeto.show', 'uses' => 'Orientacao_projetoController@show']);
        Route::get('/{id}/edit', ['as' => 'orientacao_projeto.edit', 'uses' => 'Orientacao_projetoController@edit', 'middleware' => ['permission:gestao_orientacao_projeto-edit']]);
        Route::patch('/{id}', ['as' => 'orientacao_projeto.update', 'uses' => 'Orientacao_projetoController@update', 'middleware' => ['permission:gestao_orientacao_projeto-edit']]);
        Route::delete('/{id}', ['as' => 'orientacao_projeto.destroy', 'uses' => 'Orientacao_projetoController@destroy', 'middleware' => ['permission:gestao_orientacao_projeto-delete']]);
    });

    //rotas de solicitação
    Route::group(['prefix' => 'solicitacao', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'solicitacao.index', 'uses' => 'SolicitacaoController@index', 'middleware' => ['permission:gestao_solicitacao-list|gestao_solicitacao-create|gestao_solicitacao-edit|gestao_solicitacao-delete']]);
        Route::get('/create', ['as' => 'solicitacao.create', 'uses' => 'SolicitacaoController@create', 'middleware' => ['permission:gestao_solicitacao-create']]);
        Route::post('/create', ['as' => 'solicitacao.store', 'uses' => 'SolicitacaoController@store', 'middleware' => ['permission:gestao_solicitacao-create']]);
        Route::get('/{id}', ['as' => 'solicitacao.show', 'uses' => 'SolicitacaoController@show']);

        Route::get('/{id}/edit', ['as' => 'solicitacao.edit', 'uses' => 'SolicitacaoController@edit', 'middleware' => ['permission:gestao_solicitacao-edit']]);
        Route::get('/{id}/responder', ['as' => 'solicitacao.responder', 'uses' => 'SolicitacaoController@responder', 'middleware' => ['permission:gestao_solicitacao-edit']]);

        Route::patch('/{id}/up', ['as' => 'solicitacao.gravarResposta', 'uses' => 'SolicitacaoController@gravarResposta', 'middleware' => ['permission:gestao_solicitacao-edit']]);

        Route::patch('/{id}/gb', ['as' => 'solicitacao.up', 'uses' => 'SolicitacaoController@update', 'middleware' => ['permission:gestao_solicitacao-edit']]);

        Route::delete('/{id}', ['as' => 'solicitacao.destroy', 'uses' => 'SolicitacaoController@destroy', 'middleware' => ['permission:gestao_solicitacao-delete']]);
    });

    //rotas de turmas
    Route::group(['prefix' => 'turma', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'turma.index', 'uses' => 'TurmaController@index', 'middleware' => ['permission:gestao_turma-list|gestao_turma-create|gestao_turma-edit|gestao_turma-delete']]);
        Route::get('/create', ['as' => 'turma.create', 'uses' => 'TurmaController@create', 'middleware' => ['permission:gestao_turma-create']]);
        Route::post('/create', ['as' => 'turma.store', 'uses' => 'TurmaController@store', 'middleware' => ['permission:gestao_turma-create']]);
        Route::get('/{id}', ['as' => 'turma.show', 'uses' => 'TurmaController@show']);

        Route::get('/{id}/edit', ['as' => 'turma.edit', 'uses' => 'TurmaController@edit', 'middleware' => ['permission:gestao_turma-edit']]);

        Route::patch('/{id}', ['as' => 'turma.update', 'uses' => 'TurmaController@update', 'middleware' => ['permission:gestao_turma-edit']]);
        Route::delete('/{id}', ['as' => 'turma.destroy', 'uses' => 'TurmaController@destroy', 'middleware' => ['permission:gestao_turma-delete']]);
        Route::get('/{id}', ['as' => 'turma.gerar', 'uses' => 'TurmaController@gerar', 'middleware' => ['permission:gestao_turma-create']]);
    });

    //rotas de pit
    Route::group(['prefix' => 'pit', 'where' => ['id' => '[0-9]+']], function() {
        Route::get('', ['as' => 'pit.index', 'uses' => 'PitController@index', 'middleware' => ['permission:gestao_pit-list|gestao_pit-create|gestao_pit-edit|gestao_pit-delete']]);
        Route::get('/create', ['as' => 'pit.create', 'uses' => 'PitController@create', 'middleware' => ['permission:gestao_pit-create']]);
        Route::post('/create', ['as' => 'pit.store', 'uses' => 'PitController@store', 'middleware' => ['permission:gestao_pit-create']]);
        Route::get('/{id}', ['as' => 'pit.show', 'uses' => 'PitController@show']);
        Route::get('/{id}/edit', ['as' => 'pit.edit', 'uses' => 'PitController@edit', 'middleware' => ['permission:gestao_pit-edit']]);
        Route::patch('/{id}', ['as' => 'pit.update', 'uses' => 'PitController@update', 'middleware' => ['permission:gestao_pit-edit']]);
        Route::delete('/{id}', ['as' => 'pit.destroy', 'uses' => 'PitController@destroy', 'middleware' => ['permission:gestao_pit-delete']]);
        Route::get('/{id}', ['as' => 'pit.gerar', 'uses' => 'PitController@gerar', 'middleware' => ['permission:gestao_pit-create']]);
    });

    //rotas para relatório
    Route::get('/relatorioUsuario', ['as' => 'relatorio.usuario', 'uses' => 'RelatorioController@relatorioUsuario', 'middleware' => ['permission:relatorioUsuario']]);
});

