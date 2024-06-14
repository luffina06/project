<?php
header("Content-type: text/css; charset: UTF-8");
?>

body, html {
    height: 100%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, sans-serif;
    background-color: gray;
}

.loginOuter {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    width: 100%;
}

.login {
    border: 1px solid black;
    width: 400px;
    height: 500px;
    background: url("pic/login.jpg");
    color: white;
    border-radius: 20px;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.75);
    background-size: cover;
    background-position: center;
    overflow: hidden;
}

.loginForm{
    display: block;
    box-sizing: border-box;
    padding: 40px;
    width: 100%;
    height: 100%;
    backdrop-filter: brightness(40%);
    flex-direction: column;
    display: flex;
    gap: 5px;
}

.h1loginForm{
    font-weight: normal;
    font-size: 24px;
    text-shadow: 0px 0px 2px rgba(0,0,0,0.5);
    margin-bottom: 60px;
}

.loginLabel{
    color: rgba(255,255,255, 0.8);
    text-transform: uppercase;
    font-size: 10px;
    letter-spacing: 2px;
    padding-left: 10px;
}

.logInput{
    background: rgba(255,255,255,0.3);
    height: 40px;
    line-height: 40px;
    border-radius: 20px;
    padding: 0px 20px;
    border: none;
    margin-bottom: 20px;
    color: white;
}

.loginButton {
    background: rgb(45, 126, 231);
    height: 40px;
    line-height: 40px;
    border-radius: 40px;
    border: none;
    margin: 10px 0px;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
    color: white;
    font-size: 12px;
    text-transform: uppercase;
}

        .button-link {
            font-size: 12px;
            cursor: pointer;
            text-align: center;
            border: none;
            border-radius: 40px;
        }

        .menu-bar {
            background-color: #333;
            overflow: hidden;
        }

        .menu-bar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .menu-bar a:hover {
            background-color: #ddd;
            color: black;
        }

        .menu-bar a.active {
            background-color: #007BFF;
            color: white;
        }
