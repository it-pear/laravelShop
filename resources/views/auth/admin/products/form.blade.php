@extends('/layout/admin')

@isset($product)
  @section('title', 'Редактирование товара' . $product->name)
  @else 
  @section('title', 'Создание товара')
@endisset



@section('content')

<div class="form-admin">
  <h2>
  @isset($product)
    Редактирование товара - {{ $product->name }}
    @else 
    Создание товара
  @endisset
  </h2>
  <br>
  <form method="POST" enctype="multipart/form-data"
    @isset($product)
      action="{{ route('products.update', $product) }}"
      @else 
      action="{{ route('products.store') }}"
    @endisset
   
  >
    @isset($product)
      @method('PUT')
    @endisset
    @csrf
    <div class="form-group">
      <label>Код (наименование на английском)</label>
      <input type="text" pattern="[A-Za-z0-9_]{3,}" name="code" class="form-control" required value="{{ old('code', isset($product) ? $product->code : null) }}">
      @include('layout.error', ['fieldName' => 'code'])
    </div>
    <div class="form-group">
      <label>Название</label>
      <input type="text" name="name" class="form-control" required value="{{ old('name', isset($product) ? $product->name : null) }}">
      @include('layout.error', ['fieldName' => 'name'])
    </div>
    <div class="form-group">
      <label>Категория</label>
      <select name="category_id" id="" class="custom-select">
        @foreach($categories as $category)
          <option 
            value="{{ $category->id }}"
            @isset($product)
              @if($product->category_id == $category->id)
                selected
              @endif
            @endisset
          >
            {{ $category->name }}
          </option>
          
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Описание</label>
      <textarea name="description" class="form-control" rows="3">{{ old('description', isset($product) ? $product->description : null) }}</textarea>
      @include('layout.error', ['fieldName' => 'description'])
    </div>
    <div class="form-group">
      <label>Дополнительные атрибуты</label>
      <select name="property_id[]" class="custom-select" multiple>
        @foreach($properties as $property)
          <option 
            value="{{ $property->id }}"
            @isset($product)
              @if($product->properties->contains($property->id))
                selected
              @endif
            @endisset
          >
            {{ $property->name }}
          </option>
          
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Цена</label>
      <input type="text" name="price" pattern="[0-9]{1,}" class="form-control" required value="{{ old('price', isset($product) ? $product->price : null) }}">
      @include('layout.error', ['fieldName' => 'price'])
    </div>
    <div class="form-group">
      <label>Дополнительно</label>
      <div class="container">
        <div class="row">
          @foreach ([
            'hit' => 'Хит',
            'new' => 'Новинка',
            'recommend' => 'Рекомендуемые'
          ] as $field => $title)
            <div class="col ml-1 d-flex align-items-center">
                <span>{{ $title }}</span>
                <input type="checkbox" class="form-control form-control__check ml-2" id="{{ $field }}" name="{{ $field }}" 
                  @if( @isset($product) && $product->$field === 1)
                    checked="checked"
                  @endif
                >
                @include('layout.error', ['fieldName' => $field])
            </div>
          @endforeach
        </div>
      </div>
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlFile1">Главная картинка</label>
      <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" style="color: white;">
    </div>
    <div class="form-group">
      <div>
        <label for="exampleFormControlFile2">Изображения для галереи</label>
      </div>
      <input multiple="multiple" name="photos[]" type="file" id="exampleFormControlFile2" style="color: white;"> 
    </div>
    
    @isset($product)
      <button type="submit" class="btn btn-primary">Сохранить</button>
      @else 
      <button type="submit" class="btn btn-primary">Создать</button>
    @endisset
    
  </form>
</div>

@endsection