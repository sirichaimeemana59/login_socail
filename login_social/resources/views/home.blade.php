
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                         required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                         autocomplete="current-password" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <x-jet-button class="ml-4">
                                {{ __('Login') }}
                            </x-jet-button>
                        </div>

                        {{-- Login with Facebook --}}
                        <div class="flex items-center justify-end mt-4">
                            <a class="btn" href="{{ url('auth/facebook') }}"
                               style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                                Login with Facebook
                            </a>
                        </div>

                        {{-- Login with Google --}}
                        <div class="flex items-center justify-end mt-4">
                            <a class="btn" href="{{ url('auth/google') }}"
                               style="background: darkgreen; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                                Login with Google
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

