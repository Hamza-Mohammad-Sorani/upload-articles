//======================================
// header
//======================================

// toggle-menu
  // select toggle menu
let menu = document.getElementById( 'toggle-menu' );
  // select nav
let nav = document.getElementById( 'nav' );
menu.addEventListener( 'click',function () {
  nav.classList.toggle( 'drop-down' );
  this.classList.toggle( 'active' );
} )
