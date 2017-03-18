@extends('layouts.app')

@section('content')
<div class="container">
    <main>
    	<div class="dodaj section box">
    		<header>Dodaj meme</header>
    		<div class="content">
    			<form method="POST">
    				<label>
    					<p>Naslov</p>
    					<input type="text" name="naslov" placeholder="Nekaj izvirnega ;)">
    				</label>
    				<label>
    					<p>URL</p>
    					<input type="text" name="url" placeholder="http://">
    				</label>
    				{{ csrf_field() }}
    				<button type="submit" class="btn btn-red">Dodaj</button>
    			</form>
    		</div>
    	</div>
    </main>
    <aside>
        @include('layouts.sidebar')
    </aside>
</div>
@endsection
