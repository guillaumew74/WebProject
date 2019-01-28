@extends('templatelog')

@section('contenu')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre adresse e-mail') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre courrier électronique pour un lien de vérification.') }}
                    {{ __('Si vous n\'avez pas reçu l\'email') }}, <a href="{{ route('verification.resend') }}">{{ __('Cliquez ici pour demander un autre') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
