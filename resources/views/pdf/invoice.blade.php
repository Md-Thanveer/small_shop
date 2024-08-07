<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        /* Define your invoice styling here */
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .invoice {
            width: 100%;
            max-width: 800px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
            border: 1px solid #e0e0e0;
        }
        .invoice h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
            font-size: 24px;
            text-transform: uppercase;
        }
        .invoice p {
            margin: 0;
            color: #555555;
        }
        .invoice .header, .invoice .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice .footer {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table th, table td {
            border: 1px solid #d0d0d0;
            padding: 12px;
            text-align: left;
        }
        table th {
            background-color: #005f6b;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
        }
        table td {
            background-color: #f9f9f9;
        }
        .total {
            font-size: 20px;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
            color: #333333;
        }
        .highlight {
            background-color: #e8f4f8;
            font-weight: bold;
            color: #005f6b;
        }
    </style>
</head>
<body>
    <div class="invoice">
        <div class="header">
            <h2>Invoice for Order #{{ $order->id }}</h2>
            <p>Date: {{ $order->created_at->format('Y-m-d') }}</p>
        </div>
        
        <!-- Display order items in a table -->
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order_items as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>₹ {{ number_format($item->product->price, 2) }}</td>
                    <td class="highlight">₹ {{ number_format($item->qty * $item->product->price, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="total">
            <p>Total: ₹ {{ number_format($order->total, 2) }}</p>
        </div>
        
        <div class="footer">
            <p>Thank you for your purchase!</p>
        </div>
    </div>
</body>
</html>
