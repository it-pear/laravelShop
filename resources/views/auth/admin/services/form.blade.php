@extends('/layout/admin')

@isset($service)
  @section('title', 'Редактирование услуги' . $service->name)
  @else 
  @section('title', 'Создание услуги')
@endisset



@section('content')

<div class="form-admin">
  <h2>
  @isset($service)
    Редактирование услуги - {{ $service->name }}
    @else 
    Создание услуги
  @endisset
  </h2>
  <br>
  <form method="POST" enctype="multipart/form-data"
    @isset($service)
      action="{{ route('services.update', $service) }}"
      @else 
      action="{{ route('services.store') }}"
    @endisset
   
  >
    @isset($service)
      @method('PUT')
    @endisset
    @csrf
    <div class="form-group">
      <label>Код (наименование на английском)</label>
      <input type="text" pattern="[A-Za-z0-9_]{3,}" name="code" class="form-control" required value="{{ old('code', isset($service) ? $service->code : null) }}">
      @include('layout.error', ['fieldName' => 'code'])
    </div>
    <div class="form-group">
      <label>Название</label>
      <input type="text" name="name" class="form-control" required value="{{ old('name', isset($service) ? $service->name : null) }}">
      @include('layout.error', ['fieldName' => 'name'])
    </div>
    
    <div class="form-group">
      <label>Описание</label>
      <textarea name="description" class="form-control" rows="3">{{ old('description', isset($service) ? $service->description : null) }}</textarea>
      @include('layout.error', ['fieldName' => 'description'])
    </div>
    <div class="form-group">
      <label>Цена</label>
      <input type="text" name="price" pattern="[0-9]{1,}" class="form-control" required value="{{ old('price', isset($service) ? $service->price : null) }}">
      @include('layout.error', ['fieldName' => 'price'])
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlFile1">Картинка</label>
      <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" style="color: white;">
    </div>
    @isset($service)
      <button type="submit" class="btn btn-primary">Сохранить</button>
      @else 
      <button type="submit" class="btn btn-primary">Создать</button>
    @endisset
    
  </form>
</div>

@endsection