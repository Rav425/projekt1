
<?php
if( $go == '' ) { include_once 'dir/home/index.php';  }

// Users
elseif( $go  == 'home' ) { include_once 'dir/home/index.php';  }
elseif( $go  == 'profile' && $login != 0 ) { include_once 'dir/users/profile/index.php';  }
elseif( $go  == 'add_unit' && $login != 0 ) { include_once 'dir/units/add_unit/index.php';  }
elseif( $go  == 'my_units' && $login != 0 ) { include_once 'dir/units/my_units/index.php';  }
elseif( $go  == 'view_unit' ) { include_once 'dir/units/view_unit/index.php';  }
elseif( $go  == 'my_reserve' ) { include_once 'dir/reserves/my_reserve/index.php';  }
elseif( $go  == 'my_favourite' ) { include_once 'dir/units/my_favourite/index.php';  }
else { include_once 'dir/home/index.php'; }
?>
