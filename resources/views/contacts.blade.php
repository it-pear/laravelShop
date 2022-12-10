@extends('/layout/master')
@section('title', 'Контакты')
@section('content')

<div class="site__body">
  <div class="block-map block">
    <div class="block-slideshow block-slideshow--layout--with-departments block">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="block-slideshow__body">
              <div class="owl-carousel">
                <div class="block-map__body">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4647.562114236686!2d48.5774643791393!3d54.378517919613536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415d3edbdecd66c9%3A0x95703657fc20fe9f!2sZAMKOVED!5e0!3m2!1sru!2sru!4v1627379953365!5m2!1sru!2sru" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="block-map__body">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2258.480880925067!2d37.51577411581895!3d55.523992680492746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414aac0b7bffffff%3A0xe2a028795766fbd5!2z0KfQtdGH0LXRgNGB0LrQuNC5INC_0YAuLCA1MSDRjdGC0LDQtiAyLCDQktC-0YHQutGA0LXRgdC10L3RgdC60L7QtSwg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDExNzA0Mg!5e0!3m2!1sru!2s!4v1670699215105!5m2!1sru!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-header">
    <div class="page-header__container container">
      <div class="page-header__breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a> 
              <svg class="breadcrumb-arrow" width="6px" height="9px">
                <use xlink:href="images/sprite.svg"></use>
              </svg>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Контакты</li>
          </ol>
        </nav>
      </div>
      <div class="page-header__title">
        <h1>Контакты</h1>
      </div>
    </div>
  </div>
  <div class="block">
    <div class="container">
      <div class="card mb-0">
        <div class="card-body contact-us">
          <div class="contact-us__container">
            <div class="row">
              <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                <h4 class="contact-us__header card-title">Наш адрес</h4>
                <div class="contact-us__address">
                  <p>г. Ульяновск ул. Ульяновский проспект д.24, <br>ТЦ "СтройГрад" бутик-33</p>
                  <p>Москва, поселение Воскресенское, <br>Чечёрский проезд, 51</p>
                  <p><strong>Время работы:</strong><br>Пн-Пт с 8,30-19,00;<br>Сб с 8,30-18,00;<br>Вс с 8,30-17,00</p>
                  <p><strong>Телефон:</strong><br><a href="tel:+79093573212">+7 (909) 357-32-12</a></p>
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <h4 class="contact-us__header card-title">Напишите нам</h4>
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6"><label for="form-name">Ваше имя</label> <input type="text" id="form-name" class="form-control" placeholder="Иван"></div>
                    <div class="form-group col-md-6"><label for="form-email">Email</label> <input type="email" id="form-email" class="form-control" placeholder="email@example.ru"></div>
                  </div>
                  <div class="form-group"><label for="form-subject">Тема сообщение</label> <input type="text" id="form-subject" class="form-control" placeholder="Замки"></div>
                  <div class="form-group"><label for="form-message">Сообщение</label> <textarea id="form-message" class="form-control" rows="4"></textarea></div>
                  <button type="submit" class="btn btn-primary">Отправить сообщение</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection