<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .invoice {
            max-width: 21cm;
            margin: 0 auto;
            padding: 1cm;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .invoice-header h1 {
            margin: 0;
            padding: 0;
        }

        .invoice-info {
            display: flex;
            justify-content: space-between;
        }

        .invoice-details {
            margin-top: 20px;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .invoice-table th,
        .invoice-table td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            text-align: left;
        }

        .invoice-footer {
            margin-top: 20px;
        }

        .invoice-footer p {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="invoice">
        <div class="invoice-header">
            <h1>Invoice</h1>
        </div>
        <div class="invoice-info">
            <div class="invoice-sender">
                <p>From:</p>
                <address>
                    Your Company Name<br>
                    Address Line 1<br>
                    Address Line 2<br>
                    City, State, ZIP<br>
                    Email: your@email.com<br>
                    Phone: (123) 456-7890
                </address>
            </div>
            <div class="invoice-recipient">
                <p>To:</p>
                <address>
                    Client Name<br>
                    Client Company<br>
                    Client Address Line 1<br>
                    Client Address Line 2<br>
                    Client City, State, ZIP<br>
                    Client Email: client@email.com<br>
                    Client Phone: (789) 123-4567
                </address>
            </div>
        </div>
        <div class="invoice-details">
            <p>Date: October 1, 2023</p>
            <p>Due Date: October 15, 2023</p>
        </div>
        <table class="invoice-table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Item 1</td>
                    <td>2</td>
                    <td>$50.00</td>
                    <td>$100.00</td>
                </tr>
                <tr>
                    <td>Item 2</td>
                    <td>3</td>
                    <td>$30.00</td>
                    <td>$90.00</td>
                </tr>
            </tbody>
        </table>
        <div class="invoice-footer">
            <p>Total Amount: $190.00</p>
        </div>
    </div>
</body>
</html>
