<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Детали</th>
        <th>Дата создания</th>
        <th>Дата обновления</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product['id'] }}</td>
        <td>{{ $product['name'] }}</td>
        <td>{{ $product['detail'] }}</td>
        <td>{{ $product['created_at'] }}</td>
        <td>{{ $product['updated_at'] }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
