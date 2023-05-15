<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-md">
        <form action="{{ route('contact.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="inputName" class="form-label">Nome</label>
                <input type="text" class="form-control" name="inputName" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Digite seu nome</div>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="inputEmail" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Digite seu email para contato.</div>
            </div>
            <div class="mb-3">
                <label for="inputSubject" class="form-label">Assunto da mensagem</label>
                <input type="text" class="form-control" name="inputSubject" aria-describedby="subjectHelp">
                <div id="subjectHelp" class="form-text">Digite o assunto do seu contato</div>
            </div>
            <div class="mb-3">
                <label for="inputMessage" class="form-label">Mensagem</label>
                <textarea name="inputMessage" class="form-control" aria-describedby="messageHelp"></textarea>
                <div id="messageHelp" class="form-text">Digite aqui sua Mensagem</div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>