<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body style="background-color: white !important;">
    @if (Route::has('login'))
    <nav class="row navbar navbar-light text-end" style="background-color: #980326">
        @auth
        <div class="text-right">
            <h1 class="display-1 text-center" ><mark class="bg-dark" style="color: rgb(206, 198, 198) !important">Listado de Recetas</mark></h1><br>
        </div>
    @else
        <div class="text-right">
            <h1 class="display-1 text-center" ><mark class="bg-dark" style="color: rgb(206, 198, 198) !important">Listado de Recetas</mark></h1><br>
            <button class="btn btn-outline-danger me-3"><a href="{{ route('login') }}" class="text-decoration-none">Log in</a></button>
        @if (Route::has('register'))
            <button class="btn btn-outline-secondary me-3"><a href="{{ route('register') }}" class="text-decoration-none">Register</a></button>
        @endif
        </div>
        @endauth
    </nav>
    @endif

    <h5 class="text-start"><mark class="bg-dark"><a class="link-danger alert-link text-decoration-none" href="{{route('recipe.index')}}">Ir al listado de categorias</a></mark></h5>
    <div class="text-center">
    <h5> {{ $recipe->title }}</h5>
    <p><h6>Descripción:</h6> <br> {{ $recipe->description }}</p>
    <h6>Imagen: </h6>
    <img src="http://localhost:8000/storage/{{$recipe->image}}" class="w-25" alt="..."><br>
    <h6>Los pasos són: </h6>
    @foreach ($recipe->steps as $step )
    <p> {{ $step->text }}</p>
    @endforeach
    <h6>Los ingredientes utilizados són: </h6>
    @foreach ($recipe->ingredients as $ingredients )
    <p> {{ $ingredients->text }}</p>
    @endforeach
    <p><h6>El Tiempo de preparación és: </h6>{{ $recipe->prepTime }}</p>
    <p><h6>El usuario es: </h6>{{ $recipe->user->name }}</p>

    @if(Auth::check())
            <form action = "{{route('comment.store')}}" method="POST">
                @csrf
                <h2>Caja de comentarios</h2>
                <textarea class="form-control" name="text" id="text" cols="30" rows="10"></textarea>
                <input type="hidden"  id="user_id" name="user_id" value="{{Auth::id()}}">
                <input type="hidden" id="recipe_id" name="recipe_id" value="{{$recipe->id}}">
            <button  class="btn btn-outline-danger me-3"type="submit">Envia</button>
            </form>
            @endif

    <h2>Caja de Comentarios:</h2>
    @foreach ($recipe->comments as $comment)
        <p><h6>Creador:</h6> {{$comment->user->name}} </p>
        <p><h6>Comentario:</h6>{{$comment->text}}</p>
    @endforeach


</body>
