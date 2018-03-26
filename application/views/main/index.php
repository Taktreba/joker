<h2>Список юзеров</h2>
<a href="http://artjoker/users/add" style="font-size: 24px">Добавить юзера</a>
<br><br>

<?php

foreach ($users as $k => $v) {
    echo 'Имя: <b>' . $v['u_name'] . '</b><br>';
    echo 'Имейл: <b>' . $v['u_email'] . '</b><br>';
    echo 'Адрес: <b>' . $v['r_name'] . ', г. ' . $v['c_name'] . ', ' . $v['d_name'] . '</b>';
    echo '<hr>';
}


?>