<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Newsite</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://unpkg.com/vue@next"></script>
    <script src="{{ asset('/js/cookiecheck.js') }}"></script>
</head>

<body>
<div id="app">
<header>
    <script type="text/x-template" id="siteheader-id"></script><div id="nav"></div>
    <script src="{{ asset('/js/navigation.js') }}"></script>

</header>

<script type="text/x-template" id="sitebody-id">

</script>
<h1>Warenkorb</h1>
<script src="{{ asset('/js/cart.js') }}"></script>
<h1>Artikel</h1>

<h1>Neuen Artikel hinzufügen</h1>
<script src="{{ asset('/js/newarticle.js') }}"></script>


<div v-if="showarea">

    <div>Max Mustermann (Vertretungsberechtigter)<br>
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
</div>

<footer id="footer">
    <h1>Footer</h1>
</footer>
</div>
<script type="text/x-template" id="impressum-templatetext-id">
    <a v-on:click="showarea=!showarea" href="#">Impressum</a>
</script>
<script type="module">
    import ImpressumText from "/public/js/impressum.js";

    let vm = Vue.createApp({
        components: {
            ImpressumText
        }
    }).mount('#app')
</script>
</body>
</html>
