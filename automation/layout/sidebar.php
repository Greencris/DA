<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

:root {
    --header-height: 3rem;
    --nav-width: 230px;
    --first-color: #4723D9;
    --first-color-light: #AFA5D9;
    --white-color: #F7F6FB;
    --body-font: 'Nunito', sans-serif;
    --normal-font-size: 1rem;
    --z-fixed: 100
}

*,
::before,
::after {
    box-sizing: border-box
}

body {
    position: relative;
    margin: var(--header-height) 0 0 0;
    padding: 0 1rem;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    transition: .5s
}

a {
    text-decoration: none
}

.header {
    width: 100%;
    height: var(--header-height);
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 1rem;
    background-color: var(--white-color);
    z-index: var(--z-fixed);
    transition: .5s
}

.header_toggle {
    color: var(--first-color);
    font-size: 1.5rem;
    cursor: pointer
}

.header_img {
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    border-radius: 50%;
    overflow: hidden
}

.header_img img {
    width: 40px
}

.l-navbar {
    position: fixed;
    top: 0;
    left: -30%;
    width: var(--nav-width);
    height: 100vh;
    background-color: #1B2430;
    padding: .5rem 1rem 0 0;
    transition: .5s;
    z-index: var(--z-fixed)
}

.nav {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden
}

.nav_logo,
.nav_link {
    display: grid;
    grid-template-columns: max-content max-content;
    align-items: center;
    column-gap: 1rem;
    padding: .5rem 0 .5rem 1.5rem
}

.nav_logo {
    margin-bottom: 2rem
}

.nav_logo-icon {
    font-size: 1.25rem;
    color: var(--white-color)
}

.nav_logo-name {
    color: var(--white-color);
    font-weight: 700
}

.nav_link {
    position: relative;
    color: var(--first-color-light);
    margin-bottom: 1.5rem;
    transition: .3s
}

.nav_link:hover {
    color: var(--white-color)
}

.nav_icon {
    font-size: 1.25rem
}

.show {
    left: 0
}

.body-pd {
    padding-left: calc(var(--nav-width) + 1rem)
}

.active {
    color: var(--white-color)
}

.active::before {
    content: '';
    position: absolute;
    left: 0;
    width: 2px;
    height: 32px;
    background-color: var(--white-color)
}

.height-100 {
    height: 100vh
}

@media screen and (min-width: 768px) {
    body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem)
    }

    .header {
        height: calc(var(--header-height) + 1rem);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
    }

    .header_img {
        width: 40px;
        height: 40px
    }

    .header_img img {
        width: 45px
    }

    .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0
    }

    .show {
        width: calc(var(--nav-width) - 163px)
    }

    .body-pd {
        padding-left: calc(var(--nav-width) - 163px)
    }
}
</style>
<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <ul class="nav_list" style="list-style: none; padding:0;">
            <li>
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/Logo.png"
                            style="width:40px; margin-left: 12px;" alt="logo" /> <span style="color: white;"><b>NTU -
                                AGRI</b></span></a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center text-light" href="index.php">
                    <span class="icon-bg"><i class="mdi mdi-home menu-icon" style="font-size: 25px;"></i></span>
                    <span class="menu-title" style="margin-left: 15px; font-size:15px">Trang chủ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center text-light" href="status.php">
                    <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"
                            style="font-size: 25px;"></i></span>
                    <span class="menu-title" style="margin-left: 15px; font-size:15px">Thông số hiện tại</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center text-light" href="statistic.php">
                    <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon" style="font-size: 25px;"></i></span>
                    <span class="menu-title" style="margin-left: 15px; font-size:15px">Thống kê</span>
                </a>
            </li>
            <li class="nav-item sidebar-user-actions ">
                <div class="sidebar-user-menu">
                    <a href="setting.php" class="nav-link d-flex align-items-center text-light"><i
                            class="mdi mdi-settings menu-icon" style="font-size: 25px;"></i>
                        <span class="menu-title" style="margin-left: 15px; font-size:15px">Cấu hình</span>
                    </a>
                </div>
            </li>

            <li class="nav-item sidebar-user-actions mt-5">
                <div class="sidebar-user-menu">
                    <a href="logout.php" class="nav-link d-flex align-items-center text-light"><i
                            class="mdi mdi-logout menu-icon" style="font-size: 25px;"></i>
                        <span class="menu-title " style="margin-left: 15px; font-size:15px">Log Out</span></a>
                </div>
            </li>
        </ul>
    </nav>
</div>


<?php
$myfile = fopen("control.txt", "r") or die("Unable to open file!");
$control = fread($myfile,filesize("control.txt"));
fclose($myfile);

$myfile1 = fopen("data.txt", "r") or die("Unable to open file!");
$data = fread($myfile1,filesize("data.txt"));
fclose($myfile1);
?>
</div>
<script>
var myVar = setInterval(sendMail, 600000);

function sendMail() {
    var control = <?= $control ?>;
    var data = <?= $data ?>;
    var body = "";
    if (data[data.length - 1].DA_A1 <= control.DA_A1_MIN) {
        body += `<p>Độ ẩm 1 bị vượt quá ngưỡng an toàn:</p> 
    <p>Độ ẩm 1 hiện tại: <b>${data[data.length - 1].DA_A1}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.DA_A1_MIN}</b></p>`
    } else if (data[data.length - 1].DA_A1 >= control.DA_A1_Max) {
        body += `<p>Độ ẩm 1 bị vượt quá ngưỡng an toàn:</p> 
    <p>Độ ẩm 1 hiện tại: <b>${data[data.length - 1].DA_A1}</b></p>
    <p>Ngưỡng an toàn cao: <b>${control.DA_A1_MAX}</b></p>`
    } else {

    }


    if (data[data.length - 1].DA_A2 <= control.DA_A2_MIN) {
        body += `<p>Độ ẩm 2 bị vượt quá ngưỡng an toàn:</p> 
    <p>Độ ẩm 2 hiện tại: <b>${data[data.length - 1].DA_A2}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.DA_A2_MIN}</b></p>`
    } else if (data[data.length - 1].DA_A2 >= control.DA_A2_Max) {
        body += `<p>Độ ẩm 2 bị vượt quá ngưỡng an toàn:</p> 
    <p>Độ ẩm 2 hiện tại: <b>${data[data.length - 1].DA_A2}</b></p>
    <p>Ngưỡng an toàn cao: <b>${control.DA_A2_MAX}</b></p>`
    } else {

    }

    if (data[data.length - 1].DA_A3 <= control.DA_A3_MIN) {
        body += `<p>Độ ẩm 3 bị vượt quá ngưỡng an toàn:</p> 
    <p>Độ ẩm 3 hiện tại: <b>${data[data.length - 1].DA_A3}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.DA_A3_MIN}</b></p>`
    } else if (data[data.length - 1].DA_A3 >= control.DA_A3_Max) {
        body += `<p>Độ ẩm 3 bị vượt quá ngưỡng an toàn:</p> 
    <p>Độ ẩm 3 hiện tại: <b>${data[data.length - 1].DA_A3}</b></p>
    <p>Ngưỡng an toàn cao: <b>${control.DA_A3_MAX}</b></p>`
    } else {

    }



    if (data[data.length - 1].AS_A1 <= control.AS_A1_MIN) {
        body += `<p>Ánh sáng 1 bị vượt quá ngưỡng an toàn:</p> 
    <p>Ánh sáng 1 hiện tại: <b>${data[data.length - 1].AS_A1}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.AS_A1_MIN}</b></p>`
    } else if (data[data.length - 1].AS_A1 >= control.AS_A1_Max) {
        body += `<p>Ánh sáng 1 bị vượt quá ngưỡng an toàn:</p> 
    <p>Ánh sáng 1 hiện tại: <b>${data[data.length - 1].AS_A1}</b></p>
    <p>Ngưỡng an toàn cao: <b>${control.AS_A1_MAX}</b></p>`
    } else {

    }


    if (data[data.length - 1].AS_A2 <= control.AS_A2_MIN) {
        body += `<p>Ánh sáng 2 bị vượt quá ngưỡng an toàn:</p> 
    <p>Ánh sáng 2 hiện tại: <b>${data[data.length - 1].AS_A2}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.AS_A1_MIN}</b></p>`
    } else if (data[data.length - 1].AS_A2 >= control.AS_A2_Max) {
        body += `<p>Ánh sáng 2 bị vượt quá ngưỡng an toàn:</p> 
    <p>Ánh sáng 2 hiện tại: <b>${data[data.length - 1].AS_A2}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.AS_A2_MAX}</b></p>`
    } else {

    }

    if (data[data.length - 1].AS_A3 <= control.AS_A3_MIN) {
        body += `<p>Ánh sáng 3 bị vượt quá ngưỡng an toàn:</p> 
    <p>Ánh sáng 3 hiện tại: <b>${data[data.length - 1].AS_A3}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.AS_A1_MIN}</b></p>`
    } else if (data[data.length - 1].AS_A3 >= control.AS_A3_Max) {
        body += `<p>Ánh sáng 3 bị vượt quá ngưỡng an toàn:</p> 
    <p>Ánh sáng 3 hiện tại: <b>${data[data.length - 1].AS_A3}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.AS_A3_MIN}</b></p>`
    } else {

    }


    if (data[data.length - 1].ND_A1 <= control.ND_A1_MIN) {
        body += `<p>Nhiệt độ 1 bị vượt quá ngưỡng an toàn:</p> 
    <p>Nhiệt độ 1 hiện tại: <b>${data[data.length - 1].ND_A1}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.ND_A1_MIN}</b></p>`
    } else if (data[data.length - 1].ND_A1 >= control.ND_A1_Max) {
        body += `<p>Nhiệt độ 1 bị vượt quá ngưỡng an toàn:</p> 
    <p>Nhiệt độ 1 hiện tại: <b>${data[data.length - 1].ND_A1}</b></p>
    <p>Ngưỡng an toàn cao: <b>${control.ND_A1_MAX}</b></p>`
    } else {

    }


    if (data[data.length - 1].ND_A2 <= control.ND_A2_MIN) {
        body += `<p>Nhiệt độ 2 bị vượt quá ngưỡng an toàn:</p> 
    <p>Nhiệt độ 2 hiện tại: <b>${data[data.length - 1].ND_A2}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.ND_A2_MIN}</b></p>`
    } else if (data[data.length - 1].ND_A2 >= control.ND_A2_Max) {
        body += `<p>Nhiệt độ 2 bị vượt quá ngưỡng an toàn:</p> 
    <p>Nhiệt độ 2 hiện tại: <b>${data[data.length - 1].ND_A2}</b></p>
    <p>Ngưỡng an toàn cao: <b>${control.ND_A2_MAX}</b></p>`
    } else {

    }

    if (data[data.length - 1].ND_A3 <= control.ND_A3_MIN) {
        body += `<p>Nhiệt độ 3 bị vượt quá ngưỡng an toàn:</p> 
    <p>Nhiệt độ 3 hiện tại: <b>${data[data.length - 1].ND_A3}</b></p>
    <p>Ngưỡng an toàn thấp: <b>${control.ND_A3_MIN}</b></p>`
    } else if (data[data.length - 1].ND_A3 >= control.ND_A3_Max) {
        body += `<p>Nhiệt độ 3 bị vượt quá ngưỡng an toàn:</p> 
    <p>Nhiệt độ 3 hiện tại: <b>${data[data.length - 1].ND_A3}</b></p>
    <p>Ngưỡng an toàn cao: <b>${control.ND_A3_MAX}</b></p>`
    } else {

    }

    // -------------------------
    console.log(body)

    if (body != "") {
        $.ajax({
            type: "POST",
            url: "sendmail.php",
            data: {
                title: "<center><b>hệ thống đang có thông số bị quá ngưỡng an toàn</b><center>",
                body: body
            },
            datatype: 'json',
            success: function(data) {
                console.log(data)
            }

        });
    }
}
console.log(myVar);

function stopSendmail() {
    clearInterval(myVar);
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById('header-toggle'),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
            })
        } else {
            toggle.addEventListener('click', () => {
                // show navbar
                nav.classList.toggle('hide')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
            })
        }
    }
    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    /*===== LINK ACTIVE =====*/
    // const onClick = document.querySelectorAll('.nav_link')

    // function Click() {
    //     if (onClick) {
    //         onClick.forEach(l => l.classList.style.display === "none".add('show'))
    //         this.classList.style.display === "block".add('show')
    //     } else {
    //         onClick.forEach(l => l.classList.add('hide'))
    //         this.classList.style.display === "none".add('hide')
    //     }
    // }
    // onClick.forEach(l => l.addEventListener('click', onClick))

    // Your code to run since DOM is loaded and ready
});
</script>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/chart.js"></script>
<!-- End custom js for this page -->