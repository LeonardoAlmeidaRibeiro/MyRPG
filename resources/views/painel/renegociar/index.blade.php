@include('../layout.header')
@php

	$cadastro = Session::get('usuario');

@endphp
	<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
		<div id="kt_content_container" class="container-xxl">
	
			<div class="g-5 gx-xxl-8">

				<div class="card mb-5 mb-xl-8">

					<div class="card-header border-0 pt-5">
					
						<span class="card-label fw-bolder fs-3 mb-1">Renegociação do Contrato Nº 2252254</span>

					</div>

					<div class="card-body py-3" align="right">
						
						<img src="{{ url('assets/imagens/simulador.png') }}" style="width: 100%;">
						
						<a href="{{route('renegociar2')}}" class="btn btn-sm btn-success">
							Continuar
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
						</a>


					</div>


				</div>

				
			</div>

		</div>
	</div>

@include('../layout.footer')