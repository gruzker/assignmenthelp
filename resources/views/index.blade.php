@extends('layouts.main')

@section('content')
	<div class="hero">
		<div class="card">
			<header class="card-header">
			    <h2 class="card-header-title text-center">
			      Submit your assignment and get free quote from our expert tutors
			    </h2>		    
			</header>	  
		  	<div class="card-content">  
				<div class="content">
			      	<form action="{{ route('assignment.store') }}" method="Post" enctype="multipart/form-data">
				      	{!! csrf_field() !!}

				      	@if ($errors->has('question'))
                            <span class="error-span">
                                {{ $errors->first('question') }}
                            </span>
                        @endif
						<div class="field">
						  <label class="label">Question</label>
						  <div class="control">
						    <textarea class="textarea" placeholder="Enter your question here" name="question" required=""></textarea>
						  </div>
						</div>

						@if ($errors->has('file.*'))
                            <span class="error-span">
                                {{ $errors->first('file.*') }}
                            </span>
                        @endif
						<div class="field">
						  <label class="label">Files(Optional)</label>
						  <div class="control">
						    <input class="input" type="file" multiple="" name="file[]">
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
						    <input class="input" type="email" placeholder="Enter you email" name="email" required="">
						  </div>
						</div>
						<div class="control">
							<button class="button is-primary is-fullwidth">Submit & Get FREE Quotes</button>
						</div>				
					</form>
		    	</div>
		  	</div>
		</div>		
	</div>
@stop