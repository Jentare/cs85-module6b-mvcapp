<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset ="UTF-8">
    <title><?= htmlspecialchars($practice->getSummary()); ?></title>
<style>
    body{
        font-family: monospace;
        padding: 20px;
        line-height: 1.5;
    }
    pre{
        background: #f4f4f4;
        padding: 10px;
        border-radius: 5px;
    }
    section {
        margin-bottom: 25px;
    }
</style>
</head>

<body>
    <h1><?= htmlspecialchars($practice->getSummary()); ?></h1>
    <p>TOTAL DURACTION: <?= $practice->totalMinutes; ?> minutes</p>

    <pre>
        Count | 1 + 2 +
            C | x x x x
            S | - - o -
            K | o - - -
    </pre>

    <hr>

    <!-- Grooves -->
     <section>
        <h2>--- GROOVES (<?= $practice->timePerGroove; ?> mins each) ---</h2>
        <?php foreach ($practice->grooves as $groove): ?>
            <h3>. <?= htmlspecialchars($groove['name']); ?></h3>
            <pre><?= htmlspecialchars($groove['tab']); ?></pre>
        <?php endforeach; ?>
    </section>

    <!-- Rudiments -->
     <?php if ($practice->showRudiments): ?>
     <section>
        <h2>--- RUDIMENTS (<?= $practice->timePerRudiment; ?> mins each) ---</h2>
        <?php foreach ($practice->rudiments as $rudiment): ?>
            <h3>. <?= htmlspecialchars($rudiment['name']); ?></h3>
            <pre><?= htmlspecialchars($rudiment['tab']); ?></pre>
        <?php endforeach; ?>
    </section>
    <?php endif; ?>

    <!-- Fill -->
     <?php if ($practice->showFills): ?>
     <section>
        <h2>--- FILLS (<?= $practice->timePerFill; ?> mins each) ---</h2>
        <?php foreach ($practice->fills as $fill): ?>
            <h3>. <?= htmlspecialchars($fill['name']); ?></h3>
            <pre><?= htmlspecialchars($fill['tab']); ?></pre>
        <?php endforeach; ?>
    </section>
    <?php endif; ?>
</body>
</html>