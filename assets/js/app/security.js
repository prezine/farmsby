document.onkeydown = function(e) {
  if(event.keyCode == 123) {
    alert('You cannot inspect Element');
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
    alert('Lol, stop looking, you cannot inspect Element');
    return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
    alert('You cannot inspect Element');
    return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
    alert('You cannot inspect Element');
    return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
    alert('You cannot inspect Element');
    return false;
  }
}

document.addEventListener('contextmenu', e => e.preventDefault());