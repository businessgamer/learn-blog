// function tinymce_setup_callback(editor) {
//     tinymce.init({
//         "menubar": false,
//         "selector": "textarea.richTextBox",
//         "skin_url": $('meta[name="assets-path"]').attr("content") + "?path=js/skins/voyager",
//         "min_height": 200,
//         "height": 500,
//         "resize": "vertical",
//         "plugins": 'anchor autolink directionality emoticons help link lists media table code textcolor',
//         "extended_valid_elements": "input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]",
//         "file_browser_callback": function (field_name, url, type, win) {
//             if (type == "image") {
//                 $("#upload_file").trigger("click")
//             }
//         },
//         "toolbar": 'styleselect fontselect fontsizeselect | forecolor backcolor | undo redo spellcheckdialog | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat | code',
//         "fontsize_formats": '6pt 8pt 9pt 10pt 11pt 12pt 14pt 16pt 18pt 20pt 20pt 24pt 30pt 36pt 48pt 60pt 72pt 96pt',
//         "spellchecker_language": 'en_US',
//         "spellchecker_languages": 'English (United States)=en_US',
//         "typography_langs": [ 'en-US' ],
//         "typography_default_lang": 'en-US',
//         "image_caption": true,
//         "image_title": true,
//     })
// }