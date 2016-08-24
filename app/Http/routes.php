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

	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

	Route::get('itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);
	Route::get('itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);
	Route::post('itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);
	Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);
	Route::get('itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);
	Route::patch('itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);
	Route::delete('itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);

	Route::get('periodoLetivo',['as'=>'periodoLetivo.index','uses'=>'PeriodoLetivoController@index','middleware' => ['permission:gestao_periodo_letivo-list|gestao_periodo_letivo-create|gestao_periodo_letivo-edit|gestao_periodo_letivo-delete']]);
	Route::get('periodoLetivo/create',['as'=>'periodoLetivo.create','uses'=>'PeriodoLetivoController@create','middleware' => ['permission:gestao_periodo_letivo-create']]);
	Route::post('periodoLetivo/create',['as'=>'periodoLetivo.store','uses'=>'PeriodoLetivoController@store','middleware' => ['permission:gestao_periodo_letivo-create']]);
	Route::get('periodoLetivo/{id}',['as'=>'periodoLetivo.show','uses'=>'PeriodoLetivoController@show']);
	Route::get('periodoLetivo/{id}/edit',['as'=>'periodoLetivo.edit','uses'=>'PeriodoLetivoController@edit','middleware' => ['permission:gestao_periodo_letivo-edit']]);
	Route::patch('periodoLetivo/{id}',['as'=>'periodoLetivo.update','uses'=>'PeriodoLetivoController@update','middleware' => ['permission:gestao_periodo_letivo-edit']]);
	Route::delete('periodoLetivo/{id}',['as'=>'periodoLetivo.destroy','uses'=>'PeriodoLetivoController@destroy','middleware' => ['permission:gestao_periodo_letivo-delete']]);

	Route::get('professor',['as'=>'professor.index','uses'=>'ProfessorController@index','middleware' => ['permission:gestao_professor-list|gestao_professor-create|gestao_professor-edit|gestao_professor-delete']]);
	Route::get('professor/create',['as'=>'professor.create','uses'=>'ProfessorController@create','middleware' => ['permission:gestao_professor-create']]);
	Route::post('professor/create',['as'=>'professor.store','uses'=>'ProfessorController@store','middleware' => ['permission:gestao_professor-create']]);
	Route::get('professor/{id}',['as'=>'professor.show','uses'=>'ProfessorController@show']);
	Route::get('professor/{id}/edit',['as'=>'professor.edit','uses'=>'ProfessorController@edit','middleware' => ['permission:gestao_professor-edit']]);
	Route::patch('professor/{id}',['as'=>'professor.update','uses'=>'ProfessorController@update','middleware' => ['permission:gestao_professor-edit']]);
	Route::delete('professor/{id}',['as'=>'professor.destroy','uses'=>'ProfessorController@destroy','middleware' => ['permission:gestao_professor-delete']]);

	Route::get('aluno',['as'=>'aluno.index','uses'=>'AlunoController@index','middleware' => ['permission:gestao_aluno-list|gestao_aluno-create|gestao_aluno-edit|gestao_aluno-delete']]);
	Route::get('aluno/create',['as'=>'aluno.create','uses'=>'AlunoController@create','middleware' => ['permission:gestao_aluno-create']]);
	Route::post('aluno/create',['as'=>'aluno.store','uses'=>'AlunoController@store','middleware' => ['permission:gestao_aluno-create']]);
	Route::get('aluno/{id}',['as'=>'aluno.show','uses'=>'AlunoController@show']);
	Route::get('aluno/{id}/edit',['as'=>'aluno.edit','uses'=>'AlunoController@edit','middleware' => ['permission:gestao_aluno-edit']]);
	Route::patch('aluno/{id}',['as'=>'aluno.update','uses'=>'AlunoController@update','middleware' => ['permission:gestao_aluno-edit']]);
	Route::delete('aluno/{id}',['as'=>'aluno.destroy','uses'=>'AlunoController@destroy','middleware' => ['permission:gestao_aluno-delete']]);


	Route::get('coordenacao',['as'=>'coordenacao.index','uses'=>'CoordenacaoController@index','middleware' => ['permission:gestao_coordenacao-list|gestao_coordenacao-create|gestao_coordenacao-edit|gestao_coordenacao-delete']]);
	Route::get('coordenacao/create',['as'=>'coordenacao.create','uses'=>'CoordenacaoController@create','middleware' => ['permission:gestao_coordenacao-create']]);
	Route::post('coordenacao/create',['as'=>'coordenacao.store','uses'=>'CoordenacaoController@store','middleware' => ['permission:gestao_coordenacao-create']]);
	Route::get('coordenacao/{id}',['as'=>'coordenacao.show','uses'=>'CoordenacaoController@show']);
	Route::get('coordenacao/{id}/edit',['as'=>'coordenacao.edit','uses'=>'CoordenacaoController@edit','middleware' => ['permission:gestao_coordenacao-edit']]);
	Route::patch('coordenacao/{id}',['as'=>'coordenacao.update','uses'=>'CoordenacaoController@update','middleware' => ['permission:gestao_coordenacao-edit']]);
	Route::delete('coordenacao/{id}',['as'=>'coordenacao.destroy','uses'=>'CoordenacaoController@destroy','middleware' => ['permission:gestao_coordenacao-delete']]);


	Route::get('secretario',['as'=>'secretario.index','uses'=>'SecretarioController@index','middleware' => ['permission:gestao_secretario-list|gestao_secretario-create|gestao_secretario-edit|gestao_secretario-delete']]);
	Route::get('secretario/create',['as'=>'secretario.create','uses'=>'SecretarioController@create','middleware' => ['permission:gestao_secretario-create']]);
	Route::post('secretario/create',['as'=>'secretario.store','uses'=>'SecretarioController@store','middleware' => ['permission:gestao_secretario-create']]);
	Route::get('secretario/{id}',['as'=>'secretario.show','uses'=>'SecretarioController@show']);
	Route::get('secretario/{id}/edit',['as'=>'secretario.edit','uses'=>'SecretarioController@edit','middleware' => ['permission:gestao_secretario-edit']]);
	Route::patch('secretario/{id}',['as'=>'secretario.update','uses'=>'SecretarioController@update','middleware' => ['permission:gestao_secretario-edit']]);
	Route::delete('secretario/{id}',['as'=>'secretario.destroy','uses'=>'SecretarioController@destroy','middleware' => ['permission:gestao_secretario-delete']]);


	Route::get('colegiado',['as'=>'colegiado.index','uses'=>'ColegiadoController@index','middleware' => ['permission:gestao_colegiado-list|gestao_colegiado-create|gestao_colegiado-edit|gestao_colegiado-delete']]);
	Route::get('colegiado/create',['as'=>'colegiado.create','uses'=>'ColegiadoController@create','middleware' => ['permission:gestao_colegiado-create']]);
	Route::post('colegiado/create',['as'=>'colegiado.store','uses'=>'ColegiadoController@store','middleware' => ['permission:gestao_colegiado-create']]);
	Route::get('colegiado/{id}',['as'=>'colegiado.show','uses'=>'ColegiadoController@show']);
	Route::get('colegiado/{id}/edit',['as'=>'colegiado.edit','uses'=>'ColegiadoController@edit','middleware' => ['permission:gestao_colegiado-edit']]);
	Route::patch('colegiado/{id}',['as'=>'colegiado.update','uses'=>'ColegiadoController@update','middleware' => ['permission:gestao_colegiado-edit']]);
	Route::delete('colegiado/{id}',['as'=>'colegiado.destroy','uses'=>'ColegiadoController@destroy','middleware' => ['permission:gestao_colegiado-delete']]);

	 //rotas de disciplina
        Route::get('disciplina',['as'=>'disciplina.index','uses'=>'DisciplinaController@index','middleware' => ['permission:gestao_disciplina-list|gestao_disciplina-create|gestao_disciplina-edit|gestao_disciplina-delete']]);
        Route::get('disciplina/create',['as'=>'disciplina.create','uses'=>'DisciplinaController@create','middleware' => ['permission:gestao_disciplina-create']]);
	Route::post('disciplina/create',['as'=>'disciplina.store','uses'=>'DisciplinaController@store','middleware' => ['permission:gestao_disciplina-create']]);
        
        //rotas de departamento
        Route::get('departamento',['as'=>'departamento.index','uses'=>'DepartamentoController@index','middleware' => ['permission:gestao_departamento-list|gestao_departamento-create|gestao_departamento-edit|gestao_departamento-delete']]);
	Route::get('departamento/create',['as'=>'departamento.create','uses'=>'DepartamentoController@create','middleware' => ['permission:gestao_departamento-create']]);
	Route::post('departamento/create',['as'=>'departamento.store','uses'=>'DepartamentoController@store','middleware' => ['permission:gestao_departamento-create']]);
	Route::get('departamento/{id}',['as'=>'departamento.show','uses'=>'DepartamentoController@show']);
	Route::get('departamento/{id}/edit',['as'=>'departamento.edit','uses'=>'DepartamentoController@edit','middleware' => ['permission:gestao_departamento-edit']]);
	Route::patch('departamento/{id}',['as'=>'departamento.update','uses'=>'DepartamentoController@update','middleware' => ['permission:gestao_departamento-edit']]);
        Route::delete('departamento/{id}',['as'=>'departamento.destroy','uses'=>'DepartamentoController@destroy','middleware' => ['permission:gestao_departamento-delete']]);
        
        //rotas de área
        Route::get('area',['as'=>'area.index','uses'=>'AreaController@index','middleware' => ['permission:gestao_areas-list|gestao_areas-create|gestao_areas-edit|gestao_areas-delete']]);
	Route::get('area/create',['as'=>'area.create','uses'=>'AreaController@create','middleware' => ['permission:gestao_areas-create']]);
	Route::post('area/create',['as'=>'area.store','uses'=>'AreaController@store','middleware' => ['permission:gestao_areas-create']]);
	Route::get('area/{id}',['as'=>'area.show','uses'=>'AreaController@show']);
	Route::get('area/{id}/edit',['as'=>'area.edit','uses'=>'AreaController@edit','middleware' => ['permission:gestao_areas-edit']]);
	Route::patch('area/{id}',['as'=>'area.update','uses'=>'AreaController@update','middleware' => ['permission:gestao_areas-edit']]);
        Route::delete('area/{id}',['as'=>'area.destroy','uses'=>'AreaController@destroy','middleware' => ['permission:gestao_areas-delete']]);

});

