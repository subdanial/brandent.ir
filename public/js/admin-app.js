$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
//end-crsf
if ($(".custom-file-input")[0]) {
    document.querySelector('.custom-file-input').addEventListener('change', function (e) {})
}
$(document).ready(function () {
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });
    $('.btn-file :file').on('fileselect', function (event, label) {
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        if (input.length) {
            input.val(log);
        } else {
            if (log) alert(log);
        }
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#picture").change(function () {
        readURL(this);
    });
});
function uploadImage() {
    var name = document.getElementById("picture").files[0].name;
    var form_data = new FormData();
    var ext = name.split('.').pop().toLowerCase();
    if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
        alert("فرمت فایل ارسالی عکس نیست");
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("picture").files[0]);
    var f = document.getElementById("picture").files[0];
    var fsize = f.size || f.fileSize;
    if (fsize > 5000000) {
        alert("سایز عکس بیشتر از 5 مگ است");
    } else {
        form_data.append("picture", document.getElementById('picture').files[0]);
        $.ajax({
            url: "/admin/upload",
            method: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function () {
                $('#uploaded_image').html(`
                <div class="alert w-100 alert-primary" role="alert">
                <strong>وضعیت : </strong> درحال آپلود ...
                </div>
               `);
                $('.js-submit-gallery-image').prop('disabled', true);
            },
            success: function (data) {
                $('#uploaded_image').html(`
                <div class="alert w-100 alert-success" role="alert">
                <strong>وضعیت : </strong> آپلود موفق
                </div>`);
                $('.js-submit-gallery-image').prop('disabled', false);
                $('.js-image-name').val(data);
            }
        });
    }
};
if ($(".custom-file-input")[0]) {
    document.querySelector('.custom-file-input').addEventListener('change', function (e) {})
}
if ($(".custom-file-input-invoice")[0]) {
    document.querySelector('.custom-file-input-invoice').addEventListener('change', function (e) {})
}
$(document).ready(function () {
    $(document).on('change', '.btn-file :file', function () {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });
    $('.btn-file :file').on('fileselect', function (event, label) {
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        if (input.length) {
            input.val(log);
        } else {
            if (log) alert(log);
        }
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#picture").change(function () {
        readURL(this);
    });
});
$(document).on('change', '.js-btn-upload-gallery', function () {
    uploadImage();
})
//endt-upload
tinymce.init({
    selector: 'textarea#tiny',
    file_picker_callback: filemanager.tinyMceCallback,
      theme: 'modern',
      height: 500,
      plugins: [
        'advlist code autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
        'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
        'save table contextmenu directionality emoticons template paste textcolor'
      ],
      toolbar: 'code | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
      font_formats:'yekan-Bakh'
  });
//end-tiny
$('#table-post').DataTable({
    dom: 'Pflrtip',
    language: {
        "emptyTable": "هیچ داده ای جهت نمایش وجود ندارد",
        "info": "نمایش _START_ تا _END_ از _TOTAL_ رکود",
        "infoEmpty": "نمایش 0 تا 0 از 0 رکود",
        "search": "جستجو",
        "lengthMenu": "نمایش _MENU_",
        "processing": " درحال پردازش ...",
        "paginate": {
            "first": "اولین",
            "last": "آخرین",
            "next": "بعدی",
            "previous": "قبلی"
        },
    },
    processing: true,
    serverSide: true,
    ajax: {
        url: 'http://'+location.host+"/admin/post/table",
    },
    columns: [{
            class: "align-middle",
            data: 'id',
            name: 'id'
        },
        {
            class: "align-middle",
            data: 'image',
            name: 'image',
            render: function (data, type, row, meta) {
                return '<a data-caption="' + data + ' | کد : ' + row.id + '" data-fancybox="gallery" href="/upload/img/' + row.image + '" target="_blank" class="text-dark  text-dark align-items-center">\n<img class="border bordar-dark ml-3 mr-2" src="/upload/img/thumb/' + row.image + '" width="64">\n  <span>' + '' + "</span>\n </a>"
            }
        },
        {
            class: "align-middle",
            data: 'title',
            name: 'title',
        },
        {
            class: "align-middle",
            data: "content_short",
            name: "content_short",
            render: function (data, type, row, meta) {
                return ('<textarea class="form-control w-100" disabled >' + data + '</textarea>')
            }
        },
        {
            class: "align-middle",
            data: "created_at",
            name: "created_at",
        },
        {
            class: "align-middle",
            data: "actions",
            name: "actions",
        },
    ]
});
//end-post-table
$('#table-category').DataTable({
    dom: 'Pflrtip',
    language: {
        "emptyTable": "هیچ داده ای جهت نمایش وجود ندارد",
        "info": "نمایش _START_ تا _END_ از _TOTAL_ رکود",
        "infoEmpty": "نمایش 0 تا 0 از 0 رکود",
        "search": "جستجو",
        "lengthMenu": "نمایش _MENU_",
        "processing": " درحال پردازش ...",
        "paginate": {
            "first": "اولین",
            "last": "آخرین",
            "next": "بعدی",
            "previous": "قبلی"
        },
    },
    processing: true,
    serverSide: true,
    ajax: {
        url: 'http://'+location.host+"/admin/category/table",
    },
    columns: [
        {
            class: "align-middle",
            data: 'id',
            name: 'id'
        },
        {
            class: "align-middle",
            data: 'name',
            name: 'name',
        },
        {
            class: "align-middle",
            data: "actions",
            name: "actions",
        },
    ]
});
$(document).on('click','.js_category_edit',function(){
$('.js_category_id').val($(this).attr('id'));
$('.js_category_value').val($(this).attr('data-value'));
    $('#modal_edit').modal('show');
})
//end-category
$('#table-work').DataTable({
    dom: 'Pflrtip',
    language: {
        "emptyTable": "هیچ داده ای جهت نمایش وجود ندارد",
        "info": "نمایش _START_ تا _END_ از _TOTAL_ رکود",
        "infoEmpty": "نمایش 0 تا 0 از 0 رکود",
        "search": "جستجو",
        "lengthMenu": "نمایش _MENU_",
        "processing": " درحال پردازش ...",
        "paginate": {
            "first": "اولین",
            "last": "آخرین",
            "next": "بعدی",
            "previous": "قبلی"
        },
    },
    processing: true,
    serverSide: true,
    ajax: {
        url: 'http://'+location.host+"/admin/work/table",
    },
    columns: [
        {
            class: "align-middle",
            data: 'id',
            name: 'id'
        },
        {
            class: "align-middle",
            data: 'image',
            name: 'image',
            render: function (data, type, row, meta) {
                return '<a data-caption="' + data + ' | کد : ' + row.id + '" data-fancybox="gallery" href="/upload/img/' + row.image + '" target="_blank" class="d-flex text-dark  text-dark align-items-center">\n<img class="border bordar-dark ml-3 mr-2" src="/upload/img/thumb/' + row.image + '" width="64">\n  <span>' +''+ "</span>\n </a>"
            }
        },
        {
            class: "align-middle",
            data: "describe",
            name: "describe",
        },
        {
            class: "align-middle",
            data: "actions",
            name: "actions",
            // render: function (data, type, row, meta) {
            //     return '<a data-caption="' + data + ' | کد : ' + row.code + '" data-fancybox="gallery" href="/upload/' + row.image + '" target="_blank" class="d-flex text-dark  text-dark align-items-center">\n<img class="border bordar-dark ml-3 mr-2" src="/upload/' + row.image + '" width="64">\n  <span>' + data + "</span>\n </a>"
            // }
        },
    ]
});
//end-work
$('#table-teammate').DataTable({
    dom: 'Pflrtip',
    language: {
        "emptyTable": "هیچ داده ای جهت نمایش وجود ندارد",
        "info": "نمایش _START_ تا _END_ از _TOTAL_ رکود",
        "infoEmpty": "نمایش 0 تا 0 از 0 رکود",
        "search": "جستجو",
        "lengthMenu": "نمایش _MENU_",
        "processing": " درحال پردازش ...",
        "paginate": {
            "first": "اولین",
            "last": "آخرین",
            "next": "بعدی",
            "previous": "قبلی"
        },
    },
    processing: true,
    serverSide: true,
    ajax: {
        url: 'http://'+location.host+"/admin/team/table",
    },
    columns: [
        {
            class: "align-middle",
            data: 'id',
            name: 'id'
        },
        {
            class: "align-middle",
            data: 'image',
            name: 'image',
            render: function (data, type, row, meta) {
                return '<a data-caption="' + data + ' | کد : ' + row.id + '" data-fancybox="gallery" href="/upload/img/' + row.image + '" target="_blank" class="d-flex text-dark  text-dark align-items-center">\n<img class="border bordar-dark ml-3 mr-2" src="/upload/img/thumb/' + row.image + '" width="64">\n  <span>' +''+ "</span>\n </a>"
            }
        },
        {
            class: "align-middle",
            data: "name",
            name: "name",
        },
        {
            class: "align-middle",
            data: "describe",
            name: "describe",
            render: function (data, type, row, meta) {
                return ('<textarea class="form-control w-100" disabled >'+data+'</textarea>')
                        }
        },
        {
            class: "align-middle",
            data: "actions",
            name: "actions",
        },
    ]
});
//end-teammate