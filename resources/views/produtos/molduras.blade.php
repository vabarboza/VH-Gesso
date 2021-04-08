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
                src="{{ asset('img/content/inicio/01.jpg') }}" style="width: 350px">
            <p class="h5  font-weight-bold">Molduras</p>
            <p class="card-text text-center ml-4 mr-4 text-muted">Molduras de Gesso há tempos é o toque final de acabamento
                colocando requinte nos perímetros dos ambientes, nós da VH Gesso utilizamos molduras fabricadas com
                materiais de qualidade e disponibilizamos mão de obra qualificada para a aplicação da mesma, além de ter
                opções à pronta entrega e modelos atuais com estilos contemporâneos de arquitetura moderna.</p>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div id="mdb-lightbox-ui"></div>

                <div class="mdb-lightbox">

                    <figure class="col-md-3">
                        <a href="{{ asset('img/content/inicio/01.jpg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/content/inicio/01.jpg') }}" class="img-fluid">
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/forroliso/02.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/forroliso/02.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/forroliso/03.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/forroliso/03.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/forroliso/04.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/forroliso/04.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/forroliso/05.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/forroliso/05.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/forroliso/06.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/forroliso/06.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/forroliso/07.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/forroliso/07.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-3">
                        <a href="{{ asset('img/pages/forroliso/08.jpeg') }}" data-size="1600x1067">
                            <img src="{{ asset('img/pages/forroliso/08.jpeg') }}" class="img-fluid" />
                        </a>
                    </figure>

                </div>

            </div>
        </div>

    </div>

@endsection
