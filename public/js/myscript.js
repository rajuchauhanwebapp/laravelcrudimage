function showImage(current_img_obj) {
   var img_div_postion = document.getElementById('img-div-postion');
   var img_ele = document.createElement('img');
   img_ele.width = "300";
   img_ele.height = "320";
   img_ele.src = current_img_obj.src;
   img_div_postion.innerHTML='';
   img_div_postion.appendChild(img_ele);
   img_div_postion.style.display='block';
   console.log(current_img_obj.src);
   console.log(img_div_postion);
}
function hideImage(current_img_obj) {
   document.getElementById('img-div-postion').style.display='none';
}