<footer class="footer">

  @if(has_nav_menu('wesseler_footer'))

    <div class=" 
    flex 
    justify-center 
    items-center 
    flex-col 
    text-center 
    bg-gray 
    text-slate-50 
     
    space-y-4
    md:flex-row
    md:items-center
    mt-20
    footer__info
    ">

      <div class="flex flex-col items-center justify-between w-full p-8 md:gap-8 md:px-32 md:py-16 md:text-left md:flex-row md:items-end">

        <div class="md:order-2 mb-16 md:mb-0">

          <?php the_field('text', 'option'); ?>
        </div>

        

          <div class="">

          {!! wp_nav_menu([
            'theme_location' => 'wesseler_footer',
            'menu_class' => 'flex flex-col gap-4 mb-8',
            'echo' => false,
            'container' => false,

          ]) !!}

          {!! wp_nav_menu([
            'theme_location' => 'footer_datenschutz',
            'menu_class' => 'flex flex-wrap justify-center  font-thin text-m-second text-slate-300 gap-4 mb-8 md:flex-wrap md:justify-start',
            'echo' => false,
            'container' => false,

          ]) !!}

          <p class="font-thin text-slate-300">@ Laerer Fußbodenbau Wesseler GmbH | by MA.STA Vision</p>

          </div>
        
      </div>
              
    </div>
  @endif

</footer>
