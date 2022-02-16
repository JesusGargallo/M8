<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body style="background-color: white !important;">
<nav class="row navbar navbar-light text-end" style="background-color: #980326">
<div class="text-right">
    <h1 class="display-1 text-center" ><mark class="bg-dark" style="color: rgb(206, 198, 198) !important">Creación Recetas</mark></h1>
</div>
</nav>

<h5 class="text-start"><mark class="bg-dark"><a class="link-danger alert-link text-decoration-none" href="{{route('category.index')}}">Ir al listado de categorias</a></mark></h5>
<div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            Session::get('success')
        </div>
        @endif

        <form method="POST" action="{{ route('recipe.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label>Descripción</label>
                <input type="text" class="form-control" name="description"
                    id="description">
            </div>

            <div class="form-group">
                <label>Imagen</label>
                <input type="file" class="form-control" name="image"
                    id="image">
            </div>

            <div class="form-group">
                <label></label>
                <input type="hidden" value="{{Auth::id()}}" class="form-control" name="user_id"
                    id="user_id">
            </div>

            <div class="form-group" id="container1">
            
                <label>Pasos</label>
                <button class="add_form_field btn btn-dark btn-block mt-3 mb-1" type="button">Añadir</button>
                <input type="text" class="form-control" name="pasos[]"
                    id="pasos">
            </div>

            <div class="form-group" id="container2">
                <label>Ingredientes</label>
                <button class="add_form_field2 btn btn-dark btn-block mt-3 mb-1" type="button">Añadir</button>
                <input type="text" class="form-control" name="ingrediente[]"
                    id="ingrediente">
            </div>

            <div class="form-group">
                <label>Tiempo de preparación</label>
                <input type="number" class="form-control" name="prepTime"
                    id="prepTime">
            </div>

            <div class="form-group">
                <label>Categoria</label>
                <select type="text"  value="1" class="form-control" name="category_id"
                    id="category_id">
                @foreach (\App\Models\Category::all() as $category)
                <option class="card-title" value="{{ $category->id }}">{{$category->name}}</option>
                @endforeach
            </div>

           

            <input type="submit" name="send" value="Crear Receta" class="btn btn-dark btn-block mt-3 mb-1">
        </form>
    </div>


    <script>
        $(document).ready(function() {
    var max_fields = 20;
    var wrapper = $("#container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div "><input class="form-control type="text" name="pasos[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('Superastes los limites')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
    </script>

<script>
        $(document).ready(function() {
    var max_fields = 20;
    var wrapper = $("#container2");
    var add_button = $(".add_form_field2");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div "><input class="form-control type="text" name="ingrediente[]"/><a href="#" class="delete">Delete</a></div>'); //add input box
        } else {
            alert('Superastes los limites')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
    </script>
</body>