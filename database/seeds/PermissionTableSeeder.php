<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $permission = [
            [
                'name' => 'role-list',
                'display_name' => 'Listagem de papeis',
                'description' => 'Listar papeis'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Cadastrar papel',
                'description' => 'Cadastrar novo papel'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Editar papel',
                'description' => 'Editar papel'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Excluir papel',
                'description' => 'Excluir papel'
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
                'display_name' => 'Listagem dos períodos letivos',
                'description' => 'Listar períodos letivos'
            ],
            [
                'name' => 'gestao_periodo_letivo-create',
                'display_name' => 'Cadastrar período letivo',
                'description' => 'Cadastrar novo período letivo'
            ],
            [
                'name' => 'gestao_periodo_letivo-edit',
                'display_name' => 'Editar período letivo',
                'description' => 'Editar período letivo'
            ],
            [
                'name' => 'gestao_periodo_letivo-delete',
                'display_name' => 'Excluir período letivo',
                'description' => 'Excluir período letivo'
            ],
            [
                'name' => 'gestao_areas-list',
                'display_name' => 'Listagem de áreas',
                'description' => 'Listar áreas'
            ],
            [
                'name' => 'gestao_areas-create',
                'display_name' => 'Cadastrar área',
                'description' => 'Cadastrar nova área'
            ],
            [
                'name' => 'gestao_areas-edit',
                'display_name' => 'Editar área',
                'description' => 'Editar área'
            ],
            [
                'name' => 'gestao_areas-delete',
                'display_name' => 'Excluir área',
                'description' => 'Excluir área'
            ],
            [
                'name' => 'gestao_usuario-list',
                'display_name' => 'Listagem de usuários',
                'description' => 'Listar usuários'
            ],
            [
                'name' => 'gestao_usuario-create',
                'display_name' => 'Cadastrar usuário',
                'description' => 'Cradastrar novo usuário'
            ],
            [
                'name' => 'gestao_usuario-edit',
                'display_name' => 'Editar usuário',
                'description' => 'Editar usuário'
            ],
            [
                'name' => 'gestao_usuario-delete',
                'display_name' => 'Excluir usuário',
                'description' => 'Excluir usuário'
            ],
            [
                'name' => 'gestao_disciplina-list',
                'display_name' => 'Listagem de disciplinas',
                'description' => 'Listar disciplinas'
            ],
            [
                'name' => 'gestao_disciplina-create',
                'display_name' => 'Cadastrar disciplina',
                'description' => 'Cadastrar nova disciplina'
            ],
            [
                'name' => 'gestao_disciplina-edit',
                'display_name' => 'Editar disciplina',
                'description' => 'Editar disciplina'
            ],
            [
                'name' => 'gestao_disciplina-delete',
                'display_name' => 'Excluir disciplina',
                'description' => 'Excluir disciplina'
            ],
            [
                'name' => 'gestao_projeto-list',
                'display_name' => 'Listagem de projetos',
                'description' => 'Listar projetos'
            ],
            [
                'name' => 'gestao_projeto-create',
                'display_name' => 'Cadastar projeto',
                'description' => 'Cadastrar novo projeto'
            ],
            [
                'name' => 'gestao_projeto-edit',
                'display_name' => 'Editar projeto',
                'description' => 'Editar projeto'
            ],
            [
                'name' => 'gestao_projeto-delete',
                'display_name' => 'Excluir projeto',
                'description' => 'Excluir projeto'
            ],
            [
                'name' => 'gestao_atividade_administrativa-list',
                'display_name' => 'Listagem de atividades administrativas',
                'description' => 'Listar atividades administrativas'
            ],
            [
                'name' => 'gestao_atividade_administrativa-create',
                'display_name' => 'Cadastrar atividade administrativa',
                'description' => 'Cadastar nova atividade administrativa'
            ],
            [
                'name' => 'gestao_atividade_administrativa-edit',
                'display_name' => 'Editar atividade administrativa',
                'description' => 'Editar atividade administrativa'
            ],
            [
                'name' => 'gestao_atividade_administrativa-delete',
                'display_name' => 'Excluir atividade administrativa',
                'description' => 'Excluir atividade administrativa'
            ],
            [
                'name' => 'gestao_atividade_ensino-list',
                'display_name' => 'Listagem de atividades de ensino',
                'description' => 'Listar atividades de ensino'
            ],
            [
                'name' => 'gestao_atividade_ensino-create',
                'display_name' => 'Cadastrar atividade de ensino',
                'description' => 'Cadastar nova atividade de ensino'
            ],
            [
                'name' => 'gestao_atividade_ensino-edit',
                'display_name' => 'Editar atividade de ensino',
                'description' => 'Editar atividade de ensino'
            ],
            [
                'name' => 'gestao_atividade_ensino-delete',
                'display_name' => 'Excluir atividade de ensino',
                'description' => 'Excluir atividade de ensino'
            ],
            [
                'name' => 'gestao_atividade_pesquisa-list',
                'display_name' => 'Listagem de atividades de pesquisa',
                'description' => 'Listar atividades de pesquisa'
            ],
            [
                'name' => 'gestao_atividade_pesquisa-create',
                'display_name' => 'Cadastrar atividade de pesquisa',
                'description' => 'Cadastrar nova atividade de pesquisa'
            ],
            [
                'name' => 'gestao_atividade_pesquisa-edit',
                'display_name' => 'Editar atividade de pesquisa',
                'description' => 'Editar atividade de pesquisa'
            ],
            [
                'name' => 'gestao_atividade_pesquisa-delete',
                'display_name' => 'Excluir atividade de pesquisa',
                'description' => 'Excluir atividade de pesquisa'
            ],
            [
                'name' => 'gestao_atividade_complementar-list',
                'display_name' => 'Listagem de atividades complementares',
                'description' => 'Listar atividades complementares'
            ],
            [
                'name' => 'gestao_atividade_complementar-create',
                'display_name' => 'Cadastrar atividade complementar',
                'description' => 'Cadastrar nova atividade complementar'
            ],
            [
                'name' => 'gestao_atividade_complementar-edit',
                'display_name' => 'Editar atividade complementar',
                'description' => 'Editar atividade complementar'
            ],
            [
                'name' => 'gestao_atividade_complementar-delete',
                'display_name' => 'Excluir atividade complementar',
                'description' => 'Excluir atividade complementar'
            ],
            [
                'name' => 'gestao_atividade_projeto_extensao-list',
                'display_name' => 'Listagem de atividades de extensão',
                'description' => 'Listar atividades de extensão'
            ],
            [
                'name' => 'gestao_atividade_projeto_extensao-create',
                'display_name' => 'Cadastrar atividade de extensão',
                'description' => 'Cadastrar nova atividade de extensão'
            ],
            [
                'name' => 'gestao_atividade_projeto_extensao-edit',
                'display_name' => 'Editar atividade de extensão',
                'description' => 'Editar atividade de extensão'
            ],
            [
                'name' => 'gestao_atividade_projeto_extensao-delete',
                'display_name' => 'Excluir atividade de extensão',
                'description' => 'Excluir atividade de extensão'
            ],
            [
                'name' => 'gestao_atividade_sindical-list',
                'display_name' => 'Listagem de atividades sindicais',
                'description' => 'Listar atividades sindicais'
            ],
            [
                'name' => 'gestao_atividade_sindical-create',
                'display_name' => 'Cadastar atividade sindical',
                'description' => 'Cadastar nova atividade sindical'
            ],
            [
                'name' => 'gestao_atividade_sindical-edit',
                'display_name' => 'Editar atividade sindical',
                'description' => 'Editar atividade sindical'
            ],
            [
                'name' => 'gestao_atividade_sindical-delete',
                'display_name' => 'Excluir atividade sindical',
                'description' => 'Excluir atividade sindical'
            ],
            [
                'name' => 'gestao_atividade_administrativa_acd-list',
                'display_name' => 'Listagem de atividades acadêmicas',
                'description' => 'Listar atividades acadêmicas'
            ],
            [
                'name' => 'gestao_atividade_administrativa_acd-create',
                'display_name' => 'Cadastar atividade acadêmica',
                'description' => 'Cadastrar nova atividade acadêmica'
            ],
            [
                'name' => 'gestao_atividade_administrativa_acd-edit',
                'display_name' => 'Editar atividade acadêmica',
                'description' => 'Editar atividade acadêmica'
            ],
            [
                'name' => 'gestao_atividade_administrativa_acd-delete',
                'display_name' => 'Excluir atividade acadêmica',
                'description' => 'Excluir atividade acadêmica'
            ],
            [
                'name' => 'gestao_alocacao_professor-list',
                'display_name' => 'Listagem de alocações',
                'description' => 'Listar alocações'
            ],
            [
                'name' => 'gestao_alocacao_professor-create',
                'display_name' => 'Alocar professor',
                'description' => 'Alocar professor'
            ],
            [
                'name' => 'gestao_alocacao_professor-edit',
                'display_name' => 'Editar alocação',
                'description' => 'Editar alocação'
            ],
            [
                'name' => 'gestao_alocacao_professor-delete',
                'display_name' => 'Excluir alocação',
                'description' => 'Excluir alocação'
            ],
            [
                'name' => 'gestao_aluno-list',
                'display_name' => 'Listagem de alunos',
                'description' => 'Listar alunos'
            ],
            [
                'name' => 'gestao_aluno-create',
                'display_name' => 'Cadastrar aluno',
                'description' => 'Cadastrar novo aluno'
            ],
            [
                'name' => 'gestao_aluno-edit',
                'display_name' => 'Editar aluno',
                'description' => 'Editar aluno'
            ],
            [
                'name' => 'gestao_aluno-delete',
                'display_name' => 'Excluir aluno',
                'description' => 'Excluir aluno'
            ],
            [
                'name' => 'gestao_departamento-list',
                'display_name' => 'Listagem de departamentos',
                'description' => 'Listar departamentos'
            ],
            [
                'name' => 'gestao_departamento-create',
                'display_name' => 'Cadastrar departamento',
                'description' => 'Cadastrar novo departamento'
            ],
            [
                'name' => 'gestao_departamento-edit',
                'display_name' => 'Editar departamento',
                'description' => 'Editar departamento'
            ],
            [
                'name' => 'gestao_departamento-delete',
                'display_name' => 'Excluir departamento',
                'description' => 'Excluir departamento'
            ],
            [
                'name' => 'gestao_professor-list',
                'display_name' => 'Listagem de professor',
                'description' => 'Listar professor'
            ],
            [
                'name' => 'gestao_professor-create',
                'display_name' => 'Cadastrar professor',
                'description' => 'Cadastrar novo professor'
            ],
            [
                'name' => 'gestao_professor-edit',
                'display_name' => 'Editar professor',
                'description' => 'Editar professor'
            ],
            [
                'name' => 'gestao_professor-delete',
                'display_name' => 'Excluir professor',
                'description' => 'Excluir professor'
            ],
            [
                'name' => 'gestao_coordenacao-list',
                'display_name' => 'Listagem de coordenadores',
                'description' => 'Listar coordenadores'
            ],
            [
                'name' => 'gestao_coordenacao-create',
                'display_name' => 'Cadastrar coordenador',
                'description' => 'Cadastrar novo coordenador'
            ],
            [
                'name' => 'gestao_coordenacao-edit',
                'display_name' => 'Editar coordenador',
                'description' => 'Editar coordenador'
            ],
            [
                'name' => 'gestao_coordenacao-delete',
                'display_name' => 'Excluir coordenador',
                'description' => 'Excluir coordenador'
            ],
            [
                'name' => 'gestao_colegiado-list',
                'display_name' => 'Listagem de colegiados',
                'description' => 'Listar colegiados'
            ],
            [
                'name' => 'gestao_colegiado-create',
                'display_name' => 'Cadastrar colegiado',
                'description' => 'Cadastrar novo colegiado'
            ],
            [
                'name' => 'gestao_colegiado-edit',
                'display_name' => 'Editar colegiado',
                'description' => 'Editar colegiado'
            ],
            [
                'name' => 'gestao_colegiado-delete',
                'display_name' => 'Excluir colegiado',
                'description' => 'Excluir colegiado'
            ],
            [
                'name' => 'gestao_secretario-list',
                'display_name' => 'Listagem de secretários',
                'description' => 'Listar secretários'
            ],
            [
                'name' => 'gestao_secretario-create',
                'display_name' => 'Cadastrar secretário',
                'description' => 'Cadastrar novo secretário'
            ],
            [
                'name' => 'gestao_secretario-edit',
                'display_name' => 'Editar secretário',
                'description' => 'Editar secretário'
            ],
            [
                'name' => 'gestao_secretario-delete',
                'display_name' => 'Excluir secretário',
                'description' => 'Excluir Secretario'
            ],
            [
                'name' => 'gestao_substituicao-list',
                'display_name' => 'Listagem de substituições',
                'description' => 'Listar substituições'
            ],
            [
                'name' => 'gestao_substituicao-create',
                'display_name' => 'Cadastrar substituição',
                'description' => 'Cadastrar nova substituição'
            ],
            [
                'name' => 'gestao_substituicao-edit',
                'display_name' => 'Editar substituição',
                'description' => 'Editar substituição'
            ],
            [
                'name' => 'gestao_substituicao-delete',
                'display_name' => 'Excluir substituição',
                'description' => 'Excluir substituição'
            ],
            [
                'name' => 'gestao_orientacao-list',
                'display_name' => 'Listagem de orientações',
                'description' => 'Listar orientações'
            ],
            [
                'name' => 'gestao_orientacao-create',
                'display_name' => 'Cadastrar orientação',
                'description' => 'Cadastrar nova orientação'
            ],
            [
                'name' => 'gestao_orientacao-edit',
                'display_name' => 'Editar orientação',
                'description' => 'Editar orientação'
            ],
            [
                'name' => 'gestao_orientacao-delete',
                'display_name' => 'Excluir orientação',
                'description' => 'Excluir orientacao'
            ],
            [
                'name' => 'gestao_orientacao_projeto-list',
                'display_name' => 'Listagem de orientações de projeto',
                'description' => 'Listar orientações de projeto'
            ],
            [
                'name' => 'gestao_orientacao_projeto-create',
                'display_name' => 'Cadastrar orientação de projeto',
                'description' => 'Cadastrar nova orientação de projeto'
            ],
            [
                'name' => 'gestao_orientacao_projeto-edit',
                'display_name' => 'Editar orientação de projeto',
                'description' => 'Editar orientação de projeto'
            ],
            [
                'name' => 'gestao_orientacao_projeto-delete',
                'display_name' => 'Excluir orientação de projeto',
                'description' => 'Excluir orientação de projeto'
            ],
            [   'name' => 'gestao_curso-list',
                'display_name' => 'Listagem de cursos',
                'description' => 'Listar cursos'
            ],
            [
                'name' => 'gestao_curso-create',
                'display_name' => 'Cadastrar curso',
                'description' => 'Cadastrar novo curso'
            ],
            [
                'name' => 'gestao_curso-edit',
                'display_name' => 'Editar curso',
                'description' => 'Editar curso'
            ],
            [
                'name' => 'gestao_curso-delete',
                'display_name' => 'Excluir curso',
                'description' => 'Excluir curso'
            ],
            //turma
            ['name' => 'gestao_turma-list',
                'display_name' => 'Listagem de turmas',
                'description' => 'Listar turmas'
            ],
            [
                'name' => 'gestao_turma-create',
                'display_name' => 'Cadastrar turma',
                'description' => 'Cadastrar nova turma'
            ],
            [
                'name' => 'gestao_turma-edit',
                'display_name' => 'Editar turma',
                'description' => 'Editar nova turma'
            ],
            [
                'name' => 'gestao_turma-delete',
                'display_name' => 'Excluir turma',
                'description' => 'Delete Turma'
            ],
            //solicitação
            ['name' => 'gestao_solicitacao-list',
                'display_name' => 'Listagem de solicitações de disciplinas',
                'description' => 'Listar de solicitações de disciplinas'
            ],
            [
                'name' => 'gestao_solicitacao-create',
                'display_name' => 'Solicitar disciplina',
                'description' => 'Solicitar nova disciplina'
            ],
            [
                'name' => 'gestao_solicitacao-edit',
                'display_name' => 'Editar solicitação',
                'description' => 'Editar solicitação'
            ],
            [
                'name' => 'gestao_solicitacao-delete',
                'display_name' => 'Excluir solicitação',
                'description' => 'Excluir solicitação'
            ],
            // Telas iniciais
            [
                'name' => 'viewTelaDepartamento',
                'display_name' => 'Tela de departamento',
                'description' => 'Tela de departamento'
            ],
            [
                'name' => 'viewTelaColegiado',
                'display_name' => 'Tela de colegiado',
                'description' => 'Tela de colegiado'
            ],
            [
                'name' => 'viewTelaArea',
                'display_name' => 'Tela de área',
                'description' => 'Tela de área'
            ],
            [
                'name' => 'viewTelaProfessor',
                'display_name' => 'Tela de professor',
                'description' => 'Tela de professor'
            ],
            [
                'name' => 'viewTelaAdministradorDoSistema',
                'display_name' => 'Tela de administrador do sistema',
                'description' => 'Tela de administrador do sistema'
            ],
            [
                'name' => 'relatorioUsuario',
                'display_name' => 'Gerar relatório de usuários',
                'description' => 'Gerar relatório de usuários'
            ]
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }

}
