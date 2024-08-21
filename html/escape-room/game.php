<?php require_once ('secure.php');
redirect_if_needed();
?>
<!DOCTYPE html>
<html lang="he">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>מחוץ לכדור</title>
    <link rel="stylesheet" href="../../css/butcss.css" />
    <link rel="shortcut icon" href="/img/אייקונים/roket.ico" type="image/x-icon" />
    <script src="../../js/cookies.js"></script>
    <style>
        body {
            background-color: #000;
            margin: 0;
            border: 0;
            padding: 0;
        }

        #passDiv {
            position: relative;
            width: 100vw;
            height: 100vh;
            background-color: #004;
            background: linear-gradient(0deg, #000 0%, #00a 50%, #08a 100%);
        }

        #homepage {
            display: none;
            position: relative;
            width: 100vw;
            height: 100vh;
            background-color: #004;
            background: linear-gradient(0deg, #000 0%, #00a 50%, #08a 100%);
        }

        #passInp {
            margin-left: 30%;
            border: none;
            padding: 0;
            align-items: center;
            width: 40%;
            height: 18%;
            font-size: 4vw;
            border-radius: 0.7vw;

        }

        .text {
            position: absolute;
            color: #fff;
            border: 0;
            padding: 0;
            margin: 0;
            direction: rtl;
            text-align: center;
        }

        .text1 {
            color: #fff;
            border: 0;
            padding: 0;
            margin: 0;
            direction: rtl;
            text-align: center;
            text-shadow: 0 0 1vw #fff9;
        }

        #passtextdiv {
            position: absolute;
            height: 60%;
            width: 80%;
            left: 10%;
            top: 20%;
        }

        #passText1 {
            font-size: 4vw;
            top: 30%;
            left: 0;
            right: 0;
        }

        #passText2 {
            font-size: 3vw;
            margin: 2%;
            margin-right: 15%;
            margin-top: 5%;
            left: 0;
            right: 0;
            text-align: right;
        }

        #wrongInputMSG {
            display: none;
            color: #f00;
            border: 0;
            padding: 0;
            margin: 0;
            direction: rtl;
            text-align: center;
            font-size: 2vw;
            top: 57%;
            left: 0;
            right: 0;
        }

        #homepagetextdiv {
            position: absolute;
            height: 60%;
            width: 80%;
            left: 10%;
            top: 30%;
        }

        #homepagebuttdiv {
            width: 100%;
            justify-content: center;
            display: flex;
        }

        .startbutt {
            position: relative;
            border: solid;
            border-radius: 2vw;
            padding: 2%;
            margin: 2%;
            font-size: 4vw;
            background-color: #0000;
            width: 20%;
        }

        .startbutt:hover {
            background-color: #fa0;
            box-shadow: 0 0 5vw #ff7;
        }

        #game {
            display: none;
            position: relative;
            width: 100vw;
            height: 100vh;
        }

        #iFrameDiv {
            border: 0;
            padding: 0;
            margin: 0;
            position: relative;
            width: 100vw;
            height: 41.54vw;
        }

        #window {
            position: absolute;
            margin: 0;
            border: none;
            padding: 0;
            width: 100%;
            height: 100%;

        }

        #star {
            position: absolute;
            width: 8%;
            left: 0;
            top: 1%;
        }

        #star:hover {
            content: url(../../img/אייקונים/star\ 2.gif);
        }

        #book {
            position: absolute;
            width: 8%;
            right: 0;
            top: 1%;
            margin: 1%;
        }

        .xbutton {
            font-size: 2vw;
            background-color: #fff;
            border: solid;
            border-radius: 2vw;
            padding-left: 1%;
            padding-right: 1%;
            position: absolute;
            right: -2%;
            top: -10%;
        }

        #cluediv {
            margin: 0;
            border: 0;
            padding: 0;
            top: 0;
            display: none;
            position: absolute;
            width: 100vw;
            height: 41.54vw;
            background-color: #005b;
        }

        #tldiv {
            margin: 0;
            border: 0;
            padding: 0;
            top: 0;
            display: none;
            position: absolute;
            width: 100vw;
            height: 41.54vw;
            background-color: #050b;
        }

        #insidetltext {
            direction: rtl;
            color: #fff;
            padding: 3%;

        }

        #clueMenuDiv {
            position: absolute;
            border-radius: 0.5vw;
            width: 50vw;
            background-color: #009;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 0.5vw #fff;
        }

        #insidetlDiv {
            position: absolute;
            border-radius: 0.5vw;
            width: 50vw;
            background-color: #090;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 0.5vw #fff;
        }

        .option {
            text-align: center;
            margin-left: 5%;
            margin-right: 5%;
            margin-top: 1.2vw;
            margin-bottom: 0;
            padding-top: 3%;
            padding-bottom: 3%;
            border-radius: 0.5vw;
            font-size: 3vw;
        }

        .option:hover {
            cursor: pointer;

        }

        .new {
            background-color: #ff5;
        }

        .open {
            background-color: #fff;
        }

        .closed {
            background-color: #888;
        }

        .clueText {
            direction: rtl;
            color: #fff;
            text-align: center;
            margin-left: 5%;
            margin-right: 5%;
            margin-top: 3%;
            margin-bottom: 0;
            font-size: 3vw;
        }

        .costText {
            font-size: 2vw;
        }

        .ot {
            margin-top: 5%;
            margin-bottom: 5%;
            font-size: 4vw;
        }

        .clueImg {
            margin-left: 20%;
            margin-bottom: 5%;
            margin-top: 5%;
            width: 60%;
            left: 10%;
        }

        .clueImgGlow {
            border-radius: 1vw;
            border: solid #09f;
            box-shadow: 0 0 0.5vw #fff;
        }

        .bigClueImg {
            width: 80%;
            left: 0;
            margin-left: 10%;
            margin-bottom: 12%;
        }

        .backbut {
            width: 6vw;
            height: 6vw;
        }

        #gameInfoDiv {
            position: relative;
            margin-top: 0;
            width: 100%;
            height: 9vh;

        }

        #time {
            font-size: 4vw;
            margin: 0;
            top: 50%;
            transform: translate(0, -50%);
            right: 5%;
        }

        #warningImg {
            position: absolute;
            right: 22vw;
            width: 3vw;
            margin-left: 2vw;
            margin-top: 0;
        }

        .warning {
            position: absolute;
            right: 26vw;
            color: #fff;
            margin-left: 2vw;
            margin-top: 0;
            direction: rtl;
        }

        #instructionDiv {
            display: none;
            position: absolute;
            width: 100vw;
            height: 47vw;
            background-color: #009;
            top: 0;
        }

        #id2 {
            display: none;
        }

        #id3 {
            display: none;
        }

        #id4 {
            display: none;
        }

        #id5 {
            display: none;
        }

        #instructionHead {
            color: #fff;
            text-align: center;
            font-size: 5vw;
            margin-bottom: 2vw;
            -webkit-text-stroke-width: 0.1vw;
            -webkit-text-stroke-color: #00f;
            text-shadow: #fff 0 0 0.5vw;
        }

        .instructionText {
            border: 0;
            padding: 0;
            margin: 1vw;
            direction: rtl;
        }

        .instructionTitle {
            color: #ff0;
            font-size: 3vw;
        }

        .instructionP {
            color: #fff;
            font-size: 2vw;
            line-height: 200%;
        }

        .instructionButt {
            position: absolute;
            width: 5vw;
            height: 5vw;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            top: 41vw;
            background-color: #0000;
            border-color: #0000;
        }

        .instructionButt:hover {
            cursor: pointer;
        }

        #instructionButtB {
            left: 40vw;
            background-image: url(../../img/אייקונים/arrow\ B.png);
        }

        #instructionButtB:hover {
            background-image: url(../../img/אייקונים/arrow\ B1.png);
        }

        #instructionButtL {
            left: 1vw;
            background-image: url(../../img/אייקונים/arrow\ L.png);
        }

        #instructionButtL:hover {
            background-image: url(../../img/אייקונים/arrow\ LY.png);
        }

        #instructionButtR {
            display: none;
            right: 1vw;
            background-image: url(../../img/אייקונים/arrow\ R.png);
        }

        #instructionButtR:hover {
            background-image: url(../../img/אייקונים/arrow\ RY.png);
        }

        .instructionImg {
            position: absolute;
            width: 4vw;
        }

        #instructionArrowL {
            top: 17vw;
            right: 41vw;
        }

        #instructionArrowR {
            top: 17vw;
            right: 37vw;
        }

        #instructionMG {
            top: 25vw;
            right: 9vw;
        }

        #instructionArrowB {
            top: 33vw;
            right: 32vw;
        }

        #instructionClue {
            top: 13vw;
            right: 44vw;
        }

        #instructionClue:hover {
            content: url(../../img/אייקונים/star\ 2.gif);
        }

        #endDiv {
            margin: 0;
            padding: 0;
            display: none;
            position: relative;
            width: 100vw;
            height: 100vh;
            background-color: #004;
            background: linear-gradient(0deg, #000 0%, #00a 50%, #08a 100%);
        }

        .scoreText {
            border: 0;
            padding: 0;
            margin: 1vw;
            direction: rtl;
            color: #fff;
            text-align: center;
        }

        .scoreBig {
            font-size: 5vw;
        }

        .scoreSmall {
            font-size: 4vw;
        }

        .scoreTableClick {
            font-size: 2vw;
        }

        .scoreTableClick:hover {
            cursor: pointer;
        }

        #table {
            width: 60vw;
            margin-right: 20vw;
            font-size: 1.5vw;
            background-color: #fff;
        }

        #tableFirstLine {
            font-size: 2.5vw;
            background-color: #99f;
            color: #004;
        }

        .tableOtherLine {
            background-color: #009;
        }

        .loadimg {
            position: absolute;
            width: 10%;
            z-index: 0;
        }

        #loadprogresstext {
            color: #fff;
            direction: rtl;
            position: absolute;
            font-size: 5vw;
            left: 50%;
            top: 55%;
            transform: translate(-50%, -45%);
        }

        #loadfilsediv {
            position: relative;
            width: 100vw;
            height: 100vh;
            background-color: #004;
        }

        #losdanhmationdiv {
            position: absolute;
            z-index: 1;
            padding: 0;
            margin: 0;
            border: 0;
            width: 100vw;
            height: 100vh;
            background-color: #004;
            background: linear-gradient(0deg, #000 0%, #00a 50%, #08a 100%);
        }

        #loadrocket {
            position: absolute;
            width: 20%;
            left: 48%;
            top: 40%;
            animation-name: rocketanimation;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes rocketanimation {
            0% {
                transform: translate(-52%, -60%) rotate(-85deg);
            }

            25% {
                transform: translate(-52%, -65%) rotate(-90deg);
            }

            50% {
                transform: translate(-52%, -60%) rotate(-95deg);
            }

            75% {
                transform: translate(-52%, -55%) rotate(-90deg);
            }

            100% {
                transform: translate(-52%, -60%) rotate(-85deg);
            }
        }

        .loadstar {
            position: absolute;
            width: 5%;
            animation-name: staranimation;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            opacity: 0;
        }

        #ls1 {
            top: 10%;
            transform: rotate(55deg);
        }

        #ls2 {
            top: 40%;
            transform: rotate(15deg);
            animation-delay: -0.33s;
        }

        #ls3 {
            top: 20%;
            transform: rotate(25deg);
            animation-delay: -0.66s;
        }

        #ls4 {
            top: 15%;
            transform: rotate(45deg);
            animation-delay: -1s;
        }

        #ls5 {
            top: 30%;
            transform: rotate(65deg);
            animation-delay: -1.33s;
        }

        #ls6 {
            top: 42%;
            transform: rotate(35deg);
            animation-delay: -1.66s;
        }

        @keyframes staranimation {
            0% {
                left: 10%;
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                left: 85%;
                opacity: 0;
            }
        }

        #ls6 {
            top: 42%;
            transform: rotate(-45deg);
        }

        .clickhere {
            animation-name: glowfade;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes glowfade {
            0% {
                text-shadow: #fd8 0 0 0;
                color: #fff;
            }

            50% {
                text-shadow: #fd8 0 0 1.2vw;
                color: #ff5;
            }

            100% {
                text-shadow: #fd8 0 0 0;
                color: #fff;
            }
        }

        .warningtl {
            font-size: 2.6vw;
        }

        .warninganimationtl {
            animation: warnanimtl 4s ease-in-out;
        }

        .warningw {
            font-size: 2.8vw;
        }

        .warninganimationw {
            animation: warnanimw 4s ease-in-out;
            font-size: 2.8vw;
        }

        @keyframes warnanimtl {
            0% {
                color: #5f50;
                text-shadow: #fff 0 0 0;
                font-size: 2.6vw;
            }

            10% {
                color: #5f5;
                text-shadow: #fff 0 0 2vw;
                font-size: 2.7vw;
            }

            20% {
                text-shadow: #fff 0 0 0;
                font-size: 2.6vw;
            }

            30% {
                text-shadow: #fff 0 0 2vw;
                font-size: 2.7vw;
            }

            40% {
                text-shadow: #fff 0 0 0;
                font-size: 2.6vw;
            }

            50% {
                color: #5f5;
                text-shadow: #fff 0 0 2vw;
                font-size: 2.65vw;
            }

            100% {
                color: #fff;
                text-shadow: #fff 0 0 0;
                font-size: 2.6vw;
            }
        }

        @keyframes warnanimw {
            0% {
                color: #5f50;
                text-shadow: #fff 0 0 0;
                font-size: 2.8vw;
            }

            10% {
                color: #f55;
                text-shadow: #fff 0 0 2vw;
                font-size: 2.9vw;
            }

            20% {
                text-shadow: #fff 0 0 0;
                font-size: 2.8vw;
            }

            30% {
                text-shadow: #fff 0 0 2vw;
                font-size: 2.9vw;
            }

            40% {
                text-shadow: #fff 0 0 0;
                font-size: 2.8vw;
            }

            50% {
                color: #f55;
                text-shadow: #fff 0 0 2vw;
                font-size: 2.85vw;
            }

            100% {
                color: #fff;
                text-shadow: #fff 0 0 0;
                font-size: 2.8vw;
            }
        }

        @media (min-aspect-ratio: 16/7.3) {

            .ot {
                margin-bottom: 15%;
            }

            #iFrameDiv {
                width: 80%;
                left: 10%;
                height: 33.5vw;
            }

            #gameInfoDiv {
                width: 80%;
                left: 10%;
            }

            .warning {
                right: 22vw;
            }

            #cluediv {
                height: 33.232vw;
                ;
            }

            #tldiv {
                height: 33.232vw;
                ;
            }

            .option {
                font-size: 2vw;
            }

            .clueImg {
                width: 50%;
            }

            .bigClueImg {
                width: 70%;
            }

            #warningImg {
                right: 19vw;
            }

            .clueText {
                font-size: 2.5vw;
            }

            .clickhere {
                font-size: 2.4;
            }

            .warningtl {
                font-size: 2vw;
            }

            .warningw {
                font-size: 2.3vw;
            }

            @keyframes warnanimtl {
                0% {
                    color: #5f50;
                    text-shadow: #fff 0 0 0;
                    font-size: 2vw;
                }

                10% {
                    color: #5f5;
                    text-shadow: #fff 0 0 2vw;
                    font-size: 2.1vw;
                }

                20% {
                    text-shadow: #fff 0 0 0;
                    font-size: 2vw;
                }

                30% {
                    text-shadow: #fff 0 0 2vw;
                    font-size: 2.1vw;
                }

                40% {
                    text-shadow: #fff 0 0 0;
                    font-size: 2vw;
                }

                50% {
                    color: #5f5;
                    text-shadow: #fff 0 0 2vw;
                    font-size: 2.05vw;
                }

                100% {
                    color: #fff;
                    text-shadow: #fff 0 0 0;
                    font-size: 2vw;
                }
            }

            @keyframes warnanimw {
                0% {
                    color: #5f50;
                    text-shadow: #fff 0 0 0;
                    font-size: 2.3vw;
                }

                10% {
                    color: #f55;
                    text-shadow: #fff 0 0 2vw;
                    font-size: 2.4vw;
                }

                20% {
                    text-shadow: #fff 0 0 0;
                    font-size: 2.3vw;
                }

                30% {
                    text-shadow: #fff 0 0 2vw;
                    font-size: 2.4vw;
                }

                40% {
                    text-shadow: #fff 0 0 0;
                    font-size: 2.3vw;
                }

                50% {
                    color: #f55;
                    text-shadow: #fff 0 0 2vw;
                    font-size: 2.35vw;
                }

                100% {
                    color: #fff;
                    text-shadow: #fff 0 0 0;
                    font-size: 2.3vw;
                }
            }

            #instructionDiv {
                height: 38vw;
            }

            .instructionText {
                margin: 2vw;
                margin-top: 0;
                margin-bottom: 0;
            }

            .instructionText {
                line-height: 130%;
            }

            .instructionButt {
                top: 33vw;
            }

            .instructionImg {
                width: 3vw;
            }

            #instructionArrowL {
                top: 14.2vw;
                right: 42vw;
            }

            #instructionArrowR {
                top: 14.2vw;
                right: 38vw;
            }

            #instructionMG {
                top: 20vw;
                right: 10vw;
            }

            #instructionArrowB {
                top: 25.3vw;
                right: 33vw;
            }

            #instructionClue {
                top: 12vw;
                right: 44.5vw;
            }

        }

        @media (min-aspect-ratio: 16/7.4) {
            #time {
                font-size: 3.5vw;
            }
        }

        @media (max-aspect-ratio: 16/9) {
            #gameInfoDiv {
                margin-top: 7%;
            }
        }
    </style>
    <script>
        let score;

        // קבלת הודעות מדפים אחרים
        window.onmessage = function (e) {
            let msg = e.data;
            if (msg.startsWith('sound')) {	//שינוי מנגינת רקע
                msg = msg.slice(5);
                sound.src = "../../sound/" + msg + ".mp3";
                sound.load();
                sound.play();
            }
            else if (msg.startsWith('code')) {	//הזנת קוד שגוי
                msg = msg.slice(4);
                const data = msg.split('$');	//מפצל את הקלט למיקום וקוד
                if (!listOfWrongCode[data[0]].includes(data[1])) {	//בודק אם הקוד כבר הוזן
                    listOfWrongCode[data[0]].push(data[1]);	//מוסיף את הקוד
                    ++wrongCodeCnt;
                    printWorning(1, 1);

                    let httpRequest = new XMLHttpRequest();	//מוסיף את הקוד השגוי למאגר
                    if (!isTest) {
                        httpRequest.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200 && this.responseText != 1) printWorning(2, 2);
                        };
                        httpRequest.open("POST", "addWrongCodeToDB.php", true);
                        httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        httpRequest.send("riddle=" + data[0] + "&code=" + data[1] + "&time=" + time);
                    }
                }
                else {
                    printWorning(0, 1);
                }
            }
            else if (msg.startsWith('msg')) {
                msg = msg.slice(3);
                printWorning(msg, 1);
            }
            else if (msg.startsWith('cookie')) {
                msg = msg.slice(6);
                if (msg == 90) {
                    clearInterval(setIntervalUpdateClock);
                    score = Math.max(Math.round(10000 - time * 1.2 - totalClueCost - wrongCodeCnt * 100), 42);
                    if (!isTest) {
                        clearInterval(setIntervalUpdateProgressTime);	//עוצר את השעון
                        let httpRequest = new XMLHttpRequest();	//מעדכן את ההתקדמות של הניקוד
                        httpRequest.onreadystatechange = function () {
                            if (this.readyState == 4 && this.status == 200 && this.responseText != 1) printWorning(2, 2);
                        };
                        httpRequest.open("POST", "updateProgressScore.php", true);
                        httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                        httpRequest.send("score=" + score + "&time=" + time);
                    }
                    sound.src = "../../sound/end.mp3";
                    sound.load();
                    sound.play();
                    showEndPage();
                }
                if (!isTest) {
                    let httpRequest = new XMLHttpRequest();	//מעדכן את ההתקדמות של העוגיות
                    httpRequest.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200 && this.responseText != 1) {
                            printWorning(2, 2);
                            console.log(this.responseText);
                        }
                    };
                    httpRequest.open("POST", "updateProgressCookie.php", true);
                    httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    httpRequest.send("cookie=" + msg + "&time=" + time);
                }
            }
            else if (msg.startsWith('tl')) {
                msg = msg.slice(2);
                for (let i = 0; i < numOfTl.length; ++i) {
                    if (msg == numOfTl[i]) {
                        if (i > 6) {
                            if (!listOfFactsUsed.includes(i)) {
                                listOfFactsUsed.push(i);
                                printWorning(i, 0);
                            }
                            break;
                        }
                        printWorning(i, 0);
                        break;
                    }
                }
            }
            else if (msg.startsWith('focus')) {
                focusInput();
            }
            else {
                printWorning(0, 2);
            }
        };

        function showEndPage() {
            document.getElementById('scoreScore').innerHTML =
                document.getElementById('scoreScore').innerHTML.replace('$(score)', score);
            document.getElementById('scoreClueNum').innerHTML =
                document.getElementById('scoreClueNum').innerHTML.replace('$(clueNum)', function () {
                    let cnt = 0;
                    for (let i = 0; i < listOfClueUsed.length; ++i) {
                        if (listOfClueUsed[i]) ++cnt;
                    }
                    return cnt;
                });
            document.getElementById('scoreTime').innerHTML =
                document.getElementById('scoreTime').innerHTML.replace('$(time)', function () {
                    const timeObj = calkTime(time);
                    let res = '';
                    if (timeObj['h'] > 1) res += timeObj['h'] + ' שעות, ';
                    else if (timeObj['h'] === 1) res += 'שעה, ';
                    res += timeObj['m'] + ' דקות ו - ' + timeObj['s'] + ' שניות';
                    return res;
                });
            if (wrongCodeCnt > 0) {
                document.getElementById('wrongCodeNum').innerHTML += wrongCodeCnt +
                    ' <span class="scoreTableClick" id="scoreClick" onclick="showWrongCodeDiv()">(לחצו כאן לפירוט)</span>.';
            }
            else {
                document.getElementById('wrongCodeNum').innerHTML += '0.';
            }
            document.getElementById('game').style.display = 'none';
            document.getElementById('endDiv').style.display = 'block';
        }

        let isTest = false;

        function prepergame() {
            const TEST = window.location.hash.replace('#', '');
            isTest = TEST != '';
            if (isTest) {
                setCookie('solved', 0);
                loadfilse();
            }
            else {
                //ajax
                let httpRequest = new XMLHttpRequest();
                httpRequest.onreadystatechange = function () {
                    if (this.readyState === 4 && this.status === 200) {
                        response = this.responseText;
                        if (response[0] === 'w') {
                            alert('data not found');
                        }
                        else if (response === '') {
                            alert('connection error');
                        }
                        else {
                            const responseArr = response.split('|');	//clue, time, score, cookie, wrongCodes
                            for (let i = 0; i < listOfClueUsed.length; ++i) {
                                listOfClueUsed[i] = (responseArr[0] & (1 << i)) > 0;
                                if (listOfClueUsed[i]) totalClueCost += clueCost[i];
                            }
                            timeOffset = Number(responseArr[1]);
                            score = responseArr[2];
                            setCookie('solved', responseArr[3]);
                            if (responseArr[4] != '') {
                                responseArr[4] = responseArr[4].slice(0, -1);
                                const templist = responseArr[4].split(',');
                                wrongCodeCnt = templist.length;
                                for (const i of templist) {
                                    const tmp = i.split('->');
                                    listOfWrongCode[tmp[0]].push(tmp[1]);
                                }
                            }
                            loadfilse();
                        }
                    }
                };
                httpRequest.open("POST", "getinfo.php", true);
                httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                httpRequest.send();
            }
        }

        let time = 42;
        let timeOffset = 0;
        let setIntervalUpdateClock;
        let setIntervalUpdateProgressTime;
        let setIntervalUpdateSession;
        let setIntervalUpdateSessionAndDB;



        function timeFunc() {	//מדפיס את השעה
            const dateObj = new Date();
            const startTime = Math.floor(dateObj.getTime() / 1000);
            setIntervalUpdateClock = setInterval(function () {
                const dateObj = new Date();
                time = (Math.floor(dateObj.getTime() / 1000) - startTime) + timeOffset;
                document.getElementById('time').innerHTML = printTime(time);
            }, 500);
            if (!isTest) {
                setIntervalUpdateProgressTime = setInterval(function () { updateProgressTime() }, 30000);
                time = (Math.floor(dateObj.getTime() / 1000) - startTime) + timeOffset;
                updateProgressTime();
            }
        }

        function updateProgressTime() {	//מעדכן את ההתקדמות של הזמן
            let httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200 && this.responseText != 1) printWorning(2, 2);
            };
            httpRequest.open("POST", "updateProgressTime.php", true);
            httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            httpRequest.send("time=" + time);
        }

        function printTime(time) {	//ממיר את הזמן לתצוגת שעון
            let res = "";
            const timeObj = calkTime(time);
            if (timeObj['h'] < 10) res += "0";
            res += timeObj['h'] + ':';
            if (timeObj['m'] < 10) res += "0";
            res += timeObj['m'] + ':';
            if (timeObj['s'] < 10) res += "0";
            res += timeObj['s'];
            return res;
        }
        function calkTime(time) {	// מחשב זמן
            const res = {
                h: Math.floor(time / 3600),
                m: Math.floor(time / 60) % 60,
                s: time % 60
            };
            return res;
        }

        const sound = new Audio("../../sound/homePage.mp3");	//יוצר אובייקטים של צליל
        sound.loop = true;
        const sound1 = new Audio("../../sound/pop.mp3");

        let listOfWrongCode = {	//מאגר של קודים שגויים שהוזנו
            7365: [],
            2017: [],
            plss: [],
            1964: [],
            amadee: [],
            דימוס: [],
            22794: [],
            isa: [],
            8750: []
        };

        let wrongCodeCnt = 0;	//כמות כקודים השגויים שהוזנו

        const listOfClue = [	//רשימת רמזים
            "<h1 class =\"clueText\">הקוד הבא נמצא במחשב:</h1><img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/מיקום1.jpg\">",
            "<img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/רמז כוכבי לכת.jpg\">",
            "<h1 class =\"clueText\">הקוד הבא נמצא בארון:</h1><img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/מיקום2.jpg\">",
            "<h1 class =\"clueText ot\">לפעמים מה שמשנה זה לא מה שרואים</h1>",
            "<h1 class =\"clueText\">הקוד הבא נמצא בניסוי UV:</h1><img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/מיקום3.jpg\">",
            "<img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/מקלדת.jpg\">",
            "<h1 class =\"clueText\">הקוד הבא נמצא בקודן ביציאה:</h1><img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/מיקום4.jpg\">",
            "<img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/רמז קודן1.jpg\">",
            "<img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/רמז קודן2.jpg\">",
            "<img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/רמז קודן3.gif\">",
            "<h1 class =\"clueText\">הקוד הבא נמצא במגירה:</h1><img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/מיקום5.jpg\">",
            "<img class=\"clueImg bigClueImg\" src=\"../../img/רמזים/רמז מבחנות.png\">",
            "<h1 class =\"clueText\">הקוד הבא נמצא במד קרינה קוסמי:</h1><img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/מיקום6.jpg\">",
            "<img class=\"clueImg\" src=\"../../img/רמזים/ספירלה.png\">",
            "<img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/רמז ספירלה 2.jpg\">",
            "<h1 class =\"clueText\">הקוד הבא נמצא בכספת:</h1><img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/מיקום7.jpg\">",
            "<img class=\"clueImg clueImgGlow bigClueImg\" src=\"../../img/רמזים/רמז גרף.gif\">",
            "<h1 class =\"clueText\">הקוד הבא נמצא בדלת יציאה:</h1><img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/מיקום8.jpg\">",
            "<img class=\"clueImg bigClueImg\" src=\"../../img/רמזים/רמז סוף חדר שני.png\">",
            "<img class=\"clueImg bigClueImg\" src=\"../../img/רמזים/רמז סוף חדר שני2.png\">",
            "<h1 class =\"clueText\">הקוד הבא נמצא במחשב:</h1><img class=\"clueImg clueImgGlow\" src=\"../../img/רמזים/מיקום9.jpg\">",
            "<img class=\"clueImg bigClueImg\" src=\"../../img/רמזים/רמז 1 סוף.png\">",
            "<img class=\"clueImg clueImgGlow bigClueImg\" src=\"../../img/רמזים/רמז 2 סוף.jpg\">"
        ];

        function listOfClueUsedToNum() {	//עדכון מעקב אחרי רמזים
            let num = 0;
            for (let i = 0; i < listOfClueUsed.length; ++i) if (listOfClueUsed[i]) num |= 1 << i;

            let httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200 && this.responseText != 1) printWorning(2, 2);
            };
            httpRequest.open("POST", "updateProgressClue.php", true);
            httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            httpRequest.send("clue=" + num + "&time=" + time);
        }

        const listOfClueUsed = Array(listOfClue.length).fill(false);	//רשימת רמזים ששומשו
        const clueCost = [	//כמה נקודות כל רמז עולה
            100,	//מחשב1
            200,	//מחשב2
            75,		//ארון1
            300,	//ארון2
            50,		//UV1
            80,		//UV2
            25,		//יציאה1
            100,	//יציאה 2
            100,	//יציאה3
            300,	//יציאה4
            100,	//מגירה1
            200,	//מגירה2
            75,		//קרינה קוסמית1
            200,	//קרינה קוסמית2
            400,	//קרינה קוסמית3
            50,		//כספת1
            300,	//כספת2
            25,		//יציאה1
            200,	//יציאה2
            300,	//יציאה3
            25,		//יציאה1
            200,	//יציאה2
            400,	//יציאה3
            null]
        let totalClueCost = 0;

        function hideclue() {	//מסתיר את רשימת הרמזים
            if (event.target === event.currentTarget) {
                document.getElementById('cluediv').style.display = 'none';
            }
        }
        function hidetl() {	//מסתיר את טוב לדעת
            if (event.target === event.currentTarget) {
                document.getElementById('tldiv').style.display = 'none';
            }
        }


        function showclue() {	//מציג רמזים לפי התקדמות
            if (getCookie("solved") == 0) {//מחשב
                buildMenu(2, 0);
            }
            else if (getCookie("solved") == 10) {//ארון
                buildMenu(2, 2);
            }
            else if (getCookie("solved") == 20) {//UV
                buildMenu(2, 4);
            }
            else if (getCookie("solved") == 30) {//יציאה חדר ראשון
                buildMenu(4, 6);
            }
            else if (getCookie("solved") == 40) {//מגירה
                buildMenu(2, 10);
            }
            else if (getCookie("solved") == 50) {//קרינה קוסמית
                buildMenu(3, 12);
            }
            else if (getCookie("solved") == 60) {//כספת
                buildMenu(2, 15);
            }
            else if (getCookie("solved") == 70) {//יציאה חדר שני
                buildMenu(3, 17);
            } else if (getCookie("solved") == 80) {//יציאה חדר שלישי
                buildMenu(3, 20);
            }
        }

        function buildMenu(numOfClue, offset) {	//מדפיס את התפריט רמזים
            let str = '';
            let cheack;
            for (let i = 0; i < numOfClue; ++i) {
                str += '<h1 class="option';
                if (listOfClueUsed[offset + i]) {	//אם הרמז כבר נפתח
                    str += " open ";	//לבן
                    cheack = 2;
                }
                else if (i === 0 || listOfClueUsed[offset + i - 1]) {	//אם זה הרמז הבא ברשימה
                    str += " new ";		//צהוב
                    cheack = 1;
                }
                else {		//אם הרמז לא זמין
                    str += " closed ";	//אפור
                    cheack = 0;
                }
                str += "\" onclick=";
                if (cheack != 0) {		//אם הרמז זמין
                    str += "\"loadClue(" + (offset + i) + ")\"";
                }
                else {		//אם הרמז לא זמין
                    str += "\"printWorning(2, 1)\"";
                }
                str += ">רמז" + (i + 1);
                if (cheack === 1) {		//אם זה הרמז הבא ברשימה
                    str += "<span class = \"costText\"><br>עלות " + clueCost[offset + i] + "</span>";
                }

                str += '</h1>';
            }
            str += '<button style="position: relative; left:80%;" class="backbut" onclick="hideclue(event)"></button>';
            document.getElementById('clueMenuDiv').innerHTML = '<h1 class="button xbutton" onclick="hideclue(event)">X</h1>' + str;
            document.getElementById('clueMenuDiv').style.width = "30vw";
            document.getElementById('cluediv').style.display = 'block';
        }

        function loadClue(num) {	//מדפיס את הרמז
            if (!listOfClueUsed[num]) {		//אם הרמז לא נפתח
                listOfClueUsed[num] = true;
                if (!isTest) listOfClueUsedToNum();
                totalClueCost += clueCost[num];
            }
            document.getElementById('clueMenuDiv').style.width = "40vw";
            document.getElementById('clueMenuDiv').innerHTML = '<h1 class="button xbutton" onclick="hideclue(event)">X</h1>' + listOfClue[num] + '<button class="backbut" onclick="showclue()"></button>';
        }

        let listOfFacts = [];		//טוען דפים למערך
        const xhr = new XMLHttpRequest();
        xhr.open('GET', '../../text/tl.txt');
        xhr.onload = () => {
            if (xhr.status === 200) {
                const contents = xhr.responseText;
                listOfFacts = contents.split('#');
            } else console.log('Error loading tl file');
        };
        xhr.send();

        let pre;

        function loadfilse() {	//טוען את הקבצים לזיכרון
            const xhr = new XMLHttpRequest();
            xhr.open('GET', '../../text/loadlist.txt');
            xhr.onload = () => {
                if (xhr.status === 200) {
                    const contents = xhr.responseText;
                    const arroffiles = contents.split('\n');
                    const loadimgdiv = document.getElementById('loadimgdiv');
                    pre = 100 / arroffiles.length;
                    let loadimgstring = "";
                    for (const img of arroffiles) {
                        loadimgstring += `<img class='loadimg' src='../../${img}' onload='showloadprogress()'>`;
                    }
                    loadimgdiv.innerHTML = loadimgstring;

                } else {
                    console.log('Error loading file');
                }
            };
            xhr.send();
        }

        let progress = 0;

        function showloadprogress() {
            const loadprogresstext = document.getElementById('loadprogresstext');
            const loadfilsediv = document.getElementById('loadfilsediv');
            const homepage = document.getElementById('homepage');
            progress += pre;
            loadprogresstext.innerHTML = `טוען ${Math.floor(progress)}%`;
            if (progress == 100) {
                loadfilsediv.style.display = 'none';
                homepage.style.display = 'block';

                setIntervalUpdateSessionAndDB = setInterval(function () {
                    let httpRequest = new XMLHttpRequest();
                    httpRequest.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200 && this.responseText != 1) console.log("connection faild");
                    };
                    httpRequest.open("POST", "updateSession.php", true);
                    httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    httpRequest.send('db=1');
                }, 30000);
            }

        }




        const listOfFactsUsed = [];	//רשימת טוב לדעת ששומשו
        const numOfTl = [
            2017,
            'plss',
            1964,
            'amadee',
            'דימוס',
            22794,
            'isa',
            'uv',
            'קרינה קוסמית',
            'אדמת מאדים',
            'כוכבי לכת'
        ];

        const listOfWarning = [		//רשימה של אזהרות
            "כבר ניסית את הקוד הזה",
            "קוד שגוי, נסו שוב",
            "אי אפשר לראות את הרמז הזה לפני שפותחים את הרמזים שלפניו",
            "ניתן להזין רק אותיות באנגלית",		//3
            "ניתן להזין רק אותיות בעברית",		//4
            "ניתן להזין רק מספרים"				//5
        ];
        const listOfBug = [		//רשימה של תקלות
            "התקבלה הודעה לא מזוהה מדף אחר",
            "לא זוהה סוג ההודעה להצגה",
            "בעיה בעדכון התקדמות",
            "בדיקה"
        ];


        const iconType = ["../../img/אייקונים/light.svg", "../../img/אייקונים/warning.svg", "../../img/אייקונים/bug.svg"];

        function printWorning(num, type) {		//מדפיס הודעות
            sound1.play();
            const TEXT = document.getElementById('warningText');
            TEXT.className = TEXT.className.replace('warninganimationtl', '');
            TEXT.className = TEXT.className.replace('warninganimationw', '');
            document.getElementById('warningImg').src = iconType[type];
            if (type === 0) {	//טוב לדעת
                TEXT.className = TEXT.className.replace('warninganimationtl', '').replace('warningw', '') + ' warningtl';
                const res = `רוצים לדעת  ${(num < 7 ? 'למה הסיסמה היא ' : 'עוד פרטים על ' + (num < 10 ? 'ניסוי אנלוגי לבדיקת ' : '')) + numOfTl[num]}? <span class='button clickhere' onclick='showTl(${num})'>לחצו כאן</span>`;
                TEXT.innerHTML = res;
                setTimeout(() => {
                    TEXT.classList.add('warninganimationtl');
                }, 5);
            }
            else if (type === 1) {	//הערה
                TEXT.className = TEXT.className.replace('warninganimationw', '').replace('warningtl', '') + ' warningw';
                TEXT.innerHTML = listOfWarning[num];
                setTimeout(() => {
                    TEXT.classList.add('warninganimationw');
                }, 5);
            }
            else if (type === 2) {	//שגיאת מערכת
                TEXT.innerHTML = listOfBug[num];
                console.log(`error: ${listOfBug[num]}`);
                TEXT.style.fontSize = "2vw";
            }
            else {
                printWorning(1, 2);
            }
        }

        function showTl(num) {
            document.getElementById('insidetltext').innerHTML = listOfFacts[num];
            document.getElementById('tldiv').style.display = 'block';
        }

        function showInstruction(show) {	//מציג הוראות
            document.getElementById('instructionDiv').style.display = (show ? 'block' : 'none');
        }

        let instructionPage = 1;	//דף הוראות

        function changeInstruction(add) {	//משנה את דף ההוראות
            document.getElementById('id' + instructionPage).style.display = 'none';
            instructionPage += add;
            document.getElementById('id' + instructionPage).style.display = 'block';
            if (instructionPage === 1) document.getElementById('instructionButtR').style.display = 'none';
            else document.getElementById('instructionButtR').style.display = 'block';
            if (instructionPage === 5) document.getElementById('instructionButtL').style.display = 'none';
            else document.getElementById('instructionButtL').style.display = 'block';
        }

        function startGame() {	//מתחיל את המשחק
            const iframeArr = [
                'room1 midel.html',
                'room1 comp.html',
                'room1 closet.html',
                'room1 uv.html',
                'room2 midel.html',
                'room2 drawer.html',
                'room2 cosmoscop.html',
                'room2 safe.html',
                'room3 main.html'
            ];
            document.getElementById('homepage').style.display = 'none';
            const progress = getCookie("solved") / 10;
            if (progress < 9) {
                timeFunc();
                sound.src = "../../sound/room" + Math.ceil((progress + 1) / 4) + ".mp3";
                document.getElementById('window').src = iframeArr[progress];	//מאתחל את המשחק למיקום האחרון
                document.getElementById('game').style.display = 'block';
                clearInterval(setIntervalUpdateSessionAndDB);
                updateSession();
            }
            else {
                showEndPage();
                sound.src = "../../sound/end.mp3";
            }
            sound.load();
            sound.play();
        }

        function updateSession() {
            setIntervalUpdateSession = setInterval(function () {
                let httpRequest = new XMLHttpRequest();
                httpRequest.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200 && this.responseText != 1) console.log("connection faild");
                };
                httpRequest.open("POST", "updateSession.php", true);
                httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                httpRequest.send('db=0');
            }, 30000);
        }

        function showWrongCodeDiv() {		//מדפיס את טבלת הקודים השגויים
            let table = '<table id="table"><tr id="tableFirstLine"><th>הקוד שהיה אמור להיות</th><th>הקוד שהזנתם</th></tr>';
            for (let key in listOfWrongCode) {
                for (let i = 0; i < listOfWrongCode[key].length; ++i) {
                    table += '<tr><th class="tableOtherLine">' + key + '</th><th class="tableOtherLine">' + listOfWrongCode[key][i] + '</th></tr>'
                }
            }
            table += '</table><h2 class="scoreTableClick" onclick="hideTable()">הסתר טבלה</h2>';
            document.getElementById('wrongCodeDiv').innerHTML = table;
            document.getElementById('wrongCodeDiv').style.display = 'block';
            document.getElementById('scoreClick').style.display = 'none';
        }

        function hideTable() {
            document.getElementById('scoreClick').style.display = 'inline';
            document.getElementById('wrongCodeDiv').style.display = 'none';
        }

        function focusInput() {		//מאפשר להתמקד בקוד בתוך ifame
            let iframe = document.getElementsByTagName('iframe')[0];
            let innerDoc = iframe.contentDocument || iframe.contentWindow.document;
            let input = innerDoc.getElementById('pass');
            input.focus();
        }

    </script>
</head>

<body onload="prepergame()">
    <div id="loadfilsediv"><!--דף טעינה-->
        <div id="loadimgdiv">

        </div>
        <div id="losdanhmationdiv">
            <img class="loadstar" id="ls1" src="../../img/אתר/star.svg">
            <img class="loadstar" id="ls2" src="../../img/אתר/star.svg">
            <img class="loadstar" id="ls3" src="../../img/אתר/star.svg">
            <img class="loadstar" id="ls4" src="../../img/אתר/star.svg">
            <img class="loadstar" id="ls5" src="../../img/אתר/star.svg">
            <img class="loadstar" id="ls6" src="../../img/אתר/star.svg">
            <img id="loadrocket" src="../../img/אתר/roket.png">
            <h1 id="loadprogresstext">טוען 0%</h1>
        </div>

    </div>
    <div id="homepage">
        <div style="position: absolute; width: 20%; right: 3%; top: 3%;">
            <img style="width: 100%;" src="/img/אייקונים/ logo with outline blue.png">
        </div>
        <div style="position: absolute; width: 20vw; height: 20vw; left: 7%; top: 7%;">
            <img style="position: absolute; left: 30%; width: 70%; transform: rotate(70deg);"
                src="/img/אייקונים/roket.png">
            <img style="position: absolute; top: 37%; left: 17%; width: 15%; transform: rotate(15deg);"
                src="/img/אייקונים/star.svg">
            <img style="position: absolute; top: 55%; left: 11%; width: 10%; transform: rotate(-10deg);"
                src="/img/אייקונים/star.svg">
            <img style="position: absolute; top: 55%; width: 5%; transform: rotate(5deg);" src="/img/אייקונים/star.svg">
        </div>
        <div id="homepagetextdiv">
            <h1 class="text1" id="passText1"><span style="font-size: 5vw; text-shadow: 0 0 1vw #0f5;">מחוץ
                    לכדור</span><br>חדר הבריחה של <span style="font-size: 6vw; text-shadow: 0 0 1vw #d0f;">היקום</span>
                <span style="font-size: 3vw; text-shadow: 0 0 1vw #d0f;">בקטנה</span>
            </h1>
            <div id="homepagebuttdiv">
                <button class="text1 button startbutt" id="instructionButt"
                    onclick="showInstruction(true)">הוראות</button>
                <button class="text1 button startbutt" id="startButt" onclick="startGame()">התחלה</button>
            </div>

        </div>
    </div>
    <div id="game"><!--המשחק עצמו-->
        <div id="iFrameDiv">
            <iframe src='room1 midel.html' id="window"></iframe>
            <img class="button" id="star" src="../../img/אייקונים/star.gif" onclick="showclue()"><!--כפתור רמז-->
            <img class="button" id="book" src="../../img/אייקונים/book.png" onclick="showInstruction(true)">
        </div>
        <div id="gameInfoDiv"><!--מידע למטה-->
            <h1 class="text" id="time">00:00:00</h1>
            <h1 class="warning" id="warningText"></h1>
            <img id="warningImg">
        </div>
    </div>
    <div id="instructionDiv"><!--הוראות-->
        <h1 class="instructionText" id="instructionHead">הוראות</h1>
        <button class="instructionButt" id="instructionButtB" onclick="showInstruction(false)"></button>
        <button class="instructionButt" id="instructionButtL" onclick="changeInstruction(1)"></button>
        <button class="instructionButt" id="instructionButtR" onclick="changeInstruction(-1)"></button>
        <div id="id1">
            <h2 class="instructionText instructionTitle">
                ברוכים הבאים לחדר הבריחה מחוץ לכדור - מקווים שתהנו!
            </h2>
            <p class="instructionText instructionP">
                מומלץ לשחק עם דף ועפרון כדי לשפר את החוויה, לעזור לכם לזכור רמזים ולחשב פתרונות.
                <br>
                <span style="-webkit-text-stroke-width: 0.05vw; -webkit-text-stroke-color: #F00; font-size: 2.7vw;">שימו
                    לב! </span>בתחתית דף זה ישנם חצים להמשך ההוראות ולחזרה למשחק.
            </p>
            <br>
            <h2 class="instructionText instructionTitle">
                סיסמאות
            </h2>
            <p class="instructionText instructionP">
                בחלקים מסויימים בחדר תידרשו להזין סיסמה.
                כדי להזין את הסיסמה יש להקליד את הסיסמה באמצעות המקלדת ולאחר מכן ללחוץ על אנטר במקלדת.
                במידה והסיסמה שהזנתם נכונה יפתח לכם הרמז הבא. במידה והסיסמה שגויה היא תעלם ותופיע לכם הודעה
                בתחתית המסך שהסיסמה שגויה. (ותוריד ניקוד).
            </p>
        </div>
        <div id="id2">
            <h2 class="instructionText instructionTitle">
                ניווט בחדר
            </h2>
            <p class="instructionText instructionP">
                בחדר תנווטו באמצעות העכבר. בצדדי המסך יהיו כפתורים שיאפשרו לכם לפנות לחלקים אחרים בחדר.
                <br>
                הכפתורים יופיעו רק כאשר העכבר עליהם ויראו כך:
                <br>
                אם תעבירו את העכבר על חלק מהפריטים בחדר תופיע לכם זכוכית מגדלת,
                תוכלו ללחוץ עליה כדי להסתכל עליהם יותר מקרוב. הזכוכית מגדלת תיראה כך:
                <br>
                אחרי שתלחצו עליה יופיע בפינה הימנית התחתונה כפתור שיאפשר לכם לחזור בחזרה.
                <br>
                הכפתור חזרה (שמופיע גם בדף זה) נראה כך:
                <br>
                מומלץ להסתובב בכל החדר לפני שמתחילים לפתור.
            </p>
            <img class="instructionImg" id="instructionArrowL" src="../../img/אייקונים/arrow L.png">
            <img class="instructionImg" id="instructionArrowR" src="../../img/אייקונים/arrow R.png">
            <img class="instructionImg" id="instructionMG" src="../../img/אייקונים/זכוכית מגדלת.png">
            <img class="instructionImg" id="instructionArrowB" src="../../img/אייקונים/arrow B.png">
        </div>
        <div id="id3">
            <h2 class="instructionText instructionTitle">
                ניקוד
            </h2>
            <p class="instructionText instructionP">
                הניקוד נקבע לפי כמה דברים
                <br>
                1 הזמן שעבר - ככל שיקח לכם יותר זמן לפתור את החדר תקבלו ניקוד נמוך יותר.
                <br>
                2 תשובות שגויות - בכל פעם שתכניסו סיסמה שגויה ירדו לכם 100 נקודות.
                <br>
                3 רמזים - בכל פעם שתבקשו רמז ירדו לכם 100-500 נקודות (תלוי ברמז).
            </p>
        </div>
        <div id="id4">
            <h2 class="instructionText instructionTitle">
                רמזים
            </h2>
            <p class="instructionText instructionP">
                בפינה השמאלית העליונה של הדף מופיע כפתור רמז שנראה כך:
                <br>
                במידה ונתקעתם תוכלו להשתמש בו. כמובן ששימוש ברמזים מוריד מהניקוד הסופי. ניתן לראות את עלות הרמז לפני
                שפותחים
                אותו.
                ניתן לצפות שוב ברמז שכבר נפתח ללא עלות נוספת.
            </p>
            <h2 class="instructionText instructionTitle">
                טוב לדעת
            </h2>
            <p class="instructionText instructionP">
                בחדר יש סיסמאות וניסויים אנלוגים שקשורים למאדים. כדי שגם אתם תוכלו לדעת עליהם דאגנו שתופיע הודעה שתפרט
                עליהם
                בתחתית המסך.
                חשוב לציין שהעובדות האלו הן לא רמזים ולא משפיעות על פתרון החדר בכלל. הן נועדו רק כדי להוסיף להנאה ולידע
                שלכם.
            </p>
            <img class="instructionImg" id="instructionClue" src="../../img/אייקונים/star.gif">
        </div>
        <div id="id5">
            <h2 class="instructionText instructionTitle">
                תחתית המסך
            </h2>
            <p class="instructionText instructionP">
                בצד ימין - מופיע הזמן שעבר מתחילת החדר. הזמן יתחיל ברגע שבו תכנסו לחדר. הזמן יסתיים כשתסיימו את החדר.
                <br>
                במרכז - הודעות והתראות.
            </p>
        </div>
    </div>
    <div id="cluediv" onclick="hideclue(event)"><!--רמזים-->
        <div id="clueMenuDiv">
        </div>
    </div>
    <div id="tldiv" onclick="hidetl(event)"><!--טוב לדעת-->
        <div id="insidetlDiv">
            <h1 class="button xbutton" onclick="hidetl(event)">X</h1>
            <h1 id="insidetltext"></h1>
        </div>
    </div>
    <div id="endDiv"><!--דף סיום-->
        <br>
        <h1 class="scoreText scoreBig" id="scoreText1">
            כל הכבוד!
        </h1>
        <h2 class="scoreText scoreSmall" id="scoreScore">
            הניקוד שלכם הוא: $(score) נקודות!
        </h2>
        <h2 class="scoreText scoreSmall" id="scoreClueNum">
            השתמשתם ב - $(clueNum) רמזים.
        </h2>
        <h2 class="scoreText scoreSmall" id="scoreTime">
            לקח לכם $(time) לפתור את החדר.
        </h2>
        <h2 class="scoreText scoreSmall" id="wrongCodeNum">
            כמות הקודים השגויים שהזנתם היא:
        </h2>
        <div class="scoreText" id="wrongCodeDiv"></div>
        <h1 class="scoreText scoreBig">
            מקווים שנהנתם!
        </h1>
    </div>
</body>

</html><!---->