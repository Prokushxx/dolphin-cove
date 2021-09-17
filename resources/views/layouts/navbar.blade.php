<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        *{
            margin: 0;
            padding: 0;
        }





        body{
            background: white;

        }

        .container{
    margin-left: 5%;
    margin-right: 5%;
}

/* Navbar section */


.navbar{
    /* margin-top: -20px; */
    /* margin-bottom: 20px; */
    /* background-color: black; */
}

.nav{
    width: 100%;
    height: 65px;
    position: fixed;
    z-index: 2;
    line-height: 65px;
    text-align: center;
    background-color: rgb(37, 86, 179);
}

.nav div.logo{
    width: 180px;
    height: 10px;
    position: absolute;
}

.nav div.logo a{
    text-decoration: none;
    color: #fff;
    font-size: 1.8em;
    text-transform: uppercase;
}

.nav div.logo a:hover {
    color: #c0c0c0;
}

.nav div.main_list{
    width: 600px;
    height: 65px;
    float: right;
}

.nav div.main_list ul{
    width:100%;
    height: 65px;
    display: flex;
    list-style: none;
}

.nav div.main_list ul li{
    width: 120px;
    height: 65px;
}

.nav div.main_list ul li a{
    text-decoration: none;
    color: #fff;
    line-height: 65px;
    text-transform: uppercase;
}

.nav div.main_list ul li a:hover{
    color: #c0c0c0;
}

.nav div.media_button {
    width: 40px;
    height: 40px;
    background-color: transparent;
    position: absolute;
    right: 15px;
    top: 12px;
    display: none;
}

.nav div.media_button button.main_media_button {
    width: 100%;
    height: 100%;
    background-color: transparent;;
    outline: 0;
    border: none;
    cursor: pointer;
}

.nav div.media_button button.main_media_button span{
    width: 98%;
    height: 1px;
    display: block;
    background-color: #fff;
    margin-top: 9px;
    margin-bottom: 10px;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(1){
    transform: rotateY(180deg);
    transition: all 0.5s;
    background-color: #c0c0c0;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(2){
    transform: rotateY(180deg);
    transition: all 0.4s;
    background-color: #c0c0c0;
}

.nav div.media_button button.main_media_button:hover span:nth-of-type(3){
    transform: rotateY(180deg);
    transition: all 0.3s;
    background-color: #c0c0c0;
}

.nav div.media_button button.active span:nth-of-type(1) {
    transform: rotate3d(0, 0, 1, 45deg);
    position: absolute;
    margin: 0;
}

.nav div.media_button button.active span:nth-of-type(2) {
    display: none;
}

.nav div.media_button button.active span:nth-of-type(3) {
    transform: rotate3d(0, 0, 1, -45deg);
    position: absolute;
    margin: 0;
}

.nav div.media_button button.active:hover span:nth-of-type(1) {
    transform: rotate3d(0, 0, 1, 20deg);
}

.nav div.media_button button.active:hover span:nth-of-type(3) {
    transform: rotate3d(0, 0, 1, -20deg);
}

.background{
        background-image: url("storage/pics/Dolphin-smiling.web");
        /* background-attachment: fixed; */
        /* position: absolute; */
        top: 65px;
        width: 100%;
        height: 100vh;
        padding-top: 70px;
        background-repeat: no-repeat;
        /* background-size: cover; */

    }
</style>
</head>
<body>
    <div class="navbar">
        <nav class="nav">
            <div class="container">
                <div class="logo">
                    <a href="#">COVE</a>
                </div>
                <div class="main_list" id="mainListDiv">
                    <ul>
                        <li><a href="#">booking</a></li>
                        <li><a href="#">holet</a></li>
                        <li><a href="#">payment</a></li>
                        <li><a href="#">program</a></li>
                        <li><a href="#">reservation</a></li>
                        <li><a href="#">schedule</a></li>
                    </ul>
                </div>
                <div class="media_button">
                    <button class="main_media_button" id="mediaButton">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </nav>
    </div>
    <section class="background">
        
    </section>
</body>
</html>