function call()
{ txt1=document.getElementById('txt1');
  txt2=document.getElementById('txt2');
  img=document.getElementById('img');
  if(txt1.value==txt2.value)
  {
  img.src='images/tick.png';
  }
  else
    {
    img.src='images/crs.png';
  }

}
