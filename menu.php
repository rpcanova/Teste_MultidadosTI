<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu">
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone">
                </div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search" action="extra_search.html" method="POST">
                    <div class="form-container">
                        <div class="input-box">
                            <a href="javascript:;" class="remove"></a>
                            <input type="text" placeholder="Search..." />
                            <input type="button" class="submit" value=" " />
                        </div>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>

            <?php
            $menuOptions = array(
                "Dashboard",
                "Cadastro" => array(
                    "Cliente",
                    "Fornecedor",
                    "Usuário",
                    "Produtos",
                    "Perfil de Acesso"
                ),
                "Relatório" => array(
                    "Cliente",
                    "Faturamento",
                    "Produtos"
                )
            );

            function sort_submenu($submenu)
            {
                sort($submenu);
                return $submenu;
            }

            foreach ($menuOptions as $key => $value) {
                if (is_array($value)) {
                    echo '<li class="' . (($key == "Cadastro" || $key == "Relatório") ? '' : 'start ') . '">';
                    echo '<a href="javascript:;">';
                    echo '<i class="fa fa-file-text"></i>';
                    echo '<span class="title">' . $key . '</span>';
                    echo '<span class="arrow"></span>';
                    echo '</a>';
                    echo '<ul class="sub-menu">';
                    $sortedSubMenu = sort_submenu($value);
                    foreach ($sortedSubMenu as $subItem) {
                        echo '<li><a href="#">' . $subItem . '</a></li>';
                    }
                    echo '</ul>';
                    echo '</li>';
                } else {
                    echo '<li class="' . (($key == "Dashboard") ? 'start active' : '') . '">';
                    echo '<a href="index.php">';
                    echo '<i class="fa fa-home"></i>';
                    echo '<span class="title">' . $value . '</span>';
                    echo '</a>';
                    echo '</li>';
                }
            }
            ?>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>