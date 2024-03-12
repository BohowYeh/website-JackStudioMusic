<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="images/image.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
    <?php
        require('../config.php');
        $guid = $_COOKIE['session_id'];
        $query = "SELECT * FROM Final_member WHERE guid = '$guid'";
        $result = mysqli_query($link,$query);
        $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <div class="title">Edit Member Information</div>
        <div class="content">
            <form action="edit.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">真實姓名</span>
                        <?php echo$row['name'];?>
                    </div>
                    <div class="input-box">
                        <span class="details">暱稱</span>
                        <?php echo$row['mId'];?>
                    </div>
                    <div class="input-box">
                        <span class="details">電子郵件</span>
                        <input type="text" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">電話號碼 (10字以內)</span>
                        <input type="text" placeholder="Enter your number" name="phone" required>
                    </div>
                    <div class="input-box">
                        <span class="details">密碼 (8-16字為佳)</span>
                        <input type="password" id="idPwd" placeholder="Enter your password" name="pwd" required>
                    </div>
                    <div class="input-box">
                        <span class="details">確認密碼 </span>
                        <input type="password" id="cidPwd" placeholder="Confirm your password" name="cpwd" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Edit">
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>　
    <script>
        !
            function () {
                function n(n, e, t) {
                    return n.getAttribute(e) || t
                }
                function e(n) {
                    return document.getElementsByTagName(n)
                }
                function t() {
                    var t = e("script"),
                        o = t.length,
                        i = t[o - 1];
                    return {
                        l: o,
                        z: n(i, "zIndex", -1),
                        o: n(i, "opacity", .5),
                        c: n(i, "color", "0,0,0"),
                        n: n(i, "count", 99)
                    }
                }
                function o() {
                    a = m.width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth,
                        c = m.height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight
                }
                function i() {
                    r.clearRect(0, 0, a, c);
                    var n, e, t, o, m, l;
                    s.forEach(function (i, x) {
                        for (i.x += i.xa, i.y += i.ya, i.xa *= i.x > a || i.x < 0 ? -1 : 1, i.ya *= i.y > c || i.y < 0 ? -1 : 1, r.fillRect(i.x - .5, i.y - .5, 1, 1), e = x + 1; e < u.length; e++) n = u[e],
                            null !== n.x && null !== n.y && (o = i.x - n.x, m = i.y - n.y, l = o * o + m * m, l < n.max && (n === y && l >= n.max / 2 && (i.x -= .03 * o, i.y -= .03 * m), t = (n.max - l) / n.max, r.beginPath(), r.lineWidth = t / 2, r.strokeStyle = "rgba(" + d.c + "," + (t + .2) + ")", r.moveTo(i.x, i.y), r.lineTo(n.x, n.y), r.stroke()))
                    }),
                        x(i)
                }
                var a, c, u, m = document.createElement("canvas"),
                    d = t(),
                    l = "c_n" + d.l,
                    r = m.getContext("2d"),
                    x = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
                        function (n) {
                            window.setTimeout(n, 1e3 / 45)
                        },
                    w = Math.random,
                    y = {
                        x: null,
                        y: null,
                        max: 2e4
                    };
                m.id = l,
                    m.style.cssText = "position:fixed;top:0;left:0;z-index:" + d.z + ";opacity:" + d.o,
                    e("body")[0].appendChild(m),
                    o(),
                    window.onresize = o,
                    window.onmousemove = function (n) {
                        n = n || window.event,
                            y.x = n.clientX,
                            y.y = n.clientY
                    },
                    window.onmouseout = function () {
                        y.x = null,
                            y.y = null
                    };
                for (var s = [], f = 0; d.n > f; f++) {
                    var h = w() * a,
                        g = w() * c,
                        v = 2 * w() - 1,
                        p = 2 * w() - 1;
                    s.push({
                        x: h,
                        y: g,
                        xa: v,
                        ya: p,
                        max: 6e3
                    })
                }
                u = s.concat([y]),
                    setTimeout(function () {
                        i()
                    },
                        100)
            }();



    </script>



</body>

</html>