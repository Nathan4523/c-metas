@extends('layouts.app')
@section('content')
<!-- sales report area start -->
<div class="sales-report-area mt-5 mb-5">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Chamado #1</h4>
                    [fazer tipo um chat]
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sales report area end -->
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
