console.log('working');
$.ajax({ url: '/partials/newsAndInfo.html', 
         success: function(data) { 
             $("#newsAndInfo").html(data); 
         } 
});
