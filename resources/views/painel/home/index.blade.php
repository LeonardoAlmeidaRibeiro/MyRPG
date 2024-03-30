@include('../layout.header')

	<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
		<div id="kt_content_container" class="container-xxl">

			<!-- Associado -->
			@if($cadastro['tipo_id'] == 1)	
				
				<div class="row g-5 g-xl-8" style="padding-top: 0px important!;">

						<div class="col-xl-3">
							<div class="card card-xl-stretch mb-xl-5">
								<div class="card-header border-0 py-3">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Meus Benefícios</span>
										<span class="text-muted fw-bold fs-7">Tem suas dúvidas</span>
									</h3>
								</div>
								<div class="card-body d-flex flex-column">
									<div class="pt-0" align="center">
										<img src="{{ url('assets/imagens/beneficio.png') }}" class="h-70px mb-2">
										<p class="text-center fs-6 pb-5 mb-2">
											Acesse todos os seu benefícios contratados.
										</p>
										<a href="{{ route('beneficio') }}" class="btn btn-primary w-100 py-3">Benefícios</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3">
							<div class="card card-xl-stretch mb-xl-5">
								<div class="card-header border-0 py-3">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Anuidade</span>
										<span class="text-muted fw-bold fs-7">Tem suas dúvidas</span>
									</h3>
								</div>
								<div class="card-body d-flex flex-column">
									<div class="pt-0" align="center">
										<img src="{{ url('assets/imagens/anuidade.png') }}" class="h-70px mb-2">
										<p class="text-center fs-6 pb-5 mb-2">
											Acesse os detalhes da anuidade.
										</p>
										<br>
										<a href="{{ route('anuidade') }}" class="btn btn-primary w-100 py-3">Anuidade</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3">
							<div class="card card-xl-stretch mb-xl-5">
								<div class="card-header border-0 py-3">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Solicitações</span>
										<span class="text-muted fw-bold fs-7">Acompanhe as suas solicitações</span>
									</h3>
								</div>
								<div class="card-body d-flex flex-column">
									<div class="pt-0" align="center">
										<img src="{{ url('assets/imagens/solicitacao.png') }}" class="h-70px mb-2">
										<p class="text-center fs-6 pb-5 mb-2">
											Acompanhe as suas solicitações na Mutua.
										</p>
										<a href="{{ route('solicitacoes') }}" class="btn btn-primary w-100 py-3">Acompanhar</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3">
							<div class="card card-xl-stretch mb-xl-5">
								<div class="card-header border-0 py-3">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Chat</span>
										<span class="text-muted fw-bold fs-7">Converse Conosco</span>
									</h3>
								</div>
								<div class="card-body d-flex flex-column">
									<div class="pt-0" align="center">
										<img src="{{ url('assets/imagens/chat.png') }}" class="h-70px mb-2">
										<p class="text-center fs-6 pb-5 mb-2">
											Envie mensagem para nossa equipe Mutua.
										</p>
										<a href="{{ route('chat') }}" class="btn btn-primary w-100 py-3">Conversar</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3">
							<div class="card card-xl-stretch mb-xl-5">
								<div class="card-header border-0 py-3">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Dúvidas</span>
										<span class="text-muted fw-bold fs-7">Tem suas dúvidas</span>
									</h3>
								</div>
								<div class="card-body d-flex flex-column">
									<div class="pt-0" align="center">
										<img src="{{ url('assets/imagens/duvida.png') }}" class="h-70px mb-2">
										<p class="text-center fs-6 pb-5 mb-2">
										Tire todas as suas dúvidas sobre os benefícios Mutua.
										</p>
										<a href="{{ route('beneficio') }}" class="btn btn-primary w-100 py-3">Conversar</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3">
							<div class="card card-xl-stretch mb-xl-5">
								<div class="card-header border-0 py-3">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label fw-bolder fs-3 mb-1">Meu Cadastro</span>
										<span class="text-muted fw-bold fs-7">Atualize o seu Cadastro</span>
									</h3>
								</div>
								<div class="card-body d-flex flex-column">
									<div class="pt-0" align="center">
										<img src="{{ url('assets/imagens/cadastro.png') }}" class="h-70px mb-2">
										<p class="text-center fs-6 pb-5 mb-2">
										Mantenha o seu cadastro atualizado.
										</p>
										<a href="{{ route('cadastrar.index') }}" class="btn btn-primary w-100 py-3">Atualizar</a>
									</div>
								</div>
							</div>
						</div>

				</div>
			@endif

			<!-- Regional -->
			@if($cadastro['tipo_id'] == 2)	
 
				<div class="row g-5 g-xl-8" style="padding-top: 0px important!;">

					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Benefícios</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/beneficio.png') }}" class="h-70px mb-7">
									<a href="{{ route('beneficio') }}" class="btn btn-primary w-100 py-3">Benefícios</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Anuidades</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/anuidade.png') }}" class="h-70px mb-7">
									<br>
									<a href="{{ route('anuidade') }}" class="btn btn-primary w-100 py-3">Anuidade</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Solicitações</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/solicitacao.png') }}" class="h-70px mb-7">
									<a href="{{ route('solicitacoes') }}" class="btn btn-primary w-100 py-3">Acompanhar</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3">
						<div class="card card-xl-stretch mb-xl-5">
							<div class="card-header border-0 py-3">
								<h3 class="card-title align-items-start flex-column">
									<span class="card-label fw-bolder fs-3 mb-1">Chat</span>
								</h3>
							</div>
							<div class="card-body d-flex flex-column">
								<div class="pt-0" align="center">
									<img src="{{ url('assets/imagens/chat.png') }}" class="h-70px mb-7">
									<a href="{{ route('chat') }}" class="btn btn-primary w-100 py-3">Conversar</a>
								</div>
							</div>
						</div>
					</div>


				</div>

			@endif

			<!-- Supervisor -->
			@if($cadastro['tipo_id'] == 3)	

			@endif

			<!-- Diretor -->
			@if($cadastro['tipo_id'] == 4)	

			@endif

			<!-- Planejamento e Qualidade -->
			@if($cadastro['tipo_id'] == 5)	

			@endif

			<!-- Pagamento -->
			@if($cadastro['tipo_id'] == 6)	

			@endif

		</div>
	</div>

@include('../layout.footer')