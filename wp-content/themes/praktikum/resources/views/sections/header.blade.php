@php
  $isHome = is_front_page();
  $linkColor = isset( $isHome ) ? 'text-white' : 'text-black';

  $imageLogo = 'images/marschall.png';
@endphp


<header class="banner h-20 md:h-auto flex flex-row justify-between fixed z-20 w-full">
    

    <a class="flex justify-center items-center brand ml-6 md:w-40 lg:w-40" href="{{ home_url('/') }}">
      <img src="@asset($imageLogo)" class="w-36 h-auto" alt="Logo Schreinerei Marschall">
      <span class="sr-only"> {!! $siteName !!} </span>

    </a>

    @if (has_nav_menu('primary_navigation'))

      {{-- BURGER MENU 🍔 --}}

      <div class=" flex justify-between items-center p-2 md:hidden" >
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" id="burger-button" class=" w-10 cursor-pointer">
              <path fill-rule="evenodd" d="M2 4.75A.75.75 0 0 1 2.75 4h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 4.75ZM2 10a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75A.75.75 0 0 1 2 10Zm0 5.25a.75.75 0 0 1 .75-.75h14.5a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
          </svg>
          <svg fill="#000000" height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
          viewBox="0 0 490 490" xml:space="preserve">
      </div>

      <nav class="hidden-menu h-[100vh] w-full md:h-auto md:w-auto bg-[#b5131d] md:bg-transparent transition-all duration-700 fixed z-40 p-4 overflow-y-scroll primary-nav md:static">
          {{-- CLOSE MENU ✖️ --}}
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white" class="w-14 h-14 ml-auto cursor-pointer close-menu md:hidden">
              <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
          </svg>
            
    
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => ' flex flex-col text-slate-100 capitalize text-xl mt-20 p-4 second-hidden-submenu',
            'after' => '<div class=" relative transition-all submenu-triangle"></div>',
            'echo' => false,
          ]) !!}


      </nav>

  @endif
</header>
 