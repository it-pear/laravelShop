@extends('/layout/admin')
@section('title', 'Товар')

@section('content')
<h2>Загрузка товаров с Excel</h2>
<br>
<div class="form-admin">
  <div class="form-admin-section">
    <div class="admin-section">
      <form action=""> 
        <div style="display: flex;">
          <h6>Загрузите файл: </h6>
          <input class="ml-4" type="file" style="background-color: rgba(255,255,255,0.5);">
          <button type="submit" class="btn btn-info" style="margin-left: auto;">Загрузить товар</button>
        </div>
        <br>
        <div>
          <h6>Строгий пример структуры документа:</h6>
          <a target="_blanc" href="../images/upload.png"><img style="width: 100%;" src="../images/upload.png" alt=""></a>
        </div>
        <br>
      </form>
    </div>
  </div>
</div>

@endsection