<!DOCTYPE html>
<html lang="de" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Newsite</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
   <!-- <script src="https://unpkg.com/vue@3.1.1/dist/vue.global.prod.js"></script>-->
    <script src="https://unpkg.com/vue@next"></script>
    <script src="{{ asset('/js/cookiecheck.js') }}"></script>
</head>

<body>
<div>
    <header>
    <script type="text/x-template" id="siteheader-id"></script><div id="nav"></div>
    <script src="{{ asset('/js/navigation.js') }}"></script>
    </header>



    <h1>Warenkorb</h1>
    <script src="{{ asset('/js/cart.js') }}"></script>
    <h1>Artikel</h1>

    <h1>Neuen Artikel hinzufügen</h1>
    <script src="{{ asset('/js/newarticle.js') }}"></script>

    <div id="app">
        <sitebody></sitebody>
    </div>
    <div v-if="showarea">

        Max Mustermann (Vertretungsberechtigter)<br>
        Abalo GmbH<br>
        Eupener Straße 70<br>
        52070 Aachen<br>
        E-Mail: abalo@web.de<br>
        Tel.:0212 4566788654 Kontaktdaten<br>
        Umsatzsteuernummer: 012345
        Streitbeilegungsplattform: <a href=\"http://ec.europa.eu/consumers/odr/\" target=\"_blank\">http://ec.europa.eu/consumers/odr/\</a><br>
        Die Europäische Kommission hat unter ec.europa.eu eine Europäische
        Online-Streitbeilegungsplattform (OS-Plattform) errichtet. Verbraucher*innen
        können die Plattform zur außergerichtlichen Beilegung einer Streitigkeit aus
        Online-Verträgen mit einem in der EU niedergelassenen Unternehmen nutzen.

    </div>
    <script type="text/x-template" id="sitebody-id">
        <a v-on:click="showarea =!showarea"  href="">Impressum</a>
    </script>
    <footer id="footer">
    <h1>Footer</h1>
    </footer>
</div>

<script type="module">
    import siteheader from "/js/siteheader.js";
    import sitebody from "/js/sitebody.js";
    import sitefooter from "/js/sitefooter.js";
    import impressum from "/js/siteheader.js";

    let vm = Vue.createApp({
        components: {
            siteheader,
            sitebody,
            sitefooter,
            impressum
        },


    }).mount('#app')
</script>
</body>
</html>
<script type="module">
    import Sitebody from "/js/sitebody.js";
    export default {
        components: {Sitebody}
    }
</script>
