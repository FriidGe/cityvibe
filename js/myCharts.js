// var ctx = document.getElementById("myChart").getContext('2d');
// var myChart = new Chart(ctx, {
//     type: 'line',
//     data: [{
//         x: 10,
//         y: 20
//     }, {
//         x: 15,
//         y: 10
//     }],
//     options: {
//         scales: {
//             yAxes: [{
//                 stacked: true
//             }]
//         }
//     }
// });


var DATA = [1, 15, 150];
var config = {
    type: "line",
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            fontFamily: "Montserrat",
            label:"Place",
            backgroundColor: "orange",
            // borderColor: window.chartColors.red,
            data: DATA,
            fill: false,
        }]
    },
    options: {
        legend: {
            display: false
        },
        responsive: true,
        title: {
            display: false,
            text: "Chart.js Line Chart"
        },
        tooltips: {
            mode: "index",
            intersect: false,
        },
        hover: {
            mode: "nearest",
            intersect: true
        },
        scales: {
            xAxes: [{
                display: true,
                ticks: {
                    fontFamily: "Montserrat"
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: "TOP",
                    fontFamily: "Montserrat",
                    fontColor: "black"
                },
                ticks: {
                    fontFamily: "Montserrat",
                    suggestedMin: 1,
                    min: Math.min.apply(this, DATA),
                    max: Math.max.apply(this, DATA),
                    reverse: true
                }
            }]
        }
    }
};

window.onload = function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    window.myLine = new Chart(ctx, config);
};

// window.onload = function() {
//     var charts = document.getElementsByClassName("piechart");
//
//     for (chart of charts) {
//         var ctx = chart.getContext('2d');
//
//         new Chart(ctx, config);
//     }
// }