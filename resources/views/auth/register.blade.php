@extends('layouts.main')

@section('content')   

    <div class="hero register">
        <div class="card">
            <header class="card-header">
                <h2 class="card-header-title text-center">
                  Register
                </h2>           
            </header>     
            <div class="card-content">  
                <div class="content">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {!! csrf_field() !!}

                        @if ($errors->has('name'))
                            <span class="error-span">
                                {{ $errors->first('name') }}
                            </span>
                        @endif
                        <div class="field">
                          <label class="label">Name</label>
                          <div class="control">
                            <input class="input" type="name" placeholder="Enter your name" name="name" required="" value="{{ old('name') }}">
                          </div>
                        </div>                        

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
                          <label class="label">Confirm Password</label>
                          <div class="control">
                            <input class="input"  placeholder="Confirm your password" id="confirm-password" type="password" name="password_confirmation" required>
                          </div>
                        </div>

                        <div class="control">
                            <button class="button is-primary is-fullwidth">Register Now</button>
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
