@include('../layout.header')

	<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
		<div id="kt_content_container" class="container-xxl">
			
			<div class="g-5 gx-xxl-8">
				<!--begin::Tables Widget 10-->
				<div class="card">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">Finalize Seu Cadastro</span>
						</h3>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-3">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->
							<table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
								<!--begin::Table body-->
								<tbody>
									<form action="{{route('documentosProfissionais.index')}}" method="get">
									@csrf
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="d-flex justify-content-start flex-column">
														<span class="text-dark fs-4 ">Cpf:</span>
														<input type="text" name="cpf" class="form-control form-control-solid " value="{{$dadosUsuario->cpf}}" />
													</div>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="d-flex justify-content-start flex-column">
														<span class="text-dark fs-4 ">Nome:</span>
														<input type="text" name="nome" class="form-control form-control-solid w-auto" value="{{$dadosUsuario->nome}}" />
													</div>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="d-flex justify-content-start flex-column">
														<span class="text-dark fs-4 ">Idade:</span>
														<input type="number" name="idade" class="form-control form-control-solid" value="{{$dadosUsuario->idade}}" />
													</div>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="d-flex justify-content-start flex-column">
														<span class="text-dark fs-4 ">Data de Nascimento:</span>
														<input type="text" name="data_nasimento" class="form-control form-control-solid" value="{{$dadosUsuario->data_nascimento}}"/>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="d-flex justify-content-start flex-column">
														<span class="text-dark fs-4 ">Nº Identidade:</span>
														<input type="text" name="data_nasimento" class="form-control form-control-solid" value=""/>
													</div>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="d-flex justify-content-start flex-column">
														<span class="text-dark fs-4 ">Orgão Expedidor:</span>
														<input type="text" name="data_nasimento" class="form-control form-control-solid" value=""/>
													</div>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="d-flex justify-content-start flex-column">
														<span class="text-dark fs-4 ">País Onde Nasceu:</span>
														<input type="text" name="data_nasimento" class="form-control form-control-solid" value=""/>
													</div>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<div class="d-flex justify-content-start flex-column">
														<span class="text-dark fs-4 ">Cidade Onde Nasceu:</span>
														<input type="text" name="data_nasimento" class="form-control form-control-solid" value=""/>
													</div>
												</div>
											</td>
											
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div class="d-flex justify-content-start flex-column">
														<span class="text-dark fs-4 ">Sexo:</span>
														<div  class="b-1">
															<input type="radio" name="data_nasimento" class="form-check-input me-3" @if($dadosUsuario->genero == 'M') checked @endif /><span>Masculino</span>

															<input type="radio" name="data_nasimento" class="form-check-input me-3" @if($dadosUsuario->genero == 'F') checked @endif /><span>Feminino</span>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>
												<div>
													<div class="d-flex justify-content-start ">
														<button type="submit" class="btn btn-light-primary fs-3 ">Salvar</button>
													</div>
												</div>
											</td>
										</tr>
									</form>
								</tbody>
								<!--end::Table body-->
							</table>
							<!--end::Table-->
						</div>
						<!--end::Table container-->
					</div>
					<!--begin::Body-->
				</div>
				<!--end::Tables Widget 10-->
			</div>

		</div>
	</div>

@include('../layout.footer')