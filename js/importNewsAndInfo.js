console.log('working');
$.ajax({ url: '/partials/newsAndInfo.html', 
         success: function(data) { 
             alert(data);
             //$("#newsAndInfo").html = data; 
         } 
});
