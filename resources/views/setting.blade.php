@extends('layouts.app')
@section('content')

<div class="setting_account mt-xl-5 mb-5">
    <div class="row">
        <div class="col-12 col-md-3 d-flex flex-column justify-content-center">
            <div class="nav flex-column nav-pills text-center pb-3" id="controles" role="tablist"
                aria-orientation="vertical">
                <a class="nav-link active w-75 align-self-center mb-4" id="v-pills-home-tab" data-toggle="pill"
                    href="#tab-dados" role="tab" aria-controls="tab-dados" aria-selected="true">Dados</a>

                <a class="nav-link w-75 align-self-center mb-4" id="v-pills-imagem-tab" data-toggle="pill"
                    href="#tab-foto" role="tab" aria-controls="v-pills-imagem" aria-selected="true">Foto</a>

                <a class="nav-link w-75 align-self-center mb-4" id="v-pills-senha-tab" data-toggle="pill"
                    href="#tab-senha" role="tab" aria-controls="v-pills-senha" aria-selected="true">Senha</a>
            </div>
        </div>
        
        <div class="col-12 col-xl-9">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="tab-dados" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <form action="#" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="page-header mb-2">
                                    <h5>Dados</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label>Nome:</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>E-mail:</label>
                                        <input type="email" class="form-control" value="{{ Auth::user()->email }}"
                                            readonly>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Telefone / Celular</label>
                                        <input class="form-control telefone" name="telefone" value="(11) 95327-9257">
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-start">
                                    <button type="submit" class="btn btn_salvar">Salvar</button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="tab-foto" role="tabpanel" aria-labelledby="v-pills-imagem-tab">
                            <div class="card card-logo border-white">
                                <div class="card-body text-center d-flex flex-column align-items-center p-0">
                                    <div class="bloco_perfil">
                                        <div class="avatar">
                                            <img src="{{asset('images/placeholder-perfil-user.png')}}" alt="Foto perfil"
                                                class="img-fluid">
                                        </div>
                                        <span>{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </div>

                            <form id="uploadImagem-form" class="px-3" action="#" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group text-center col mb-2">
                                        <input type="file" name="lk_foto_perfil" id="upload_foto">
                                        <button type="button" class="upload_foto" id="btn1"
                                            onclick="document.getElementById('upload_foto').click(); $('#btn1').text(`Imagem carregada`); $('#btn').addClass('uploadOk'); $('#btn_confirmar_send').addClass('d-block');"><i
                                                class="fas fa-upload"></i> Trocar de foto</button>
                                        <div class="modal-footer d-flex justify-content-start">
                                            <button type="submit" class="btn btn_salvar">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="tab-senha" role="tabpanel" aria-labelledby="v-pills-senha-tab">
                            <form action="#" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="page-header mb-2">
                                    <h5>Alterar senha</h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label>Senha atual:</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Nova senha:</label>
                                        <input type="password" class="form-control">
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Confirmar senha</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer d-flex justify-content-start">
                                    <button type="submit" class="btn btn_salvar">Alterar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<!-- start chart js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- start highcharts js -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- start zingchart js -->
<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];

</script>
<!-- all line chart activation -->
<script src="{{asset('js/line-chart.js')}}"></script>
<!-- all pie chart -->
<script src="{{asset('js/pie-chart.js') }}"></script>
@endsection
