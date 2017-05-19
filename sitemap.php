<?php
    $pgDesc = "Convenient and easy to use users sitemap. Just because I am not offering search field, I decided to give you a sitemap, so you can find easly anything you need" ;
    $pageTitle = "Sitemap | Rosen Ivanov - London, UK" ;
    require_once("header.php");
?>
    <div class="container">
    <div class="col-md-12 sitemap">
        <h1 style="margin-top: 100px;">Users SiteMap</h1>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="#">Services</a>
                <ul>
                    <li><a href="web-design.html"><i class="fa fa-laptop" aria-hidden="true"></i> Web Design</a></li>
                    <li><a href="cms-system.html"><i class="fa fa-wordpress" aria-hidden="true"></i> CMS System</a></li>
                    <li><a href="content-writing.html"><i class="fa fa-line-chart" aria-hidden="true"></i> Content Writing</a></li>
                    <li><a href="search-engine-optimization.html"><i class="fa fa-bar-chart" aria-hidden="true"></i> SEO</a></li>
                    <li><a href="graphic-design.html"><i class="fa fa-paint-brush" aria-hidden="true"></i> Graphic Design</a></li>
                    <li><a href="photography.html"><i class="fa fa-camera-retro" aria-hidden="true"></i> Photography</a></li>
                </ul>
            </li>
            <li>
                <a href="portfolio.html">Porfolio</a>
            </li>
            <li>
                <a href="http://blog.rosen-ivanov.com" target="_blank">Blog</a>
            </li>
            <li>
                <a href="contact.html">Contact</a>
            </li>
        </ul>
    </div>
</div>
<?php require_once("footer.php"); ?>