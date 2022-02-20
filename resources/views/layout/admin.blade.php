<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title>Админ-панель</title>
  <link rel="icon" type="image/png" href="images/favicon.png"><!-- fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendor/owl-carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="/vendor/photoswipe/photoswipe.css">
  <link rel="stylesheet" href="/vendor/photoswipe/default-skin/default-skin.css">
  <link rel="stylesheet" href="/vendor/select2/css/select2.min.css">
  <link rel="stylesheet" href="/css/style.css"><!-- font - fontawesome -->
  <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css"><!-- font - stroyka -->
  <link rel="stylesheet" href="/fonts/stroyka/stroyka.css">
</head>

<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 navbar-admin">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{ route('index') }}">Замковед</a>
      <ul class="nav flex-row">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            <span class="title">Главная</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('orders.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
              <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
              <polyline points="13 2 13 9 20 9"></polyline>
            </svg>
            <span class="title">Заказы</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
              <circle cx="9" cy="21" r="1"></circle>
              <circle cx="20" cy="21" r="1"></circle>
              <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg>
            <span class="title">Товар</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('services.index') }}">
            <svg height="24px" viewBox="0 0 569 569.54905" width="24px" fill="white" xmlns="http://www.w3.org/2000/svg"><path d="m1.527344 52.246094 37.984375 66.46875c1.28125 2.246094 3.425781 3.871094 5.933593 4.5l35.4375 8.859375 121.542969 121.542969 13.429688-13.425782-123.445313-123.441406c-1.214844-1.21875-2.738281-2.082031-4.40625-2.5l-34.050781-8.542969-32.339844-56.625 27.726563-27.726562 56.648437 32.371093 8.546875 34.050782c.414063 1.671875 1.28125 3.199218 2.496094 4.414062l123.445312 123.445313 13.425782-13.429688-121.542969-121.542969-8.859375-35.417968c-.628906-2.511719-2.253906-4.660156-4.5-5.945313l-66.472656-37.980469c-3.707032-2.109374-8.371094-1.484374-11.394532 1.527344l-37.980468 37.984375c-3.0546878 3.003907-3.71875 7.675781-1.625 11.414063zm0 0"/><path d="m396.3125 187.144531-208.902344 208.90625-13.429687-13.429687 208.90625-208.902344zm0 0"/><path d="m150.847656 403.441406c-1.71875-2.859375-4.804687-4.605468-8.140625-4.605468h-56.972656c-3.332031 0-6.421875 1.746093-8.136719 4.605468l-28.488281 47.476563c-1.808594 3.007812-1.808594 6.769531 0 9.78125l28.488281 47.476562c1.714844 2.855469 4.804688 4.605469 8.136719 4.605469h56.972656c3.335938 0 6.421875-1.75 8.140625-4.605469l28.484375-47.476562c1.808594-3.011719 1.808594-6.773438 0-9.78125zm-13.511718 90.347656h-46.226563l-22.789063-37.980468 22.789063-37.984375h46.226563l22.789062 37.984375zm0 0"/><path d="m456.0625 227.914062c62.714844.210938 113.730469-50.460937 113.941406-113.175781.03125-9.546875-1.140625-19.054687-3.488281-28.308593-1.265625-5.089844-6.417969-8.1875-11.507813-6.921876-1.671874.417969-3.195312 1.28125-4.414062 2.496094l-59.109375 59.070313-46.898437-15.628907-15.640626-46.886718 59.109376-59.121094c3.707031-3.710938 3.703124-9.722656-.007813-13.429688-1.222656-1.222656-2.761719-2.089843-4.445313-2.503906-60.820312-15.402344-122.605468 21.414063-138.007812 82.230469-2.339844 9.226563-3.507812 18.710937-3.476562 28.230469.023437 7.476562.792968 14.929687 2.308593 22.25l-207.957031 207.953125c-7.320312-1.511719-14.773438-2.28125-22.246094-2.308594-62.933594 0-113.949218 51.015625-113.949218 113.949219 0 62.929687 51.015624 113.945312 113.949218 113.945312 62.929688 0 113.945313-51.015625 113.945313-113.945312-.023438-7.476563-.796875-14.929688-2.308594-22.25l49.785156-49.785156 21.773438 21.773437c3.710937 3.707031 9.71875 3.707031 13.429687 0l4.746094-4.75c4.164062-4.136719 10.894531-4.136719 15.058594 0 4.160156 4.148437 4.167968 10.882813.019531 15.042969-.003906.003906-.011719.011718-.019531.019531l-4.746094 4.746094c-3.707031 3.707031-3.707031 9.71875 0 13.425781l113.273438 113.273438c29.792968 30.066406 78.316406 30.285156 108.382812.492187 30.0625-29.792969 30.28125-78.320313.488281-108.382813-.160156-.164062-.324219-.328124-.488281-.492187l-113.273438-113.269531c-3.707031-3.707032-9.71875-3.707032-13.425781 0l-4.746093 4.746094c-4.167969 4.140624-10.894532 4.140624-15.0625 0-4.15625-4.148438-4.167969-10.882813-.019532-15.039063.007813-.007813.015625-.011719.019532-.019531l4.75-4.75c3.707031-3.707032 3.707031-9.71875 0-13.425782l-21.773438-21.773437 49.785156-49.785156c7.320313 1.511719 14.773438 2.285156 22.246094 2.308593zm37.308594 322.851563c-6.898438-.011719-13.738282-1.257813-20.195313-3.683594l74.160157-74.164062c11.191406 29.769531-3.867188 62.972656-33.636719 74.164062-6.496094 2.441407-13.382813 3.691407-20.328125 3.683594zm-107.574219-246.792969c-10.515625 12.542969-8.867187 31.238282 3.675781 41.75 11.023438 9.238282 27.089844 9.230469 38.101563-.027344l106.5625 106.65625c1.15625 1.160157 2.238281 2.382813 3.285156 3.625l-81.1875 81.1875c-1.246094-1.042968-2.46875-2.125-3.628906-3.285156l-106.644531-106.652344c10.515624-12.542968 8.867187-31.238281-3.675782-41.75-11.023437-9.242187-27.09375-9.230468-38.105468.023438l-15.191407-15.191406 81.613281-81.492188zm38.34375-95.503906-215.410156 215.367188c-2.363281 2.359374-3.3125 5.785156-2.507813 9.023437 13.027344 51.160156-17.886718 103.195313-69.050781 116.21875-51.160156 13.027344-103.195313-17.886719-116.222656-69.050781-13.023438-51.160156 17.890625-103.195313 69.054687-116.222656 15.476563-3.9375 31.691406-3.9375 47.167969 0 3.238281.792968 6.65625-.15625 9.023437-2.503907l215.359376-215.371093c2.359374-2.359376 3.308593-5.785157 2.496093-9.019532-12.9375-50.5625 17.5625-102.039062 68.125-114.980468 9.554688-2.441407 19.4375-3.378907 29.28125-2.765626l-50.089843 50.109376c-2.542969 2.539062-3.433594 6.300781-2.296876 9.710937l18.988282 56.976563c.949218 2.832031 3.175781 5.058593 6.011718 6l56.976563 18.992187c3.40625 1.136719 7.167969.25 9.710937-2.289063l50.089844-50.089843c.113282 1.8125.171875 3.605469.171875 5.390625.265625 52.175781-41.8125 94.6875-93.988281 94.957031-8.066406.039063-16.105469-.953125-23.917969-2.953125-3.238281-.808594-6.664062.136719-9.023437 2.496094h.050781zm0 0"/><path d="m491.273438 477.578125-13.429688 13.429687-94.953125-94.953124 13.425781-13.429688zm0 0"/></svg>
            <span class="title">Услуги</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('properties.index') }}">
            <svg height="24px" version="1.1" viewBox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title/><desc/><g fill="none" fill-rule="evenodd" id="Action-/-38---Action,-parameters,-params,-preferences,-setting,-settings,-tools-icon" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1">
              <path d="M7,16.5 C8.65685425,16.5 10,17.8431458 10,19.5 C10,21.1568542 8.65685425,22.5 7,22.5 C5.34314575,22.5 4,21.1568542 4,19.5 C4,17.8431458 5.34314575,16.5 7,16.5 Z M17,9 C18.6568542,9 20,10.3431458 20,12 C20,13.6568542 18.6568542,15 17,15 C15.3431458,15 14,13.6568542 14,12 C14,10.3431458 15.3431458,9 17,9 Z M7,1.5 C8.65685425,1.5 10,2.84314575 10,4.5 C10,6.15685425 8.65685425,7.5 7,7.5 C5.34314575,7.5 4,6.15685425 4,4.5 C4,2.84314575 5.34314575,1.5 7,1.5 Z" id="Path" stroke="white" stroke-width="2"/>
              <path d="M2,4.5 L4,4.5 M9.99685445,4.5 L22,4.5" id="Path" stroke="white" stroke-width="2"/>
              <path d="M2,19.5 L4,19.5 M9.99685445,19.5 L22,19.5" id="Path" stroke="white" stroke-width="2"/>
              <path d="M22,12 L20,12 M14.0031455,12 L2,12" id="Path" stroke="white" stroke-width="2"/></g>
            </svg>
            <span class="title">Свойства</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('categories.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
              <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
              <polyline points="2 17 12 22 22 17"></polyline>
              <polyline points="2 12 12 17 22 12"></polyline>
            </svg>
            <span class="title">Категории</span>
          </a>
        </li>
      </ul>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="{{ route('get-logout') }}">Выйти</a>
      </li>
    </ul>
  </nav>




  <div class="container-fluid admin-dashboard">
    <div class="row admin-row">
      <!-- <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          


        </div>
      </nav> -->


      <main role="main" class="col-md-12 ml-sm-auto col-lg-12 pt-3 px-4">
        @yield('content')
      </main>
    </div>
  </div>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>

  <!-- Graphs -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        datasets: [{
          data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#007bff',
          borderWidth: 4,
          pointBackgroundColor: '#007bff'
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: false
            }
          }]
        },
        legend: {
          display: false,
        }
      }
    });
  </script>


  <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;"></div>
  <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;"></div>
</body>

<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="/vendor/nouislider/nouislider.min.js"></script>
<script src="/vendor/photoswipe/photoswipe.min.js"></script>
<script src="/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="/vendor/select2/js/select2.min.js"></script>
<script src="/js/number.js"></script>
<script src="/js/main.js"></script>
<script src="/js/header.js"></script>
<script src="/vendor/svg4everybody/svg4everybody.min.js"></script>
</body>

</html>