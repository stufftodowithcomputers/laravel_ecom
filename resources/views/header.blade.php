<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Ecom</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/products">Products</a>
      </li>
    </ul>
    @if(Session::has('user'))
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/logout">Logout</a>
        </div>
      </div>
    @else
      <a class="mr-4" href="/login">Login</a>
    @endif
    <span class="navbar-text">
      Cart (<span id='count'></span>)
    </span>
  </div>
</nav>

<script>
$(document).ready(() => {
  setInterval(() => {
    let len = JSON.parse(window.localStorage.cart).length
    $('#count').text(len);
  }, 100)
})
</script>