@extends('layout')
@section('titulo', 'Principal')
@section('main')

    <div class="container-sm my-5">

        <div class="card border border-dark rounded-sm bg-white">
            <div class="card-body text-center text-capitalize font-weight-bold">
                PRODUTOS
            </div>
        </div>

        <div class="card-body text-center">
            <img class="d-flex mt-3 mb-3 img-thumbnail text-center rounded mx-auto d-block"
                src="{{ asset('img/content/inicio/06.jpg') }}" style="width: 350px">
            <p class="h5  font-weight-bold">Gesso Decorado</p>
            <p class="card-text text-center ml-4 mr-4 text-muted">Esse revestimento é feito através de placas de gesso com
                desenhos em auto relevo em uma das faces, que cria um efeito sensacional e maravilhoso de luz e sombra nas
                paredes que são aplicados. As texturas e composições que esse revestimento agrega no ambiente valoriza e
                aumenta muito a sensação de requinte e conforto do espaço.</p>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox">

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/gessodecor/01.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/gessodecor/01.jpg') }}" class="img-fluid">
                        </a>
                    </figure>


                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/gessodecor/02.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/gessodecor/02.jpg') }}" class="img-fluid">
                        </a>
                    </figure>


                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/gessodecor/04.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/gessodecor/04.jpg') }}" class="img-fluid">
                        </a>
                    </figure>



                </div>

            </div>
        </div>

    </div>

@endsection
