<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body style="background-color: white !important;">
    	
    <nav class="row navbar navbar-light text-end" style="background-color: #980326">
        @auth
        <div class="text-right">
            <h1 class="display-1 text-center" ><mark class="bg-dark" style="color: rgb(206, 198, 198) !important">Listado de categorias</mark></h1><br>
            <button class="btn btn-outline-danger me-3"><a href="{{ route('recipe.create') }}" class="text-decoration-none">Crear Receta</a></button>
        </div>
    @else
        <div class="text-right">
            <h1 class="display-1 text-center" ><mark class="bg-dark" style="color: rgb(206, 198, 198) !important">Listado de categorias</mark></h1><br>
            <button class="btn btn-outline-danger me-3"><a href="{{ route('login') }}" class="text-decoration-none">Log in</a></button>
        @if (Route::has('register'))
            <button class="btn btn-outline-secondary me-3"><a href="{{ route('register') }}" class="text-decoration-none">Register</a></button>
        @endif
        </div>
        @endauth
    </nav>
    @endif
    <div>

        <h5 class="text-start"><mark class="bg-dark"><a class="link-danger alert-link text-decoration-none" href="{{route('recipe.index')}}">Ir al listado de recetas</a></mark></h5>
            <div class="text-center">
                @foreach ($categories as $category)
                <div class="card border-danger bg-ligth" style="display: inline-block; width: 100rem; margin: 1vw;">
                    <div class="card-body">
                        <h5 class="card-title">{{$loop->index+1}}. {{ $category->name }}</h5>
                    </div>
                    <img src="https://resources.workable.com/wp-content/uploads/2016/01/category-manager-640x230.jpg" class="card-img-top" alt="...">
                    <div>
                        <a href="{{route('category.show', ['category'=>$category])}}" class="btn btn-outline-danger mt-3 mb-1">Mira las recetas</a>
                    </div>
                </div>
                @endforeach
            </div>
            <br>
            @if (Route::has('login'))
            @auth
            <div class="text-center">
            </div>
            @endauth
            @endif
    </div>
</body>
