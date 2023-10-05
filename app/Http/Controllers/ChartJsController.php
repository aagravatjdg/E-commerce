<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment_Model;

use DB;
use Carbon\Carbon;

class ChartJsController extends Controller
{
        public function index()
        {
           $years = Payment_Model::selectRaw('YEAR(created_at) as year')->pluck('year')->toArray();

             $aa=implode(', ', $years);
             "<br>";


                     $payments = Payment_Model::whereYear('created_at', $aa)->get();


                $distinctYears = Payment_Model::selectRaw('YEAR(created_at) as year')
                    ->distinct()
                    ->pluck('year');


                // Initialize an empty array to store the results
                    $yearlyPayments = [];

                    // Find the minimum and maximum years in the distinctYears array
                    $minYear = min($years);
                    $maxYear = max($years);

                    // Loop through the years from min to max
                    for ($year = $minYear; $year <= $maxYear; $year++) {
                        // Fetch payments for the current year
                        $payments = Payment_Model::whereYear('created_at', $year)->get();

                        // Calculate the sum of product prices for the current year
                        $totalProductPrice  = $payments->sum('product_price');

                        // Store the total product price for the current year in the results array
                         $yearlyPayments[$year] = $totalProductPrice ;

                         "Year: " . $year . ", Total Product Price: " . $totalProductPrice . "<br>";
                    }



        $distinctMonths = Payment_Model::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month')
        ->distinct()
        ->get();

    // Initialize an empty array to store the results
    $monthlyPayments = [];

    foreach ($distinctMonths as $distinctMonth) {
        $year = $distinctMonth->year;
        $month = $distinctMonth->month;

        // Fetch payments for the current year and month
        $payments = Payment_Model::whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->get();

        // Calculate the sum of product prices for the current month
        $totalProductPrice = $payments->sum('product_price');

        // Store the total product price for the current month in the results array
        $monthlyPayments[] = [
            'Year' => $year,
            'Month' => $month,
            'Total Product Price' => $totalProductPrice,
        ];

        // Output the result
          "Year: $year, Month: $month, Total Product Price: $totalProductPrice<br>";
    }

    $monthNames = [
        1 => 'January',
        2 => 'February',
        3 => 'March',
        4 => 'April',
        5 => 'May',
        6 => 'June',
        7 => 'July',
        8 => 'August',
        9 => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December',
    ];

    usort($monthlyPayments, function($a, $b) {
        if ($a['Year'] == $b['Year']) {
            return strcmp($a['Month'], $b['Month']);
        }
        return $a['Year'] - $b['Year'];
    });

    foreach ($monthlyPayments as $monthlyPayment) {
        $monthName = $monthNames[$monthlyPayment['Month']];
         $monthlyPayment['Year'] . " " . $monthName . " earning ";
         $monthlyPayment['Total Product Price'] . "<br>";
    }

    foreach ($monthlyPayments as $monthlyPayment)
{
    $monthlyPayment['Year']. "month:";
    $monthNames[$monthlyPayment['Month']]. "price:";
    $monthlyPayment['Total Product Price']. "<br>";
}
// dd($monthlyPayments);





//     foreach ($monthlyPayments as $monthlyPayment)
// {
//                     echo $monthlyPayment['Year'] ."month";
//                     echo $monthlyPayment['Month'] ."earning";
//                     echo $monthlyPayment['Total Product Price'] ."<br>";

// }



//     $records = Payment_Model::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month')->pluck('year')
//     ->toArray();


// dd($records);
// Now, $yearlyPayments contains your data grouped by year and month
// You can access it like $yearlyPayments[2022][1] to get data for January 2022





            return view('chartjs',compact('yearlyPayments','monthlyPayments','monthNames'));

        }
}
