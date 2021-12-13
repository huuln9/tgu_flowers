(function ($) {
    "use strict";

    var aaa = getRandomData('April 01 2017', 60);

    // Candlestick
    var ctx = document.getElementById("candlestick");
    ctx.height = 100;
    new Chart(ctx, {
        type: 'candlestick',
        data: {
            datasets: [{
                label: "CHRT - Chart.js Corporation",
                data: aaa,
                fractionalDigitsCount: 2,
            }]
        },
        options: {
            responsive: true,
            tooltips: {
                position: 'nearest',
                mode: 'index',
            },
        },
    });


    var bbb = getRandomData('May 01 2017', 60);

    // Candlestick
    var ctx = document.getElementById("custom-candlestick");
    ctx.height = 100;
    new Chart(ctx, {
        type: 'candlestick',
        data: {
            datasets: [{
                color: {
                    up: '#11f4',
                    down: '#fb84',
                    unchanged: '#999',
                },
                borderColor: '#000',
                borderWidth: 2,
                label: "CHRT - Chart.js Corporation",
                data: bbb,
                fractionalDigitsCount: 2,
            }]
        },
        options: {
            responsive: true,
            tooltips: {
                position: 'nearest',
                mode: 'index',
            },
        },
    });


    var ccc = getRandomData('May 01 2017', 60);

    // Candlestick
    var ctx = document.getElementById("long-tooltip");
    ctx.height = 100;
    new Chart(ctx, {
        type: 'candlestick',
        data: {
            datasets: [{
                label: "CHRT - Chart.js Corporation",
                data: ccc,
                fractionalDigitsCount: 2,
            }]
        },
        options: {
            responsive: true,
            tooltips: {
                position: 'nearest',
                mode: 'index',
            },
        },
    });




})(jQuery);