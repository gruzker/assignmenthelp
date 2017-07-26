<nav class="navbar ">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ route('index') }}">
      {{-- <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28"> --}}
      {{-- <img class="" src="/images/new.gif" alt="Bulma: a modern CSS framework based on Flexbox"> --}}
      {{-- <img class="logo-img" src="/images/logo3.gif" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28"> --}}
      <span class="logo-text">AssignmentHelp</span>
    </a>    

    <div class="navbar-burger burger" data-target="navMenuExample" v-bind:class="{ 'is-active': isMenuActive }" @click="isMenuActive=!isMenuActive">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div id="navMenuExample" class="navbar-menu" v-bind:class="{ 'is-active navMenuMobile': isMenuActive }"> 
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
            <a class="button is-primary register-btn" href="{{ route('register') }}">              
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