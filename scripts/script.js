$(document).ready(function () {
    
    /* Doughnut Chart */
    var ctx = document.getElementById('chart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',

        // The data for our dataset
        data: {
            labels: ["Games", "Movies", "Music"],
            datasets: [{
                label: "Total items",
                backgroundColor: ["rgba(46, 204, 113, 0.8)", "rgba(52, 152, 219, 0.8)", "rgba(155, 89, 182, 0.8)"],
                borderColor: "rgba(44, 62, 80, 0.8)",
                borderWidth: 1,
                data: [5, 6, 2],
            }]
        },

        // Configuration options go here
        options: {}
    });
});
