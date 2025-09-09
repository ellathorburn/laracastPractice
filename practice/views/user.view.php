<?php require "partials/head.php" ?>
<?php require "partials/nav.php" ?>
<?php require "partials/banner.php" ?>

    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="mb-6">
                <a href="/notes" class="text-blue-500 hover:underline">← Back to all notes</a>
            </div>

            <div class="mb-6 bg-blue-50 rounded-lg p-4 border border-blue-200">
                <h2 class="text-lg font-semibold text-blue-900">User: <?= htmlspecialchars($user['name']) ?></h2>
                <p class="text-sm text-blue-700"><?= htmlspecialchars($user['email']) ?></p>
                <p class="text-sm text-blue-600 mt-1"><?= count($notes) ?> note<?= count($notes) !== 1 ? 's' : '' ?></p>
            </div>

            <?php if (empty($notes)): ?>
                <div class="bg-gray-50 rounded-lg p-6 text-center">
                    <p class="text-gray-600">This user hasn't written any notes yet.</p>
                </div>
            <?php else: ?>
                <ul class="space-y-4">
                    <?php foreach ($notes as $note): ?>
                        <li class="bg-white rounded-lg shadow-sm border border-blue-200 p-4">
                            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                                <?= nl2br(htmlspecialchars($note['body'])) ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </main>

<?php require "partials/footer.php" ?>