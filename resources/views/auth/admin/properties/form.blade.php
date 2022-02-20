@extends('/layout/admin')

@isset($category)
  @section('title', 'Редактирование категории' . $category->name)
  @else 
  @section('title', 'Создание категории')
@endisset



@section('content')

<div class="form-admin">
  <h2>
  @isset($category)
    Редактирование категории - {{ $category->name }}
    @else 
    Создание категории
  @endisset
  </h2>
  <br>
  <form method="POST" enctype="multipart/form-data"
    @isset($category)
      action="{{ route('categories.update', $category) }}"
      @else 
      action="{{ route('categories.store') }}"
    @endisset
  >
    @isset($category)
      @method('PUT')
    @endisset
    @csrf
    <div class="form-group">      
      <label>Код (наименование на английском)</label>
      <input type="text" pattern="[A-Za-z]{6,}" name="code" class="form-control" required value="{{ old('code', isset($category) ? $category->code : null) }}">
      @include('layout.error', ['fieldName' => 'code'])
    </div>
    <div class="form-group">
      <label>Название</label>
      <input type="text" name="name" class="form-control" required value="{{ old('name', isset($category) ? $category->name : null) }}">
      @include('layout.error', ['fieldName' => 'name'])
    </div>
    <div class="form-group">
      <label>Описание</label>
      <textarea name="description" class="form-control" rows="3">{{ old('description', isset($category) ? $category->description : null) }}</textarea>
      @include('layout.error', ['fieldName' => 'description'])
    </div>
    <div class="form-group">
      <label>Картинка</label>
      <input name="image" id="image" type="file" class="form-control-file" style="color: white;">
    </div>
    @isset($category)
      <button type="submit" class="btn btn-primary">Сохранить</button>
      @else 
      <button type="submit" class="btn btn-primary">Создать</button>
    @endisset
    
  </form>
</div>

@endsection