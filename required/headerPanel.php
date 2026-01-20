<div class="gap-30">
    <div id="admin-panel">
        <div class="panel-intro">
            <p class="GearsOfPeace">ADMIN PANEL</p><hr>
        </div>
        <div class="robotoMono panel-button">
            <a href="?addProject=true" class="cursor-pointer button-inactive panel-btn">Créer</a>
            <?php if (verifSave()): ?>
                <button class="cursor-pointer button-inactive saveCategories panel-btn">Sauvegarder</button>
            <?php endif; ?>
            <?php if (verifBack()): ?>
                <a href="admin.php" class="cursor-pointer button-inactive panel-btn">Retour</a>
            <?php endif; ?>
        </div>
        <hr>
    </div>

    <div id="filter">
        <div class="panel-intro">
            <p class="GearsOfPeace">FILTRES</p><hr>
        </div>
        <div class="robotoMono panel-button">
            <?php foreach ($categories as $categorie): ?>
                <?php $booleanBtn = false; ?>
                <div class="categorie-item">
                    <?php if (verifCategories($categorie['id'])): ?>
                        <form action="gestion/updateCategorie.php" class="updateCategorieForm" method="post">
                            <div class="panel-btn">
                                <input type="text" name="categorie" value="<?php echo $categorie['categorie']; ?>">
                            </div>
                            <input type="text" name="id" class="hidden" value="<?php echo $categorie['id']; ?>">
                            <?php $booleanBtn = true; ?>
                        </form>
                    <?php else: ?>
                        <button class="cursor-pointer buttonCategorie panel-btn" id="<?php echo htmlspecialchars($categorie['categorie']); ?>" value="<?php echo $categorie['categorie']; ?>"><?php echo $categorie['categorie']; ?></button>
                    <?php endif; ?>
                    <div class="hidden-icons cursor-pointer">
                        <?php if (!$booleanBtn): ?>
                            <a href="?updateCategorie=true&id=<?php echo htmlspecialchars($categorie['id']); ?>" class="color-update">
                                <svg class="updateCategorie" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                                </svg>
                            </a>
                            <form action="gestion/deleteCategorie.php" method="post">
                                <input type="text" class="hidden" name="id" value="<?php echo htmlspecialchars($categorie['id']); ?>">
                                <button type="submit" class="color-danger cursor-pointer">
                                    <svg class="deleteCategorie" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                    </svg>
                                </button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if (!isset($_GET["addCategorie"])): ?>
                <a href="?addCategorie=true" class="cursor-pointer panel-btn addCategorie">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>
                </a>
            <?php else: ?>
                <form action="gestion/saveCategorie.php" class="saveCategorieForm" method="post">
                    <div class="panel-btn">
                        <input type="text" name="categorie" placeholder="Nom de la categorie">
                    </div>
                </form>
            <?php endif; ?>
        </div>
        <hr>
    </div>
</div>