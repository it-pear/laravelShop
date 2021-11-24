<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Заявка на покупку</title>
</head>
<body>
  
  <div style="display: flex;">
    <h2 style="margin: 3px 0;">Имя: {{ $data[0] }}</h2>
  </div>
  <div style="display: flex;">
    <h2 style="margin: 3px 0;">Номер: {{ $data[1] }}</h2>
  </div>
  <div style="display: flex;">
    <h2 style="margin: 3px 0;">Субъект страны: {{ $data[2] }}</h2>
  </div>
  <div style="display: flex;">
    <h2 style="margin: 3px 0;">Город: {{ $data[3] }}</h2>
  </div>
  <div style="display: flex;">
    <h2 style="margin: 3px 0;">Улица: {{ $data[4] }}</h2>
  </div>
  <div style="display: flex;">
    <h2 style="margin: 3px 0;">Дом: {{ $data[5] }}</h2>
  </div>
  <div style="display: flex;">
    <h2 style="margin: 3px 0;">Индекс: {{ $data[6] }}</h2>
  </div>
  <div style="display: flex;">
    <h2 style="margin: 3px 0;">Сообщение: {{ $data[7] }}</h2>
  </div>
  <div style="display: flex;">
    <h2 style="margin: 3px 0;">Способ доставки: {{ $data[8] }}</h2>
  </div>

</body>
</html>