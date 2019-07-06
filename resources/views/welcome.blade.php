<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script type="text/javascript" src="{{ asset('/js/timezone.js') }}"></script>
</head>


<body>

    <table border="1" width="60%" cellpadding="5">
        <tr>
            <td>Визитов за сегодня:</td>
            <td><?= $arrValue["visitsToday"]; ?></td>
        </tr>
        <tr>
            <td>Уникальных пользователей за сегодня:</td>
            <td><?= $arrValue["uniqVisitsToday"]; ?></td>
        </tr>
        <tr>
            <td>Уникальных за неделю:</td>
            <td><?= $arrValue["uniqVisitsPerWeek"]; ?></td>
        </tr>
    </table>
<p>Используемый браузер: <?= $_SERVER['HTTP_USER_AGENT'] ?></p>
<p>ip адрес: <?= $_SERVER['REMOTE_ADDR'] ?></p>
<p>Часовой пояс: <span id="js-timezone">2222</span></p>
<p>Визитов за последние сутки - <?= $arrValue["visitsPerLastDay"]; ?></p>
    
</body>

</html>