function keypress(){
  k=event.keyCode;
  // alert(k);
  if(k==113|k==93|k==122|k==47){
    location.reload();
  }
}