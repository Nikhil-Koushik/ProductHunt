$('.nav-item').hover(function(event){
  $('#'+event.target.id).css('color','red');
  $('.'+event.target.name).css('visibility','visible');
  $('.'+event.target.name).hover(function(){},function(){
    $(event.target).css('color','gray');
    $('.'+event.target.name).css('visibility','hidden');
  })
},function(event){
  $('#'+event.target.id).css('color','gray');
  $('.'+event.target.name).css('visibility','hidden');
})

$('.catholder').hover(function(event){
  $('#'+event.target.id).css('backgroundColor','rgb(233, 241, 244)');
},function(){
  $('#'+event.target.id).css('backgroundColor','white');
})

