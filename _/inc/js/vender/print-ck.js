$.urlParam=function(e){var t=(new RegExp("[\\?&]"+e+"=([^&#]*)")).exec(window.location.href);return t===null?null:t[1]||0};$.urlParam("style");var style=$.urlParam("style");style==="print"?jQuery("#main-css").remove():jQuery("#print-css").remove();