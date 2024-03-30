@include('../layout.header')
@php

	$cadastro = Session::get('usuario');

@endphp

	<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
		<div id="kt_content_container" class="container-xxl">
	
			<div class="g-5 gx-xxl-8">

				<div class="card mb-5 mb-xl-8">

					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							@if($cadastro['tipo_id'] == 1)
								<span class="card-label fw-bolder fs-3 mb-1">Minhas Solicitações</span>
								<span class="text-muted mt-1 fw-bold fs-7">Acompanhe as suas Solicitações</span>
							@else
								<span class="card-label fw-bolder fs-3 mb-1">Solicitações</span>
							@endif
						</h3>

					</div>

					<div class="card-body py-3">

						<div class="table-responsive">
							
							<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-2" style="font-size: 13px;">
							
								<thead>
									<tr class="fw-bolder text-muted bg-secondary">
										<th class="min-w-125px rounded-start">&nbsp;&nbsp;Nº da Solicitação</th>
										<th class="min-w-125px">Data da Solicitação</th>
										<th class="min-w-125px">Benefício</th>
										<th class="min-w-125px">Status</th>
										<th class="min-w-125px rounded-end"></th>
									</tr>
								</thead>

								<tbody>

									<tr>
										<td>&nbsp;2023998</td>
										<td>02/08/2023</td>
										<td>Ajuda Mútua</td>
										<td><span class="badge badge-light-primary">Em Processamento</span></td>
										<td>
											@if($cadastro['tipo_id'] != 1)
												<a href="" class="btn btn-sm btn-primary">
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
														</svg>
													</span>
													Detalhes
												</a>
											@endif
										</td>
									</tr>

									<tr>
										<td>&nbsp;2023997</td>
										<td>01/08/2023</td>
										<td>Férias Mais</td>
										<td><span class="badge badge-light-success">Concluída</span></td>
										<td>
											@if($cadastro['tipo_id'] != 1)
												<a href="" class="btn btn-sm btn-primary">
													<span class="svg-icon svg-icon-2">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"></path>
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"></path>
														</svg>
													</span>
													Detalhes
												</a>
											@endif
										</td>
									</tr>
									

								</tbody>
								
							</table>
						
						</div>
						
					</div>

				</div>

				
			</div>

		</div>
	</div>

@include('../layout.footer')