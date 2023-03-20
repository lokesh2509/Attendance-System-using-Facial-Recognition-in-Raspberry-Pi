<!doctype html>

<head>
    <link rel="stylesheet" href="std_reg_3.css">
    <title>Face Registration</title>
</head>

<body>
    <div class="card">
    <div class="title">
        <h3 style="display:flex; gap: 1px;">
                    <img src="images/login.svg" alt="" width="50px" height="50px" style="margin-left: 600px;"> <p style="margin-top: 10px; font-size:20px">Registration Page</p>
</h3>
        </div>

        <div class="container0">
            <div class="content">
                <div class="camera">
                    <video id="video">Video stream not available.</video>
                </div>
                <div class="cam_btn"><button id="startbutton" class="btn_green1">Take photo</button></div>

                <div class="clicked_image">
                    <div class="img">
                        Check your Image here
                    </div>
                    <canvas id="canvas"></canvas>
                </div>

                <!-- form_input -->
                <div class="form_input">

                    <form action="std_reg_3_php.php" method="post">
                        <!-- Changes can be done here -->
                        <!-- Input for UID -->
                        <?php

                        // receiver side
                        session_start();
                        $class_value = $_SESSION['class'];
                        $div_value = $_SESSION['div'];
                        $uid_value = $_SESSION['uid'];

                        echo "<div class=\"uid_input\">
                        <label class=\"label\">Class: </label> <input type=\"text\" value=" . $class_value . " name=\"std_class\" class=\"std_class\">
                        <label class=\"label\">Division: </label> <input type=\"text\"  value=" . $div_value . "  name=\"std_div\" class=\"std_div\">
                    </div>
                    <div class=\"uid_input1\">
                        <label class=\"label1\">UID: </label> <input type=\"text\"  value=" . $uid_value . "  name=\"std_uid\" class=\"std_uid\">
                    </div><br>";
                        ?>





                        <textarea id="dataurl1" name="url1" readonly></textarea>
                        <textarea id="dataurl2" name="url2" readonly></textarea>
                        <textarea id="dataurl3" name="url3" readonly></textarea>
                        <textarea id="dataurl4" name="url4" readonly></textarea>
                        <textarea id="dataurl5" name="url5" readonly></textarea>
                        <textarea id="dataurl6" name="url6" readonly></textarea>
                        <textarea id="dataurl7" name="url7" readonly></textarea>
                        <textarea id="dataurl8" name="url8" readonly></textarea>
                        <textarea id="dataurl9" name="url9" readonly></textarea>
                        <textarea id="dataurl10" name="url10" readonly></textarea>
                        <input type="submit" class="btn_green">
                    </form>

                </div>
            </div>
        </div>
</body>
<script>
    /* JS comes here */
    (function() {

        var width = 320; // We will scale the photo width to this
        var height = 0; // This will be computed based on the input stream

        var streaming = false;

        var video = null;
        var canvas = null;
        var photo = null;
        var startbutton = null;

        function startup() {
            video = document.getElementById('video');
            canvas = document.getElementById('canvas');

            // Changes can be done here
            let dataurl1 = document.querySelector("#dataurl1");
            let dataurl2 = document.querySelector("#dataurl2");
            let dataurl3 = document.querySelector("#dataurl3");
            let dataurl4 = document.querySelector("#dataurl4");
            let dataurl5 = document.querySelector("#dataurl5");
            let dataurl6 = document.querySelector("#dataurl6");
            let dataurl7 = document.querySelector("#dataurl7");
            let dataurl8 = document.querySelector("#dataurl8");
            let dataurl9 = document.querySelector("#dataurl9");
            let dataurl10 = document.querySelector("#dataurl10");

            startbutton = document.getElementById('startbutton');

            navigator.mediaDevices.getUserMedia({
                    video: true,
                    audio: false
                })
                .then(function(stream) {
                    video.srcObject = stream;
                    video.play();
                })
                .catch(function(err) {
                    console.log("An error occurred: " + err);
                });

            video.addEventListener('canplay', function(ev) {
                if (!streaming) {
                    height = video.videoHeight / (video.videoWidth / width);

                    if (isNaN(height)) {
                        height = width / (4 / 3);
                    }

                    video.setAttribute('width', width);
                    video.setAttribute('height', height);
                    canvas.setAttribute('width', width);
                    canvas.setAttribute('height', height);
                    streaming = true;
                }
            }, false);


            // Changes can be done here
            startbutton.addEventListener('click', function(ev) {
                takepicture_1();
                ev.preventDefault();

                //sleep timer
                let sleep2 = ms => {
                    return new Promise(resolve => setTimeout(resolve, ms));
                };
                sleep2(1000).then(() => {
                    takepicture_2();
                    ev.preventDefault();
                });

                //sleep timer
                let sleep3 = ms => {
                    return new Promise(resolve => setTimeout(resolve, ms));
                };
                sleep3(2000).then(() => {
                    takepicture_3();
                    ev.preventDefault();
                });

                //sleep timer
                let sleep4 = ms => {
                    return new Promise(resolve => setTimeout(resolve, ms));
                };
                sleep4(3000).then(() => {
                    takepicture_4();
                    ev.preventDefault();
                });

                //sleep timer
                let sleep5 = ms => {
                    return new Promise(resolve => setTimeout(resolve, ms));
                };
                sleep5(4000).then(() => {
                    takepicture_5();
                    ev.preventDefault();
                });

                //sleep timer
                let sleep6 = ms => {
                    return new Promise(resolve => setTimeout(resolve, ms));
                };
                sleep6(5000).then(() => {
                    takepicture_6();
                    ev.preventDefault();
                });

                //sleep timer
                let sleep7 = ms => {
                    return new Promise(resolve => setTimeout(resolve, ms));
                };
                sleep7(6000).then(() => {
                    takepicture_7();
                    ev.preventDefault();
                });

                //sleep timer
                let sleep8 = ms => {
                    return new Promise(resolve => setTimeout(resolve, ms));
                };
                sleep8(7000).then(() => {
                    takepicture_8();
                    ev.preventDefault();
                });

                //sleep timer
                let sleep9 = ms => {
                    return new Promise(resolve => setTimeout(resolve, ms));
                };
                sleep9(8000).then(() => {
                    takepicture_9();
                    ev.preventDefault();
                });

                //sleep timer
                let sleep10 = ms => {
                    return new Promise(resolve => setTimeout(resolve, ms));
                };
                sleep10(9000).then(() => {
                    takepicture_10();
                    ev.preventDefault();
                });

            }, false);


        }


        // Changes can be done here
        function takepicture_1() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                dataurl1.value = data;
            }
        }

        function takepicture_2() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                dataurl2.value = data;
            }
        }

        function takepicture_3() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                dataurl3.value = data;
            }
        }

        function takepicture_4() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                dataurl4.value = data;
            }
        }

        function takepicture_5() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                dataurl5.value = data;
            }
        }

        function takepicture_6() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                dataurl6.value = data;
            }
        }

        function takepicture_7() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                dataurl7.value = data;
            }
        }

        function takepicture_8() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                dataurl8.value = data;
            }
        }

        function takepicture_9() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                dataurl9.value = data;
            }
        }

        function takepicture_10() {
            var context = canvas.getContext('2d');
            if (width && height) {
                canvas.width = width;
                canvas.height = height;
                context.drawImage(video, 0, 0, width, height);

                var data = canvas.toDataURL('image/png');
                dataurl10.value = data;
            }
        }

        window.addEventListener('load', startup, false);
    })();
</script>

</html>