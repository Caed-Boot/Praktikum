@php
  $isHome = is_front_page();
  $linkColor = isset( $isHome ) ? 'text-white' : 'text-black';

  $imageLogo = 'images/marschall.png';
@endphp


<header class="flex fixed bg-white w-full h-20 md:h-auto justify-between z-40 shadow-xl lg:px-14 xl:px-36 header">
    

    <a class="flex justify-center items-center brand ml-6 md:w-40 lg:w-40" href="{{ home_url('/') }}">
      <img src="@asset($imageLogo)" class="w-20 md:w-36" alt="Logo Schreinerei Marschall">
      <span class="sr-only"> {!! $siteName !!} </span>

    </a>

    @if (has_nav_menu('primary_navigation'))

      {{-- BURGER MENU 🍔 --}}

      <div class=" flex justify-between items-center p-2 md:hidden" >
        <div  class="relative w-8 h-6 mr-4" id="burger-button">

        </div>
      </div>

      <nav class=" flex-col bg-gray  items-center hidden-menu w-full h-full transition-all duration-700 fixed z-40 p-10 overflow-y-scroll  md:static md:p-8 md:bg-white  md:overflow-y-visible  primary-nav">

          {{-- CLOSE MENU ✖️ --}}
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-turquoise w-10 h-10 ml-auto cursor-pointer close-menu md:hidden">
            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          {{-- CLOSE MENU ✖️ --}}

         
          
          

            
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'flex flex-col gap-8 md:gap-5 text-slate-100 capitalize',
            'after' => '
            
            <div class="inline-block"> 
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-turquoise cursor-pointer relative top-1 left-3 md:left-0 transition-all duration-150 arrow">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
              </svg>
            </div>
             

',
            'echo' => false,
          ]) !!}


      </nav>

  @endif
</header>