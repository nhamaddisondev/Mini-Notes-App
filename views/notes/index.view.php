<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</head>

<body class="h-full">
    <div class="min-h-full">
        <?php require  __DIR__ . '/../partials/nav.php'; ?>
        <?php require __DIR__ . '/../partials/header.php'; ?>

        <main class="bg-gray-50 min-h-screen">
            <div class="mx-auto max-w-6xl py-10 px-4 sm:px-6 lg:px-8">
                <div class="mb-6 flex items-center justify-between">
                    <div>
                        <h2 class="text-2xl font-semibold text-gray-900">Your notes</h2>
                        <p class="mt-1 text-sm text-gray-500">
                            <?= count($notes) ?> note<?= count($notes) === 1 ? '' : 's' ?> found.
                        </p>
                    </div>

                    <!-- New note button -->
                    <a href="/create-note"
                        class="inline-flex items-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        + New note
                    </a>
                </div>

                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <?php foreach ($notes as $note): ?>
                        <?php $id = (int) ($note['id'] ?? 0); ?>
                        <a href="/note?id=<?= $id ?>"
                            class="group flex flex-col justify-between rounded-2xl border border-gray-200 bg-white p-5 shadow-sm transition hover:-translate-y-1 hover:border-indigo-400 hover:shadow-md">
                            <div>
                                <h3
                                    class="mb-1 line-clamp-1 text-base font-semibold text-gray-900 group-hover:text-indigo-600">
                                    <?= htmlspecialchars($note['title'] ?? 'Untitled') ?>
                                </h3>
                                <p class="line-clamp-4 text-sm leading-relaxed text-gray-600">
                                    <?= htmlspecialchars($note['body'] ?? '') ?>
                                </p>
                            </div>
                            <div class="mt-4 flex items-center justify-between text-xs text-gray-400">
                                <span>ID: <?= $id ?></span>
                                <span class="font-medium text-indigo-500 group-hover:text-indigo-600">
                                    View →
                                </span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
    </div>
</body>

</html>