@php
  $isHome = is_front_page();
  $linkColor = isset( $isHome ) ? 'text-white' : 'text-black';

  $imageLogo = 'images/marschall.png';
@endphp


<header class="flex fixed bg-white w-full justify-between md:justify-between z-40 py-4 shadow-xl header">
    

    <a class="flex justify-center items-center brand ml-6 md:w-40 lg:w-40" href="{{ home_url('/') }}">
      <img src="@asset($imageLogo)" class="w-20" alt="Logo Schreinerei Marschall">
      <span class="sr-only"> {!! $siteName !!} </span>

    </a>

    @if (has_nav_menu('primary_navigation'))

      {{-- BURGER MENU 🍔 --}}

      <div class=" flex justify-between items-center p-2 md:hidden" >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" id="burger-button" class=" w-8 cursor-pointer">
              <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
          </svg>
          <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
          viewBox="0 0 490 490" xml:space="preserve">
      </div>

      <nav class=" flex-col bg-gray  items-center hidden-menu w-full h-full transition-all duration-700 fixed z-40 p-10 md:static md:p-2 md:bg-white border overflow-y-scroll primary-nav">

          {{-- CLOSE MENU ✖️ --}}
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-turquoise w-10 h-10 ml-auto cursor-pointer close-menu md:hidden">
            <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
          </svg>
          {{-- CLOSE MENU ✖️ --}}

         
          
          

            
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'flex flex-col gap-8 text-slate-100 capitalize text-xl md:text-2xl mt-20 second-hidden-submenu',
            'after' => '
            
            <span class="inline-block"> 
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-turquoise">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
              </svg>
            </span>
             

',
            'echo' => false,
          ]) !!}


      </nav>

  @endif
</header>