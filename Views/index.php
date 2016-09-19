<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="manifest" href="/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#1A5573">
    <meta name="msapplication-TileImage" content="/icons/ms-icon-144x144.png">

    <meta name="description"
          content="Расписание занятий для студентов МГТУ им. Носова. Удобный просмотр с любых устройств!">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic'
          rel='stylesheet' type='text/css'>
    <link href="css/template_styles.css" type="text/css" rel="stylesheet"/>
    <title>Расписание МГТУ им. Носова</title>
    <meta name="theme-color" content="#1A5573">
</head>
<body>

<main>
    <div class="page-wrap">
        <div class="content clearfix">
            <div class="head clearfix">
                <div class="logo"></div>
                <div class="date-wrap">
                    <div class="time">
                        <div class="hours"></div>
                        <span>:</span>

                        <div class="minutes"></div>
                    </div>
                    <div class="weekday"></div>
                    <div class="date"></div>
                </div>
                <div class="group-name"></div>
                <form action="" class="head-search-form">
                    <select name="" class="head-group-select"></select>
                </form>

            </div>
            <div class="head-min clearfix">
                <div class="date-wrap">
                    <div class="time">
                        <div class="hours"></div><span>:</span><div class="minutes"></div>
                    </div>
                    <div class="weekday"></div>
                    <div class="date"></div>
                </div>
                <div class="group-name"></div>
            </div>         
            <div class="main-table-wrap">
                <?
                    include "templates/html/week.php";
                    for ($w = 0; $w < 2; $w++) {
                    ?>
                        <div class="week" id="week-<?=$w+1;?>">
                        <div class="week-name"><?=groupSchedule[$w]['week'];?></div>
                    <?
                        renderWeek($groupSchedule[$w]);
                    }
                ?>
            </div>      
            <div class="subgroup-btns">
                <div class="sb subgroup-btn-0">Все подгруппы</div>
                <div class="sb subgroup-btn-1">Подгруппа 1</div>
                <div class="sb subgroup-btn-2">Подгруппа 8</div>
                <div class="sb subgroup-btn-3">Подгруппа 4</div>
            </div>
            <aside>
                <div class="aside-wrap">
                    <div class="editAreaWrap">
                        <div class="edit-btn pencil-edit btn"></div>
                        <div class="refresh-btn btn"></div>

                        <div class="editArea">
                        </div>
                        <button class="submit-edit-btn hide">Готово</button>
                    </div>
                </div>
            </aside>
            <div class="warning-msg">
                <span class="msg-h">Внимание!</span> Сайт находится на стадии разработки, поэтому возможны ошибки в
                расписании. Напишите, если обнаружили неточности: <a href="https://vk.com/topic-114684821_33345488" target="_blank">ССЫЛКА</a>
            </div>
        </div>
    </div>
</main>

<footer></footer>
<script src="js/scripts.js"></script>
</body>
</html>