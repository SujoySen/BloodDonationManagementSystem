<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 $('.the-new-com').bind('input propertychange', function() {
        $(".bt-add-com").css({opacity:0.6});
        var checklength = $(this).val().length;
        if(checklength){ $(".bt-add-com").css({opacity:1}); }
     });//when start writting enable add button
	 
	 
// on post comment click 
     $('.bt-add-com').click(function(){
         var theCom = $('.the-new-com');
         var theName = $('#name-com');
       
 
         if( !theCom.val()){ 
             alert('You need to write a comment!'); 
         }else{ 
             $.ajax({
                 type: "POST",
                 url: "ajax/add-comment.php",
                 data: 'act=add-com&id_post='+<?php echo $id_post; ?>+'&name='+theName.val()+'&email='+theMail.val()+'&comment='+theCom.val(),
                 success: function(html){
                     theCom.val('');
                     theMail.val('');
                     theName.val('');
                     $('.new-com-cnt').hide('fast', function(){
                         $('.new-com-bt').show('fast');
                         $('.new-com-bt').before(html);  
                     })
                 }  
             });
         }
     });
 
 });	 
	 
	 