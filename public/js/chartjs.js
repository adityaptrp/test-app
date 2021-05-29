

function customChartJs(id, type, data) {
    let config;

    if (type == 'line') {
        config = {
            type: "line",
            data: data,
            options: {
                plugins: {
                    legend: {   
                        labels: {
                            color: "white",
                        },
                        align: "end",
                        position: "bottom",
                    },
                    tooltip: {
                        mode: "index",
                        intersect: false,
                    },
                    title: {
                        display: true,
                        text: "Sales Chart",
                        position: 'top',
                        align: 'end',
                        padding: {
                            right: 50,
                            bottom: 15
                        },
                        color: "rgba(255,255,255,.7)",
                    },
                },
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        ticks: {
                            color: "rgba(255,255,255,.7)",
                        },
                        grid: {
                            color: false,
                            tickColor: false,
                            borderDash: [2],
                            borderDashOffset: [2],
                            borderColor: "rgba(255,255,255,.2",
                        },
                    },
                    y: {
                        ticks: {
                            color: "rgba(255,255,255,.7)",
                        },
                        grid: {
                            color: 'rgba(255,255,255,.2',
                            borderDash: [2],
                            borderDashOffset: [2],
                            borderColor: 'transparent',
                        },
                    }
                },
            },
        };
    }

    if (type == 'doughnut') {
        config = {
            type: 'doughnut',
            data: data,
            options: {
                cutout: '70%',
                layout: {
                    padding: 0
                },
                plugins: {
                    datalabels: {
                        formatter: function(value) {
                            return 'line1\nline2\n' + value;
                            // eq. return ['line1', 'line2', value]
                        }
                    },
                    legend: {   
                        // display: false,
                        labels: {
                            color: "black",
                        },
                        align: "center",
                        position: "bottom",
                    },
                },
                responsive: true
            }
        }
    }

    if (type == 'bar') {
        config = {
            type: "bar",
            data: data,
            options: {
                plugins: {
                    legend: {   
                        labels: {
                            color: "black",
                        },
                        align: "end",
                        position: "bottom",
                    },
                    tooltip: {
                        mode: "index",
                        intersect: false,
                    },
                    title: {
                        display: true,
                        text: "Orders Chart",
                        position: 'top',
                        align: 'end',
                        padding: {
                            right: 50,
                            bottom: 15
                        },
                        color: "rgba(0,0,0,.7)",
                    },
                },
                maintainAspectRatio: false,
                responsive: true,
                scales: {
                    x: {
                        ticks: {
                            color: "rgba(0,0,0,.7)",
                            display: false,
                        },
                        grid: {
                            color: false,
                            tickColor: false,
                            borderDash: [2],
                            borderDashOffset: [2],
                            borderColor: "rgba(0,0,0,.2",
                        },
                    },
                    y: {
                        ticks: {
                            color: "rgba(33, 37, 41, 0.7)",
                        },
                        grid: {
                            color: 'rgba(33, 37, 41, 0.2)',
                            borderDash: [2],
                            borderDashOffset: [2],
                            borderColor: 'transparent',
                        },
                    }
                },
            },
        };
    }

    // if (type == )
    var ctx = document.getElementById(id).getContext("2d");
    window.myLine = new Chart(ctx, config);
}