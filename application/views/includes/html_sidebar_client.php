<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="bg-secondary side-box-shadow">
                <div class="sidebar-header">
                    <a href="<?= base_url('principal') ?>" onclick="return confirm('Você será redirecionado para a Home\nDeseja realmente sair do Sistema?');">
                        <img src="<?= base_url(); ?>/assets/img/caravan.svg" alt="header-sidebar Caravan" class="center-item">
                    </a>
                </div>

                <ul class="list-unstyled components">
                    <p class="lead separador">Painel do Cliente</p>                    
                    
                    <li>                        
                        <a href="<?= base_url('cliente/perfil') ?>" <?php if($opcaoCliente=='home'){?> class='option-active'<?php }?>>Home</a>                        
                    </li>                    
                    <li>                        
                        <a href="<?= base_url('cliente/editar') ?>" <?php if($opcaoCliente=='editar'){?> class='option-active'<?php }?>>Editar Perfil</a>                        
                    </li>
                    <li>                       
                        <a href="<?= base_url('cliente/pedidos') ?>" <?php if($opcaoCliente=='pedidos'){?>class='option-active'<?php }?>>Meus Pedidos</a>
                    </li>
                    <li>                       
                        <a href="<?= base_url('principal') ?>" onclick="return confirm('Você será redirecionado para a Home\nDeseja realmente sair do Sistema?');">Continuar Navegando</a>
                    </li>                    
                    <li>
                        <a href="<?= base_url('cliente/logout') ?>" onclick="return confirm('Deseja realmente sair do Sistema?');">Sair</a>
                    </li>   
                </ul>
            </nav>