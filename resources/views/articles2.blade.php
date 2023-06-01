<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Artikelübersicht</title>
</head>
<body>
<h1>Warenkorb</h1>
<p id="p_cart"></p>
<h1>Artikelübersicht</h1>
<table>
    <thead>
    <tr>
        <td>Name</td>
        <td>Preis</td>
        <td>Beschreibung</td>
        <td>Creator ID</td>
        <td>Create Date</td>
        <td>Image</td>
        <td>Warenkorb</td>
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
                <img src="{{ $article['ab_image'] }}" alt="{{ $article['ab_image'] }}">
            </td>
            <td><button class="addToCart" id="{{ $article['id'] }}">+</button></td>
        </tr>
    @endforeach
    </tbody>
</table>
<script src="{{ asset('/js/cart.js') }}"></script>

</body>
</html>
