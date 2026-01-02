<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($header) ?></title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</head>
<body class="h-full">
<div class="min-h-full">
    <?php require  __DIR__ . '/../partials/nav.php'; ?>
    <?php require __DIR__ . '/../partials/header.php'; ?>

    <main class="bg-gray-50 min-h-screen">
        <div class="mx-auto max-w-3xl py-10 px-4 sm:px-6 lg:px-8">
            <a href="/notes" class="text-sm text-indigo-600 hover:text-indigo-700">&larr; Back to notes</a>

            <article class="mt-4 rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">
                <h1 class="mb-3 text-2xl font-semibold text-gray-900">
                    <?= htmlspecialchars($note['title'] ?? 'Untitled') ?>
                </h1>
                <p class="whitespace-pre-line text-gray-700">
                    <?= htmlspecialchars($note['body'] ?? '') ?>
                </p>
            </article>
        </div>
    </main>
</div>
</body>
</html>



