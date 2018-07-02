$.fn.ChartPlugin = function (params) {
    var ID = this.attr('id');
    var options = $.extend({}, params);
    var result = options.resultData
    $('#loader').hide();

    var seriesArr = [], series = '', tablelength = result.tableHeader.length, datalength = result.tableData.length, yaxisArr = [], yaxis = '';
    if (datalength !== 0) {
        for (var lengthofkey = 1; lengthofkey < tablelength; lengthofkey++) {
            var chartlabel = result.tableHeader[lengthofkey].heading, label = Object.keys(result.tableData[0])[lengthofkey];
            if (label != "image") {
                var label1 = result.tableHeader[lengthofkey].seriesType, datavalues = result.tableData[0][label], realdata = JSON.parse('[' + datavalues + ']'),
                minimum = Math.min.apply(Math, realdata), maximum = Math.max.apply(Math, realdata), colorofseries = result.tableHeader[lengthofkey].color;
                colrsforstatic = ['#0D47A1', '#64B5F6']
                if (options.multipleYaxis == true) {
                    series = {
                        name: chartlabel,
                        type: label1,
                        yAxis: lengthofkey - 1,
                        data: realdata,
                        color: colorofseries
                    };
                } else {
                    series = {
                        name: chartlabel,
                        type: label1,
                        data: realdata,
                        color: colorofseries
                    };
                }
                var labelforyaxis = lengthofkey - 1;
                seriesArr.push(series);

                if (labelforyaxis !== 0 && options.multipleYaxis == true) {
                    yaxis = {
                        min: minimum,
                        max: maximum,
                        labels: {
                            "overflow": "justify",
                            step: 1,
                            style: {
                                color: Highcharts.getOptions().colors[labelforyaxis],
                                fontSize: '10px',
                                fontFamily: '"Lato", sans-serif'
                            }
                        },
                        title: {
                            text: (params.YaxisLabel != "") ? params.YaxisLabel : chartlabel,
                            x: 0,
                            y: 20,
                            style: {
                                color: Highcharts.getOptions().colors[labelforyaxis]
                            }
                        },
                        opposite: true
                    };
                    yaxisArr.push(yaxis);
                } else {
                    yaxis = {
                        min: minimum,
                        labels: {
                            "overflow": "justify",
                            step: 1,
                            style: {
                                color: Highcharts.getOptions().colors[labelforyaxis],
                                fontSize: '10px',
                                fontFamily: '"Lato", sans-serif'
                            }
                        },
                        title: {
                            text: (params.YaxisLabel != "") ? params.YaxisLabel : chartlabel,
                            x: 0,
                            y: 20,
                            style: {
                                color: Highcharts.getOptions().colors[labelforyaxis]
                            }
                        },
                    };
                    yaxisArr.push(yaxis);
                }
            }
        }
        if (options.multipleYaxis == false) {
            yaxisArr = yaxis;
        }
        var xaxis = Object.keys(result.tableData[0])[0], xaxisvalues = (result.tableData[0][xaxis]);
        Highcharts.chart(ID, {
            reflow: true,
            chart: {
                zoomType: 'x',
                defaultSeriesType: 'areaspline',
                events: {
                    load: function (event) {
                        event.target.reflow();
                    }
                }
            },
            title: {
                text: ''
            },
            xAxis: [{
                type: 'datetime',
                title: {
                    text: xaxis,
                },
                categories: xaxisvalues,
                labels: {
                    style: {
                        fontSize: '10px'
                    }
                },
                crosshair: true
            }],
            yAxis: yaxisArr,
            legend: {
                align: 'left',
                verticalAlign: 'bottom',
                itemDistance: 7,
                x: 25,
                y: 10,
                floating: true,
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                borderColor: '#CCC',
                borderWidth: 1,
                shadow: false,
                itemStyle: {
                    fontSize: '10px',
                    fontFamily: '"Lato", sans-serif'
                },
                enabled: (options.enableLegend == true) ? options.enableLegend : false
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0.5
                },
                series: {
                    //pointWidth: 5,
                    marker: {
                        enabled: false
                    }
                },
                area: {
                    lineColor: '#666666',
                    lineWidth: 1,
                    marker: {
                        //enabled: true,
                        lineWidth: 1,
                        lineColor: '#666666'
                    }
                },
                line: {
                    dataLabels: {
                        enabled: false
                    }, marker: {
                        enabled: false
                    },
                    enableMouseTracking: true
                }
            },
            tooltip: {
                //pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>'
                shared: true
            },
            series: seriesArr
        });
    } else {
        //$("#" + ID).html('<span style="position: absolute;bottom: 5px;right: 15px;font-style: italic;color: #666666;">No Data</span>').css({ "text-align": "center" });
        var chart1 = Highcharts.chart(ID, {
            chart: {
                reflow: true
            },
            title: {
                text: ''
            },
            xAxis: {
                enabled: false
            },
            legend: {
                enabled:false
            },
            yAxis: {
                labels: {
                    enabled: true,
                    formatter: function () {
                        return this.value;
                    }
                },
                min: 0,
                max: 100,
                title: {
                    text: '',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            },
            series: [{
                name: "",
                date: []
            }]
        }, function (chart) {
            var x = ((this.chartWidth / 2) - 55),
                y = (this.chartHeight / 2);
            chart.renderer.text('No Data Available', x, y)
                .css({
                    color: '#999999',
                    fontSize: '16px'
                })
                .add();
        });
    }
}