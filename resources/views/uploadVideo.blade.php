<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Videos</title>
</head>

<body>
    <div>
        <h3>Escolha um vídeo</h3>
        <hr>
        <form action="{{ route('videos.uploadVideo') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div>
                <label for="title">Título:</label>
                <input type="text" name="title" id="title" placeholder="Insira um título">
            </div>
            <div>
                <label for="file">Selecione o vídeo:</label>
                <input type="file" name="video" id="video">
            </div>
            <hr>

        </form>
    </div>
</body>

</html>
