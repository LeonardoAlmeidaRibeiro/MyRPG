<!DOCTYPE html>

<html lang="en">
<head>
    <title>HFA - SGP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta name="robots" content="noindex,nofollow">
    <meta NAME="robots" CONTENT="noarchive">
    <meta NAME="robots" CONTENT="index, nofollow, noarchive">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ url ('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url ('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url ('assets/css/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <style>
        .select2,
        .select2-container,
        .select2-container--default,
        .select2-container--below {
            width: 100% !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #5e6278 !important;
            line-height: 31px !important;
        }

        .select2-selection,
        .select2-selection--single {
            height: 2.6rem !important;
            background-color: #f5f8fa !important;
            border: 0 !important;
            font-size: 14px !important;
            line-height: 1.42857143 !important;
        }

        .card .card-body {
            padding: 0rem 2.5rem;
        }

        .mb-7 {
            margin-bottom: 0.0rem !important;
        }

        .mb-2 {
            margin-bottom: 0.1rem !important;
        }

        .py-5 {
            padding-top: 0.25rem !important;
        }

        hr {
            margin-top: -5px;
            margin-bottom: 10px;
        }

        /* 
			.stepper {
				.nav-tabs {
					position: relative;
				}
				.nav-tabs > li {
					width: 25%;
					position: relative;
					&:after {
						content: '';
						position: absolute;
						background: #f1f1f1;
						display: block;
						width: 100%;
						height: 5px;
						top: 30px;
						left: 50%;
						z-index: 1;
					}
					&.completed {
						&::after {
							background: #34bc9b;
						}
					}
					&:last-child {
						&::after {
							background: transparent;
						}
					}
					&.active:last-child {
						.round-tab {
							background: #34bc9b;
							&::after {
								content: '✔';
								color: #fff;
								position: absolute;
								left: 0;
								right: 0;
								margin: 0 auto;
								top: 0;
								display: block;
							}
						}
					}
				}
				.nav-tabs [data-toggle='tab'] {
					width: 25px;
					height: 25px;
					margin: 20px auto;
					border-radius: 100%;
					border: none;
					padding: 0;
					color: #f1f1f1;
				}
				.nav-tabs [data-toggle='tab']:hover {
					background: transparent;
					border: none;
				}
				.nav-tabs > .active > [data-toggle='tab'], .nav-tabs > .active > [data-toggle='tab']:hover, .nav-tabs > .active > [data-toggle='tab']:focus {
					color: #34bc9b;
					cursor: default;
					border: none;
				}
				.tab-pane {
					position: relative;
					padding-top: 50px;
				}
				.round-tab {
					width: 25px;
					height: 25px;
					line-height: 22px;
					display: inline-block;
					border-radius: 25px;
					background: #fff;
					border: 2px solid #34bc9b;
					color: #34bc9b;
					z-index: 2;
					position: absolute;
					left: 0;
					text-align: center;
					font-size: 14px;
					
				}
				.completed .round-tab{
					background: #34bc9b;
					&::after {
						content: '✔';
						color: #fff;
						position: absolute;
						left: 0;
						right: 0;
						margin: 0 auto;
						top: 0;
						display: block;
					}
				}
				.active .round-tab {
					background: #fff;
					border: 2px solid #34bc9b;
					&:hover {
						background: #fff;
						border: 2px solid #34bc9b;
					}
					&::after {
						display: none;
					}
				}
				.disabled .round-tab {
					background: #fff;
					color: #f1f1f1;
					border-color: #f1f1f1;
					&:hover {
						color: #4dd3b6;
						border: 2px solid #a6dfd3;
					}
					&::after {
						display: none;
					}
				}

		

			}
			 */

    </style>


</head>

<!--begin::Body-->
<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled" style="background-color: #f3f3f3;">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">

            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <!--begin::Card-->
                    <div class="card">

                        <div class="row fv-row" style="height: 90px;">

                            <div class="form-group row">
                                <div>
                                    <img class="logo" style="position: absolute;left:5rem;top:1rem;" alt="Logo" src="{{ url ('assets/imagens/logo.png') }}" width="50px" />
                                </div>
                                <div style="text-align: center">
                                    <font size="5" color="#51528a">
                                        <h3>DRH - Atualização de Dados Pessoais 2023 - Civil</h3>
                                    </font><br>
                                </div>
                            </div>

                        </div>

                        <div class="container">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="stepper">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a class="persistant-disabled" href="#stepper-step-1" data-toggle="tab" aria-controls="stepper-step-1" role="tab" title="Dados Pessoais">
                                                    <span class="round-tab">Dados Pessoais</span>
                                                </a>
                                            </li>
                                            <li role="presentation" class="disabled">
                                                <a class="persistant-disabled" href="#stepper-step-2" data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Documentos">
                                                    <span class="round-tab">Documentos</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <form role="form">
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" role="tabpanel" id="stepper-step-1">
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

                                                    </form>

                                                </div>

                                                <div class="tab-pane fade" role="tabpanel" id="stepper-step-2">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" onclick="requerimento()"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Requerimento</a></li>
                                                        <li class="list-group-item"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Ficha cadastral</a></li>
                                                        <li class="list-group-item"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Posição financeira</a></li>
                                                        <li class="list-group-item"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Serasa</a></li>
                                                        <li class="list-group-item"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">CRQ</a></li>
                                                        <li class="list-group-item" onclick="alert()"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Identificação do associado(RG/CNH)</a></li>
                                                        <li class="list-group-item"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Comprovante de renda</a></li>
                                                        <li class="list-group-item" onclick="endereco()"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Comprovate de residência</a></li>
                                                        <li class="list-group-item"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Orçamento</a></li>
                                                        <li class="list-group-item"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Resumo do contrato</a></li>
                                                        <li class="list-group-item"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Bloqueio de verba</a></li>
                                                        <li class="list-group-item"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Parecer do supervisor</a></li>
                                                        <li class="list-group-item"><a href="#" class="link-info  link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Comprovante de pagamento</a></li>
                                                    </ul>
                                                </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('../layout.footer')




    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/email-autocomplete/0.1.3/jquery.email-autocomplete.min.js"></script>
    <script type="text/javascript">
        $("#atualizar_email").emailautocomplete({
            suggClass: "custom-classname"
            , domains: [
                "hfa.mil.br"
            , ]
        });
        $("#atualizar_email_pessoal").emailautocomplete();

    </script>

</body>
<!--end::Body-->
</html>
