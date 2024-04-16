<!-- Thanh tìm kiếm -->
<div class = "container seach_post">
    <form id="search">
        <button type="submit"><img src="{{asset('assets//image/nut_tim_kiem.png')}}" alt="tim_kiem" style="width: 20px; height:20px;margin-right: 7px;"></button>
        <input type="text" placeholder="Seach posts..." name = 'keyword' id = "searchPosts" >
       @csrf
    </form>
    
</div>