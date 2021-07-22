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
  <form method="POST"
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
      <input type="text" pattern="[A-Za-z0-9_]{6,}" name="code" class="form-control" required value="@isset($product){{ $product->code }}@endisset">
      <!-- <small class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
      <label>Название</label>
      <input type="text" name="name" class="form-control" required value="@isset($product){{ $product->name }}@endisset">
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
        
        <option value="">wewer</option>
        <option value="">cvb</option>
      </select>
    </div>
    <div class="form-group">
      <label>Описание</label>
      <textarea name="description" class="form-control" rows="3" value="@isset($product){{ $product->description }}@endisset"></textarea>
    </div>
    <div class="form-group">
      <label>Цена</label>
      <input type="text" name="price" class="form-control" required value="@isset($product){{ $product->price }}@endisset">
    </div>
    <div class="form-group">
      <label for="exampleFormControlFile1">Картинка</label>
      <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" style="color: white;">
    </div>
    @isset($product)
      <button type="submit" class="btn btn-primary">Сохранить</button>
      @else 
      <button type="submit" class="btn btn-primary">Создать</button>
    @endisset
    
  </form>
</div>

@endsection