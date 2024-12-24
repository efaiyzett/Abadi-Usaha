@extends('layouts.master')
@section('title', 'Aplikasi Laravel')
@section('content')
<div class="container">
    <h1 align="center">Chart Pesanan</h1>
    <div class="card-body">
        <div id="chartPesanan" class="mb-0 mt-0" style="display: block"></div>
    </div>
    <div class="mt-3 text-left">
        <a href="{{ url('tampil-pesanan') }}" class="btn btn-success">Kembali</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
    var labels = {!! json_encode($labels) !!};
    var layananA = {!! json_encode($layananAData) !!};
    var layananB = {!! json_encode($layananBData) !!};

    var options = {
        series: [
            {
                name: 'Sedot WC',
                data: layananA
            },
            {
                name: 'Pelancaran',
                data: layananB
            }
        ],
        chart: {
            type: 'bar',
            height: 350
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '55%',
                endingShape: 'rounded'
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        xaxis: {
            categories: labels,
            title: {
                text: 'Bulan'
            }
        },
        yaxis: {
            title: {
                text: '(Jumlah Pesanan)'
            }
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(val) {
                    return val + " pcs";
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chartPesanan"), options);
    chart.render();
</script>
@endsection
