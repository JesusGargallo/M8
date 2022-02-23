<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body style="background-color: white !important;">
    	
    <div>

        <!--<h5 class="text-start"><mark class="bg-dark"><a class="link-danger alert-link text-decoration-none" href="{{route('champion.show')}}">Ir al listado de recetas</a></mark></h5>-->
            <div class="text-center">
                @foreach ($champions as $champion)
                <div class="card border-danger bg-ligth" style="display: inline-block; width: 100rem; margin: 1vw;">
                    <div class="card-body">
                        <h5 class="card-title">{{$loop->index+1}}. {{ $champion->name }}</h5>
                    </div>
                    <img src="" class="card-img-top" alt="...">
                    <div>
                        <!-- <a href="{{route('champion.show', ['champion'=>$champion])}}" class="btn btn-outline-danger mt-3 mb-1">Mira las personajes</a> -->
                    </div>
                </div>
                @endforeach
            </div>
            <br>
    </div>
</body>
