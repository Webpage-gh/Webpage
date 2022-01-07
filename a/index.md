a
<script>window.addEventListener("load",function(){var t=/\.(gif|jpg|jpeg|tiff|png)$/i,r=/^data:image\/[a-z]+;base64,/;Array.prototype.slice.call(document.querySelectorAll("img[data-original]")).forEach(function(a){var e=a.parentNode;"A"===e.tagName&&(e.href.match(t)||e.href.match(r))&&(e.href=a.dataset.original)})});</script>
