function get_date_joined( $userid ){
  $today = new DateTime( date( 'Y-m-d', strtotime( 'today' ) ) );
  $register_date = get_the_author_meta( 'user_registered', $userid );
  $registered = new DateTime( date( 'Y-m-d', strtotime( $register_date ) ) );
  $interval_date = $today->diff( $registered );
  
  if( $interval_date->days < 31 ) {
    echo $interval_date->format('%d days').' ago';
  }
  elseif( $interval_date->days < 365 ) {
    echo $interval_date->format('%m months %d days').' ago';
  }
  elseif( $interval_date->days > 365 ) {
    echo $interval_date->format('%y years %m month %d days').' ago';
  }
}
