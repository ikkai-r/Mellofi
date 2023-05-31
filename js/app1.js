//hover

  $( "#listener" ).hover(
  function() {
    $( this ).append( $( "<i class='fas fa-headphones-alt icon-choice'></i>" ) );
  }, function() {
    $( this ).find( "i" ).last().remove();
  }
);

   $( "#musician" ).hover(
  function() {
    $( this ).append( $( "<i class='fas fa-compact-disc icon-choice'></i>" ) );
  }, function() {
    $( this ).find( "i" ).last().remove();
  }
);


$(document).ready(function(){
 $("#listener").click(function(){
  $.post('process.php');
  setTimeout(function(){ window.location.href='homepage.php';}, 1500);
  });
});

$(document).ready(function(){
 $("#musician").click(function(){
  setTimeout(function(){ window.location.href='profilepic.php';}, 1000);
  });
});

$(document).ready(function(){
 $("#band").click(function(){
  $.post('musician-acc.php', 
    {
      type:'band'
    });
  setTimeout(function(){ window.location.href='homepage.php';}, 1500);
  });
});

$(document).ready(function(){
 $("#solo").click(function(){
  $.post('musician-acc.php', 
    {
      type:'solo artist'
    });
  setTimeout(function(){ window.location.href='homepage.php';}, 1500);
  });
});





