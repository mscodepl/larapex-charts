<script>
    var options =
    {
        chart: {
            type: '{!! $chart->type() !!}',
            height: {!! $chart->height() !!},
            width: '{!! $chart->width() !!}',
            toolbar: {!! $chart->toolbar() !!},
            zoom: {!! $chart->zoom() !!},
            fontFamily: '{!! $chart->fontFamily() !!}',
            foreColor: '{!! $chart->foreColor() !!}',
            sparkline: {!! $chart->sparkline() !!},
            @if($chart->stacked())
            stacked: {!! $chart->stacked() !!},
            @endif
        },
        plotOptions: {
            bar: {
                borderRadius: 5,
                horizontal:false
            }
        },
        colors: {!! $chart->colors() !!},
        series: {!! $chart->dataset() !!},
        dataLabels: {!! $chart->dataLabels() !!},
        @if($chart->labels())
            labels: {!! json_encode($chart->labels(), true) !!},
        @endif
        title: {
            text: "{!! $chart->title() !!}"
        },
        subtitle: {
            text: '{!! $chart->subtitle() !!}',
            align: '{!! $chart->subtitlePosition() !!}'
        },
        tooltip: {
            enabled: false,
        },
        xaxis: {
            categories: {!! $chart->xAxis() !!}
        },
        grid: {!! $chart->grid() !!},
        markers: {!! $chart->markers() !!},
        @if($chart->stroke())
            stroke: {!! $chart->stroke() !!},
        @endif
        legend: {
            show: {!! $chart->showLegend() !!}
        }
    }

    var chart = new ApexCharts(document.querySelector("#{!! $chart->id() !!}"), options);
    chart.render();

</script>
