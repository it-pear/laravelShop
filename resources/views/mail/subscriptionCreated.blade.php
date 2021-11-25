<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Заявка на покупку одного продукта</title>
</head>
<body>
  
  <div style="display: flex;">
    <p style="margin: 3px 0;">Имя: {{ $data[0] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">Номер: {{ $data[1] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">Товар: {{ $data[2] }}</p>
  </div>
  <div style="display: flex;">
    <p style="margin: 3px 0;">Адрес: {{ $data[3] }}</p>
  </div>

</body>
</html>