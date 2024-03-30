@include('../layout.header')
<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        @include('../layout.perfil')
        <div class="g-5 gx-xxl-8">
            <div class="card">
                <div class="card-body">
                    <h6>Benefício nº 11202120020</h6>
                    <br>
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Benefícios</label>
                            <select class="form-control form-control-sm" disabled>
                                <option>Selecione seu benefício</option>
                                <option selected>Agropecuário - RB15</option>
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
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked disabled>
                                <label class="form-check-label" for="inlineCheckbox1">Benefício para dependente?</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" disabled>
                                <label class="form-check-label" for="inlineCheckbox2">Deseja fazer composição da renda familiar?</label>
                            </div>
                        </div>
                        <br>
                        <h6>Dados Profissinais</h6>
                        <br>
                        <div class="form-row">
                            <label for="inputCity">Empresa</label>
                            <input type="text" class="form-control form-control-sm" id="inputCity" placeholder="Empresa em que trabalha" readonly value="Pegásus Prestadora de Serviços LTDA">
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="row">
                                <div class="col-sm">
                                    <label for="inputCity">Data de Admissão</label>
                                    <input type="date" class="form-control form-control-sm" id="inputCity" value="2020-05-15" readonly>
                                </div>
                                <div class="col-sm">
                                    <label for="inputCity">Situação Trabalhista</label>
                                    <select class="form-control form-control-sm">
                                        <option>Selecione a situação trabalhista</option disabled>
                                        <option selected>CLT</option>
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
                                    <input type="number" class="form-control form-control-sm" id="inputCity" value="1975.70" readonly>
                                </div>
                                <div class="col-sm">
                                    <label for="inputCity">Renda Liquída</label>
                                    <input type="number" class="form-control form-control-sm" id="inputCity" value="1675.70" readonly>
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
                                    <input type="number" class="form-control form-control-sm" id="inputCity" value="3200.00" readonly>
                                </div>
                                <div class="col-sm">
                                    <label for="inputCity">Reembolso</label>
                                    <input type="number" class="form-control form-control-sm" id="inputCity" value="0.00" readonly>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="row">
                                <div class="col-sm">
                                    <label for="inputCity">Dia de vencimento da parcela</label>
                                    <input type="date" class="form-control form-control-sm" id="inputCity" value="2020-10-02" readonly>
                                </div>
                                <div class="col-sm">
                                    <label for="inputCity">Finalidade</label>
                                    <select class="form-control form-control-sm" disabled>
                                        <option>Selecione a finalidade</option>
                                        <option selected>Seguro</option>
                                        <option>Emprestimo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="g-5 gx-xxl-8">
            <div class="card">
                <div class="card-body">
                    <h6>Boletos em Aberto</h6>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col"><strong>Parcelas</strong></th>
                                <th scope="col"><strong>Valor Principal</strong></th>
                                <th scope="col"><strong>Correção</strong></th>
                                <th scope="col"><strong>Valor Final</strong></th>
                                <th scope="col"><strong>Imprimir Boleto</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i = 1; $i <=24; $i++) <tr>
                                <th scope="row">{{$i}}</th>
                                <td>R$: 404,70</td>
                                <td>R$: 43,93</td>
                                <td>R$: 448,63</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-file" aria-hidden="true"></i> &nbsp; Gerar Boleto</button></td>
                                </tr>
                                @endfor
                                <tr>
                                    <th scope="row"><strong>Total</strong> </th>
                                    <td><strong>R$: 9708,43</strong></td>
                                    <td><strong>R$: 1051,79</strong></td>
                                    <td><strong>R$: 10760,22</strong></td>
                                    <td></td>
                                </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('../layout.footer')
