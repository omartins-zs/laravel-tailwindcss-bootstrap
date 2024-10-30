@extends('layouts.app')

@section('content')
    <div class="container bg-gray-100 py-5">
        {{-- Tailwind CSS --}}
        <h1 class="text-3xl font-sans text-center text-yellow-400 mb-5">Título com Tailwind CSS</h1>
        <p class="text-lg text-gray-700 text-center mb-5">Esse texto usa Tailwind CSS para a estilização da cor e do tamanho
            da fonte.</p>

        {{-- Bootstrap --}}
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="card-body">
                        <p class="text-center">{{ __('You are logged in!') }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Botão e Modal do Bootstrap --}}
        <div class="text-center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Abrir Modal de Exemplo
            </button>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Título do Modal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Este é um modal do Bootstrap. Você pode colocar qualquer conteúdo aqui.</p>
                        <p class="text-emerald-600">Texto com cor personalizada usando Tailwind CSS.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar mudanças</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
