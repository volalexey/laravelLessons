<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('products.addProduct') }}" method="POST">
        @csrf
        <label for="name">Название продукта:</label>
        <input type="text" id="name" name="name" required>

        <label for="detail">Описание продукта:</label>
        <textarea id="detail" name="detail" required></textarea>

        <button type="submit">Добавить продукт</button>
    </form>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
</body>
</html>
