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
    <p style="margin: 3px 0;">Имя: {{ $data[0] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">Номер: {{ $data[1] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">Регион страны: {{ $data[2] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">Город: {{ $data[3] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">Улица: {{ $data[4] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">Дом: {{ $data[5] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">Индекс: {{ $data[6] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">Сообщение: {{ $data[7] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">
      Способ доставки: 
      @if ($data[8] === 1)
        Доставка по городу Ульяновск
      @elseif ($data[8] === 2)
        Доставка на почту (другой город)
      @else
        Доставка транспортной компанией (другой город)
      @endif
    </p>
  </div>

</body>
</html>