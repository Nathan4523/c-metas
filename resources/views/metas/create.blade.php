@extends('layouts.app')
@section('content')

<div class="sales-report-area mt-xl-5 mb-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Cadastrar nova lista</h4>
                    <div class="form-group">
                        <label for="example-text-input" class="col-form-label">Titulo</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <ul class="list-group list-group-flush p-0">
                            <li class="list-group-item justify-content-between d-flex pl-0 pr-0">
                                <input type="text" class="form-control" placeholder="Item 1">
                            </li>
                            <li class="list-group-item justify-content-between d-flex pl-0 pr-0">
                                <input type="text" class="form-control" placeholder="Item 1">
                            </li>
                        </ul>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn_salvar">Cadastrar</button>
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