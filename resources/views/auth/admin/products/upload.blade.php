@extends('/layout/admin')
@section('title', 'Товар')

@section('content')
<h2>Загрузка товаров с Excel</h2>
<br>
<div class="form-admin">
  <div class="form-admin-section">
    <div class="admin-section">
      <div class="col-12">
           @if (session()->has('success'))
            <div class="alert alert-success mb-3">{{ session()->get('success') }}</div>
          @endif
          @if (session()->has('warning'))
            <div class="alert alert-danger mb-3">{{ session()->get('warning') }}</div>
          @endif
      </div>
      <form action="{{ route('import.products') }}" enctype="multipart/form-data" method="GET"> 
        <div style="display: flex;">
          <h6>Загрузите файл: </h6>
          <input class="ml-4" type="file" name="excel" style="background-color: rgba(255,255,255,0.5);">
          <button type="submit" class="btn btn-info" style="margin-left: auto;">Загрузить товар</button>
        </div>
        @include('layout.error', ['fieldName' => 'excel'])
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