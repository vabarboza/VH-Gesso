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
                src="{{ asset('img/content/semimg.jpg') }}" style="width: 350px">
            <p class="h5  font-weight-bold">Colunas Decorativas</p>
            <p class="card-text text-center ml-4 mr-4 text-muted">As Colunas São Utilizadas Na Decoração Do Ambiente E São,
                Também, Muito Utilizadas Para A Limitação (Divisão) Do Ambiente. Elas Podem Ser Lisas Ou Caneladas "Tipo
                Grego". Tanto A Coluna Lisa Como A Coluna Decorada Tem Acompanhamento Da Base, Para Acabamento No Pé Da
                Coluna, E Do Capitel, Para Acompanhamento Em Cima Da Coluna. As Colunas Em Gesso São Muito Úteis Na
                Decoração Externa.</p>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox">

                    <figure class="col-md-3">
                        <a href="{{ asset('img/content/semimg.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/content/semimg.jpg') }}" class="img-fluid">
                        </a>
                    </figure>


                    <figure class="col-md-3">
                        <a href="{{ asset('img/content/semimg.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/content/semimg.jpg') }}" class="img-fluid">
                        </a>
                    </figure>


                    <figure class="col-md-3">
                        <a href="{{ asset('img/content/semimg.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/content/semimg.jpg') }}" class="img-fluid">
                        </a>
                    </figure>


                    <figure class="col-md-3">
                        <a href="{{ asset('img/content/semimg.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/content/semimg.jpg') }}" class="img-fluid">
                        </a>
                    </figure>


                    <figure class="col-md-3">
                        <a href="{{ asset('img/content/semimg.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/content/semimg.jpg') }}" class="img-fluid">
                        </a>
                    </figure>


                    <figure class="col-md-3">
                        <a href="{{ asset('img/content/semimg.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/content/semimg.jpg') }}" class="img-fluid">
                        </a>
                    </figure>


                    <figure class="col-md-3">
                        <a href="{{ asset('img/content/semimg.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/content/semimg.jpg') }}" class="img-fluid">
                        </a>
                    </figure>


                    <figure class="col-md-3">
                        <a href="{{ asset('img/content/semimg.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/content/semimg.jpg') }}" class="img-fluid">
                        </a>
                    </figure>



                </div>

            </div>
        </div>

    </div>

@endsection
