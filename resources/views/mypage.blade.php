<!Doctype HTML>
<html>
<head>
    <title>My Page</title>
</head>
<body>

    <h1>My Web Page</h1>

    <?php if($var1 == 'Hamburger'){ ?>
        I love Hamburger<br>
    <?php } ?>
    @if($var1 == 'Hamburger')
        I love Hamburger<br>
    @endif
    {{ $var1 }}<br>
    {{ $var2 }}<br>
    {{ $var3 }}<br>

    <ul>
        @foreach($orders as $order)
        <li>{{$order->name }}</li>
        @endforeach
    </ul>

</body>
</html>