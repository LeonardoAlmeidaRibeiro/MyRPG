@include('../layout.header')
				
	<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
		<div id="kt_content_container" class="container-xxl">
	
			<div class="g-5 gx-xxl-8">

				<div class="card mb-5 mb-xl-8">

					<div class="card-header border-0 pt-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder fs-3 mb-1">Anuidade</span>
							<span class="text-muted mt-1 fw-bold fs-7">Detalhes da sua anuidade</span>
						</h3>

					</div>

					<div class="card-body py-3">

						<div class="table-responsive">
							
							<table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-2" style="font-size: 13px;">
							
								<thead>
									<tr class="fw-bolder text-muted bg-secondary">
										<th class="min-w-125px rounded-start">&nbsp;&nbsp;Título</th>
										<th class="min-w-125px">Ano</th>
										<th class="min-w-125px">Valor</th>
										<th class="min-w-125px">Vencimento</th>
										<th class="min-w-125px">Status</th>
										<th class="min-w-125px rounded-end"></th>
									</tr>
								</thead>

								<tbody>

									<tr>
										<td>&nbsp;885455252</td>
										<td>2023</td>
										<td>R$ 536,22</td>
										<td>05/08/2023</td>
										<td><span class="badge badge-light-danger">Atrasado</span></td>
										
										<td class="text-end">
											<a href="" class="btn btn-sm btn-success">
												<i class="fa fa-credit-card" aria-hidden="true"></i>
												Gerar Boleto
											</a>
										</td>
										
									</tr>

									<tr>
										<td>&nbsp;11202120020</td>
										<td>2022</td>
										<td>R$ 522,01</td>
										<td>05/08/2022</td>
										<td><span class="badge badge-light-success">Em dia</span></td>
										
										
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