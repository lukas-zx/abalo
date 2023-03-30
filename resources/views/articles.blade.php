<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Artikelübersicht</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <td>Name</td>
        <td>Preis</td>
        <td>Beschreibung</td>
        <td>Creator ID</td>
        <td>Create Date</td>
        <td>Image</td>
    </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{{ $article['ab_name'] }}</td>
            <td>{{ $article['ab_price'] }}</td>
            <td>{{ $article['ab_description'] }}</td>
            <td>{{ $article['ab_creator_id'] }}</td>
            <td>{{ $article['ab_createdate'] }}</td>
            <td>
                <img src="{{ $article['ab_image'] }}" alt="{{ $article['ab_image'] }}" width="100px" height="50px">
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
