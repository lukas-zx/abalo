<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ab_testdata</title>
</head>
<body>
    <ul>
        @foreach($ab_testdata as $entry)
            <li>{{ $entry['id'] }}: {{ $entry['ab_testname'] }}</li>
        @endforeach
    </ul>
</body>
</html>
