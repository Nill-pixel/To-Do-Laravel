<!DOCTYPE html>
<html>

<head>
    <title>Recuperação de Senha</title>
</head>

<body>
    <p>Você está recebendo este e-mail porque recebemos um pedido de redefinição de senha para sua conta.</p>
    <p>Clique no link abaixo para redefinir sua senha:</p>
    <a href="{{ url('reset-password/' . $token) }}">Redefinir Senha</a>
    <p>Se você não solicitou uma redefinição de senha, nenhuma ação adicional é necessária.</p>
    <p>Atenciosamente,<br>{{ config('app.name') }}</p>
</body>

</html>
