<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Getting Started with Chart JS with www.chartjs3.com</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
      }
      .chartMenu {
        width: 100vw;
        height: 40px;
        background: #1A1A1A;
        color: rgba(54, 162, 235, 1);
      }
      .chartMenu p {
        padding: 10px;
        font-size: 20px;
      }
      .chartCard {
        width: 100vw;
        height: calc(100vh - 40px);
        background: rgba(54, 162, 235, 0.2);
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .chartBox {
        width: 700px;
        padding: 20px;
        border-radius: 20px;
        border: solid 3px rgba(54, 162, 235, 1);
        background: white;
      }
      .op
      {
        text-align: end;
      }
      #type{
        border: 3px solid rgba(54, 162, 235, 1);
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
    {{-- {{print_r($yearlyPayments)}}
    @foreach ($yearlyPayments as $year => $totalProductPrice)
    <p>Year: {{ "'".$year."'," }} Total  Price: {{ $totalProductPrice."," }}</p>
    @endforeach --}}

    <div class="chartMenu">
    </div>
    <div class="chartCard">
      <div class="chartBox">
        <h3>Profit Chart</h3>
        <div class="op">
            {{-- <label for="cars">Choose a car:</label> --}}

            <select id="chartSelector" onchange="toggleCharts()">
            <option value="chart1">Yearly</option>
            <option value="chart2">Monthly</option>
            </select>
        </div>

        <div id="chart1Container" style="display: block;">
            <h2>Yearly Profit</h2>
            <canvas id="chart1"></canvas>
        </div>
        <div id="chart2Container" style="display: none;">
            <h2>Monthly Profit</h2>
            <canvas id="chart2"></canvas>
        </div>


      </div>
    </div>
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
    // setup

    function toggleCharts() {
            var chartSelector = document.getElementById('chartSelector');
            var chart1Container = document.getElementById('chart1Container');
            var chart2Container = document.getElementById('chart2Container');

            if (chartSelector.value === 'chart1') {
                location.reload(true);

                chart1Container.style.display = 'block';
                chart2Container.style.display = 'none';

            } else if (chartSelector.value === 'chart2') {
                chart1Container.style.display = 'none';
                chart2Container.style.display = 'block';
            }
        }

    var chart1data = {
      labels: [ @foreach ($yearlyPayments as $year => $totalProductPrice)
                '{{ $year }}',
            @endforeach
        ],
      datasets: [{

        label: 'Yearly Profit Chart',
        data: [
            @foreach ($yearlyPayments as $year => $totalProductPrice)
                    {{ $totalProductPrice }},
                @endforeach
        ],

        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1

      },
      {
        type: 'bar',
        label: 'Yearly Profit Bar',
        data: [
            @foreach ($yearlyPayments as $year => $totalProductPrice)
                    {{ $totalProductPrice }},
                @endforeach
        ],
        borderColor: 'rgb(255, 99, 132)',
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
     }]
    };

    // config
    var chart1config = {
      type: 'line',
      data:chart1data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block


    var ch1 = document.getElementById('chart1').getContext('2d');
new Chart(ch1, chart1config);




        //chart 2

        var chart2data = {
      labels: [
            @foreach ($monthlyPayments as $monthlyPayment)

                    '{{ $monthNames[$monthlyPayment['Month']] }} {{ $monthlyPayment['Year'] }}',

                    // {{ $monthlyPayment['Year'] }}
                    // {{ $monthlyPayment['Total Product Price'] }},

            @endforeach
        ],
      datasets: [{

        label: 'Monthly Profit Chart',
        data: [
            @foreach ($monthlyPayments as $monthlyPayment)

                    // '{{ $monthlyPayment['Month'] }} {{ $monthlyPayment['Year'] }}',
                    // {{ $monthlyPayment['Year'] }}
                    {{ $monthlyPayment['Total Product Price'] }},

            @endforeach
        ],

        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1

      },
      {
        type: 'bar',
        label: 'Monthly Profit Bar',
        data: [
            @foreach ($monthlyPayments as $monthlyPayment)

                    // '{{ $monthlyPayment['Month'] }} {{ $monthlyPayment['Year'] }}',
                    // {{ $monthlyPayment['Year'] }}
                    {{ $monthlyPayment['Total Product Price'] }},

            @endforeach
        ],
        borderColor: 'rgb(255, 99, 132)',
        backgroundColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        borderColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1
     }]
    };

    // config
    var chart2Config = {
      type: 'line',
      data:chart2data,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };


    // // Instantly assign Chart.js version
    // var chartVersion = document.getElementById('chartVersion');
    // chartVersion.innerText = Chart.version;

    // {{-- //monthly --}}

    var ch2 = document.getElementById('chart2').getContext('2d');
new Chart(ch2, chart2Config);

    // Instantly assign Chart.js version
    // var chartVersion = document.getElementById('chartVersion');
    // chartVersion.innerText = Chart.version;
    </script>









  </body>
</html>


{{-- <script>
    function redirectToPage(selectElement) {
      // Get the selected option's value
      var selectedValue = selectElement.value;

      // Define the URLs to redirect to based on selected values
      var redirectUrls = {
        'Yearly': '{{ url('chartjs')}}',
        'Monthly': '{{ url('admin-panel')}}',
            // 'opel': 'https://example.com/opel',
            // 'audi': 'https://example.com/audi',
      };

      // Redirect to the selected URL
      window.location.href = redirectUrls[selectedValue];
    }
  </script> --}}




