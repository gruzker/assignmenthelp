@extends('layouts.main')

@section('content')


    <div class="hero register">
        <div class="card">
            <header class="card-header">
                <h2 class="card-header-title text-center">
                  Reset Password
                </h2>           
            </header>     
            <div class="card-content">  
                <div class="content">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
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

                                           

                        <div class="control">
                            <button class="button is-primary is-fullwidth">Send Password Reset Link</button>
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
