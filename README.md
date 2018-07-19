<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Test</h1>
    <br>
</p>


После развертывание проекта:
пропишите настройки  в /config/db.php
Обновить схему базы данных, применяя миграции.
Убедитесь, что вы правильно настроили компонент приложения db и выполните следующие команды:

$ php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations

$ php yii migrate --migrationPath=@mdm/admin/migrations

$ php yii migrate --migrationPath=@yii/rbac/migrations

Раскоментируйте строку  81 в  /config/web.php

Перейдите по адресу
http://youhost.site/rbac/route
и выберете маршруты для rbac

Перейдите по адресу
http://youhost.site/rbac/role
создайте три типа ролей
"adminAccess"
"managerAccess"
"userAccess"

Перейдите по адресу
http://youhost.site/user/registration/register
зарегистрируйте пользователя с логином admin (доступ к управлению пользевателями настроин на  этот логин. P.S. можно изменить в /config/web.php)

Перейдите по адресу
http://youhost.site/rbac/assignment
и назначте  вашему пользевателю роль "adminAccess"

Закоментируйте строку  81 в  /config/web.php

аналогично можно создать    пользеваателя  с правами  менеджера

Раскоментируйте строку  19 в  /config/web.php
обычному  пользевателю роль права "userAccess" назначаеться автоматом при регистрации
