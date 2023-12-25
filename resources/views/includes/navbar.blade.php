<nav class="navbar navbar-expand-lg bg-white border-bottom py-2 fixed-top">
  <div class="container-fluid">
    <a href="/" class="navbar-brand">
      <img src="/assets/logo/calculatorholic-logo.png" alt="Calculatorholic.com" style="height: 40px;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav__bar mt-lg-0 mt-md-0 mt-2" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">
            <i class="fa-solid fa-home fa-xl"></i><tag class="showonmobile pe-2">Home</tag>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('tools')}}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tools">
            <i class="fa-solid fa-screwdriver-wrench fa-xl"></i><tag class="showonmobile pe-2">Tools</tag>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>