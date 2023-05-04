<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3-ajax1-static.html</title>
</head>
<body>
<p id="message">

</p>

<script>

        window.setInterval(function () {
            let xhr= new XMLHttpRequest();
            xhr.open('GET', '/static/message.json');

            xhr.onreadystatechange=function () {
                document.getElementById('message').innerHTML= JSON.parse(xhr.responseText)['message'];
                }

            xhr.send();
            }, 1000);
</script>
</body>
</html>
