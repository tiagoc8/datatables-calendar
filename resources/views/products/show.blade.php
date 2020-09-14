<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2>{{$product->title}}</h2>

    @foreach($product->images as $image)
    
        <img src="{{env('APP_URL')}}uploads/{{$image->path}}" alt="">
        
    @endforeach

</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/0.3.6/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>