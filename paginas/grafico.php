<script type="text/javascript">
    var arrayResultado = $.parseJSON('<?php echo json_encode($arrayResultado); ?>');
    var data = [];
    for(op of arrayResultado){
        var x = op; var d = [];
        for(c of x){
            d.unshift(c);
        }
        data.push(d);
    }
    $(function () {
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                type: 'category',
                labels: {
                    rotation: -45,
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Porcentagem de Risco'
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                pointFormat: 'Probabilidade do risco <b>{point.y:.1f} millions</b>'
            },
            series: [{
                name: 'Avaliações',
                // data: [
                //     ['Semana 1', 23.7],
                //     ['Semana 2', 16.1],
                //
                // ],
                data: data,
                dataLabels: {
                    enabled: true,
                    rotation: -90,
                    color: '#FFFFFF',
                    align: 'right',
                    format: '{point.y:.1f}', // one decimal
                    y: 10, // 10 pixels down from the top
                    style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
                }
            }]
        });
    });
</script>