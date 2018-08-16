@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <main class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h1 class="display-4">Welcome</h1>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus doloremque expedita hic nisi vel. Enim iusto laboriosam modi nostrum officiis omnis ratione rem temporibus velit. Blanditiis consectetur optio repellendus.
                        </p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <p class="lead text-center">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Register
                            </button>

                            <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Register
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" name="" id=""
                                                   aria-describedby="helpId" placeholder="">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </main>


        <main class="container py-5">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-white text-center">
                        Services
                    </h1>
                </div>
            </div>
            <div class="row">
                <section class="col-lg-3">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus doloremque expedita
                                hic nisi vel. Enim iusto laboriosam modi nostrum officiis
                                omnis ratione rem temporibus velit. Blanditiis consectetur optio repellendus.
                            </p>
                        </div>
                    </div>
                </section>

                <section class="col-lg-3">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus doloremque expedita
                                hic nisi vel. Enim iusto laboriosam modi nostrum officiis
                                omnis ratione rem temporibus velit. Blanditiis consectetur optio repellendus.
                            </p>
                        </div>
                    </div>
                </section>

                <section class="col-lg-3">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus doloremque expedita
                                hic nisi vel. Enim iusto laboriosam modi nostrum officiis
                                omnis ratione rem temporibus velit. Blanditiis consectetur optio repellendus.
                            </p>
                        </div>
                    </div>
                </section>

                <section class="col-lg-3">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus doloremque expedita
                                hic nisi vel. Enim iusto laboriosam modi nostrum officiis
                                omnis ratione rem temporibus velit. Blanditiis consectetur optio repellendus.
                            </p>
                        </div>
                    </div>
                </section>
            </div>
        </main>


        <main class="container-fluid mt-5 py-5 " style="background-image: url('{{ asset('img/section.jpg') }}')!important;">
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h1 class="text-center">
                        MISSION
                    </h1>
                </div>
            </div>
            <div class="row">
                <section class="col-lg-6">
                    <p class="lead" style="font-size: 2rem;">
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

        <main class="container-fluid mt-5 py-5 text-white">
            <div id="chartdiv"></div>
        </main>
    </div>
    @endsection