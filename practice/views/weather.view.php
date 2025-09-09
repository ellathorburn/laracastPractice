<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <script id="wg_fwdg_288275_100_1757406091232">
                (function (window, document) {
                    var loader = function () {
                        var arg = ["s=288275" ,"m=100","mw=83","uid=wg_fwdg_288275_100_1757406091232" ,"wj=knots" ,"tj=c" ,"waj=m" ,"tij=cm" ,"odh=0" ,"doh=24" ,"fhours=240" ,"hrsm=2" ,"vt=forecasts" ,"lng=en" ,"idbs=1" ,"p=WINDSPD,GUST,SMER,SWELL1,SWPER1,SWEN1,SWDIR1,TMPE,CDC,APCP1s"];
                        var script = document.createElement("script");
                        var tag = document.getElementsByTagName("script")[0];
                        script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
                        tag.parentNode.insertBefore(script, tag);
                    };
                    window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                })(window, document);
            </script>
        </div>
    </main>

<?php require "partials/footer.php" ?>