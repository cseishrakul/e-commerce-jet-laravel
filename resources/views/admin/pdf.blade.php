<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PDF</title>
  </head>
  <body>
    <h1 class="">Order Details</h1>

    <br>
    <br>
    <br>
    <br>
    Customer Name: <h4>{{$order->name}}</h4>
    Customer Email: <h4>{{$order->email}}</h4>
    Customer Phone: <h4>{{$order->phone}}</h4>
    Customer Address: <h4>{{$order->address}}</h4>
    Customer Id: <h4>{{$order->user_id}}</h4>

    Product Name: <h4>{{$order->product_title}}</h4>
    Product Price: <h4>{{$order->price}}</h4>
    Payment Status: <h4>{{$order->payment_status}}</h4>
    Product Id: <h4>{{$order->product_id}}</h4>
  </body>
</html>
