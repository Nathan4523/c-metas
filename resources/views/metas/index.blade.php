@extends('layouts.app')
@section('content')

<div class="sales-report-area mt-xl-5 mb-5">
    <div class="row">
        <div class="col-12 col-xl-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title justify-content-between d-flex">Metas pessoais <button class="btn pr-3 p-0 btn_default"><i class="fas fa-plus"></i></button></h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item justify-content-between d-flex">Cras justo odio <i
                                class="fas fa-check"></i></li>
                        <li class="list-group-item justify-content-between d-flex">Dapibus ac facilisis in <i
                                class="fas fa-check"></i></li>
                        <li class="list-group-item justify-content-between d-flex">Morbi leo risus <i
                                class="fas fa-check"></i></li>
                        <li class="list-group-item justify-content-between d-flex">Porta ac consectetur ac <i
                                class="fas fa-check"></i></li>
                        <li class="list-group-item justify-content-between d-flex">Vestibulum at eros <i
                                class="fas fa-check"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6 mt-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title justify-content-between d-flex">Metas empresariais <button class="btn pr-3 p-0 btn_default"><i class="fas fa-plus"></i></button></h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item justify-content-between d-flex">Cras justo odio <i
                                class="fas fa-check"></i></li>
                        <li class="list-group-item justify-content-between d-flex">Dapibus ac facilisis in</li>
                        <li class="list-group-item justify-content-between d-flex">Morbi leo risus</li>
                        <li class="list-group-item justify-content-between d-flex">Porta ac consectetur ac <i
                                class="fas fa-check"></i></li>
                        <li class="list-group-item justify-content-between d-flex">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-6 mt-3">
            <div class="card">
                <div class="card-body">
                <h4 class="header-title justify-content-between d-flex">Metas da carteira <button class="btn pr-3 p-0 btn_default"><i class="fas fa-plus"></i></button></h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item justify-content-between d-flex">Cras justo odio <i
                                class="fas fa-check"></i></li>
                        <li class="list-group-item justify-content-between d-flex">Dapibus ac facilisis in</li>
                        <li class="list-group-item justify-content-between d-flex">Morbi leo risus</li>
                    </ul>
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
