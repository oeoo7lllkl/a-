function keypress(){
  k=event.keyCode;
  // alert(k);

  if (k==113|k==12610|k==93
    |k==12619|k==122|k==47) {

    location.reload();
    
  }
}

wear
.addEventListener("click",function(){
  formid.value="wear"+this.value;
  form.submit();
});