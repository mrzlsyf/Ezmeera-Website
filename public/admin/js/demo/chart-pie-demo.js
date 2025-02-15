// Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Nunito"),
    '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: [
            "Facial Wash Brightening",
            "Daily Sunscreen SPF 30",
            "Facial Cleanser",
            "Brightening Night Cream",
        ],
        datasets: [
            {
                data: [40, 30, 20, 10],
                backgroundColor: ["#EC2C7C", "#e74a3b", "#f6c23e", "#FFE9E9"],
                hoverBackgroundColor: [
                    "#EC2C7C",
                    "#e74a3b",
                    "#f6c23e",
                    "#FFE9E9",
                ],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            },
        ],
    },
    options: {
        maintainAspectRatio: false,
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
        },
        legend: {
            display: false,
        },
        cutoutPercentage: 80,
    },
});
