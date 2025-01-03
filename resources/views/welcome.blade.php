<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <style>
        /* 
        *表示所有元素
        margin: 0;padding: 0;使布局不受瀏覽器默認樣式的影響
        box-sizing: border-box;讓元素的尺寸計算更加直觀
        */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        /*
        font-family 設置頁面上所有文字的字體
        display: flex;設定頁面元素使用flexbox模型
        justify-content: center;頁面內容水平至中
        align-items: center;頁面內容垂直至中
        */
        body, html {
            height: 100%;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        /* 
           動畫漸層背景 
           45deg 表現形式設定為45度角
           background-size: 400% 400%;背景的顏色漸變放大4倍
           20s 20 秒內完成一次循環 ease 動畫的時間函數 infinite 動畫會無限循環;
        */
        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #ff6a00, #ffcc00, #00bcd4, #673ab7);
            background-size: 400% 400%;
            animation: gradientAnimation 20s ease infinite;
        }
        /* keyframes是動畫背景效果 */
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* 中間的文字 */
        .content {
            text-align: center;
            z-index: 1;
            color: rgb(99, 93, 93);
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: bold;
            text-transform: uppercase;
            animation: fadeIn 2s ease-in-out;
        }

        p {
            font-size: 1.25rem;
            margin-bottom: 30px;
            opacity: 0.8;
            animation: fadeIn 2s ease-in-out 0.5s;
        }

        /*按鈕設定*/
        .btn {
            padding: 15px 50px;
            background-color: #673ab7;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0288d1;
        }

        .lang-btn {
            padding: 15px 30px;
            background-color: #673ab7;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .lang-btn:hover {
            background-color: #3f51b5;
        }

        /* 中間文字顯現動畫 */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

    </style>
</head>
<body>

    <div class="background"></div>

    <div class="content">
        <h1 id="welcome-title">Welcome!</h1>
        <p id="welcome-text">We are glad to see you here. Start exploring now!</p>
        <button class="btn" onclick="window.location.href='http://127.0.0.1:8000/login'" id='star-text'>Start Now</button>
        <button class="lang-btn" onclick="toggleLanguage()" id='change-text'>Chinese/English</button>
    </div>

    <script>// 切換語言按鈕
        let isEnglish = true;

        function toggleLanguage() {
            const title = document.getElementById('welcome-title');
            const text = document.getElementById('welcome-text');
            const cbtn = document.getElementById('change-text');
            const sbtn = document.getElementById('star-text');
            if (isEnglish) {
                title.textContent = "歡迎！";
                text.textContent = "我們很高興見到您！開始探索吧！";
                sbtn.textContent = "現在開始";
                cbtn.textContent = "中/英";
            } else {
                title.textContent = "Welcome!";
                text.textContent = "We are glad to see you here. Start exploring now!";
                sbtn.textContent = "Start Now";
                cbtn.textContent = "Chinese/English";
            }
            isEnglish = !isEnglish;
        }
    </script>

</body>
</html>