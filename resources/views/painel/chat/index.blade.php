@include('../layout.header')
				
	<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
		<div id="kt_content_container" class="container-xxl">
	
			<div class="row g-5 g-xl-8" style="padding-top: 0px important!;">

			
				<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
					<!--begin::Messenger-->
					<div class="card" id="kt_chat_messenger">
						<!--begin::Card header-->
						<div class="card-header" id="kt_chat_messenger_header">
							<!--begin::Title-->
							<div class="card-title">
								<!--begin::User-->
								<div class="d-flex justify-content-center flex-column me-3">
									<a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Chat</a>
									<!--begin::Info-->
									<div class="mb-0 lh-1">
										<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
										<span class="fs-7 fw-bold text-muted">Online</span>
									</div>
									<!--end::Info-->
								</div>
								<!--end::User-->
							</div>
							<!--end::Title-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body" id="kt_chat_messenger_body">
							<!--begin::Messages-->
							<div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="-2px" style="">
								<!--begin::Message(in)-->
								<div class="d-flex justify-content-start mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column align-items-start">
										<!--begin::User-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="{{ url('assets/imagens/avatar-mutua.png') }}">
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-3">
												<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Mutua</a>
												<span class="text-muted fs-7 mb-1">2 min</span>
											</div>
											<!--end::Details-->
										</div>
										<!--end::User-->
										<!--begin::Text-->
										<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Olá, em que podemos lhe ajudar?</div>
										<!--end::Text-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Message(in)-->
								<!--begin::Message(out)-->
								<div class="d-flex justify-content-end mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column align-items-end">
										<!--begin::User-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Details-->
											<div class="me-3">
												<span class="text-muted fs-7 mb-1">5 min</span>
												<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">Você</a>
											</div>
											<!--end::Details-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/150-26.jpg">
											</div>
											<!--end::Avatar-->
										</div>
										<!--end::User-->
										<!--begin::Text-->
										<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">Oi, gostaria de saber o status da minha solicitação</div>
										<!--end::Text-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Message(out)-->
								<!--begin::Message(in)-->
								<div class="d-flex justify-content-start mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column align-items-start">
										<!--begin::User-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="{{ url('assets/imagens/avatar-mutua.png') }}">
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-3">
												<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Mutua</a>
												<span class="text-muted fs-7 mb-1">1 Hour</span>
											</div>
											<!--end::Details-->
										</div>
										<!--end::User-->
										<!--begin::Text-->
										<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Ok, me informe o número da solicitação.</div>
										<!--end::Text-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Message(in)-->
								<!--begin::Message(out)-->
								<div class="d-flex justify-content-end mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column align-items-end">
										<!--begin::User-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Details-->
											<div class="me-3">
												<span class="text-muted fs-7 mb-1">2 Horas</span>
												<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">Você</a>
											</div>
											<!--end::Details-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/150-26.jpg">
											</div>
											<!--end::Avatar-->
										</div>
										<!--end::User-->
										<!--begin::Text-->
										<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">55665</div>
										<!--end::Text-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Message(out)-->
								<!--begin::Message(in)-->
								<div class="d-flex justify-content-start mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column align-items-start">
										<!--begin::User-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="{{ url('assets/imagens/avatar-mutua.png') }}">
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-3">
												<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Mutua</a>
												<span class="text-muted fs-7 mb-1">3 Horas</span>
											</div>
											<!--end::Details-->
										</div>
										<!--end::User-->
										<!--begin::Text-->
										<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Está em processo de homologação</a></div>
										<!--end::Text-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Message(in)-->
								<!--begin::Message(out)-->
								<div class="d-flex justify-content-end mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column align-items-end">
										<!--begin::User-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Details-->
											<div class="me-3">
												<span class="text-muted fs-7 mb-1">4 Horas</span>
												<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">Você</a>
											</div>
											<!--end::Details-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/150-26.jpg">
											</div>
											<!--end::Avatar-->
										</div>
										<!--end::User-->
										<!--begin::Text-->
										<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text">ok, obrigado</div>
										<!--end::Text-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Message(out)-->
								<!--begin::Message(in)-->
								<div class="d-flex justify-content-start mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column align-items-start">
										<!--begin::User-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="{{ url('assets/imagens/avatar-mutua.png') }}">
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-3">
												<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Mutua</a>
												<span class="text-muted fs-7 mb-1">5 Horas</span>
											</div>
											<!--end::Details-->
										</div>
										<!--end::User-->
										<!--begin::Text-->
										<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">A Mutua Agradeçe.</div>
										<!--end::Text-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Message(in)-->
								<!--begin::Message(template for out)-->
								<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column align-items-end">
										<!--begin::User-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Details-->
											<div class="me-3">
												<span class="text-muted fs-7 mb-1">Agora mesmo</span>
												<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">Você</a>
											</div>
											<!--end::Details-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/150-26.jpg">
											</div>
											<!--end::Avatar-->
										</div>
										<!--end::User-->
										<!--begin::Text-->
										<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end" data-kt-element="message-text"></div>
										<!--end::Text-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Message(template for out)-->
								<!--begin::Message(template for in)-->
								<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
									<!--begin::Wrapper-->
									<div class="d-flex flex-column align-items-start">
										<!--begin::User-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="{{ url('assets/imagens/avatar-mutua.png') }}">
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-3">
												<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Mutua</a>
												<span class="text-muted fs-7 mb-1">Agora mesmo</span>
											</div>
											<!--end::Details-->
										</div>
										<!--end::User-->
										<!--begin::Text-->
										<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start" data-kt-element="message-text">Right before vacation season we have the next Big Deal for you.</div>
										<!--end::Text-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Message(template for in)-->
							</div>
							<!--end::Messages-->
						</div>
						<!--end::Card body-->
						<!--begin::Card footer-->
						<div class="card-footer pt-4" id="kt_chat_messenger_footer">
							<!--begin::Input-->
							<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Escreva a sua mensagem"></textarea>
							<!--end::Input-->
							<!--begin:Toolbar-->
							<div class="d-flex flex-stack">
								<!--begin::Actions-->
								<div class="d-flex align-items-center me-2">
									
								</div>
								<!--end::Actions-->
								<!--begin::Send-->
								<button class="btn btn-primary" type="button" data-kt-element="send">Enviar</button>
								<!--end::Send-->
							</div>
							<!--end::Toolbar-->
						</div>
						<!--end::Card footer-->
					</div>
					<!--end::Messenger-->
				</div>

			
			</div>

		</div>
	</div>

@include('../layout.footer')