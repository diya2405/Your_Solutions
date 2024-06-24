<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPD Resources</title>
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
        <h1>Contributor Personality Development (CPD) Resources</h1>
    </header>
    <div class="container">
        <div class="resource">
            <h2>Previous Years Papers (1)</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('cpd/paper1.pdf')">Open Previous Years Papers (1)</a>
        </div>
        <div class="resource">
            <h2>Previous Years Papers (2)</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('cpd/paper2.pdf')">Open Previous Years Papers (2)</a>
        </div>
        <div class="resource">
            <h2>Worksheets</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('cpd/worksheets.pdf')">Open Worksheets</a>
        </div>
        <div class="resource">
            <h2>Assignments</h2>
            <a class="pdf-link" href="javascript:void(0);" onclick="openPDF('cpd/Assignments.pdf')">Open Assignments</a>
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
