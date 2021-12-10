<!-- Opsional Css   -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Opsional Css   -->
<script src="{{ asset('js/app.js') }}"></script>



<!-- Opsional Css   -->
<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

<!-- Opsional Css   -->
<script type="text/javascript" charset="UTF-8" src="{{ asset('datatables/datatables.js') }}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"
integrity="sha512-foIijUdV0fR0Zew7vmw98E6mOWd9gkGWQBWaoA1EOFAx+pY+N8FmmtIYAVj64R98KeD2wzZh1aHK0JSpKmRH8w=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $('.repeater').repeater({
        show: function() {
            $(this).slideDown();
        }
    });

    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    $(document).ready(function() {
        $('#myTable').DataTable();
    });

    const labelsBarChart = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
    ];
    const dataBarChart = {
        labels: labelsBarChart,
        datasets: [{
            label: "My First dataset",
            backgroundColor: "hsl(252, 82.9%, 67.8%)",
            borderColor: "hsl(252, 82.9%, 67.8%)",
            data: [0, 10, 5, 2, 20, 30, 45],
        }, ],
    };

    const configBarChart = {
        type: "bar",
        data: dataBarChart,
        options: {},
    };

    var chartBar = new Chart(
        document.getElementById("chartBar"),
        configBarChart
    );


    const dataDoughnut = {
        labels: ["JavaScript", "Python", "Ruby"],
        datasets: [{
            label: "My First Dataset",
            data: [300, 50, 100],
            backgroundColor: [
                "rgb(133, 105, 241)",
                "rgb(164, 101, 241)",
                "rgb(101, 143, 241)",
            ],
            hoverOffset: 4,
        }, ],
    };

    const configDoughnut = {
        type: "doughnut",
        data: dataDoughnut,
        options: {},
    };

    var chartBar = new Chart(
        document.getElementById("chartDoughnut"),
        configDoughnut
    );

    const labels = ["January", "February", "March", "April", "May", "June"];
    const data = {
        labels: labels,
        datasets: [{
            label: "My First dataset",
            backgroundColor: "hsl(252, 82.9%, 67.8%)",
            borderColor: "hsl(252, 82.9%, 67.8%)",
            data: [0, 10, 5, 2, 20, 30, 45],
        }, ],
    };

    const configLineChart = {
        type: "line",
        data,
        options: {},
    };

    var chartLine = new Chart(
        document.getElementById("chartLine"),
        configLineChart
    );
</script>
