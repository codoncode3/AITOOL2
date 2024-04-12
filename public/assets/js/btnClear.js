var search = document.getElementById("searchPosts");

var btnClear =  document.getElementById("btnClear");
btnClear.style.display = "none";

search.addEventListener('input',function()
{

    if (search.value.trim()!=='')
    {
        btnClear.style.display = 'inline-block';
    }else
    {
        btnClear.style.display = 'none';
    }

});


btnClear.addEventListener('click',function()
{
    search.value = '';
    btnClear.style.display ='none';
});

// $(document).ready(function(){
//     $('#search').keyup(function(e){
//         e.preventDefault();
//         var keyword = $('#searchPosts').val();
//         $.ajax({
//             URL:'/archive',
//             method: 'GET',
//             data:{keyword},
//             success: function(response){console.log(response)},
//             error: function(xhr, status,error){console.log(error)}})
//     });
// });



