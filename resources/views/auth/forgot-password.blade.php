@extends('layouts.auth')

@section('title', 'Забыл пароль')

@section('content')
    <main class="md:min-h-screen md:flex md:items-center md:justify-center py-16 lg:py-20">
        <div class="container">

            <!-- Page heading -->
            <div class="text-center">
                <a href="#" class="inline-block" rel="home">
                    <img src="{{Vite::image('logo.svg')}}" class="w-[148px] md:w-[201px] h-[36px] md:h-[50px]" alt="CutCode">
                </a>
            </div>

            <div class="max-w-[640px] mt-12 mx-auto p-6 xs:p-8 md:p-12 2xl:p-16 rounded-[20px] bg-purple">
                <h1 class="mb-5 text-lg font-semibold">Восстановить пароль</h1>
                <form class="space-y-3" action="{{route('forgotPassword')}}" method="POST">
                @csrf
                    <x-forms.text-input
                            name="email"
                            placeholder="E-mail"
                            required
                            :is_error="$errors->has('email')"
                    ></x-forms.text-input>
                    @error('email')
                    <x-forms.error>
                        {{$message}}
                    </x-forms.error>
                    @enderror

                    <x-forms.primary-button>
                        Восстановить пароль
                    </x-forms.primary-button>


                </form>
                <div class="space-y-3 mt-5">
                    <div class="text-xxs md:text-xs"><a href="{{ route('login') }}" class="text-white hover:text-white/70 font-bold">Вспомнил пароль</a></div>
                </div>
                <ul class="flex flex-col md:flex-row justify-between gap-3 md:gap-4 mt-14 md:mt-20">
                    <li>
                        <a href="#" class="inline-block text-white hover:text-white/70 text-xxs md:text-xs font-medium" target="_blank" rel="noopener">Пользовательское соглашение</a>
                    </li>
                    <li class="hidden md:block">
                        <div class="h-full w-[2px] bg-white/20"></div>
                    </li>
                    <li>
                        <a href="#" class="inline-block text-white hover:text-white/70 text-xxs md:text-xs font-medium" target="_blank" rel="noopener">Политика конфиденциальности</a>
                    </li>
                </ul>
            </div>

        </div>
    </main>
@endsection