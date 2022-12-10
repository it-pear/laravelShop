@extends('/layout/admin')

@isset($propertyOption)
  @section('title', 'Редактирование варианта свойства' . $propertyOption->name)
  @else 
  @section('title', 'Создание варианта свойства')
@endisset



@section('content')

<div class="form-admin">
  <h2>
  @isset($propertyOption)
    Редактирование варианта свойства - ({{ $property->name }}) {{ $propertyOption->name }}
    @else 
    Создание варианта свойства ({{ $property->name }})
  @endisset
  </h2>
  <br>
  <form method="POST" enctype="multipart/form-data"
    @isset($propertyOption)
      action="{{ route('property-options.update', [$property, $propertyOption]) }}"
      @else 
      action="{{ route('property-options.store', [$property]) }}"
    @endisset
  >
    @isset($propertyOption)
      @method('PUT')
    @endisset
    @csrf

    <div class="form-group">
      <label>Название</label>
      <input type="text" name="name" class="form-control" required value="{{ old('name', isset($propertyOption) ? $propertyOption->name : null) }}">
      @include('layout.error', ['fieldName' => 'name'])
    </div>
    
    @isset($propertyOption)
      <button type="submit" class="btn btn-primary">Сохранить</button>
      @else 
      <button type="submit" class="btn btn-primary">Создать</button>
    @endisset
    
  </form>
</div>

@endsection