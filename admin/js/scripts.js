tinymce.init({ selector:'textarea' });

$(document).ready(function(){

$('#selectAllBoxes').click(function(event){
  if(this.checked){
    $('.checkArray').each(function(){
      this.checked = true;
    });
  } else {
    $('.checkArray').each(function(){
      this.checked = false;
  });
}
});
});
