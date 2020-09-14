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

    <form action="{{ route('products.store') }}" class="p-5 bg-white rounded" enctype="multipart/form-data" method="post">
    @csrf

        <div class="form-group">
            <label for="title">Título do Produto</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="custom-file mb-3">
            <input type="file" name="images[]" id="customFileLangHTML" class="custom-file-input" multiple>
            <label for="customFileLangHTML" class="custom-file-label" data-browse="Enviar Imagens"></label>
        </div>

        <button type="submit" class="btn btn-primary">Inserir Produtos</button>
    
    </form>


</div>
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/0.3.6/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>