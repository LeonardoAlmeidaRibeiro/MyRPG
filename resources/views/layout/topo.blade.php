	@php

	$cadastro = Session::get('usuario');

	@endphp

	<!--begin::Wrapper-->
	<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
	    <!--begin::Header-->
	    <div id="kt_header" style="" class="header align-items-stretch">
	        <img alt="Logo" src="{{ url('assets/imagens/capa.jpg') }}" class="container-fluid d-flex align-items-center"/>
	    </div>
	    <!--end::Header-->
	    <!--begin::Toolbar-->
	    <div class="toolbar py-2" id="kt_toolbar">
	        <!--begin::Container-->
	        <div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
	            <!--begin::Page title-->
	            <div class="flex-grow-1 flex-shrink-0 me-5">
	                <!--begin::Page title-->
	                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
	                    <!--begin::Title-->
	                    <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">
	                        teste
	                        <!--begin::Separator-->
	                        <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
	                        <!--end::Separator-->
	                        <!--begin::Description-->
	                        <small class="text-muted fs-7 fw-bold my-1 ms-1">Seja bem vindo!</small>
	                        <!--end::Description-->
	                    </h1>
	                    <!--end::Title-->
	                </div>
	                <!--end::Page title-->
	            </div>
	            <!--end::Page title-->
	            <!--begin::Action group-->
	            <div class="d-flex align-items-center flex-wrap">

	                <!--begin::Wrapper-->
	                <div class="d-flex align-items-center">

	                    <!--begin::Actions-->
	                    <div class="d-flex align-items-center">
	                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light btn-active-color-primary">
	                            <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
	                            <span class="svg-icon svg-icon-2x">
	                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
	                                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3" /></svg>
	                            </span>
	                            <!--end::Svg Icon-->
	                        </button>
	                    </div>
	                    <!--end::Actions-->
	                </div>
	                <!--end::Wrapper-->
	            </div>
	            <!--end::Action group-->
	        </div>
	        <!--end::Container-->
	    </div>
	    <!--end::Toolbar-->
