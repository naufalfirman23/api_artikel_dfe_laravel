<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar API dan Web</title>
</head>
<body>
    <h1>INI TAMPILAN DI WEB</h1>
    @foreach($data as $content)
        <p>Judul Artikel : {{ $content->judul }} </p>
        <p>Konten : {{ $content->konten }} </p>
        <p>Nama Editor : {{ $content->editor->nama }}</p>
    @endforeach
</body>
</html>