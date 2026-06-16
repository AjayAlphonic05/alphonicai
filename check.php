<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=_APPLICATION_URL;?>images/favicon.png" rel="icon" />
    <title>System Check - AlphonicAI</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 2rem;
        }
        .check-item {
            padding: 20px;
            margin: 15px 0;
            border-radius: 10px;
            border-left: 5px solid #ddd;
        }
        .check-item.success {
            background: #d4edda;
            border-left-color: #28a745;
        }
        .check-item.error {
            background: #f8d7da;
            border-left-color: #dc3545;
        }
        .check-item h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        .check-item p {
            color: #666;
            line-height: 1.6;
        }
        .info {
            background: #e7f3ff;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
            border-left: 5px solid #0066cc;
        }
        .code {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
            margin: 10px 0;
        }
        .button {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin: 10px 10px 10px 0;
            font-weight: 600;
            transition: transform 0.3s;
        }
        .button:hover {
            transform: translateY(-2px);
        }
        .version {
            background: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔧 AlphonicAI System Check</h1>

        <?php
        $php_working = true;
        $css_exists = file_exists('css/styles.css');
        $js_exists = file_exists('js/script.js');
        $header_exists = file_exists('includes/header.php');
        $footer_exists = file_exists('includes/footer.php');

        $all_good = $php_working && $css_exists && $js_exists && $header_exists && $footer_exists;
        ?>

        <div class="check-item <?php echo $php_working ? 'success' : 'error'; ?>">
            <h3>✅ PHP is Working!</h3>
            <p>PHP version: <span class="version"><?php echo phpversion(); ?></span></p>
            <p>Server: <span class="version"><?php echo $_SERVER['SERVER_SOFTWARE']; ?></span></p>
            <p>Document Root: <span class="version"><?php echo $_SERVER['DOCUMENT_ROOT']; ?></span></p>
        </div>

        <div class="check-item <?php echo $css_exists ? 'success' : 'error'; ?>">
            <h3><?php echo $css_exists ? '✅' : '❌'; ?> CSS File</h3>
            <p>Location: css/styles.css</p>
            <p>Status: <?php echo $css_exists ? 'Found!' : 'NOT FOUND - Please check file location'; ?></p>
            <?php if($css_exists): ?>
            <p>Size: <?php echo number_format(filesize('css/styles.css')); ?> bytes</p>
            <?php endif; ?>
        </div>

        <div class="check-item <?php echo $js_exists ? 'success' : 'error'; ?>">
            <h3><?php echo $js_exists ? '✅' : '❌'; ?> JavaScript File</h3>
            <p>Location: js/script.js</p>
            <p>Status: <?php echo $js_exists ? 'Found!' : 'NOT FOUND - Please check file location'; ?></p>
            <?php if($js_exists): ?>
            <p>Size: <?php echo number_format(filesize('js/script.js')); ?> bytes</p>
            <?php endif; ?>
        </div>

        <div class="check-item <?php echo $header_exists ? 'success' : 'error'; ?>">
            <h3><?php echo $header_exists ? '✅' : '❌'; ?> Header Include</h3>
            <p>Location: includes/header.php</p>
            <p>Status: <?php echo $header_exists ? 'Found!' : 'NOT FOUND - Please check file location'; ?></p>
        </div>

        <div class="check-item <?php echo $footer_exists ? 'success' : 'error'; ?>">
            <h3><?php echo $footer_exists ? '✅' : '❌'; ?> Footer Include</h3>
            <p>Location: includes/footer.php</p>
            <p>Status: <?php echo $footer_exists ? 'Found!' : 'NOT FOUND - Please check file location'; ?></p>
        </div>

        <?php if($all_good): ?>
        <div class="info">
            <h3>🎉 Everything Looks Good!</h3>
            <p>All required files are in place. Your website should work correctly.</p>
            <p><strong>Access your website:</strong></p>
            <div class="code">http://<?php echo $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']); ?>/</div>
        </div>
        <?php else: ?>
        <div class="check-item error">
            <h3>⚠️ Issues Found</h3>
            <p>Some files are missing. Please ensure all files are copied to the correct location.</p>
        </div>
        <?php endif; ?>

        <div class="info">
            <h3>📂 Expected File Structure:</h3>
            <pre class="code">
alphonicai/
├── css/
│   └── styles.css
├── js/
│   └── script.js
├── includes/
│   ├── header.php
│   └── footer.php
├── index.php
├── services.php
├── about.php
├── contact.php
├── test.php
└── check.php (this file)
            </pre>
        </div>

        <div style="margin-top: 30px;">
            <a href="index.php" class="button">Go to Homepage (PHP)</a>
            <a href="index.html" class="button">Go to Homepage (HTML)</a>
            <a href="test.php" class="button">Test Page</a>
        </div>

        <div class="info" style="margin-top: 30px;">
            <h3>💡 Tips:</h3>
            <ul style="margin-left: 20px; line-height: 2;">
                <li>Always access via <strong>http://localhost/</strong> (not file://)</li>
                <li>Make sure Apache is running in XAMPP</li>
                <li>Clear browser cache if styles don't load (Ctrl+F5)</li>
                <li>Check browser Console (F12) for errors</li>
            </ul>
        </div>

        <div style="margin-top: 20px; padding: 20px; background: #fff3cd; border-radius: 10px; border-left: 5px solid #ffc107;">
            <h3>🔗 Current URL:</h3>
            <div class="code"><?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?></div>
            <p style="margin-top: 10px; color: #856404;">
                <?php if(strpos($_SERVER['REQUEST_URI'], 'file://') !== false): ?>
                ❌ You're using file:// - This won't work! Use http://localhost/
                <?php else: ?>
                ✅ URL looks correct!
                <?php endif; ?>
            </p>
        </div>
    </div>
</body>
</html>
