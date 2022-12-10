@extends('/layout/admin')

@isset($property)
  @section('title', 'Редактирование свойства' . $property->name)
  @else 
  @section('title', 'Создание свойства')
@endisset



@section('content')

<div class="form-admin">
  <h2>

  @isset($property)
    Редактирование свойства - {{ $property->name }}
    @else 
    Создание свойства
  @endisset
  </h2>
  <br>
  <form method="POST" enctype="multipart/form-data"

    @isset($property)
      action="{{ route('properties.update', $property) }}"
      @else 
      action="{{ route('properties.store') }}"
    @endisset
  >
    @isset($property)
      @method('PUT')
    @endisset
    @csrf

    <div class="form-group">
      <label>Название</label>
      <input type="text" name="name" class="form-control" required value="{{ old('name', isset($property) ? $property->name : null) }}">
      @include('layout.error', ['fieldName' => 'name'])
    </div>
    
    @isset($property)

      <button type="submit" class="btn btn-primary">Сохранить</button>
      @else 
      <button type="submit" class="btn btn-primary">Создать</button>
    @endisset
    
  </form>
</div>

@endsection