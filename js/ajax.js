$(document).ready(function(){
    var rating = 1;
    updateSld();
    $(document).on("click", "#next", function () {
        if($(this).attr('disabled')!= 'disabled'){
            updateSld($("#next").attr("data-location"), rating+=1);
        }
    });

    $(document).on("click", "#prev", function () {
        if($(this).attr('disabled')!= 'disabled'){
            updateSld($("#prev").attr("data-location"), rating-=1);
        }
    });
});

function updateSld(locataion = "", rating = 1) {
    console.log('Location: '+locataion);
    console.log('Rating: '+rating);
    var data = "";

    if(!!$("#prev").attr("data-location")){
        data += "prev=" + $("#prev").attr("data-location") + "&";
    }

    if(!!$("#next").attr("data-location")){
        data += "next=" + $("#next").attr("data-location")+ "&";
    }
    console.log(data);
    data += "count="    + $("#count").attr("data-id") + "&";
    data += "location=" + locataion + "&";
    data += "rating="   + rating    + "&";
    console.log(data);
    var pathArray = window.location.pathname.split('/');
    console.log(pathArray[1]);
    $.ajax({
        type: 'POST',
        url: '/'+pathArray[1]+'/hotelgo',
        data: data,
        dataType: 'JSON',
        success: function(data){
            console.log('Data: '+data.labels);
            console.log('COunt: '+data.count_posts);
            console.log('date: '+data.date);
            console.log('place: '+data.place);
            console.log('city: '+data.city);
            $('#sld').html(data.template);

            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: data.date,
                    datasets: [{
                        fill: false,
                        borderColor: 'red',
                        data: data.place,
                        backgroundColor: 'red',
                        pointRadius: 4,
                        borderWidth: 2,
                    }]
                },

                // Configuration options go here
                options: {
                    elements: {
                        line: {
                            tension: 0, // disables bezier curves
                        }
                    },
                    legend: {
                        display: false,
                        labels: {
                            fontColor: 'rgb(255, 99, 132)'
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                fontColor: "black",
                            },
                            gridLines: {
                                color: "black"
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                fontColor: "red",
                            },
                            gridLines: {
                                display:false,
                                color: "black"
                            }
                        }]
                    }

                }
            });
        },
        error: function (error) {
            console.log('error; ' + eval(error));
        }
    });
}