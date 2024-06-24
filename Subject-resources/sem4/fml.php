<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FML Resources</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            position: relative;
            overflow: hidden;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1;
        }
        .resource {
            margin-bottom: 20px;
        }
        .resource h2 {
            margin-bottom: 10px;
        }
        .pdf-link {
            display: block;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .pdf-link:hover {
            background-color: #0056b3;
        }
        .watermark {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('watermark.png'); /* Use a semi-transparent watermark image */
            background-repeat: repeat;
            opacity: 0.2;
            pointer-events: none;
            z-index: 2;
        }
        .message-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 20px;
            border-radius: 10px;
            z-index: 100;
            text-align: center;
        }
        .message-box button {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <script>
        function showMessage(message) {
            const messageBox = document.getElementById('messageBox');
            messageBox.querySelector('p').innerText = message;
            messageBox.style.display = 'block';
        }

        function hideMessage() {
            const messageBox = document.getElementById('messageBox');
            messageBox.style.display = 'none';
        }

        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            showMessage("Right-click is disabled to prevent downloads.");
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'PrintScreen' || e.key === 'PrtSc' || e.key === 'PrtScr' || (e.ctrlKey && (e.key === 's' || e.key === 'S'))) {
                e.preventDefault();
                showMessage("Screenshots and saving this content are not allowed.");
            }
        });

        document.addEventListener('keyup', function(e) {
            if (e.key === 'PrintScreen' || e.key === 'PrtSc' || e.key === 'PrtScr') {
                navigator.clipboard.writeText('');
                showMessage("Screenshots are not allowed.");
            }
        });

        function openPDF(pdfPath) {
            var win = window.open(pdfPath, '_blank');
            win.focus();
        }
    function clp_clear() {
        var content=window.clipboardData.getData("Text");
        if (content==null) {
            window.clipboardData.clearData();
        }
        setTimeout("clp_clear();",1000);
    }
    </script>
</head>
<body>
    <div class="watermark"></div>
    <header>
        <h1>Fundamentals Of Machine Learning (FML) Resources</h1>
    </header>
    <div class="container">
        <div class="resource">
            <h2>Chapter 1</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('fml/ch-1.pdf')">Open Chapter 1</a>
        </div>
        <div class="resource">
            <h2>Machine Learning Activities</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('fml/ML_activites.pdf')">Open ML Activities</a>
        </div>
        <div class="resource">
            <h2>Manual</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('fml/manual.pdf')">Open Manual</a>
        </div>
        <div class="resource">
            <h2>Previous Years Papers (1)</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('fml/paper1.pdf')">Open Previous Years Papers (1)</a>
        </div>
        <div class="resource">
            <h2>Previous Years Papers (2)</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('fml/paper2.pdf')">Open Previous Years Papers (2)</a>
        </div>
        <div class="resource">
            <h2>Assignments</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('fml/Assignments.pdf')">Open Assignments</a>
        </div>
        <p style="text-align: center;">This material is for the academic year 2024.</p>
    </div>
    <div id="messageBox" class="message-box">
        <p></p>
        <button onclick="hideMessage()">OK</button>
    </div>
</body>
</html>
