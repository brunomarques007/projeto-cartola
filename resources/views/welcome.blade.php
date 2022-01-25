@extends('layouts.app')

@section('content')
    <div class="header py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Bem vindo jogador!') }}</h1>
                        <p class="text-lead text-light">
                            {{ __('Seja campeão das melhores ligas de cartola.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection