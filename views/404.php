<?php
// Set the response code
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-600 to-indigo-700 min-h-screen flex flex-col">
<?php include 'partials/nav.php'; ?>
<div class="flex-1 flex items-center justify-center px-4 py-12">
    <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12 lg:p-16 max-w-2xl w-full text-center">
        <!-- Error Icon -->
        <div class="text-7xl mb-6">🔍</div>

        <!-- Error Code -->
        <h1 class="text-8xl md:text-9xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent mb-4">
            404
        </h1>

        <!-- Error Title -->
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-4">
            Oops! Page Not Found
        </h2>

        <!-- Error Message -->
        <p class="text-gray-600 text-lg mb-8 leading-relaxed">
            The page you're looking for seems to have wandered off into the digital wilderness.
            Don't worry though, we'll help you find your way back!
        </p>

        <!-- Action Button -->
        <div class="flex justify-center mb-10">
            <a href="/controller/index.php"
               class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                Go Back to Home
            </a>
        </div>

        <!-- Suggestions -->
        <div class="border-t-2 border-gray-200 pt-8 text-left">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">
                Here are some helpful links:
            </h3>
            <ul class="space-y-3">
                <li class="flex items-center">
                    <span class="text-purple-600 font-bold mr-3">→</span>
                    <a href="/controller/index.php" class="text-purple-600 hover:text-purple-800 hover:underline transition-colors">
                        Home Page
                    </a>
                </li>
                <li class="flex items-center">
                    <span class="text-purple-600 font-bold mr-3">→</span>
                    <a href="/controller/about.php" class="text-purple-600 hover:text-purple-800 hover:underline transition-colors">
                        About Us
                    </a>
                </li>
                <li class="flex items-center">
                    <span class="text-purple-600 font-bold mr-3">→</span>
                    <a href="/controller/contact.php" class="text-purple-600 hover:text-purple-800 hover:underline transition-colors">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>