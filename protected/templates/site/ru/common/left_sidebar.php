<div id="left-sidebar" class="sidebar">
    <nav id="left-sidebar-nav" class="sidebar-nav">
        <ul id="main-menu" class="metismenu">
            <li class="g_heading">Меню</li>
            <li<?php if(registry::get('route') == '' ) echo ' class="active"' ?>>
                <a href="/"><i class="icon-home"></i> <span>Главная</span></a>
            </li>
            <li<?php if(registry::get('route') == 'users' ) echo ' class="active"' ?>>
                <a href="/users/"><i class="icon-users"></i> <span>Пользователи</span></a>
            </li>
<!--            <li class="g_heading">Buzzer</li>-->
<!--            <li>-->
<!--                <a href="javascript:void(0)" class="has-arrow"><i class="icon-grid"></i> Application</a>-->
<!--                <ul>-->
<!--                    <li><a href="app-email.html">Email</a></li>-->
<!--                    <li><a href="app-chat.html">Chat</a></li>-->
<!--                    <li><a href="app-calendar.html">Calendar</a></li>-->
<!--                    <li><a href="app-contact.html">Contact</a></li>-->
<!--                    <li><a href="app-taskboard.html">TaskBoard</a></li>-->
<!--                </ul>-->
<!--            </li>-->
        </ul>
    </nav>
</div>
