@php
  $isHome = is_front_page();
  $linkColor = isset( $isHome ) ? 'text-white' : 'text-black';
@endphp


<header class="banner flex flex-row justify-between fixed z-20 w-full bg-white">
 
    <a class="flex w-40 justify-center brand ml-6 bg-white md:w-40 lg:w-40" href="{{ home_url('/') }}">
      @include('svg.logo')
      <span class="sr-only"> {!! $siteName !!} </span>

    </a>

      @if (has_nav_menu('primary_navigation'))

        <nav class="flex items-center bg-white border-gray-200 mr-4 ">
          <div class="max-w-screen-xl flex flex-wrap items-end justify-end mx-auto">
          
            {{-- Burger menu --}}
            <button id="burger-button" data-collapse-toggle="navbar-default" type="button" class="inline-flex right-0 p-2 w-10 h-10 items-center justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
           {{-- Burger menu --}}  
          </div>
          <div class="h-0 overflow-hidden bg-white absolute left-0 top-[63px] w-full animate-fade md:block md:w-auto md:h-auto md:relative md:top-0" id="navbar-default">
                {!! wp_nav_menu([
                  'theme_location' => 'primary_navigation',
                  'menu_class' => 'nav flex flex-col  items-center space-x-4 text-black font-semibold md:flex-row',
                  'container' => '', 'echo' => false
                  ]) !!}
          </div>

        </nav>
  @endif
</header>
 