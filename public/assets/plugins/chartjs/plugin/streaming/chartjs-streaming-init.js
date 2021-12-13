(function ($) {
    "use strict";


    //Earning Graph Bottom
    var ctx = document.getElementById("canvas");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            datasets: [{
                label: 'A',
                borderColor: "#FF4961",
                borderWidth: "0",
                backgroundColor: "#FF4961",
                data: []
            }, {
                label: 'B',
                borderColor: "#4c84ff",
                borderWidth: "0",
                backgroundColor: "#4c84ff",
                data: []
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            legend: {
                display: false
            },
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    type: 'realtime',
                    display: false,
                    barPercentage: 0.5,
                    categoryPercentage: 0.5
                }],
                yAxes: [{
                    type: 'linear',
                    display: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'value'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            tooltips: {
                mode: 'nearest',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: false
            },
            plugins: {
                streaming: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 1000,
                    frameRate: 5,

                    onRefresh: function (chart) {
                        chart.data.datasets.forEach(function (dataset) {
                            dataset.data.push({
                                x: moment(),
                                y: Math.random() * 100
                            });
                        });
                    }
                }
            }
        }
    });

    //Earning Graph Bottom
    var ctx = document.getElementById("canvas1");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            datasets: [{
                label: 'A',
                backgroundColor: "#f00",
                borderColor: "#f00",
                fill: false,
                lineTension: 0,
                borderDash: [8, 4],
                data: []
            }, {
                label: 'B',
                backgroundColor: "#4c84ff",
                borderColor: "#4c84ff",
                fill: false,
                cubicInterpolationMode: 'monotone',
                data: []
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            legend: {
                display: false
            },
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    type: 'realtime',
                    display: false,
                }],
                yAxes: [{
                    type: 'linear',
                    display: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'value'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            tooltips: {
                mode: 'nearest',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: false
            },
            plugins: {
                streaming: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 1000,
                    frameRate: 5,

                    onRefresh: function (chart) {
                        chart.data.datasets.forEach(function (dataset) {
                            dataset.data.push({
                                x: moment(),
                                y: Math.random() * 100
                            });
                        });
                    }
                }
            }
        }
    });

    //Earning Graph Bottom
    var ctx = document.getElementById("canvas2");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            datasets: [{
                label: 'A',
                backgroundColor: "rgba(255,117,136,0.12)",
                borderColor: "#f00",
                fill: true,
                lineTension: 0,
                data: []
            }, {
                label: 'B',
                backgroundColor: "rgba(76,132,255,0.12)",
                borderColor: "#4c84ff",
                fill: true,
                lineTension: 0,
                data: []
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            legend: {
                display: false
            },
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    type: 'realtime',
                    display: false,
                }],
                yAxes: [{
                    type: 'linear',
                    display: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'value'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            tooltips: {
                mode: 'nearest',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: false
            },
            plugins: {
                streaming: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 1000,
                    frameRate: 5,

                    onRefresh: function (chart) {
                        chart.data.datasets.forEach(function (dataset) {
                            dataset.data.push({
                                x: moment(),
                                y: Math.random() * 100
                            });
                        });
                    }
                }
            }
        }
    });

    //Earning Graph Bottom
    var ctx = document.getElementById("canvas3");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            datasets: [{
                label: 'A',
                backgroundColor: "rgba(255,117,136,0.12)",
                borderColor: "#f00",
                fill: true,
                // lineTension: 0,
                data: []
            }, {
                label: 'B',
                backgroundColor: "rgba(76,132,255,0.12)",
                borderColor: "#4c84ff",
                fill: true,
                // lineTension: 0,
                data: []
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            legend: {
                display: false
            },
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    type: 'realtime',
                    display: false,
                }],
                yAxes: [{
                    type: 'linear',
                    display: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'value'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            tooltips: {
                mode: 'nearest',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: false
            },
            plugins: {
                streaming: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 1000,
                    frameRate: 5,

                    onRefresh: function (chart) {
                        chart.data.datasets.forEach(function (dataset) {
                            dataset.data.push({
                                x: moment(),
                                y: Math.random() * 100
                            });
                        });
                    }
                }
            }
        }
    });

    //Earning Graph Bottom
    var ctx = document.getElementById("canvas4");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            datasets: [{
                label: 'A',
                type: 'line',
                backgroundColor: "#f00",
                borderColor: "#f00",
                fill: false,
                lineTension: 0,
                borderDash: [8, 4],
                data: []
            }, {
                label: 'B',
                backgroundColor: "#4c84ff",
                borderColor: "#4c84ff",
                fill: false,
                cubicInterpolationMode: 'monotone',
                data: []
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            legend: {
                display: false
            },
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    type: 'realtime',
                    display: false,
                }],
                yAxes: [{
                    type: 'linear',
                    display: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'value'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            tooltips: {
                mode: 'nearest',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: false
            },
            plugins: {
                streaming: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 1000,
                    frameRate: 5,

                    onRefresh: function (chart) {
                        chart.data.datasets.forEach(function (dataset) {
                            dataset.data.push({
                                x: moment(),
                                y: Math.random() * 100
                            });
                        });
                    }
                }
            }
        }
    });

    //Earning Graph Bottom
    var ctx = document.getElementById("canvas5");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            datasets: [{
                label: 'A',
                type: 'line',
                backgroundColor: "#4caf50",
                borderColor: "#4caf50",
                fill: false,
                lineTension: 0,
                data: []
            },
            {
                label: 'B',
                type: 'line',
                backgroundColor: "#000",
                borderColor: "#000",
                fill: false,
                data: []
            }, {
                label: 'C',
                backgroundColor: "#4c84ff",
                borderColor: "#4c84ff",
                fill: false,
                cubicInterpolationMode: 'monotone',
                data: []       
            }, {
                label: 'D',
                backgroundColor: "#ff5722",
                borderColor: "#ff5722",
                fill: false,
                cubicInterpolationMode: 'monotone',
                data: []
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            legend: {
                display: false
            },
            title: {
                display: false,
                text: ''
            },
            scales: {
                xAxes: [{
                    type: 'realtime',
                    display: false,
                }],
                yAxes: [{
                    type: 'linear',
                    display: false,
                    scaleLabel: {
                        display: true,
                        labelString: 'value'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            tooltips: {
                mode: 'nearest',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: false
            },
            plugins: {
                streaming: {
                    duration: 20000,
                    refresh: 1000,
                    delay: 1000,
                    frameRate: 5,

                    onRefresh: function (chart) {
                        chart.data.datasets.forEach(function (dataset) {
                            dataset.data.push({
                                x: moment(),
                                y: Math.random() * 100
                            });
                        });
                    }
                }
            }
        }
    });


})(jQuery);
