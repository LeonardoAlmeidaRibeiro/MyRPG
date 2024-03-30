@include('../layout.header')
<div class="content d-flex flex-column flex-column-fluid" style="padding: 10px !important" id="kt_content">
    <div id="kt_content_container" class="container-xxl">
        @include('../layout.perfil')
        <div class="g-5 gx-xxl-8">
            <div class="card">
                <div class="card-body">
                    <h6>Respositório de Documentos</h6>
                    <br>
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
            </div>
        </div>
    </div>
</div>
<br>
<script>
    function alert() {
        Swal.fire({
            imageUrl: 'https://www.aen.pr.gov.br/sites/default/arquivos_restritos/files/imagem/2022-03/id.jpg'
            , imageWidth: 800, // Dobrado em relação ao tamanho original
            imageHeight: 400, // Dobrado em relação ao tamanho original
            imageAlt: 'Custom image'
            , width: 1000, // Largura do modal aumentada para 1000 pixels
        });
    }

    function requerimento() {
        Swal.fire({
            imageUrl: 'https://mystudybay.com.br/storage/upload/requerimento_studybay_foto_03.JPG'
            , imageWidth: 800, // Dobrado em relação ao tamanho original
            imageHeight: 400, // Dobrado em relação ao tamanho original
            imageAlt: 'Custom image'
            , width: 1000, // Largura do modal aumentada para 1000 pixels
        });
    }

    function endereco() {
        Swal.fire({
            imageUrl: 'https://mockup-api.teespring.com/v3/image/fLt-q7oOwOP4soZ8JlkAyaRDMww/480/560.jpg'
            , imageWidth: 800, // Dobrado em relação ao tamanho original
            imageHeight: 400, // Dobrado em relação ao tamanho original
            imageAlt: 'Custom image'
            , width: 1000, // Largura do modal aumentada para 1000 pixels
        });
    }

</script>



@include('../layout.footer')
