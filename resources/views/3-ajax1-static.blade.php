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
    let xhr= new XMLHttpRequest();
    xhr.open('GET', '/static/message.json');
    xhr.send();
    xhr.onreadystatechange=function (){
        document.getElementById('message').innerHTML= JSON.parse(xhr.responseText)['message'];
    }
</script>
</body>
</html>
