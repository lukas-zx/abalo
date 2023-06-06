<!DOCTYPE html>
<html lang="de" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Newsite</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://unpkg.com/vue@next"></script>
</head>

<body>

    <div id="app">
        <!--<siteheader></siteheader>
        <sitebody ></sitebody>
        <sitefooter></sitefooter>-->

        <sitebody v-if="showImpressum === ''"></sitebody>
        <impressum v-if="showImpressum === 'impressum'"></impressum>
        <sitefooter :show-impressum="showImpressum" @update:show-impressum="showImpressum = $event"></sitefooter>

    </div>

  <!--  <script type="text/x-template" id="sitebody-id">
        <div v-if="" id="impressum">

            Max Mustermann (Vertretungsberechtigter)<br>
            Abalo GmbH<br>
            Eupener Straße 70<br>
            52070 Aachen<br>
            E-Mail: abalo@web.de<br>
            Tel.:0212 4566788654 Kontaktdaten<br>
            Umsatzsteuernummer: 012345
            Streitbeilegungsplattform: <a href="http://ec.europa.eu/consumers/odr/\" target="_blank\">http://ec.europa.eu/consumers/odr/\</a><br>
            Die Europäische Kommission hat unter ec.europa.eu eine Europäische
            Online-Streitbeilegungsplattform (OS-Plattform) errichtet. Verbraucher*innen
            können die Plattform zur außergerichtlichen Beilegung einer Streitigkeit aus
            Online-Verträgen mit einem in der EU niedergelassenen Unternehmen nutzen.

        </div>
    </script>

    <footer id="footer">
    <script type="text/x-template" id="sitefooter-id"></script>
    </footer>
    -->


<script type="module" type="application/javascript">
    import siteheader from "/js/siteheader.js";
    import sitebody from "/js/sitebody.js";
    import sitefooter from "/js/sitefooter.js";
    import impressum from "/js/impressum.js";

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
    import Siteheader from "/js/siteheader.js";
    import Sitefooter from "/js/sitefooter.js";
    export default {
        components: {Sitefooter, Siteheader, Sitebody}
    }
</script>
