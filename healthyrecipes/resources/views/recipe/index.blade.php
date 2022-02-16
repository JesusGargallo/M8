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


    <h5 class="text-start"><mark class="bg-dark"><a class="link-danger alert-link text-decoration-none" href="{{route('category.index')}}">Ir al listado de categorias</a></mark></h5>
    @foreach ($recipes as $recipe)
    <div class="text-center">
    <div class="card border-danger bg-ligth" style="display: inline-block; width: 50rem; margin: 1vw;">
    <h5> {{ $recipe->title }}</h5>
    <p> {{ $recipe->description }}</p>
    <img src="http://localhost:8000/storage/{{$recipe->image}}" class="w-25" alt="..."><br>
    <a class="btn btn-dark mt-2 mb-2" href="{{ route('recipe.show', ['recipe'=>$recipe]) }}">Ir a la receta</a>
    </div>
    </div>
    @endforeach
</body>
