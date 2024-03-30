@include('../layout.header')
@php

	$cadastro = Session::get('usuario');

@endphp
	<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
		<div id="kt_content_container" class="container-xxl">
	
			<div class="g-5 gx-xxl-8">

				<div class="card mb-5 mb-xl-8">

					<div class="card-header border-0 pt-5" align="center">
					
						<span class="card-label fw-bolder fs-3 mb-1">Boleto de Quitação</span>

					</div>

					<div class="card-body py-3" align="right">
				
						<div align="center">
						
						<a href="#" class="btn btn-sm btn-primary">
							Imprimir Boleto
						</a><br><br>
					</div>
						<div align="center">
							<img src="{{ url('assets/imagens/boleto.png') }}" style="width: 60%;">
							<br><br>
						</div>
						<div align="center">
	
							<a href="#" class="btn btn-sm btn-primary">
								Imprimir Boleto
							</a>
						</div>
						<br><br>
					</div>


				</div>

				
			</div>

		</div>
	</div>

@include('../layout.footer')