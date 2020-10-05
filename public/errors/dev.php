<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Error</title>
</head>
<body>

<h1>Информация по ошибке</h1>
<p><b>Номер ошибки: </b><?= $errno; ?></p>
<p><b>Сообщение: </b><?= $errstr; ?></p>
<p><b>Файл: </b><?= $errfile; ?></p>
<p><b>Строка: </b><?= $errline; ?></p>

</body>
</html>
