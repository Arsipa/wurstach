$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
function update() {
    $(".save-btn").hide();
    $(".delete-btn").hide();
    $(".change-input-value").hide();
    $(".change-input").hide();
    $(".services-dcp").hide();
    $(".add-img-btn").hide();
    $(".change-input-blog-date").hide();

    $(".change-btn").show();

    $(".change-btn").click(function () {
        $(this).hide();
        $(this).siblings(".save-btn").show();
        $(this).siblings(".delete-btn").show();

        $(this).siblings(".app-doc-meta").find(".change-input-value").show();

        $(this).parent().siblings(".admin-ourWorks-img").hide();
        $(this).parent().siblings(".admin-blog-images-img").hide();
        $(this).parent().siblings(".admin-services-img").hide();
        $(this).siblings("h4").hide();
        $(this).siblings(".app-doc-meta").find(".services-dcp-text").hide();

        $(this).siblings(".add-img-btn").show();
        $(this).siblings(".change-input").show();
        $(this).siblings(".app-doc-meta").find(".services-dcp").show();

        $(this).parent().find(".change-input-blog-date").show();
        $(this).parent().find(".admin-blog-details-img").hide();
        $(this).parent().find(".blog-date-text").hide();

        return false;
    });

    // update user
    $(".save-btn-user").click(function () {
        const title_input = $(this).siblings(".change-input")[0];
        const role = $(this)
            .siblings(".app-doc-meta")
            .find(".change-input-blog-date")[0];

        const id = $(this)[0].id;

        var fd = new FormData();

        fd.append("title", title_input.value);
        fd.append("id_role", role.value);
        if ($(this)[0].id !== "") {
            fd.append("_method", "PUT");
            $.ajax({
                type: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: fd,
                url: "api/user/" + id,
                success: function (data) {
                    // title.innerText = data.response.title;
                    // date.innerText = data.response.date;
                    console.log("a")
                    
                },
                error: function (data) {
                    if (data.status == 422) {
                        alert(
                            "Неверные данные или размер файла превышает максимально допустимый"
                        );
                    } else if (data.status == 404) {
                        alert("Не найдено");
                    } else if (data.status == 500) {
                        alert("Написать разработчикам");
                    }
                },
            });
        } else {
            // add blog
            fd.append("_method", "POST");
            $.ajax({
                type: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: fd,
                url: "/action/post",
                success: function (data) {
                    console.log("b")
                    
                },
                error: function (data) {
                    if (data.status == 422) {
                        alert(
                            "Неверные данные или размер файла превышает максимально допустимый"
                        );
                    } else if (data.status == 404) {
                        alert("Не найдено");
                    } else if (data.status == 500) {
                        alert("Написать разработчикам");
                    }
                },
            });
            // add blog
        }
    });
    // update user

    // delete someone
    $(".delete-btn").click(function () {
        var closet = $(this).closest(".col-6");
        $.ajax({
            type: "POST",
            data: { _method: "DELETE" },
            url:
                "/action/" +
                $(this)[0].attributes.getNamedItem("path").value +
                "/" +
                $(this).siblings(".save-btn")[0].id,
            success: function (data) {
                closet.remove();
            },
            error: function (data) {
                if (data.status == 404) {
                    alert("Ошибка");
                } else if (data.status == 500) {
                    alert("Написать разработчикам");
                }
            },
        });
    });
    // delete someone
}

$(document).ready(function () {
    update();

    // add service
    $(".add-btn-services").click(function () {
        $(".all-cards").prepend(
            `<div class="col-6 col-md-4 col-xl-3 col-xxl-4">
            <div class="app-card app-card-doc shadow-sm h-100">
                <img src="" class="admin-services-img">
                <div class="app-card-body p-3">
                    <input type="file" class="add-img-btn">
                    <h4 class="app-doc-title truncate mb-0" title=""></h4>
                    <input type="text" name="name" class="change-input" placeholder="Название услуги"
                        value="">
                    <div class="app-doc-meta">
                        <ul class="list-unstyled mb-0">
                            <li class="services-dcp-text">
                                <span class="text-muted">Описание:</span>
                                <span class="admin-services-dcp"></span>
                            </li>
                            <textarea name="services-dcp" class="services-dcp product-dcp" placeholder="Описание"></textarea>
                        </ul>
                    </div>
                    <button class="change-btn change-btn-services btn btn-primary">Изменить</button>
                    <button class="save-btn save-btn-services btn btn-primary"
                        id="">Сохранить</button>
                    <button class="delete-btn btn btn-primary" path="service"><i class="far fa-trash-alt"
                            style="color: white;"></i></button>
                </div>
            </div>
        </div>`
        );
        update();
    });
    // add service

    // add blog
    $(".add-btn-blog").click(function () {
        $(".all-cards").prepend(
            `<div class="col-6 col-md-4 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <div class="app-card-body p-3">
                    <h4 class="app-doc-title truncate mb-0" title=""></h4>
                    <input type="text" name="name" class="change-input" placeholder="Название услуги"
                        value="">
                    <div class="app-doc-meta">
                        <ul class="list-unstyled mb-0">
                            <li class="blog-date-text">
                                <span class="text-muted">Дата:</span>
                                <span class="admin-blog-date"></span>
                            </li>
                            <input type="text" class="change-input-blog-date" placeholder="Дата"
                                value="">
                        </ul>
                    </div>
                    <button class="change-btn change-btn-blog btn btn-primary">Изменить</button>
                    <button class="save-btn save-btn-blog btn btn-primary" id="">Сохранить</button>
                    <a class="btn btn-primary" href="">Изменить
                        фото</a>
                    <button class="delete-btn btn btn-primary" path="post"><i class="far fa-trash-alt"
                            style="color: white;"></i></button>
                </div>
            </div>
        </div>`
        );
        update();
    });
    // add blog

    // add blog-image
    $(".add-btn-blog-images").click(function () {
        $(".all-cards").prepend(
            `<div class="col-6 col-md-4 col-xl-3 col-xxl-3">
            <div class="app-card app-card-doc shadow-sm h-100">
                <img src="" class="admin-blog-images-img">
                <div class="app-card-body p-3">
                    <input type="file" class="add-img-btn">
                    <button class="change-btn change-btn-blog-images btn btn-primary">Изменить</button>
                    <button class="save-btn save-btn-blog-images btn btn-primary" id="">Сохранить</button>
                    <button class="delete-btn btn btn-primary" path="post_img"><i class="far fa-trash-alt"
                            style="color: white;"></i></button>
                </div>
            </div>
        </div>`
        );
        update();
    });
    // add blog-image
});