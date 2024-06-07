<footer class="content-info">

  @if(has_nav_menu('footer_navigation'))

    <div class=" 
    flex 
    justify-center 
    items-center 
    flex-col 
    text-center 
    bg-black 
    text-slate-50 
    py-10
    gap-10 
    space-y-2
    md:flex-row
    md:items-center
    nav-menu
    mt-20
    ">
        <div class=" md:border-l-2 md:order-1 md:text-left md:pl-10">

          <p class="text-center"><?php the_field('text', 'option'); ?></p>
        
        </div>

          {!! wp_nav_menu(['
          theme_location' => 'footer_navigation', 
          'menu_class' => 'flex flex-col justifiy-center items-center font-medium mt-10 text-gray-300 space-y-4 md:justify-start md:items-start', 
          'echo' => false,
          'container'=> false,
          
        ]) !!}
    </div>
  @endif

</footer>

