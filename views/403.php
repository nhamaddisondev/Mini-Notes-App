<?php

// Purpose: Renders the 403 forbidden error page.
// Set the response code
http_response_code(403);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Forbidden</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-red-600 to-orange-700 min-h-screen flex flex-col">
    <?php include 'partials/nav.php'; ?>
    <div class="flex-1 flex items-center justify-center px-4 py-12">
        <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12 lg:p-16 max-w-2xl w-full text-center">
            <!-- Error Icon -->
            <div class="text-7xl mb-6">🚫</div>

            <!-- Error Code -->
            <h1
                class="text-8xl md:text-9xl font-bold bg-gradient-to-r from-red-600 to-orange-600 bg-clip-text text-transparent mb-4">
                403
            </h1>

            <!-- Error Title -->
            <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-4">
                Access Forbidden
            </h2>

            <!-- Error Message -->
            <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                Sorry, you don't have permission to access this resource.
                This could be because you're not logged in or you don't own this content.
            </p>

            <!-- Action Button -->
            <div class="flex justify-center gap-4">
                <a href="/"
                    class="bg-gradient-to-r from-red-600 to-orange-600 text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                    Go Back to Home
                </a>
                <a href="/notes"
                    class="bg-gray-500 text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
                    View Notes
                </a>
            </div>
        </div>
    </div>
</body>

</html>