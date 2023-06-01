<!-- Bilder laden und Warenkorb fehlen -->

<!doctype html>
<html lang="de" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Artikelübersicht</title>
    <script src="https://unpkg.com/vue@next"></script>

    <style>
        img {
            width: 100px;
            height: 50px;
        }
    </style>
</head>


<body>
<h1>Warenkorb:</h1>
<p id="p_cart">

</p>
<div id="app">
    <h1>Artikelübersicht:</h1>
    <div v-if="!searchValue" id="table-container">
    <script src="{{asset('./js/displayarticles.js')}}"></script>
    </div>
<h1>Suche:</h1>
    Suchbegriff:
    <input type="text" v-model="searchValue" @input="loadArticles">
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

        <tr v-for="item in items" >
            @{{ search }}
            <td>@{{ item.ab_name }}</td>
            <td >@{{item.ab_price}}</td>
            <td >@{{item.ab_description}}</td>
            <td >@{{item.ab_creator_id }}</td>
            <td >@{{item.ab_createdate}}</td>
            <td >@{{item.ab_image}}</td>
            <td>
                <img src="@{{ item.ab_image }}" alt="@{{ item.ab_image }}">
            </td>
            <td><button class="addToCart" id="@{{ item.id }}">+</button></td>
        </tr>
        </tbody>
    </table>
</div>


<script type="module">

    let appdata = {
        items : "",
        search: "",
        searchValue:""
    };

     let vm = Vue.createApp({
         data() {
             console.log(appdata)
             return appdata;
         },
         methods: {
             loadArticles() {

                 if (this.searchValue.length > 2) {
                     let xhr = new XMLHttpRequest();
                     xhr.open('GET', '/api/article?search=' + this.$data.searchValue, true);
                     xhr.setRequestHeader('Accept', 'application/json');

                     xhr.onload = () => {
                         if (xhr.readyState === 4) {
                             if (xhr.status === 200) {
                                 let json = JSON.parse(xhr.responseText);
                                 if (json.length === 0) {
                                     this.search = "Keine Suchergebnisse";
                                 } else {
                                     this.search = "Ergebnisse: "
                                 }
                                 this.items = json;
                                 console.log(json);
                             }

                         }
                     }
                     xhr.send()
                 }
             },
         }
    }).mount('#app');
</script>
<script src="{{ asset('./js/cart.js') }}"></script>
</body>
</html>
