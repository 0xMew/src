<footer class="row">
        <div class="col-md-12 text-center base-font">
            <h2 class="base-font">Also check out my <span>socials</span></h2>
            <div class="socials">
            </div>
            <div class="custom-div">
                <a href="https://twitter.com" target="_blank"><img src="pictures/🦆 icon _twitter_2.png" alt="Twitter"></a>
                <a href="https://linkedin.com" target="_blank"><img src="pictures/🦆 icon _linkedin_2.png" alt="LinkedIN"></a>
                <a href="https://facebook.com" target="_blank"><img src="pictures/🦆 icon _facebook_2.png" alt="Facebook"></a>
                <a href="https://github.com" target="_blank"><img src="pictures/🦆 icon _github_2.png" alt="GitHub"></a>
            </div>

            <?php
        $filename = "footer.php";

        if(file_exists($filename))
        {
            echo date('F d Y H:i:s', filemtime($filename));
        }

        ?>
        </div>

</footer>