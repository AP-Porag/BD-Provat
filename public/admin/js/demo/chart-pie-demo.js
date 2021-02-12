$(document).ready(function () {

    $.ajax({
        type: "GET",
        dataType: "json",
        url: '/admin/get/google/analytics/getTopBrowser',
        success: function (data) {
            console.log(data)
            this.data.labels = data.browser
            this.data.datasets.da = data.browser
        }
    });
})

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Dirt", "Referral", "Social"],
    datasets: [{
      data: [55, 30, 15],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

//pie chart Top browser
// function number_format(number, decimals, dec_point, thousands_sep) {
//     // *     example: number_format(1234.56, 2, ',', ' ');
//     // *     return: '1 234,56'
//     number = (number + '').replace(',', '').replace(' ', '');
//     var n = !isFinite(+number) ? 0 : +number,
//         prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
//         sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
//         dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
//         s = '',
//         toFixedFix = function (n, prec) {
//             var k = Math.pow(10, prec);
//             return '' + Math.round(n * k) / k;
//         };
//     // Fix for IE parseFloat(0.55).toFixed(0) = 0;
//     s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
//     if (s[0].length > 3) {
//         s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
//     }
//     if ((s[1] || '').length < prec) {
//         s[1] = s[1] || '';
//         s[1] += new Array(prec - s[1].length + 1).join('0');
//     }
//     return s.join(dec);
// }

//Area Chart Example copied
// (function ($) {
//
//     var charts = {
//         init: function () {
//             // Set new default font family and font color to mimic Bootstrap's default styling
//             Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
//             Chart.defaults.global.defaultFontColor = '#858796';
//
//             this.ajaxGetPostMonthlyData();
//
//         },
//
//         ajaxGetPostMonthlyData: function () {
//             var urlPath = 'http://' + window.location.hostname + ':8000/admin/get/google/analytics/getTopBrowser';
//             var request = $.ajax({
//                 method: 'GET',
//                 url: urlPath
//             });
//
//             request.done(function (response) {
//                 console.log(response.sessions);
//                 charts.createCompletedJobsChart(response);
//             });
//         },
//
//         /**
//          * Created the Completed Jobs Chart
//          */
//         createCompletedJobsChart: function (response) {
//
//             var ctx = document.getElementById("myPieChart");
//             var myPieChart = new Chart(ctx, {
//                 type: 'doughnut',
//                 data: {
//                     labels: response.browser,
//                     datasets: [{
//                         data: response.sessions,
//                         backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
//                         hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
//                         hoverBorderColor: "rgba(234, 236, 244, 1)",
//                     }],
//                 },
//                 options: {
//                     maintainAspectRatio: false,
//                     tooltips: {
//                         backgroundColor: "rgb(255,255,255)",
//                         bodyFontColor: "#858796",
//                         borderColor: '#dddfeb',
//                         borderWidth: 1,
//                         xPadding: 15,
//                         yPadding: 15,
//                         displayColors: false,
//                         caretPadding: 10,
//                     },
//                     legend: {
//                         display: false
//                     },
//                     cutoutPercentage: 80,
//                 },
//             });
//         }
//     };
//
//     charts.init();
//
// })(jQuery);
