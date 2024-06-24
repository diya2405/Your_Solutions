<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics Resources</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
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
    </style>
</head>
<body>
    <header>
        <h1>Basic Mathematics Resources</h1>
    </header>
    <div class="container">
        <div class="resource">
            <h2>Formula of Chapter 1</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('math/ch-1.pdf')">Open Chapter Formulas 1</a>
        </div>
        <div class="resource">
            <h2>Chapter 2</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('math/ch-2.pdf')">Open Chapter Formula 2</a>
        </div>
        <div class="resource">
            <h2>Chapter 3</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('math/ch-3.pdf')">Open Chapter Formula 3</a>
        </div>
        <div class="resource">
            <h2>Chapter 4</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('math/ch-4.pdf')">Open Chapter Formula 4</a>
        </div>
        <div class="resource">
            <h2>Chapter 5</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('math/ch-5.pdf')">Open Chapter Formula 5</a>
        </div>
        <div class="resource">
            <h2>Previous Years Papers (1)</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('math/paper1.pdf')">Open Previous Years Papers (1)</a>
        </div>
        <div class="resource">
            <h2>Previous Years Papers (2)</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('math/paper2.pdf')">Open Previous Years Papers (2)</a>
        </div>
        <p style="text-align: center;">This material is for the academic year 2024.</p>
    </div>
    <script>
        function openPDF(pdfPath) {
            var win = window.open(pdfPath, '_blank');
            win.focus();
        }
    </script>
</body>
</html>
