@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{route('login-ca')}}">
                        @csrf
                            <input type="hidden" name="token" value="<?= $token ?>">


                            <div class="form-group">
                                    <label for="certificateSelect">Choose a certificate</label>
                                    <select id="certificateSelect" class="form-control" name="token_ca">
                                        <option value="">Selecione</option>
                                    </select>
                                </div>



                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                        <button id="signInButton" type="submit" class="btn btn-primary">Entrar</button>


                                    {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/lacuna-web-pki-2.9.0.js"></script>

<script src="js/signature-form.js"></script>

<script>
$(document).ready(function () {
        // Once the page is ready, we call the init() function on the javascript code (see signature-form.js).
        signatureForm.init({
            token: '<?= $token ?>',                     // The token acquired from REST PKI.
            form: $('#authForm'),                       // The form that should be submitted when the operation is complete.
            certificateSelect: $('#certificateSelect'), // The <select> element (combo box) to list the certificates.
            refreshButton: $('#refreshButton'),         // The "refresh" button.
            signButton: $('#signInButton')              // The button that initiates the operation.
        });
    });
</script>
@endsection
