@include('../layout.header')
<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">
            <div class="card">
                <div class="card-body">
                    <h5>Ficha de Atualização de Débito </h5>
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleFormControlInput1">Contratos em aberto para renegociação</label>
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option selected>Selecione...</option>
                                        <option>Plano Atrasado</option>
                                        <option>Financiamento</option>
                                        <option>Crédito</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">Data base para o cálculo</label>
                                    <input type="date" class="form-control form-control-sm" id="exampleFormControlInput1">
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleFormControlInput1">Número de parcelas</label>
                                    <input type="number" class="form-control form-control-sm">
                                </div>
                                <div class="col">
                                    <label for="inputState">Forma de pagamento</label>
                                    <select id="inputState" class="form-control form-control-sm">
                                        <option selected>Selecione...</option>
                                        <option>Boleto Bancário</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleFormControlInput1">Data do Primeiro Vencimento</label>
                                    <input type="date" class="form-control form-control-sm" id="exampleFormControlInput1">
                                </div>
                                <div class="col">
                                    <br>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Gerar Correção</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <span class="text-danger"><strong> Alvará Disponível para Atualização:</strong></span> R$:
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="exampleFormControlInput1">Valor do Alvará</label>
                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1">
                                </div>
                                <div class="col">
                                    <label for="exampleFormControlInput1">Número da Folha</label>
                                    <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="button" class="btn btn-success btn-sm">Confirmar</button>
                                <button type="button" class="btn btn-danger btn-sm">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('../layout.footer')
