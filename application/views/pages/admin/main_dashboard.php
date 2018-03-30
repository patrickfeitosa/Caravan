
            <div id="content" class="bg-dark text-white">
            <span class="mobile-btn"></span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-md-12">
                            <h4 class="display-4 text-info text-center">Bem-vindo ao Dashboard</h4>
                        </div>
                    </div>                    
                </div>

                <div class="container-fluid mt-5" data-group="graficosPedidos">
                    <div class="row">
                        <div class="col col-md-12 mb-3">
                            <h2 class="font-weight-light">Pedidos</h2>
                        </div>
                    </div>

                    <ul class="nav nav-tabs">
                        <li>
                            <a data-toggle="tab" href="#pedidoHoje" class="font-weight-light tab-option active-tab" data-click="pedidoHoje">Pedidos de hoje</a>   
                        </li>
                  
                        <li>
                           <a data-toggle="tab" href="#pedidoSemana" class="font-weight-light tab-option" data-click="pedidoSemana">Pedidos da semana</a>
                        </li>

                        <li>
                            <a data-toggle="tab" href="#pedidoMes" class="font-weight-light tab-option" data-click="pedidoMes">Pedidos do mês</a>
                        </li>
                    </ul>           
                    
                    <div class="tab-content bg-info p-2">
                        <div id="pedidoHoje" class="tab-pane fade in active show">
                            <canvas id="graficoPedidoHoje" class="bg-white"></canvas>    
                        </div>

                        <div id="pedidoSemana" class="tab-pane fade">
                            <canvas id="graficoPedidoSemana" class="bg-white"></canvas>
                        </div>
                        
                        <div id="pedidoMes" class="tab-pane fade">
                            <canvas id="graficoPedidoMes" class="bg-white"></canvas>
                        </div>                    
                    </div>
                   
                </div>

                <div class="container-fluid mt-5" data-group="locais">
                    <div class="row">
                        <div class="col col-md-12 mb-3">
                            <h2 class="font-weight-light">Locais</h2>
                        </div>
                    </div>

                    <ul class="nav nav-tabs">
                        <li>
                            <a data-toggle="tab" href="#locaisAcessados" class="font-weight-light tab-option active-tab" data-click="locaisAcessados">Locais mais acessados</a>   
                        </li>
                  
                        <li>
                           <a data-toggle="tab" href="#eventosLocal" class="font-weight-light tab-option" data-click="eventosLocal">Eventos por Local</a>
                        </li>
                    </ul>           
                    
                    <div class="tab-content bg-info p-2">
                        <div id="locaisAcessados" class="tab-pane fade in active show">
                            <canvas id="graficoLocaisAcessados" class="bg-white"></canvas>    
                        </div>

                        <div id="eventosLocal" class="tab-pane fade">
                            <canvas id="graficoEventosLocal" class="bg-white"></canvas>
                        </div>                                      
                    </div>
                </div>
            </div>