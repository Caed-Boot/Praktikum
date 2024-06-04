@foreach ($fields['modules'] as $module)

  @if( isset( $module['visibility'] ) && !$module['visibility'] )
    @continue
  @endif

  @includeIf('modules.' . $module['acf_fc_layout'], ['data' => $module])
@endforeach
