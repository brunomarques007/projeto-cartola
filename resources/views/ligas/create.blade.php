@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

	<div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{ __('Criar uma nova liga') }}</h5>
                </div>
                <form method="post" action="#" autocomplete="off">
                    <div class="card-body">
                            @csrf
                            @method('post')

                            @include('alerts.success')

                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Dê um nome a sua liga') }}">
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>

							<div class="form-group{{ $errors->has('valor') ? ' has-danger' : '' }}">
                                <label>{{ __('Valor') }}</label>
                                <input type="text" name="valor" class="form-control{{ $errors->has('valor') ? ' is-invalid' : '' }}" placeholder="{{ __('Valor') }}">
                                @include('alerts.feedback', ['field' => 'valor'])
                            </div>

                            <div class="form-group{{ $errors->has('taxa') ? ' has-danger' : '' }}">
                                <label>{{ __('Taxa') }}</label>
                                <input type="text" name="taxa" class="form-control{{ $errors->has('taxa') ? ' is-invalid' : '' }}" placeholder="{{ __('Taxa') }}">
                                @include('alerts.feedback', ['field' => 'taxa'])
                            </div>

                            <div class="form-group{{ $errors->has('premiacao') ? ' has-danger' : '' }}">
                                <label>{{ __('Premiacao') }}</label>
                                <input type="number" name="premiacao" class="form-control{{ $errors->has('premiacao') ? ' is-invalid' : '' }}" placeholder="{{ __('valor de premiação em reais') }}">
                                @include('alerts.feedback', ['field' => 'premiacao'])
                            </div>
                            <div class="form-group{{ $errors->has('rodadas') ? ' has-danger' : '' }}">
                                <label>{{ __('Número de rodadas') }}</label>
                                <input type="number" name="rodadas" class="form-control{{ $errors->has('rodadas') ? ' is-invalid' : '' }}" placeholder="{{ __('Quantas rodadas?') }}">
                                @include('alerts.feedback', ['field' => 'rodadas'])
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">{{ __('Criar Liga') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <h5 class="title">{{ __('Crie sua ligas') }}</h5>
                            </a>
                            <p class="description">
                                {{ __('Regras para a criãção de ligas') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description">
                        {{ __('Ao criar uma liga você deve ter em mente as seguintes regras:') }}
                    </div>
                </div>
                <div class="card-footer">
                    <div class="button-container">
                        <button class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')

<script type="text/javascript">
	$('#valor').blur(function(){
        $('#valor').formatCurrency();
    });
</script>

@endpush