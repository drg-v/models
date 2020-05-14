<div class="contain additional">
    <div class="hours">
        <h2 class="inf-header">Години роботи</h2>
        <div class="positioning">
            <p class="aname">Колл-центр(Пн-Пт)</p>
            <p class="aname">Магазин(Пн-Пт)</p>
        </div>
        <div class="positioning">
            <p class="atext">8:00 - 21:00</p>
            <p class="atext">9:00 - 21:00</p>
        </div>
        <div class="positioning">
            <div class="app">
                <p class="aname">Субота</p>
                <p class="aname">Неділя</p>
            </div>
            <div class="app">
                <p class="aname">Субота</p>
                <p class="aname">Неділя</p>
            </div>
        </div>
        <div class="positioning">
            <div class="app">
                <p class="atext">8:00 - 21:00</p>
                <p class="atext">9:00 - 21:00</p>
            </div>
            <div class="app">
                <p class="atext">8:00 - 21:00</p>
                <p class="atext">9:00 - 21:00</p>
            </div>
        </div>
    </div>
    <div class="line-2"></div>
    <div class="message">
            <h2 class="inf-header-2">Ваше повідомлення</h2>
            <div class="fild">
                <?php
                $name = $_POST['Name'];
                $name = strip_tags($name);
                echo "<p>".$name."</p>";
                ?>
            </div>
            <div class="fild">
                <?php
                $email = $_POST['Email'];
                $email = strip_tags($email);
                echo "<p>".$email."</p>";
                ?>
            </div>
            <div class="fild-2">
                <?php
                $mes = $_POST['Message'];
                $mes = strip_tags($mes);
                echo "<p>".$mes."</p>";
                ?>
            </div>
    </div>
    <div class="line"></div>
    <div class="info">
        <h2 class="inf-header">Телефон</h2>
        <p class="info-text">+380 50 00 000 00<br>+380 66 66 666 66<br>+380 68 88 888 88</p>
        <h2 class="inf-header">E-mail</h2>
        <p class="info-text">FOOTSHOP@gmail.com</p>
        <h2 class="inf-header">Адреса</h2>
        <p class="info-text">м. Київ, вул. Академіка Янгеля 5</p>
    </div>
</div>
