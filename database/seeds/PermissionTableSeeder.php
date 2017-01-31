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
