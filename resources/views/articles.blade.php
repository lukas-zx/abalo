<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Artikelübersicht</title>
    <script src="https://unpkg.com/vue@next"></script>
    <script type="module">
        import * as displayArticles from '/js/displayarticles.js';
    </script>
    <style>
        img {
            width: 100px;
            height: 50px;
        }
    </style>
</head>
<body>
<h1>Warenkorb</h1>
<p id="p_cart"></p>
<h1>Artikelübersicht</h1>
<div id="app">
    <input type="text" v-model="searchvalue">
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
        <tbody v-if="searchvalue.length < 3">
        </tbody>
    </table>
</div>
<script>
    let appdata = {
        searchvalue: ""
    };

    let vm = Vue.createApp({
        data() {
            return appdata;
        }
    }).mount('#app');
</script>
<script src="{{ asset('/js/cart.js') }}"></script>
<script>
    let xhr = new XMLHttpRequest();
    //let url = '/api/article/?search=' + searchvalue + '&limit=' + limit;
    xhr.open('GET', '/api/article/?search=reifen&limit=2');
    xhr.setRequestHeader('Accept', 'application/json');
    xhr.send();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            let
            let items = JSON.parse(xhr.response);
            items.forEach(function(value, key) {
            })
        }
    }
</script>
</body>
</html>
