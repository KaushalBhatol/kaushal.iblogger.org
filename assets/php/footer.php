
  <footer class="container">
    <p class="float-end"><a href="#nav">Back to top</a></p>
    <p>Created by Kaushal Bharol &middot; &copy; <?=$year?></p>
  </footer>

<!-- Js files  -->
<script name="Bootstrap" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script name="Bootstrap" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
<!-- git md  -->
<script>
window.onload = function() {
    if (document.querySelector("script[type=\"math/tex; mode=display\"]") !== null) {
        var mathjax = document.createElement("script");
        mathjax.src = "https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML";
        document.head.appendChild(mathjax);
    }
    if (document.getElementsByTagName("code").length !== 0) {
        var highlight = document.createElement("script");
        var highlightcss = document.createElement("link");
        highlight.src = "http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.2.0/highlight.min.js";
        highlightcss.rel = "stylesheet";
        highlightcss.href = "http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.2.0/styles/github.min.css";
        highlight.onload = function() {hljs.initHighlighting();};
        document.head.appendChild(highlight);
        document.head.appendChild(highlightcss);
    }
}
</script>
</body>
</html>