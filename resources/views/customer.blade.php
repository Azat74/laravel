<!DOCTYPE html>
<html>
<head>
    <title>Customer Details</title>
</head>
<body>



    <h1>{{ $customer->name }} </h1>

    <ul>
        @foreach ($customer->orders as $order)
        <li>{{ $order->name }}</li>
        @endforeach
    </ul>


</body>
</html>