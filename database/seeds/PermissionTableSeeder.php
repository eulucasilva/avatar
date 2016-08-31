<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permission = [
        	[
        		'name' => 'role-list',
        		'display_name' => 'Display Role Listing',
        		'description' => 'See only Listing Of Role'
        	],
        	[
        		'name' => 'role-create',
        		'display_name' => 'Create Role',
        		'description' => 'Create New Role'
        	],
        	[
        		'name' => 'role-edit',
        		'display_name' => 'Edit Role',
        		'description' => 'Edit Role'
        	],
        	[
        		'name' => 'role-delete',
        		'display_name' => 'Delete Role',
        		'description' => 'Delete Role'
        	],
        	[
        		'name' => 'item-list',
        		'display_name' => 'Display Item Listing',
        		'description' => 'See only Listing Of Item'
        	],
        	[
        		'name' => 'item-create',
        		'display_name' => 'Create Item',
        		'description' => 'Create New Item'
        	],
        	[
        		'name' => 'item-edit',
        		'display_name' => 'Edit Item',
        		'description' => 'Edit Item'
        	],
        	[
        		'name' => 'item-delete',
        		'display_name' => 'Delete Item',
        		'description' => 'Delete Item'
        	],
            [
                'name' => 'gestao_periodo_letivo-list',
                'display_name' => 'Display Periodo Letivo Listing',
                'description' => 'See only Listing Periodo Letivo'
            ],
            [
                'name' => 'gestao_periodo_letivo-create',
                'display_name' => 'Create Periodo Letivo',
                'description' => 'Create New Periodo Letivo'
            ],
            [
                'name' => 'gestao_periodo_letivo-edit',
                'display_name' => 'Edit Periodo Letivo',
                'description' => 'Edit Periodo Letivo'
            ],
            [
                'name' => 'gestao_periodo_letivo-delete',
                'display_name' => 'Delete Periodo Letivo',
                'description' => 'Delete Periodo Letivo'
            ],
            [
                'name' => 'gestao_areas-list',
                'display_name' => 'Display Area Listing',
                'description' => 'See only Listing Area'
            ],
            [
                'name' => 'gestao_areas-create',
                'display_name' => 'Create Area',
                'description' => 'Create New Area'
            ],
            [
                'name' => 'gestao_areas-edit',
                'display_name' => 'Edit Area',
                'description' => 'Edit Area'
            ],
            [
                'name' => 'gestao_areas-delete',
                'display_name' => 'Delete Area',
                'description' => 'Delete Area'
            ],
            [
                'name' => 'gestao_usuario-list',
                'display_name' => 'Display Usuario Listing',
                'description' => 'See only Listing Usuario'
            ],
            [
                'name' => 'gestao_usuario-create',
                'display_name' => 'Create Usuario',
                'description' => 'Create New Usuario'
            ],
            [
                'name' => 'gestao_usuario-edit',
                'display_name' => 'Edit Usuario',
                'description' => 'Edit Usuario'
            ],
            [
                'name' => 'gestao_usuario-delete',
                'display_name' => 'Delete Usuario',
                'description' => 'Delete Usuario'
            ],
            [
                'name' => 'gestao_disciplina-list',
                'display_name' => 'Display Disciplina Listing',
                'description' => 'Create New Disciplina'
            ],
            [
                'name' => 'gestao_disciplina-create',
                'display_name' => 'Create Disciplina',
                'description' => 'See only Listing Disciplina'
            ],
            [
                'name' => 'gestao_disciplina-edit',
                'display_name' => 'Edit Disciplina',
                'description' => 'Edit Disciplina'
            ],
            [
                'name' => 'gestao_disciplina-delete',
                'display_name' => 'Delete Disciplina',
                'description' => 'Delete Disciplina'
            ],
            [
                'name' => 'gestao_projeto-list',
                'display_name' => 'Display Projeto Listing',
                'description' => 'See only Listing Projeto'
            ],
            [
                'name' => 'gestao_projeto-create',
                'display_name' => 'Create Projeto',
                'description' => 'Create New Projeto'
            ],
            [
                'name' => 'gestao_projeto-edit',
                'display_name' => 'Edit Projeto',
                'description' => 'Edit Projeto'
            ],
            [
                'name' => 'gestao_projeto-delete',
                'display_name' => 'Delete Projeto',
                'description' => 'Delete Projeto'
            ],
            [
                'name' => 'gestao_atividade_administrativa-list',
                'display_name' => 'Display Atividade Administrativa Listing',
                'description' => 'See only Listing Atividade Administrativa'
            ],
            [
                'name' => 'gestao_atividade_administrativa-create',
                'display_name' => 'Create Atividade Administrativa',
                'description' => 'Create New Atividade Administrativa'
            ],
            [
                'name' => 'gestao_atividade_administrativa-edit',
                'display_name' => 'Edit Atividade Administrativa',
                'description' => 'Edit Atividade Administrativa'
            ],
            [
                'name' => 'gestao_atividade_administrativa-delete',
                'display_name' => 'Delete Atividade Administrativa',
                'description' => 'Delete Atividade Administrativa'
            ],
            [
                'name' => 'gestao_atividade_sindical-list',
                'display_name' => 'Display Atividade Sindical Listing',
                'description' => 'See only Listing Atividade Sindical'
            ],
            [
                'name' => 'gestao_atividade_sindical-create',
                'display_name' => 'Create Atividade Sindical',
                'description' => 'Create New Atividade Sindical'
            ],
            [
                'name' => 'gestao_atividade_sindical-edit',
                'display_name' => 'Edit Atividade Sindical',
                'description' => 'Edit Atividade Sindical'
            ],
             [
                'name' => 'gestao_atividade_sindical-delete',
                'display_name' => 'Delete Atividade Sindical',
                'description' => 'Delete Atividade Sindical'
            ],
            [
                'name' => 'gestao_atividade_academica-list',
                'display_name' => 'Display Atividade Academica Listing',
                'description' => 'See only Listing Atividade Academica'
            ],
            [
                'name' => 'gestao_atividade_academica-create',
                'display_name' => 'Create Atividade Academica',
                'description' => 'Create New Atividade Academica'
            ],
            [
                'name' => 'gestao_atividade_academica-edit',
                'display_name' => 'Edit Atividade Academica',
                'description' => 'Edit Atividade Academica'
            ],
            [
                'name' => 'gestao_atividade_academica-delete',
                'display_name' => 'Delete Atividade Academica',
                'description' => 'Delete Atividade Academica'
            ],
            [
                'name' => 'gestao_cursos-list',
                'display_name' => 'Display Cursos Listing',
                'description' => 'See only Listing Cursos'
            ],
            [
                'name' => 'gestao_cursos-create',
                'display_name' => 'Create Cursos',
                'description' => 'Create New Cursos'
            ],
            [
                'name' => 'gestao_cursos-edit',
                'display_name' => 'Edit Cursos',
                'description' => 'Edit Cursos'
            ],
            [
                'name' => 'gestao_cursos-delete',
                'display_name' => 'Delete Cursos',
                'description' => 'Delete Cursos'
            ],
            [
                'name' => 'gestao_alocacao_professor-list',
                'display_name' => 'Display Alocacao Professor Listing',
                'description' => 'See only Listing Alocacao Professor'
            ],
            [
                'name' => 'gestao_alocacao_professor-create',
                'display_name' => 'Create Alocacao Professor',
                'description' => 'Create New Alocacao Professor'
            ],
            [
                'name' => 'gestao_alocacao_professor-edit',
                'display_name' => 'Edit Alocacao Professor',
                'description' => 'Edit Alocacao Professor'
            ],
            [
                'name' => 'gestao_alocacao_professor-delete',
                'display_name' => 'Delete Alocacao Professor',
                'description' => 'Delete Alocacao Professor'
            ],
            [
                'name' => 'gestao_aluno-list',
                'display_name' => 'Display Aluno Listing',
                'description' => 'See only Listing Aluno'
            ],
            [
                'name' => 'gestao_aluno-create',
                'display_name' => 'Create Aluno',
                'description' => 'Create New Aluno'
            ],
            [
                'name' => 'gestao_aluno-edit',
                'display_name' => 'Edit Aluno',
                'description' => 'Edit Aluno'
            ],
            [
                'name' => 'gestao_aluno-delete',
                'display_name' => 'Delete Aluno',
                'description' => 'Delete Aluno'
            ],
            [
                'name' => 'gestao_pit-list',
                'display_name' => 'Display PIT Listing',
                'description' => 'See only Listing PIT'
            ],
            [
                'name' => 'gestao_pit-create',
                'display_name' => 'Create PIT',
                'description' => 'Create New PIT'
            ],
            [
                'name' => 'gestao_pit-edit',
                'display_name' => 'Edit PIT',
                'description' => 'Edit PIT'
            ],
            [
                'name' => 'gestao_pit-delete',
                'display_name' => 'Delete PIT',
                'description' => 'Delete PIT'
            ],
            [
                'name' => 'gestao_rit-list',
                'display_name' => 'Display RIT Listing',
                'description' => 'See only Listing RIT'
            ],
            [
                'name' => 'gestao_rit-create',
                'display_name' => 'Create RIT',
                'description' => 'Create New RIT'
            ],
            [
                'name' => 'gestao_rit-edit',
                'display_name' => 'Edit RIT',
                'description' => 'Edit RIT'
            ],
            [
                'name' => 'gestao_rit-delete',
                'display_name' => 'Delete RIT',
                'description' => 'Delete RIT'
            ],
            [
                'name' => 'gestao_departamento-list',
                'display_name' => 'Display Departamento Listing',
                'description' => 'See only Listing Departamento'
            ],
            [
                'name' => 'gestao_departamento-create',
                'display_name' => 'Create Departamento',
                'description' => 'Create New Departamento'
            ],
            [
                'name' => 'gestao_departamento-edit',
                'display_name' => 'Edit Departamento',
                'description' => 'Edit Departamento'
            ],
            [
                'name' => 'gestao_departamento-delete',
                'display_name' => 'Delete Departamento',
                'description' => 'Delete Departamento'
            ],
             [
                'name' => 'gestao_professor-list',
                'display_name' => 'Display Professor Listing',
                'description' => 'See only Listing Departamento'
            ],
            [
                'name' => 'gestao_professor-create',
                'display_name' => 'Create Professor',
                'description' => 'Create New Professor'
            ],
            [
                'name' => 'gestao_professor-edit',
                'display_name' => 'Edit Professor',
                'description' => 'Edit Professor'
            ],
            [
                'name' => 'gestao_professor-delete',
                'display_name' => 'Delete Professor',
                'description' => 'Delete Professor'
            ],
            [
                'name' => 'gestao_coordenacao-list',
                'display_name' => 'Display Coordenador Listing',
                'description' => 'See only Listing Coordenador'
            ],
            [
                'name' => 'gestao_coordenacao-create',
                'display_name' => 'Create Coordenador',
                'description' => 'Create New Coordenador'
            ],
            [
                'name' => 'gestao_coordenacao-edit',
                'display_name' => 'Edit Coordenador',
                'description' => 'Edit Coordenador'
            ],
            [
                'name' => 'gestao_coordenacao-delete',
                'display_name' => 'Delete Coordenador',
                'description' => 'Delete Coordenador'
            ],
            [
                'name' => 'gestao_colegiado-list',
                'display_name' => 'Display Colegiado Listing',
                'description' => 'See only Listing Colegiado'
            ],
            [
                'name' => 'gestao_colegiado-create',
                'display_name' => 'Create Colegiado',
                'description' => 'Create New Colegiado'
            ],
            [
                'name' => 'gestao_colegiado-edit',
                'display_name' => 'Edit Colegiado',
                'description' => 'Edit Colegiado'
            ],
            [
                'name' => 'gestao_colegiado-delete',
                'display_name' => 'Delete Colegiado',
                'description' => 'Delete Colegiado'
            ],
            [
                'name' => 'gestao_secretario-list',
                'display_name' => 'Display Secretario Listing',
                'description' => 'See only Listing Secretario'
            ],
            [
                'name' => 'gestao_secretario-create',
                'display_name' => 'Create Secretario',
                'description' => 'Create New Secretario'
            ],
            [
                'name' => 'gestao_secretario-edit',
                'display_name' => 'Edit Secretario',
                'description' => 'Edit Secretario'
            ],
            [
                'name' => 'gestao_secretario-delete',
                'display_name' => 'Delete Secretario',
                'description' => 'Delete Secretario'
            ],
            [
                'name' => 'gestao_substituicao-list',
                'display_name' => 'Display substituicao Listing',
                'description' => 'See only Listing substituicao'
            ],
            [
                'name' => 'gestao_substituicao-create',
                'display_name' => 'Create substituicao',
                'description' => 'Create New substituicao'
            ],
            [
                'name' => 'gestao_substituicao-edit',
                'display_name' => 'Edit substituicao',
                'description' => 'Edit substituicao'
            ],
            [
                'name' => 'gestao_substituicao-delete',
                'display_name' => 'Delete substituicao',
                'description' => 'Delete substituicao'
            ],

        ];

        foreach ($permission as $key => $value) {
        	Permission::create($value);
        }
    }
}
