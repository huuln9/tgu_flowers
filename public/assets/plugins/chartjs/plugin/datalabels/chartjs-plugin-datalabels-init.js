(function ($) {
    "use strict";


    var ctx = document.getElementById("chart-0");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
            datasets: [{
                label: '',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: 'end',
                    anchor: 'start'
                },
                backgroundColor: '#FF3784',
            },
            {
                label: '',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: 'center',
                    anchor: 'center'
                },
                backgroundColor: '#36A2EB',
            },

            {
                label: '',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: 'center',
                    anchor: 'center'
                },
                backgroundColor: '#4BC0C0',
            }]
        },
        options: {
            responsive: true,
            plugins: {
                datalabels: {
                    color: '#fff',
                }
            },
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true
                }]
            },
            tooltips: {
                enabled: false
            }
        }
    });

    var ctx = document.getElementById("chart-1");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
            datasets: [{
                label: '',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: 'end',
                    anchor: 'start'
                },
                backgroundColor: '#FF3784',
                borderColor: '#FF3784',
                fill: false
            },
            {
                label: '',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: 'center',
                    anchor: 'center'
                },
                backgroundColor: '#36A2EB',
                borderColor: '#36A2EB',
                fill: false
            },

            {
                label: '',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: 'center',
                    anchor: 'center'
                },
                backgroundColor: '#4BC0C0',
                borderColor: '#4BC0C0',
                fill: false
            }]
        },
        options: {
            responsive: true,
            plugins: {
                datalabels: {
                    backgroundColor: function (context) {
                        return context.dataset.backgroundColor;
                    },
                    color: '#fff',
                    borderRadius: 4,
                }
            },
            legend: {
                display: false
            },
            scales: {
                // xAxes: [{
                //     stacked: true
                // }],
                yAxes: [{
                    stacked: true
                }]
            },
            tooltips: {
                enabled: false
            }
        }
    });

    var ctx = document.getElementById("chart-2");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
            datasets: [{
                label: '',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: 'end',
                    anchor: 'start'
                },
                backgroundColor: 'rgba(255,55,132,0.2)',
                borderColor: '#FF3784',
                fill: true,
            },
            {
                label: '',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: 'center',
                    anchor: 'center'
                },
                backgroundColor: 'rgba(54,162,235,0.2)',
                borderColor: '#36A2EB',
                fill: true,
            },

            {
                label: '',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: 'center',
                    anchor: 'center'
                },
                backgroundColor: 'rgba(75,192,192,0.2)',
                borderColor: '#4BC0C0',
                fill: true,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                datalabels: {
                    backgroundColor: function (context) {
                        return context.dataset.borderColor;
                    },
                    color: '#fff',
                    borderRadius: 4,
                }
            },
            legend: {
                display: false
            },
            scales: {
                // xAxes: [{
                //     stacked: true
                // }],
                yAxes: [{
                    stacked: true
                }]
            },
            tooltips: {
                enabled: false
            }
        }
    });

    var ctx = document.getElementById("chart-3");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["A", "B", "C", "D"],
            datasets: [{
                label: '',
                data: [5, 6, 4.5, 5.5],
                datalabels: {
                    anchor: 'end'
                },
                backgroundColor: [
                    '#9966FF',
                    '#00A8C6',
                    '#379F7A',
                    '#CC2738',
                ],
            },
            {
                label: '',
                data: [5, 6, 4.5, 5.5],
                datalabels: {
                    // align: 'center',
                    anchor: 'center',
                    backgroundColor: null,
                    borderWidth: 0,
                },
                backgroundColor: [
                    '#FF3784',
                    '#36A2EB',
                    '#4BC0C0',
                    '#F77825',
                ],
            },

            {
                label: '',
                data: [5, 6, 4.5, 5.5,],
                datalabels: {
                    anchor: 'start'
                },
                backgroundColor: [
                    '#8B628A',
                    '#8FBE00',
                    '#606060',
                    '#36A2EB',
                ],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                datalabels: {
                    backgroundColor: function (context) {
                        return context.dataset.backgroundColor;
                    },
                    borderColor: 'white',
                    borderRadius: 25,
                    borderWidth: 2,
                    color: 'white',
                }
            },
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            }
        }
    });

    var ctx = document.getElementById("chart-4");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'polarArea',
        data: {
            labels: ["A", "B", "C", "D"],
            datasets: [{
                label: '',
                data: [7, 8, 9, 13, 17, 18, 19, 21, 22, 23],
                backgroundColor: [
                    '#9966FF',
                    '#00A8C6',
                    '#379F7A',
                    '#CC2738',
                    '#9966FF',
                    '#00A8C6',
                    '#379F7A',
                    '#CC2738',
                    '#9966FF',
                    '#00A8C6'
                ],
            },
            {
                label: '',
                data: [26, 31, 32, 33, 34, 38, 41, 44, 46, 50],
                backgroundColor: [
                    '#FF3784',
                    '#36A2EB',
                    '#4BC0C0',
                    '#F77825',
                    '#FF3784',
                    '#36A2EB',
                    '#4BC0C0',
                    '#F77825',
                    '#FF3784',
                    '#36A2EB'
                ],
            },

            {
                label: '',
                data: [25, 26, 28, 30, 35, 43, 44, 45, 48, 50],
                backgroundColor: [
                    '#8B628A',
                    '#8FBE00',
                    '#606060',
                    '#36A2EB',
                    '#8B628A',
                    '#8FBE00',
                    '#606060',
                    '#36A2EB',
                    '#8B628A',
                    '#8FBE00'
                ],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                datalabels: {
                    anchor: 'end',
                    backgroundColor: function (context) {
                        return context.dataset.backgroundColor;
                    },
                    borderColor: 'white',
                    borderRadius: 25,
                    borderWidth: 2,
                    color: 'white',
                }
            },
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            }
        }
    });


    var ctx = document.getElementById("chart-5");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ["A", "B", "C", "D", "E"],
            datasets: [{
                label: '',
                data: [79, 80, 59, 65, 63],
                backgroundColor: 'rgba(255,55,132,0.2)',
                borderColor: '#FF3784',
            },
            {
                label: '',
                data: [45, 32, 50, 55, 79, 70],
                backgroundColor: 'rgba(54,162,235,0.2)',
                borderColor: '#36A2EB',
            },

            {
                label: '',
                data: [8, 80, 23, 39, 69, 41],
                backgroundColor: 'rgba(75,192,192,0.2)',
                borderColor: '#4BC0C0',
            }]
        },
        options: {
            responsive: true,
            plugins: {
                datalabels: {
                    backgroundColor: function (context) {
                        return context.dataset.borderColor;
                    },
                    color: 'white',
                    padding: 4,
                }
            },
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            }
        }
    });


    var ctx = document.getElementById("chart-6");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'bubble',
        data: {
            labels: ["A", "B", "C", "D", "E"],
            datasets: [{
                label: '',
                data: [{
                    x: 100,
                    y: 0,
                    r: 10
                }, {
                    x: 60,
                    y: 30,
                    r: 20
                }, {
                    x: 40,
                    y: 60,
                    r: 25
                }, {
                    x: 80,
                    y: 80,
                    r: 50
                }, {
                    x: 20,
                    y: 30,
                    r: 25
                }, {
                    x: 0,
                    y: 100,
                    r: 5
                }],
                backgroundColor: 'rgba(255,55,132,1)',
                borderColor: '#FF3784',
            },
            {
                label: '',
                data: [{
                    x: 30,
                    y: 45,
                    r: 25
                }, {
                    x: 42,
                    y: 98,
                    r: 12
                }, {
                    x: 63,
                    y: 28,
                    r: 49
                }, {
                    x: 75,
                    y: 38,
                    r: 83
                }, {
                    x: 65,
                    y: 91,
                    r: 20
                }, {
                    x: 10,
                    y: 0,
                    r: 45
                }],
                backgroundColor: 'rgba(54,162,235,1)',
                borderColor: '#36A2EB',
            },

            {
                label: '',
                data: [{
                    x: 0,
                    y: 100,
                    r: 80
                }, {
                    x: 90,
                    y: 42,
                    r: 23
                }, {
                    x: 63,
                    y: 35,
                    r: 73
                }, {
                    x: 97,
                    y: 56,
                    r: 19
                }, {
                    x: 10,
                    y: 45,
                    r: 15
                }, {
                    x: 100,
                    y: 0,
                    r: 65
                }],
                backgroundColor: 'rgba(75,192,192,1)',
                borderColor: '#4BC0C0',
            }]
        },
        options: {
            responsive: true,
            plugins: {
                datalabels: {
                    anchor: function (context) {
                        var value = context.dataset.data[context.dataIndex];
                        return value.v < 50 ? 'end' : 'center';
                    },
                    align: function (context) {
                        var value = context.dataset.data[context.dataIndex];
                        return value.v < 50 ? 'end' : 'center';
                    },
                    color: function (context) {
                        var value = context.dataset.data[context.dataIndex];
                        return value.v < 50 ? context.dataset.backgroundColor : 'white';
                    },
                }
            },
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            }
        }
    });

    var ctx = document.getElementById("chart-7");
    ctx.height = 100;
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"],
            datasets: [{
                label: 'France',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: function (context) {
                        return context.active ? 'start' : 'center';
                    }
                },
                backgroundColor: '#FF3784',
                borderColor: '#FF3784',
                fill: false
            },
            {
                label: 'Canada',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: 'center',
                    anchor: 'center'
                },
                backgroundColor: '#36A2EB',
                borderColor: '#36A2EB',
                fill: false
            },

            {
                label: 'USA',
                data: [5, 6, 4.5, 5.5, 3, 6, 4.5, 6, 8, 3, 5.5, 4, 6, 9, 12, 4, 3, 6, 4.5, 6, 8, 4.5, 5, 6, 4.5, 5.5,],
                datalabels: {
                    align: function (context) {
                        return context.active ? 'end' : 'center';
                    }
                },
                backgroundColor: '#4BC0C0',
                borderColor: '#4BC0C0',
                fill: false
            }]
        },
        options: {
            responsive: true,
            hover: {
                mode: 'index',
                intersect: false
            },
            plugins: {
                datalabels: {
                    backgroundColor: function (context) {
                        return context.active ? context.dataset.backgroundColor : 'white';
                    },
                    borderColor: function (context) {
                        return context.dataset.backgroundColor;
                    },
                    borderRadius: function (context) {
                        return context.active ? 0 : 32;
                    },
                    borderWidth: 1,
                    color: function (context) {
                        return context.active ? 'white' : context.dataset.backgroundColor;
                    },
                    font: {
                        weight: 'bold'
                    },
                    formatter: function (value, context) {
                        value = Math.round(value * 100) / 100;
                        return context.active
                            ? context.dataset.label + '\n' + value + '%'
                            : Math.round(value);
                    },
                    offset: 8,
                    textAlign: 'center'
                }
            },
            legend: {
                display: false
            },
            scales: {
                // xAxes: [{
                //     stacked: true
                // }],
                yAxes: [{
                    stacked: true
                }]
            },
            tooltips: {
                enabled: false
            }
        }
    });





})(jQuery);