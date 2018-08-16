@extends('layouts.app')
@section('content')
    <div class="container">
        main class="container-fluid mt-5 py-5 " style="background-image: url('{{ asset('img/section.jpg') }}')!important;">
        <div class="row mt-5">
            <div class="col-lg-12">
                <h1 class="text-center">
                    MISSION
                </h1>
            </div>
        </div>
        <div class="row">
            <section class="col-lg-6">
                <p class="lead" style="font-size: 2rem;color: white;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus doloremque expedita
                    hic nisi vel. Enim iusto laboriosam modi nostrum officiis
                    omnis ratione rem temporibus velit. Blanditiis consectetur optio repellendus.
                </p>
            </section>
            <section class="col-lg-6">
                <img src="{{ asset('img/eugene.jpg') }}" class="text-center" alt="" style="height: 25rem;">
            </section>
        </div>
        </main>
    </div>
    @endsection