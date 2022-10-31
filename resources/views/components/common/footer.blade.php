{{--<section class="flex w-full fixed bottom-0 z-[100] text-white text-20">--}}
{{--    <div class="w-full md:w-4/5 mx-auto text-center">--}}
{{--        <a class="ml-3 mr-3 hover:text-orange-500" href="/">--}}
{{--            Home--}}
{{--        </a>--}}
{{--        <a class="ml-3 mr-3 hover:text-orange-500" href="{{route('contact')}}">--}}
{{--            Contact us--}}
{{--        </a>--}}
{{--        <a class="ml-3 mr-3 hover:text-orange-500" href="{{route('uploaded_media')}}">--}}
{{--            Media--}}
{{--        </a>--}}
{{--        <a class="ml-3 mr-3 hover:text-orange-500" href="{{route('show_messages')}}">--}}
{{--            Messages--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</section>--}}

@env('local')
    @component('components.common.info-toast', [
        'message' => 'Application is running in development mode. Telescope and Nova are only available in development Mode.
                      To switch to production mode, please change APP_ENV=local to APP_ENV=production in .env file.
                      Please restart the application after changing the APP_ENV.',
        ])
    @endcomponent
@endenv

@env('production')
    @component('components.common.info-toast', [
        'message' => 'Application is running in Production Mode. Telescope and Nova are NOT Accessible in Production Mode.
                      To switch to Development mode, please change APP_ENV=production to APP_ENV=local in .env file.
                      Please restart the application after changing the APP_ENV.',
        ])
    @endcomponent
@endenv
