<div class="addUser">
    <div class="form">
        <h2>Добавление юзеров</h2>

        <form id="addUserForm">
            <input type="text" placeholder="name" id="name">
            <button onclick="checkName(); return false">проверить имя</button><br><br>
            <input type="text" placeholder="email" id="email">
            <button onclick="checkEmail(); return false">проверить мыло</button>
            <br><br>

            <select name="regions" id="regions" style="display: none">
                <option value="0">Выберите область проживания</option>
                <?php foreach ($region as $k => $v) {
                    ?>
                    <option value="<?php echo $v['id'] ?>"><?php echo $v['name'] ?></option>
                <?php } ?>
            </select>
            <br>

            <select name="city" id="city" style="display: none">
                <option value="0" selected>Выберите город проживания</option>

            </select>
            <br>

            <select name="districts" id="districts" style="display: none">
                <option value="0" selected>Выберите район проживания</option>

            </select>
            <br>
            <button onclick="addUser();return false">сохранить</button>
        </form>
    </div>

    <div id="message">
        <h2>Информация</h2>
        <div id="info">

        </div>
    </div>
</div>