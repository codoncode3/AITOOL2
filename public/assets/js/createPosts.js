ClassicEditor
        .create( document.querySelector( '#mo_ta_chi_tiet' ) )
        .catch( error => {
            console.error( error );
        } );

ClassicEditor
        .create( document.querySelector('#noidung') )
        .catch( error => {
            console.error( error );
        } );

ClassicEditor
        .create( document.querySelector('#noidung1') )
        .catch( error => {
            console.error( error );
        } );

// Button Add
let counter = 0;
document.getElementById('addC').addEventListener('click', (event) => {
    event.preventDefault();
    const content =  document.getElementById('content');
var addContent = document.createElement('div');
counter += 1;

addContent.innerHTML=` <div class = "border border-dark rounded-3 border-3 my-5 "style="padding-bottom: 65px; background-color:white">
<h3 class = " fs-3 py-3 px-3" style ="background-color:rgb(245,245,245)">New Content ${counter}</h3>

<div class = "mx-3">
   
        <label for="linhvuc" class="form-label mt-1">License:  </label>
        <input type="text " class='form-control' id='linhvuc_${counter}'  name ='linhvuc_${counter}'>
       
        <label for="tieu_de_noi_dung" class="form-label mt-1">Title of content: </label>
        <input type="text " class='form-control' id='tieu_de_noi_dung_${counter}'  name ='tieudenoidung_${counter}'>
        
        <label for="url_hinh_anh" class="form-label mt-1">Image path: </label>
        <input type='url' class='form-control' id='url_hinh_anh_${counter}'  name ='urlhinhanh_${counter}'>
       
        <label for="nguon_hinh_anh" class="form-label mt-1">Image source:  </label>
        <input type="text " class='form-control' id='nguon_hinh_anh_${counter}'  name ='nguonhinhanh_${counter}'>

        <label for="noi_dung" class="form-label mt-1">Content: </label>
        <br>
        <textarea class ='form-control' name="noi_dung_${counter}" id="noidung_${counter}" cols="160" rows="10" style="width: 100%;"></textarea>   
</div>`;

content.appendChild(addContent);

ClassicEditor
        .create( document.querySelector(`#noidung_${counter}`) )
        .catch( error => {
            console.error( error );
        } );
});

$(document).ready(function()
{
        $('#form_create').submit(function(e) {
                e.preventDefault();
                var data = $(this).serializeArray();
                // data = JSON.stringify(data);
                
                $.ajax({
                        url:'/posts/create-posts',
                        method: 'POST',
                        data: data,
                        success: function(response)
                        {
                                console.log('Successfully');
                                console.log(response);
                        },
                        error:function(xhr, status, error)
                        {
                                console.log(xhr.status);
                                if(xhr.status === 404) {
                                        window.location.href='http://127.0.0.1:8000/error/404';
                                }
                                else if(xhr.status === 422)
                                {
                                        if($('#tieude').val().trim() === '')
                                        {
                                                $('#error_tieu_de').html('Tiêu đề không được để trống <br>');
                                        }

                                        if($('#mo_ta_chung').val().trim() === '')
                                        {
                                                $('#error_mo_ta_chung').html('Mô tả chung không được để trống<br>');

                                        }
                                        if($('#tac_gia').val().trim() === '')
                                        {
                                                $('#error_tac_gia').html('Tác giả không được để trống <br>');
                                        }
                                        if($('#mo_ta_chi_tiet').val().trim() === '')
                                        {
                                                $('#error_mo_ta_chi_tiet').html('Mô tả chi tiết không được để trống <br>');
                                        }

                                }
                                else if(xhr.status === 503)
                                {
                                        alert('Máy chủ quá tải. Vui lòng đợi trong ít phút');
                                        setTimeout(() => {
                                                window.location.reload();
                                        },30000);
                                }else if(xhr.status === 401)
                                {
                                        window.location.href= 'http://127.0.0.1:8000/login';
                                }
                                else if(xhr.status ===504)
                                {
                                        window.location.href='http://127.0.0.1:8000/error/504';
                                }
                        }


                })
        });
}

)









