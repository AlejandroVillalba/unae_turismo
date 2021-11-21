<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">
            <div class="mb-3 small text-muted">
                {{ __('Gracias por registrarte!Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el enlace que acabamos de enviarlo por correo electrónico? Si no recibió el correo electrónico, con gusto le enviaremos otro.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success" role="alert">
                    {{ __('Se ha enviado un nuevo enlace de verificación a la dirección de correo electrónico que proporcionó durante el registro.') }}
                </div>
            @endif

            <div class="mt-4 d-flex justify-content-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-jet-button type="submit">
                            {{ __('Reenviar correo electrónico de verificación') }}
                        </x-jet-button>
                    </div>
                </form>

                <form method="POST" action="/logout">
                    @csrf

                    <button type="submit" class="btn btn-link">
                        {{ __('Cerrar sesión') }}
                    </button>
                </form>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>