<!-- Get current URI -->
<div class="bottom-nav">
    <?= ($currentPageName == 'index.php' || $currentPageName == '') ? "<a class='active' href='./index.php'>Home</a>" : "<a class='' href='../../index.php'>Home</a>" ?>
    <a class="<?= ($currentPageName == 'array' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/array/array.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Array
    </a>
    <a class="<?= ($currentPageName == 'multidimensionalArray' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/multidimensionalArray/multidimensionalArray.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Multidimensional Array
    </a>
    <a class="<?= ($currentPageName == 'conditional') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/conditional/conditional.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Conditional
    </a>
    <a class="<?= ($currentPageName == 'date') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/date/date.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Date
    </a>
    <a class="<?= ($currentPageName == 'pdo' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/pdo/pdo.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory .'assets/images/quest.png' ?>"> PDO
    </a>
    <a class="<?= ($currentPageName == 'form' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/form/form.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Form
    </a>
    <a class="<?= ($currentPageName == 'oop' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/oop/oop.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> OOP
    </a>
    <a class="<?= ($currentPageName == 'uploadImage') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/uploadImage/uploadImage.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Upload Image
    </a>
    <a class="<?= ($currentPageName == 'xdebug') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/xdebug/xdebug.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Xdebug
    </a>
    <a class="<?= ($currentPageName == 'debugYourself') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/debugYourself/debugYourself.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Debug Yourself
    </a>
    <a class="<?= ($currentPageName == 'function' && $currentWorkName == 'quests') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/quests/function/function.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/quest.png' ?>"> Function
    </a>
    <a class="<?= ($currentPageName == 'array' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/array/array.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> Array
    </a>
    <a class="<?= ($currentPageName == 'function' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/function/function.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> Function
    </a>
    <a class="<?= ($currentPageName == 'wildTemplate') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/wildTemplate/wildTemplate.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> Wild Template
    </a>
    <a class="<?= ($currentPageName == 'wizard') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/wizard/wizard.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> Wizard
    </a>
    <a class="<?= ($currentPageName == 'pdo' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/pdo/pdo.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> PDO
    </a>
    <a class="<?= ($currentPageName == 'mvc1' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/mvc1/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> MVC 1
    </a>
    <a class="<?= ($currentPageName == 'mvc2' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/mvc2/public/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> MVC 2
    </a>
    <a class="<?= ($currentPageName == 'mvc3' && $currentWorkName == 'workshops') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/workshops/mvc3/public/index.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/workshop.png' ?>"> MVC 3
    </a>
    <a class="<?= ($currentPageName == 'form' && $currentWorkName == 'lessons') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/lessons/form/form.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/lesson.png' ?>"> Form
    </a>
    <a class="<?= ($currentPageName == 'oop' && $currentWorkName == 'lessons') ? 'active' : '' ?>" href="<?= $changeDirectory . 'php/lessons/oop/oop.php' ?>">
        <img class="nav-image" src="<?= $changeDirectory . 'assets/images/lesson.png' ?>"> OOP
    </a>
</div>
