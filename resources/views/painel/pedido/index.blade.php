@include('../layout.header')
<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        <div class="g-5 gx-xxl-8">
            <div class="card">
                <div class="card-body">
                    <h6>Solicitar Benefício</h6>
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Benefícios</label>
                            <select class="form-control form-control-sm">
                                <option>Selecione seu benefício</option>
                                <option>Agropecuário - RB15</option>
                                <option>Ajuda Mútua - RB1</option>
                                <option>Apoio Flex - RB7</option>
                                <option>Aporte Prev - RB20</option>
                                <option>Assistencial Express - AS1</option>
                                <option>Construa Já - RB8</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Benefício para dependente?</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Deseja fazer composição da renda familiar?</label>
                            </div>
                        </div>
                        <br>
                        <h6>Dados Profissinais</h6>
                        <br>
                        <div class="form-row">
                            <label for="inputCity">Empresa</label>
                            <input type="text" class="form-control form-control-sm" id="inputCity" placeholder="Empresa em que trabalha">
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="row">
                                <div class="col-sm">
                                    <label for="inputCity">Data de Admissão</label>
                                    <input type="date" class="form-control form-control-sm" id="inputCity">
                                </div>
                                <div class="col-sm">
                                    <label for="inputCity">Situação Trabalhista</label>
                                    <select class="form-control form-control-sm">
                                        <option>Selecione a situação trabalhista</option>
                                        <option>CLT</option>
                                        <option>PJ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="row">
                                <div class="col-sm">
                                    <label for="inputCity">Renda Bruta</label>
                                    <input type="number" class="form-control form-control-sm" id="inputCity">
                                </div>
                                <div class="col-sm">
                                    <label for="inputCity">Renda Liquída</label>
                                    <input type="number" class="form-control form-control-sm" id="inputCity">
                                </div>
                            </div>
                        </div>
                        <br>
                        <h6>Dados da Solicitação</h6>
                        <br>
                        <div class="form-row">
                            <div class="row">
                                <div class="col-sm">
                                    <label for="inputCity">Valor Orçado</label>
                                    <input type="number" class="form-control form-control-sm" id="inputCity">
                                </div>
                                <div class="col-sm">
                                    <label for="inputCity">Reembolso</label>
                                    <input type="number" class="form-control form-control-sm" id="inputCity">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="row">
                                <div class="col-sm">
                                    <label for="inputCity">Dia de vencimento da parcela</label>
                                    <input type="date" class="form-control form-control-sm" id="inputCity">
                                </div>
                                <div class="col-sm">
                                    <label for="inputCity">Finalidade</label>
                                    <select class="form-control form-control-sm">
                                        <option>Selecione a finalidade</option>
                                        <option>Seguro</option>
                                        <option>Emprestimo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h6>Documentos Necessário para solicitação</h6>
                        <br>
                        <div class="form-row">
                            <div class="mb-3">
                                <label for="inputCity">Identificação do Associado (CNH/RG)</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="mb-3">
                                <label for="inputCity">Comprovante de Renda</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="mb-3">
                                <label for="inputCity">Comprovante de Residência</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="mb-3">
                                <label for="inputCity">Certidão de Matrimônio</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="mb-3">
                                <label for="inputCity">Identificação Conjuge</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="mb-3">
                                <label for="inputCity">Declaração do Imposto de Renda</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="mb-3">
                                <label for="inputCity">Contrato de prestação de serviço/ Decore dos últmos 03 meses / Contrato de locação e Recibo dos últimos 03 meses.</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                        
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Declaro que li e concordo com o termo de aceite de solicitaçãode benefício.</label>
                            </div>
                            <button type="button" class="btn btn-info btn-sm">Visualizar</button>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                            <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@include('../layout.footer')
