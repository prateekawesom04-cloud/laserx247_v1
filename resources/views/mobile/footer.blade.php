<nav class="aap_bar_1 text-white fixed-bottom border-top app_footer">
  <div class="container-fluid">
    <div class="row text-center">

      <div class="col">
        <a href="{{route('pages.sports-book')}}" class="d-flex flex-column align-items-center py-2 text-white text-decoration-none">
          <div>🎮</div>
          <small class="fw-semibold" style="font-size: 0.75rem;">Sports</small>
        </a>
      </div>

      <div class="col">
        <a href="{{route('pages.in-play')}}" class="d-flex flex-column align-items-center py-2 text-white text-decoration-none">
          <div>🔴</div>
          <small class="fw-semibold" style="font-size: 0.75rem;">In-Play</small>
        </a>
      </div>

      <div class="col">
        <a href="{{route('index')}}" class="d-flex flex-column align-items-center py-2 text-primary text-decoration-none">
          <div>🏠</div>
          <small class="fw-semibold" style="font-size: 0.75rem;">Home</small>
        </a>
      </div>

      <div class="col">
        <a href="{{route('pages.multi-market')}}" class="d-flex flex-column align-items-center py-2 text-white text-decoration-none">
          <div>💹</div>
          <small class="fw-semibold" style="font-size: 0.75rem;">Multi</small>
        </a>
      </div>

      @if (session('user_session'))
      <div class="col">
        <a href="{{route('user.profile')}}" class="d-flex flex-column align-items-center py-2 text-white text-decoration-none"
           data-bs-toggle="offcanvas" data-bs-target="#accountPanel" aria-controls="accountPanel">
          <div>🔐</div>
          <small class="fw-semibold" style="font-size: 0.75rem;">Account</small>
        </a>
      </div>
      @else
      <div class="col">
        <a href="{{ route('login') }}" class="d-flex flex-column align-items-center py-2 text-white text-decoration-none">
          <div style="font-size: 1.3rem;">🔐</div>
          <small class="fw-semibold" style="font-size: 0.75rem;">Login</small>
        </a>
      </div>
      @endif

    </div>
  </div>
</nav>

<div class="footer_height w-full"></div>

<script>
  $(document).ready(function(){
    $('nav a').removeClass('text-primary');
    $('nav a').addClass('text-white');
    $(`nav a[href='${window.location.href}']`).removeClass('text-white').addClass('text-primary');
  });
</script>
