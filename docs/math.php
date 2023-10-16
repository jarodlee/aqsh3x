<!DOCTYPE html>
<!-- lzl的口算APP -->
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-size: 38px;
            text-align: center;
        }

        @media (max-width: 600px) {
            body {
                font-size: 34px;
            }
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            padding: 5px;
            border: 2px solid #333;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .question {
            font-size: 20px;
            margin-top: 20px;
        }

        .answer {
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
        }

        .feedback {
            font-size: 18px;
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }

        .correct-answer {
            color: red;
            font-weight: bold;
        }
    </style>
    
    <style>
        /* 添加样式，将包装元素固定在底部 */
        .bottom-image {
            position: fixed;
            bottom: 0;
            left: 0; /* 如果需要放置在左边，可以使用left属性 */
            right: 0; /* 如果需要放置在右边，可以使用right属性 */
            text-align: center; /* 让图片水平居中 */
        }
    </style>
    
    <style>
        /* 添加样式，将包装计时器的<div>元素固定在底部 */
        .bottom-timer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
    
    <title>LZL 口算</title>
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="b6eee81f-41cb-44e7-ae4a-571916d4276c";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</head>
<body>
    <h1><a href="https://lzl.app">每天口算練習100题</a></h1>
    

<p>问题 1：34 × 6</p>

<form method="post">
    <input type="hidden" name="correctAnswer" value="204">
    <input type="hidden" name="score" value="0">
    <input type="hidden" name="questionNumber" value="1">
    <label for="answer">请输入答案：</label>
    <input type="text" name="answer" id="answer" pattern="[0-9]+(\.[0-9]+)?" title="只能输入数字和小数点">
    <input type="submit" value="检查答案">
</form>

<div class="feedback"></div>

<p class="score">分数：0</p>

 <!-- 包装计时器的<div>元素 -->
    <div class="bottom-timer">
        <p id="timer">00:00</p>
    </div>

    <script>
        // JavaScript代码，用于计时
        var timerElement = document.getElementById('timer');
        var seconds = 0;
        var minutes = 0;

        function updateTimer() {
            seconds++;
            if (seconds == 60) {
                seconds = 0;
                minutes++;
            }

            var formattedTime = (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
            timerElement.textContent = formattedTime;
        }

        // 每秒更新一次计时器
        setInterval(updateTimer, 1000);
    </script>
<!-- Cloudflare Web Analytics --><script defer src='https://static.cloudflareinsights.com/beacon.min.js' data-cf-beacon='{"token": "8654cf2aa14e4262a2a1bbd183095f84"}'></script><!-- End Cloudflare Web Analytics -->
<div class="bottom-image">
        <a href="http://s05.flagcounter.com/more/1LLU"><img src="https://s05.flagcounter.com/mini/1LLU/bg_FFFFFF/txt_CC24FF/border_CCCCCC/flags_0/" alt="Free counters!" border="0"></a>
    </div>

</body>
</html>