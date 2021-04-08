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
                src="{{ asset('img/pages/acartonado/01.jpeg') }}" style="width: 350px">
            <p class="h5  font-weight-bold">Gesso Acartonado</p>
            <p class="card-text text-center ml-4 mr-4 text-muted">Esse sistema é popularmente chamado de parede ou forro de
                drywall, por isso, muitas pessoas confundem forro drywall e gesso acartonado, achando que são produtos
                diferentes, quando na verdade o drywall é o sistema de construção utilizado para a instalação do gesso
                acartonado.</p>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox">

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/acartonado/01.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/acartonado/01.jpeg') }}" class="img-fluid">
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/acartonado/02.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/acartonado/02.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/acartonado/01.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/acartonado/01.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/acartonado/01.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/acartonado/01.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/acartonado/01.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/acartonado/01.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/acartonado/01.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/acartonado/01.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/acartonado/01.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/acartonado/01.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/acartonado/01.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/acartonado/01.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                </div>

            </div>
        </div>

    </div>

@endsection
