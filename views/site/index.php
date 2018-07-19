<?php
/* @var $this yii\web\View */

$this->title = 'Test Project';
?>
<div class="site-index">

<div class="container">
<h1>Тестовое задание</h1>
<p>Реализация пользивателей , и их ролей</p>
<ul class="nav nav-pills">
  <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
  <li><a data-toggle="pill" href="#step1">Step 1</a></li>
  <li><a data-toggle="pill" href="#step2">Step 2</a></li>
  <li><a data-toggle="pill" href="#step3">Step 3</a></li>
  <li><a data-toggle="pill" href="#step4">Step 4</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <pre>
      Использевано
      Yii-2 basic

      yii2-user /dektrium
      yii2-admin /mdmsoft
    </pre>
  </div>
  <div id="step1" class="tab-pane fade">
    <h3>Step 1</h3>
    <pre>
      После развертывание проекта:
      пропишите настройки  в /config/db.php
      Обновить схему базы данных, применяя миграции.
      Убедитесь, что вы правильно настроили компонент приложения db и выполните следующие команды:

      $ php yii migrate/up --migrationPath=@vendor/dektrium/yii2-user/migrations

      $ php yii migrate --migrationPath=@mdm/admin/migrations

      $ php yii migrate --migrationPath=@yii/rbac/migrations

      Раскоментируйте строку  95 в  /config/web.php
    </pre>
  </div>
  <div id="step2" class="tab-pane fade">
    <h3>Step 2</h3>
    <pre>
      Перейдите по адресу
      http://youhost.site/rbac/route
      и выберете маршруты для rbac

      Перейдите по адресу
      http://youhost.site/rbac/role
      создайте три типа ролей
      "adminAccess"
      "managerAccess"
      "userAccess"
    </pre>
  </div>
  <div id="step3" class="tab-pane fade">
    <h3>Step 3</h3>
    <pre>
      Перейдите по адресу
      http://youhost.site/user/registration/register
      зарегистрируйте пользователя с логином admin
      (доступ к управлению пользевателями настроин на  этот логин. P.S. можно изменить в /config/web.php)

      Перейдите по адресу
      http://youhost.site/rbac/assignment
      и назначте  вашему пользевателю роль "adminAccess"

      Закоментируйте строку  95 в  /config/web.php
    </pre>
  </div>
  <div id="step4" class="tab-pane fade">
    <h3>Step 4</h3>
    <pre>
      аналогично можно создать пользеваателя  с правами  менеджера

      Раскоментируйте строку  19 в  /config/web.php
      обычному  пользевателю роль права "userAccess" назначаеться автоматом при регистрации
    </pre>
  </div>
</div>
</div>
</div>
