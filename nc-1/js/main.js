// go Top 回到最上面按鈕
$(document).ready(function () {
    var offset = 400,
        speed = 500,
        duration = 100,
        scrollButton = $('#goTop');
    $(window).scroll(function () {
        if ($(this).scrollTop() < offset) {
            scrollButton.fadeOut(duration);
        } else {
            scrollButton.fadeIn(duration);
        }
    });
    scrollButton.on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, speed);
    });
});

// jquery
$(function () {
    jQuery.event.special.touchstart = {
        setup: function (_, ns, handle) {
            this.addEventListener("touchstart", handle, {
                passive: !ns.includes("noPreventDefault")
            });
        }
    };
    jQuery.event.special.touchmove = {
        setup: function (_, ns, handle) {
            this.addEventListener("touchmove", handle, {
                passive: !ns.includes("noPreventDefault")
            });
        }
    };
    jQuery.event.special.wheel = {
        setup: function (_, ns, handle) {
            this.addEventListener("wheel", handle, {
                passive: true
            });
        }
    };
    jQuery.event.special.mousewheel = {
        setup: function (_, ns, handle) {
            this.addEventListener("mousewheel", handle, {
                passive: true
            });
        }
    };

});

// Form Vaildation 表單驗證
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                else if (form.checkValidity() == true) {
                    $('#successFormModal').modal("show");
                    // stop form submit only for demo
                    event.preventDefault();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();


// 更新版權年分
document.getElementById('year').innerHTML = new Date().getFullYear() + '';

// 自動複製版權方
// function addLink() {
//     var selection = window.getSelection(),
//         pagelink = '<br /><br /> Read more at: ' + document.location.href,
//         pagelink = "<br/><br/> 文章來自: <a href='" + document.location.href + "'>" +
//             document.location.href + "</a><br/>Copyright &copy; 網路中文資訊股份有限公司",
//         copytext = selection + pagelink,
//         newdiv = document.createElement('div');
//     newdiv.style.position = 'absolute';
//     newdiv.style.left = '-99999px';
//     document.body.appendChild(newdiv);
//     newdiv.innerHTML = copytext;
//     selection.selectAllChildren(newdiv);
//     window.setTimeout(function () {
//         document.body.removeChild(newdiv);
//     }, 100);
// }
// document.addEventListener('copy', addLink);


// Bootstrap 下拉選單開啟並能保持連結
$(document).ready(function () {
    if ($(window).width() < 992) {
        $(".main-nav .dropdown-toggle").removeAttr("data-bs-hover");
        $(".main-nav .dropdown-toggle").attr("data-bs-toggle", "dropdown");
    }
});

$(window).resize(function () {
    if ($(window).width() < 992) {
        $(".main-nav .dropdown-toggle").removeAttr("data-bs-hover");
        $(".main-nav .dropdown-toggle").attr("data-bs-toggle", "dropdown");
    }
});
