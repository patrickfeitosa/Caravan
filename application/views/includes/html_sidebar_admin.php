<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="bg-info side-box-shadow">
                <div class="sidebar-header">
                    <a href="<?= base_url('administracao/home') ?>">
                        <img src="<?= base_url(); ?>/assets/img/caravan.svg" alt="header-sidebar Caravan" class="center-item">
                    </a>
                </div>

                <ul class="list-unstyled components" data-target="menuSidebar">
                    <p class="lead separador">Painel Administrativo</p>                    
                    
                    <li>                        
                        <a href="<?= base_url('administracao/home') ?>" data-click="inicio" <?php if($opcao=='home'){?> class='option-active'<?php }?>>Início</a>                        
                    </li>
                    <li>                       
                        <a href="<?= base_url('administracao/locais') ?>" data-click="locais"  <?php if($opcao=='locais'){?>class='option-active'<?php }?>>Locais</a>
                    </li>
                    <li>                       
                        <a href="<?= base_url('administracao/eventos') ?>" data-click="eventos"  <?php if($opcao=='eventos'){?>class='option-active'<?php }?>>Eventos</a>
                    </li>
                    <li>                        
                        <a href="<?= base_url('administracao/clientes') ?>" data-click="clientes" <?php if($opcao=='clientes'){?>class='option-active'<?php }?>>Clientes</a>
                    </li>
                    <li>
                        <a href="<?= base_url('administracao/usuarios') ?>" data-click="usuarios" <?php if($opcao=='usuarios'){?>class='option-active'<?php }?>>Usuários</a>
                    </li>
                    <li>
                        <a href="<?= base_url('administracao/pedidos') ?>" data-click="pedidos"  <?php if($opcao=='pedidos'){?>class='option-active'<?php }?>>Pedidos</a> 
                    </li>
                    <li>
                        <a href="<?= base_url('administracao/extrato') ?>" data-click="extratos" <?php if($opcao=='extratos'){?>class='option-active'<?php }?>>Extratos</a>
                    </li>
                    <li>
                        <a href="<?= base_url('administracao/logout') ?>" data-click="sair" onclick="return confirm('Deseja realmente sair do Sistema?');">Sair</a>
                    </li>   
                </ul>
            </nav>