@extends('layouts.main')

@section('content')    
    <div class="hero register">
        <div class="card">
            <header class="card-header">
                <h2 class="card-header-title text-center">
                  Login
                </h2>           
            </header>     
            <div class="card-content">  
                <div class="content">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {!! csrf_field() !!}                                                

                        @if ($errors->has('email'))
                            <span class="error-span">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                        <div class="field">
                          <label class="label">Email</label>
                          <div class="control">
                            <input class="input" type="email" placeholder="Enter your email" name="email" required="" value="{{ old('email') }}">
                          </div>
                        </div>                        

                        @if ($errors->has('password'))
                            <span class="error-span">
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                        <div class="field">
                          <label class="label">Password</label>
                          <div class="control">
                            <input class="input"  placeholder="Enter your password" id="password" type="password" name="password" required>
                          </div>
                        </div> 

                        <div class="field">
                          <div class="control">
                            <label class="checkbox">
                              <input type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                              Remember Me
                            </label>
                          </div>
                        </div>                       

                        <div class="control">
                            <button class="button is-primary is-fullwidth">Login</button>
                        </div>

                        
                          <div class="control">
                            <a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password?</a>
                          </div>
             
                    </form>
                </div>
            </div>
        </div>      
    </div>
@endsection

@section('styles')
<style>
    #app{
        background: none;
    }
</style>
    
@stop
