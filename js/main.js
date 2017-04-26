$(document).ready(function () {

    //Mobile menu
    $(function () {
        var i = 0;
        $('#mobileMenuLink').on('click', function () {
            i++;
            if (i % 2 != 0) {
                $('#mobileNav').css({
                    'max-height': '999px',
                    'transition-property': 'all',
                    'transition-duration': '.5s',
                    'transition-timing-function': 'cubic-bezier(0, 1, 0.5, 1)',
                    'overflow': 'visible',
                    'visibility': 'visible'

                });
            } else {
                $('#mobileNav').css({
                    'max-height': '0',
                    'overflow': 'hidden',
                    'visibility': 'hidden'
                });
            }
        });
    });


//ProductCarousel
    $('#picCarousel').carousel({
        interval: false
    });

// Handles the carousel thumbnails
    $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        var id = id_selector.substr(id_selector.length - 1);
        id = parseInt(id);
        $('#picCarousel').carousel(id);
        $('[id^=carousel-selector-]').removeClass('active');
        $(this).addClass('active');
    });

    //Shopping cart
    $(".item_form").submit(function (e) {
        var form_data = $(this).serialize();
        /* AJAX request  - controllers/cart.php */
        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            dataType: "text",
            data: form_data,
            success: (function (data) {//if AJAX request if succesful
                /* Empty the update info bar before calling it. Otherwise appended content will duplicate. */
                $('#cart_update_info').empty();
                /* append data/info to cart_update_info bar */
                $("#cart_update_info").append("<div id='new_item_added'><i class='glyphicon glyphicon-ok' style='color:green;'></i> Item added to the cart</div>").fadeIn('fast').delay(2000).fadeOut('fast');
                /* If shopping cart is still open, items will appear on it at the same time of adding them */
                $("#shopping-cart").load(location.href + " #inCart");
                $(".cartIcon").removeClass("hidden").addClass("animated fadeIn");
                //var itemsInCart = $("#items_in_shopping_cart").val();
                var n = $("#items_in_shopping_cart").data("qty");
                $("#items_in_shopping_cart").html(n + 1);
            })
        })
        e.preventDefault();
    });

      //Add stock quantity on admin panel
    $(document).on("click", ".add", (function () {
        var id = $(this).parents("tr").attr("data-id");
        $.ajax({
            type: 'POST',
            url: './../controllers/addStock.php',
            data: {id: id},
            dataType: 'text',
            success: function (data) {
                $("#furniture-dad").load(location.href + " #furniture");
            }
        });
    }));

    //Remove from stock quantity on admin panel
    $(document).on("click", ".remove", (function () {
        var id = $(this).parents("tr").attr("data-id");
        $.ajax({
            type: 'POST',
            url: './../controllers/rmvStock.php',
            data: {id: id},
            dataType: 'text',
            success: function (data) {
                $("#furniture-dad").load(location.href + " #furniture");
                console.log(data);

            }
        });
    }));

    //Remove the item completely
    $(document).on("click", ".destroy", (function () {
        var id = $(this).parents("tr").attr("data-id");
        $.ajax({
            type: 'POST',
            url: './../controllers/destroyStock.php',
            data: {id: id},
            dataType: 'text',
            success: function (data) {
                $("#furniture-dad").load(location.href + " #furniture");

            }
        });
    }));

    //Create a new product as admin
    $(document).on("click", ".create", (function () {
        $.ajax({
            type: 'POST',
            url: './../controllers/createStock.php',
            data: $('#newProduct').serialize(),
            dataType: 'text',
            success: function (data) {
                $("#furniture-dad").load(location.href + " #furniture");

            }
        });
    }));

    /*  $(document).on("click", ".btnAddAction", (function () {
     $.ajax({
     type: 'POST',
     url: './controllers/cart.php',
     data: $('.item_form').serialize(),
     dataType: 'text',
     success: function (data) {
     $("#shopping-cart").load(location.href + " #inCart");
     //window.location = window.location.href;
     }
     });
     }));*/

    //Handle admin nav animations
    $("#hideNav").click(function (event) {
        $("#adminNavbar").hide("slow");
        $("#hiddenBtn").show("slow");
        document.getElementById("navbarRegular").style.paddingTop = "0px";
    });
    $("#hiddenBtn").click(function (event) {
        $("#adminNavbar").show("slow");
        $("#hiddenBtn").hide("slow");
        document.getElementById("navbarRegular").style.paddingTop = "50px";
    });

// WE NEED IT LATER FOR UPLOADING STUFF
// $(function () {
//     'use strict';
//
//     // UPLOAD CLASS DEFINITION
//     // ======================
//
//     var dropZone = document.getElementById('drop-zone');
//     var uploadForm = document.getElementById('js-upload-form');
//
//     var startUpload = function (files) {
//         var i;
//         for (i = 0; i <= 2; i++) {
//             var file_data = $('#js-upload-files').prop('files')[i];
//             console.log(file_data);
//             var form_data = new FormData();
//             form_data.append('file', file_data);
//             $.ajax({
//                 url: 'upload.php', // point to server-side PHP script
//                 dataType: 'text',  // what to expect back from the PHP script, if anything
//                 cache: false,
//                 contentType: false,
//                 processData: false,
//                 data: form_data,
//                 type: 'post',
//                 success: function (php_script_response) {
//                     alert(php_script_response)
//                 }
//             });
//         }
//         console.log(files);
//     }
//
//     /* var dropLoad = function(files1) {
//      var file_data = $('#drop-zone').prop('files1')[0];
//      var form_data = new FormData();
//      form_data.append('file1', file_data);
//      alert(form_data);
//      $.ajax({
//      url: 'upload.php', // point to server-side PHP script
//      dataType: 'text',  // what to expect back from the PHP script, if anything
//      cache: false,
//      contentType: false,
//      processData: false,
//      data: form_data,
//      type: 'post',
//      success: function(php_script_response){
//      alert(php_script_response); // display response from the PHP script, if any
//      }
//      });
//      console.log(files1);
//      }
//      */
//
//
//     uploadForm.addEventListener('submit', function (e) {
//         var uploadFiles = document.getElementById('js-upload-files').files;
//         e.preventDefault();
//
//         startUpload(uploadFiles)
//     });
//
//
//     dropZone.addEventListener('drop', function (e) {
//         var uploadFiles = document.getElementById('drop-zone').files;
//         e.preventDefault();
//
//         startUpload(dropLoad)
//     });
//
//
//     dropZone.ondragover = function () {
//         this.className = 'upload-drop-zone drop';
//         return false;
//     }
//
//     dropZone.ondragleave = function () {
//         this.className = 'upload-drop-zone';
//         return false;
//     }
//
// });


    /* WE MIGHT NEED IT ON THE ADMIN PANEL
     $(document).on("click", ".sidebar-toggle", function () {
     $(".wrapper").toggleClass("toggled");
     });
     */
});