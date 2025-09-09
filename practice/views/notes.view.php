<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <ul class="space-y-4">
                <?php foreach ($notes as $note): ?>
                    <li class="bg-white rounded-lg shadow-sm border border-blue-200 p-4">
                        <div class="mb-2">
                            <span class="text-sm text-gray-600">By: </span>
                            <a href="/user?id=<?= $note['user_id'] ?>" class="text-blue-600 hover:text-blue-800 font-medium hover:underline">
                                <?= htmlspecialchars($note['user_name']) ?>
                            </a>
                        </div>
                        <div>
                            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                                <?= htmlspecialchars(substr($note['body'], 0, 100)) ?><?= strlen($note['body']) > 100 ? '...' : '' ?>
                            </a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </main>

<?php require "partials/footer.php" ?>