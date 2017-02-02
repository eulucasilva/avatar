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
                'name' => 'gestao_usuario-list',
                'display_name' => 'Listagem de usuários',
                'description' => 'Listar usuários'
            ],
            [
                'name' => 'gestao_usuario-create',
                'display_name' => 'Cadastrar usuário',
                'description' => 'Cadastrar novo usuário'
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
                'name' => 'local-list',
                'display_name' => 'Listagem dos locais',
                'description' => 'Listar locais'
            ],
            [
                'name' => 'local-create',
                'display_name' => 'Cadastrar local',
                'description' => 'Cadastrar local'
            ],
            [
                'name' => 'local-edit',
                'display_name' => 'Editar local',
                'description' => 'Editar local'
            ],
            [
                'name' => 'local-delete',
                'display_name' => 'Excluir local',
                'description' => 'Excluir local'
            ],
            [
                'name' => 'sala-list',
                'display_name' => 'Listagem das salas',
                'description' => 'Listar salas'
            ],
            [
                'name' => 'sala-create',
                'display_name' => 'Cadastrar sala',
                'description' => 'Cadastrar sala'
            ],
            [
                'name' => 'sala-edit',
                'display_name' => 'Editar sala',
                'description' => 'Editar sala'
            ],
            [
                'name' => 'sala-delete',
                'display_name' => 'Excluir sala',
                'description' => 'Excluir sala'
            ],

            //funcionario
             [
                'name' => 'funcionario-list',
                'display_name' => 'Listagem dos Funcionarios',
                'description' => 'Listar Funcionarios'
            ],
            [
                'name' => 'funcionario-create',
                'display_name' => 'Cadastrar funcionario',
                'description' => 'Cadastrar funcionario'
            ],
            [
                'name' => 'funcionario-edit',
                'display_name' => 'Editar funcionario',
                'description' => 'Editar funcionario'
            ],
            [
                'name' => 'funcionario-delete',
                'display_name' => 'Excluir funcionario',
                'description' => 'Excluir funcionario'
            ],//fim funcionario
            
            
             //frequencia
             [
                'name' => 'frequencia-list',
                'display_name' => 'Listagem dos Frequencia',
                'description' => 'Listar Frequencia'
            ],
            [
                'name' => 'frequencia-create',
                'display_name' => 'Cadastrar Frequencia',
                'description' => 'Cadastrar Frequencia'
            ],
            [
                'name' => 'frequencia-edit',
                'display_name' => 'Editar Frequencia',
                'description' => 'Editar Frequencia'
            ],
            [
                'name' => 'frequencia-delete',
                'display_name' => 'Excluir Frequencia',
                'description' => 'Excluir Frequencia'
            ],//fim frequencia
            
             //colaborador
             [
                'name' => 'colaborador-list',
                'display_name' => 'Listagem dos colaborador',
                'description' => 'Listar colaborador'
            ],
            [
                'name' => 'colaborador-create',
                'display_name' => 'Cadastrar colaborador',
                'description' => 'Cadastrar colaborador'
            ],
            [
                'name' => 'colaborador-edit',
                'display_name' => 'Editar Colaborador',
                'description' => 'Editar Colaborador'
            ],
            [
                'name' => 'colaborador-delete',
                'display_name' => 'Excluir Colaborador',
                'description' => 'Excluir Colaborador'
            ],//fim colaborador
            
            
              //departamento
             [
                'name' => 'departamento-list',
                'display_name' => 'Listagem dos departamento',
                'description' => 'Listar departamento'
            ],
            [
                'name' => 'departamento-create',
                'display_name' => 'Cadastrar departamento',
                'description' => 'Cadastrar departamento'
            ],
            [
                'name' => 'departamento-edit',
                'display_name' => 'Editar departamento',
                'description' => 'Editar departamento'
            ],
            [
                'name' => 'departamento-delete',
                'display_name' => 'Excluir departamento',
                'description' => 'Excluir departamento'
            ],//fim departamento
            
            // Telas iniciais

            //reserva Sala
            [
                'name' => 'reservasala-list',
                'display_name' => 'Listagem das reservas de salas',
                'description' => 'Listar reservas de salas'
            ],
            [
                'name' => 'reservasala-create',
                'display_name' => 'Cadastrar reserva',
                'description' => 'Cadastrar reserva'
            ],
            [
                'name' => 'reservasala-edit',
                'display_name' => 'Editar reserva',
                'description' => 'Editar reserva'
            ],
            [
                'name' => 'reservasala-delete',
                'display_name' => 'Excluir reserva',
                'description' => 'Excluir reserva'
            ],
            [
                'name' => 'area-list',
                'display_name' => 'Listagem das áreas de atuação',
                'description' => 'Listar áreas de atuação'
            ],
            [
                'name' => 'area-create',
                'display_name' => 'Cadastrar área de atuação',
                'description' => 'Cadastrar área de atuação'
            ],
            [
                'name' => 'area-edit',
                'display_name' => 'Editar área de atuação',
                'description' => 'Editar área de atuação'
            ],
            [
                'name' => 'area-delete',
                'display_name' => 'Excluir área de atuação',
                'description' => 'Excluir área de atuação'
            ],
            [
                'name' => 'grupo-list',
                'display_name' => 'Listagem dos grupos de pesquisa',
                'description' => 'Listar grupos de pesquisa'
            ],
            [
                'name' => 'grupo-create',
                'display_name' => 'Cadastrar grupo de pesquisa',
                'description' => 'Cadastrar grupo de pesquisa'
            ],
            [
                'name' => 'grupo-edit',
                'display_name' => 'Editar grupo de pesquisa',
                'description' => 'Editar grupo de pesquisa'
            ],
            [
                'name' => 'grupo-delete',
                'display_name' => 'Excluir grupo de pesquisa',
                'description' => 'Excluir grupo de pesquisa'
            ],
            //projeto
            [   
                'name' => 'projeto-list',
                'display_name' => 'Listagem das reservas de salas',
                'description' => 'Listar reservas de salas'
            ],
            [
                'name' => 'projeto-create',
                'display_name' => 'Cadastrar reserva',
                'description' => 'Cadastrar reserva'
            ],
            [
                'name' => 'projeto-edit',
                'display_name' => 'Editar reserva',
                'description' => 'Editar reserva'
            ],
            [
                'name' => 'projeto-delete',
                'display_name' => 'Excluir reserva',
                'description' => 'Excluir reserva'
            ],
            //profesor
            [
				'name' => 'professor-list',
                'display_name' => 'Listagem das reservas de salas',
                'description' => 'Listar reservas de salas'
            ],
            [
                'name' => 'professor-create',
                'display_name' => 'Cadastrar reserva',
                'description' => 'Cadastrar reserva'
            ],
            [
                'name' => 'professor-edit',
                'display_name' => 'Editar reserva',
                'description' => 'Editar reserva'
            ],
            [
                'name' => 'professor-delete',
                'display_name' => 'Excluir reserva',
                'description' => 'Excluir reserva'
            ],
            //aluno

            
            [
                'name' => 'aluno-list',
                'display_name' => 'Listagem das reservas de salas',
                'description' => 'Listar reservas de salas'
            ],
            [
                'name' => 'aluno-create',
                'display_name' => 'Cadastrar reserva',
                'description' => 'Cadastrar reserva'
            ],
            [
                'name' => 'aluno-edit',
                'display_name' => 'Editar reserva',
                'description' => 'Editar reserva'
            ],
            [
                'name' => 'aluno-delete',
                'display_name' => 'Excluir reserva',
                'description' => 'Excluir reserva'
            ],
             //curso
             [
                'name' => 'curso-list',
                'display_name' => 'Listagem das reservas de salas',
                'description' => 'Listar reservas de salas'
            ],
            [
                'name' => 'curso-create',
                'display_name' => 'Cadastrar reserva',
                'description' => 'Cadastrar reserva'
            ],
            [
                'name' => 'curso-edit',
                'display_name' => 'Editar reserva',
                'description' => 'Editar reserva'
            ],
            [
                'name' => 'curso-delete',
                'display_name' => 'Excluir reserva',
                'description' => 'Excluir reserva'
            ],
                //visitante
                			[
                'name' => 'visitante-list',
                'display_name' => 'Listagem das reservas de salas',
                'description' => 'Listar reservas de salas'
            ],
            [
                'name' => 'visitante-create',
                'display_name' => 'Cadastrar reserva',
                'description' => 'Cadastrar reserva'
            ],
            [
                'name' => 'visitante-edit',
                'display_name' => 'Editar reserva',
                'description' => 'Editar reserva'
            ],
            [
                'name' => 'visitante-delete',
                'display_name' => 'Excluir reserva',
                'description' => 'Excluir reserva'
            ],
            // Telas iniciais
            [
                'name' => 'viewTelaCoordenador',
                'display_name' => 'Tela de coordenador',
                'description' => 'Tela de coordenador'
            ],
            [
                'name' => 'viewTelaSecretaria',
                'display_name' => 'Tela de secretaria',
                'description' => 'Tela de secretaria'
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
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }

}
