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
                src="{{ asset('img/pages/sanca/01.jpg') }}" style="width: 350px">
            <p class="h5  font-weight-bold">Sancas</p>
            <p class="card-text text-center ml-4 mr-4 text-muted">Sanca ou rebaixamento de teto realmente fazem a diferença
                nos mais diferentes ambientes trazendo estilo, requinte e beleza. A VH Gesso tem sempre o melhor projeto de
                sanca e iluminação com as melhores soluções. Sempre atendendo o Perfil e necessidade de nossos Clientes com
                projetos únicos e exclusivos.</p>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox">

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/sanca/01.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/sanca/01.jpg') }}" class="img-fluid">
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/sanca/02.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/sanca/02.jpg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/sanca/03.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/sanca/03.jpg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/sanca/04.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/sanca/04.jpg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/sanca/05.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/sanca/05.jpg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/sanca/06.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/sanca/06.jpg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/sanca/07.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/sanca/07.jpg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/sanca/08.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/sanca/08.jpg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/sanca/08.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/sanca/08.jpg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/sanca/10.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/sanca/10.jpg') }}" class="img-fluid" />
                        </a>
                    </figure>

                </div>

            </div>
        </div>

    </div>

@endsection
