<nav class="navbar ">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ route('index') }}">
      {{-- <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28"> --}}
      <img class="logo-img" src="/images/logo3.gif" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
      <span class="logo-text is-hidden-mobile">AssignmentHelp</span>
    </a>

    <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-github"></i>
      </span>
    </a>

    <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-twitter"></i>
      </span>
    </a>

    <div class="navbar-burger burger" data-target="navMenuExample">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenuExample" class="navbar-menu"> 
    <div class="navbar-end">
      <a class="navbar-item" href="{{ route('index') }}">
        Home
      </a>
      <a class="navbar-item" href="https://github.com/jgthms/bulma">
        How it Works
      </a>
      <a class="navbar-item" href="https://twitter.com/jgthms">
        FAQ
      </a>
      <div class="navbar-item">
        <div class="field is-grouped">
          <p class="control">
            <a id="twitter"
              class="button"              
              href="{{ route('login') }}">             
              <span>Login</span>
              <span class="icon">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
              </span>
            </a>
          </p>
          <p class="control">
            <a class="button is-primary" href="{{ route('register') }}">              
              <span>Become a Tutor</span>
              <span class="icon">
                <i class="fa fa-user-plus" aria-hidden="true"></i>
              </span>
            </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</nav>