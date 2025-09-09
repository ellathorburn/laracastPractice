<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <a href="/notes" class="text-blue-500 hover:underline mb-6 inline-block">Go back</a>
            
            <div class="bg-white rounded-lg shadow-sm border border-blue-200 p-6">
                <p class="text-gray-800 leading-relaxed"><?= nl2br(htmlspecialchars($note['body'])) ?></p>
            </div>
        </div>
    </main>

<?php require "partials/footer.php" ?>