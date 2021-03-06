<?php
        $data="up.png";
        $dir = ".";
        $dirHandle = opendir($dir);
        while ($file = readdir($dirHandle)) {
            if($file==$data) {
                unlink($file);
            }
        }

        closedir($dirHandle);

        $data1="result.jpg";
        $dir1 = ".";
        $dirHandle1 = opendir($dir1);
        while ($file1 = readdir($dirHandle1)) {
            if($file1==$data1) {
                unlink($file1);
            }
        }

        closedir($dirHandle1);

?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>Projection by TEMPLATED</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/main1.css" />
    </head>
    <body>

        <!-- Header -->
            <header id="header">
                <div class="inner">
                    <a href="index.html" class="logo"><strong>HAND WRITTEN DIGIT RECOGNITION</strong> by SJF</a>
                    <nav id="nav">
                        <a href="index.html">Home</a>
                    </nav>
                    <a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
                </div>
            </header>

        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <header>
                        <h1>HAND-WRITTEN DIGIT RECOGNITION</h1>
                    </header>

                    <div class="flex ">

                        <div>
                            <span class="icon fa-list-ol"></span>
                            <h3>Input Image</h3>
                            <p>Handwritten Digits</p>
                        </div>

                        <div>
                            <span class="icon fa-camera"></span>
                            <h3>Processing</h3>
                            <p>Machine Learning & Image Processing</p>
                        </div>

                        <div>
                            <span class="icon fa-bug"></span>
                            <h3>Result Image</h3>
                            <p>Recognized Image</p>
                        </div>

                    </div>

                    <footer>
                          <form name="form" method="post" action="im.html">
         <button class="fileContainer">Home</button>
         </form>

                    </footer>

                </div>
            </section>
       <br>
       <br>
        <!-- Three -->
            <section id="three" class="wrapper align-center">
                <div class="inner">
                    <div class="flex flex-2">
                        <article>
                            <div class="image round">
                                <img src="images/2.png" alt="Pic 01" />
                            </div>
                            <header>
                                <h3>Jainam Shah<br />
                            </header>
                            <p>15CE124 : Developer</p>
                            
                        </article>
                        <article>
                            <div class="image round">
                                <img src="images/3.png" alt="Pic 02" />
                            </div>
                            <header>
                                <h3>Shrey Patel</h3>
                            </header>
                            <p>15CE104 : Developer</p>
                        
                        </article>
                        <article>
                            <div class="image round">
                                <img src="images/1.png" alt="Pic 02" />
                            </div>
                            <header>
                                <h3>Fenil Shah</h3>
                            </header>
                            <p>15CE121 : Developer</p>
                        
                        </article>
                    </div>
                </div>
            </section>

        <!-- Footer -->
            <footer id="footer">
                <div class="inner">

                    <h3>Get in touch</h3>

                    <form action="#" method="post">

                        <div class="field half first">
                            <label for="name">Name</label>
                            <input name="name" id="name" type="text" placeholder="Name">
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" placeholder="Email">
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <ul class="actions">
                            <li><input value="Send Message" class="button alt" type="submit"></li>
                        </ul>
                    </form>

                    <div class="copyright">
                        &copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
                    </div>

                </div>
            </footer>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script language="javascript" type="text/javascript">
$(function () {
    $("#my_file").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview img").attr("src", e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
</script>

    </body>
</html>