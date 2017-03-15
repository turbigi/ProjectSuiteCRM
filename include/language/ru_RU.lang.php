<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/



$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Русский (Russian) - ru_RU',
    'moduleList' => array(
            'Home' => 'Главная',
			'ResourceCalendar' => 'Диаграмма ресурсов',
            'Contacts' => 'Контакты',
            'Accounts' => 'Контрагенты',
            'Alerts' => 'Оповещения',
            'Opportunities' => 'Сделки',
            'Cases' => 'Обращения',
            'Notes' => 'Заметки',
            'Calls' => 'Звонки',
            'TemplateSectionLine' => 'Линия Раздела в шаблоне',
            'Calls_Reschedule' => 'Перенести вызовы',
            'Emails' => 'E-mail',
            'EAPM' => 'EAPM',
            'Meetings' => 'Встречи',
            'Tasks' => 'Задачи',
            'Calendar' => 'Календарь',
            'Leads' => 'Предварит. контакты',
            'Currencies' => 'Валюта',
            'Activities' => 'Мероприятия',
            'Bugs' => 'Ошибки',
            'Feeds' => 'RSS-ленты',
            'iFrames' => 'Мои сайты',
            'TimePeriods' => 'Периоды времени',
            'TaxRates' => 'Налоговые ставки',
            'ContractTypes' => 'Типы контрактов',
            'Schedulers' => 'Планировщик',
            'Project' => 'Проекты',
            'ProjectTask' => 'Проектные задачи',
            'Campaigns' => 'Кампании',
            'CampaignLog' => 'Журнал маркет. кампании',
            'Documents' => 'Документы',
            'DocumentRevisions' => 'Версии документа',
            'Connectors' => 'Подключения',
            'Roles' => 'Роли',
            'Notifications' => 'Уведомления',
            'Sync' => 'Синхронизация',
            'Users' => 'Пользователи',
            'Employees' => 'Сотрудники',
            'Administration' => 'Администрирование',
            'ACLRoles' => 'Роли',
            'InboundEmail' => 'Входящие E-mail',
            'Releases' => 'Версии',
            'Prospects' => 'Адресаты',
            'Queues' => 'Очереди',
            'EmailMarketing' => 'Рассылка E-mail',
            'EmailTemplates' => 'Шаблоны E-mail',
            'SNIP' => 'Архивирование почты',
            'ProspectLists' => 'Цели - списки',
            'SavedSearch' => 'Настройка отображения результатов поиска',
            'UpgradeWizard' => 'Мастер обновления',
            'Trackers' => 'Трекеры',
            'TrackerPerfs' => 'Трекер производительности',
            'TrackerSessions' => 'Сессии трекера',
            'TrackerQueries' => 'Запросы трекера',
            'FAQ' => 'ЧаВо',
            'Newsletters' => 'Бюллетени',
            'SugarFeed' => 'Лента событий',
            'SugarFavorites' => 'Избранное',

            'OAuthKeys' => 'Клиентские ключи OAuth',
            'OAuthTokens' => 'OAuth-токены',
            'Calls_Reschedule' => 'Перенести вызовы',
        ),

    'moduleListSingular' => array(
            'Home' => 'Главная',
            'Dashboard' => 'Диаграмма',
            'Contacts' => 'Контакт',
            'Accounts' => 'Контрагент',
            'Opportunities' => 'Сделка',
            'Cases' => 'Обращение',
            'Notes' => 'Заметка',
            'Calls' => 'Звонок',
            'Emails' => 'E-mail',
            'EmailTemplates' => 'Шаблоны E-mail',
            'Meetings' => 'Встреча',
            'Tasks' => 'Задача',
            'Calendar' => 'Календарь',
            'Leads' => 'Предварит. контакт',
            'Activities' => 'Мероприятие',
            'Bugs' => 'Ошибка',
            'KBDocuments' => 'База знаний',
            'Feeds' => 'RSS-ленты',
            'iFrames' => 'Мой портал',
            'TimePeriods' => 'Периоды времени',
            'Project' => 'Проект',
            'ProjectTask' => 'Проектная задача',
            'Prospects' => 'Адресат',
            'Campaigns' => 'Маркетинг',
            'Documents' => 'Документ',
            'SugarFollowing' => 'SuiteFollowing',
            'Sync' => 'Синхронизация',
            'Users' => 'Пользователь',
            'SugarFavorites' => 'Избранное',

        ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Да',
        '2' => 'Нет',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
            '' => '',
            'Analyst' => 'Аналитик',
            'Competitor' => 'Конкурент',
            'Customer' => 'Клиент',
            'Integrator' => 'Интегратор',
            'Investor' => 'Инвестор',
            'Partner' => 'Партнёр',
            'Press' => 'Пресса',
            'Prospect' => 'Потенциальный клиент',
            'Reseller' => 'Реселлер',
            'Other' => 'Другое',
        ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
            '' => '',
            'Apparel' => 'Одежда',
            'Banking' => 'Банковское дело',
            'Biotechnology' => 'Биотехнологии',
            'Chemicals' => 'Химическая промышленность',
            'Communications' => 'Связь',
            'Construction' => 'Строительство',
            'Consulting' => 'Консалтинг',
            'Education' => 'Образование',
            'Electronics' => 'Электроника',
            'Energy' => 'Энергетика',
            'Engineering' => 'Инженерия',
            'Entertainment' => 'Развлечения',
            'Environmental' => 'Экология',
            'Finance' => 'Финансы',
            'Government' => 'Правительство',
            'Healthcare' => 'Здравоохранение',
            'Hospitality' => 'Гостиничное дело',
            'Insurance' => 'Страхование',
            'Machinery' => 'Машиностроение',
            'Manufacturing' => 'Производство',
            'Media' => 'Медиа',
            'Not For Profit' => 'Неприбыльные',
            'Recreation' => 'Отдых',
            'Retail' => 'Торговля',
            'Shipping' => 'Перевозки',
            'Technology' => 'Технологии',
            'Telecommunications' => 'Телекоммуникации',
            'Transportation' => 'Транспорт',
            'Utilities' => 'Коммунальные услуги',
            'Other' => 'Другое',
        ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
            '' => '',
            'Cold Call' => 'Холодный прозвон',
            'Existing Customer' => 'Существующий клиент',
            'Self Generated' => 'Собственный',
            'Employee' => 'Сотрудник',
            'Partner' => 'Партнёр',
            'Public Relations' => 'PR-деятельность',
            'Direct Mail' => 'Прямая рассылка',
            'Conference' => 'Конференция',
            'Trade Show' => 'Спец.выставка',
            'Web Site' => 'Веб-сайт',
            'Word of mouth' => 'Разговор',
            'Email' => 'E-mail',
            'Campaign' => 'Маркет. кампания',
            'Other' => 'Другое',
        ),
    'opportunity_type_dom' => array(
            '' => '',
            'Existing Business' => 'Существующий бизнес',
            'New Business' => 'Новый бизнес',
        ),
    'roi_type_dom' => array(
            'Revenue' => 'Доход',
            'Investment' => 'Инвестиция',
            'Expected_Revenue' => 'Ожидаемый доход',
            'Budget' => 'Бюджет',

        ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
            '' => '',
            'Primary Decision Maker' => 'Ответственный за основные решения',
            'Business Decision Maker' => 'Ответственный за бизнес-решения',
            'Business Evaluator' => 'Бизнес-оценщик',
            'Technical Decision Maker' => 'Ответственный за тех. решения',
            'Technical Evaluator' => 'Технический оценщик',
            'Executive Sponsor' => 'Генеральный спонсор',
            'Influencer' => 'Влияющий',
            'Other' => 'Другое',
        ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
            '' => '',
            'Primary Contact' => 'Основной контакт',
            'Alternate Contact' => 'Альтернативный контакт',
        ),
    'payment_terms' => array(
            '' => '',
            'Net 15' => 'Нетто 15',
            'Net 30' => 'Нетто 30',
        ),
    'fts_type' => array(
        '' => '',
        'Elastic' => 'elasticsearch',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
            'Prospecting' => 'Разведка',
            'Qualification' => 'Оценка',
            'Needs Analysis' => 'Анализ потребностей',
            'Value Proposition' => 'Предложение ценности',
            'Id. Decision Makers' => 'Опред. лиц, принимающих решения',
            'Perception Analysis' => 'Анализ реакции',
            'Proposal/Price Quote' => 'Ком. предложение /Выставление счёта',
            'Negotiation/Review' => 'Согласование /Пересмотр',
            'Closed Won' => 'Закрыто с успехом /Товар отгружен',
            'Closed Lost' => 'Закрыто с потерями /Товар возвращён',
        ),
    'in_total_group_stages' => array(
        'Draft' => 'Черновик',
        'Negotiation' => 'Согласование',
        'Delivered' => 'Поставлено',
        'On Hold' => 'Ведётся',
        'Confirmed' => 'Подтверждено',
        'Closed Accepted' => 'Принято и закрыто',
        'Closed Lost' => 'Закрыто с потерями /Товар возвращён',
        'Closed Dead' => 'Закрыто с прекращением',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
            'Call' => 'Звонок',
            'Meeting' => 'Встреча',
            'Task' => 'Задача',
            'Email' => 'E-mail',
            'Note' => 'Примечание',
        ),
    'salutation_dom' => array(
            '' => '',
            'Mr.' => 'Г-н.',
            'Ms.' => 'Г-жа.',
            'Mrs.' => 'тов.',
            'Dr.' => 'доц.',
            'Prof.' => 'проф.',
        ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(60 => 'за 1 минуту',
        300 => 'за 5 минут',
        600 => 'за 10 минут',
        900 => 'за 15 минут',
        1800 => 'за 30 минут',
        3600 => 'за 1 час',
        7200 => 'за 2 часа',
        10800 => 'за 3 часа',
        18000 => 'за 5 часов',
        86400 => 'за 1 день',
    ),

    'task_priority_default' => 'Средний',
    'task_priority_dom' => array(
            'High' => 'Высокий',
            'Medium' => 'Средний',
            'Low' => 'Низкий',
        ),
    'task_status_default' => 'Проект',
    'task_status_dom' => array(
            'Not Started' => 'Не начата',
            'In Progress' => 'В процессе',
            'Completed' => 'Завершена',
            'Pending Input' => 'Ожидание решения',
            'Deferred' => 'Отложена',
        ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
            'Planned' => 'Запланирована',
            'Held' => 'Состоялась',
            'Not Held' => 'Не состоялась',
        ),
    'extapi_meeting_password' => array(
            'WebEx' => 'WebEx',
        ),
    'meeting_type_dom' => array(
            'Other' => 'Другое',
            'Sugar' => 'SuiteCRM',
        ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
            'Planned' => 'Запланирован',
            'Held' => 'Состоялся',
            'Not Held' => 'Не состоялся',
        ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
            'Inbound' => 'Входящий',
            'Outbound' => 'Исходящий',
        ),
    'lead_status_dom' => array(
            '' => '',
            'New' => 'Новый',
            'Assigned' => 'Назначенный',
            'In Process' => 'В процессе',
            'Converted' => 'Преобразован',
            'Recycled' => 'Повторный',
            'Dead' => '"Мёртвый"',
        ),
    'gender_list' => array(
            'male' => 'Муж.',
            'female' => 'Жен.',
        ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
            'P1' => 'Высокий',
            'P2' => 'Средний',
            'P3' => 'Низкий',
        ),
    'user_type_dom' => array(
            'RegularUser' => 'Обычный пользователь',
            'Administrator' => 'Администратор',
        ),
    'user_status_dom' => array(
            'Active' => 'Активен',
            'Inactive' => 'Неактивен',
        ),
    'employee_status_dom' => array(
            'Active' => 'Активен',
            'Terminated' => 'Уволен',
            'Leave of Absence' => 'В отпуске',
        ),
    'messenger_type_dom' => array(
            '' => '',
            'MSN' => 'MSN',
            'Yahoo!' => 'Yahoo!',
            'AOL' => 'AOL',
        ),
    'project_task_priority_options' => array(
        'High' => 'Высокий',
        'Medium' => 'Средний',
        'Low' => 'Низкий',
    ),
    'project_task_priority_default' => 'Средний',

    'project_task_status_options' => array(
        'Not Started' => 'Не начата',
        'In Progress' => 'В процессе',
        'Completed' => 'Завершена',
        'Pending Input' => 'Ожидание решения',
        'Deferred' => 'Отложена',
    ),
    'project_task_utilization_options' => array(
        '0' => 'нет',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Черновик',
        'In Review' => 'На рассмотрении',
        'Underway' => 'Реализуется',
        'On_Hold' => 'Приостановлен',
        'Completed' => 'Завершён',
    ),
    'project_status_default' => 'Черновик',

    'project_duration_units_dom' => array(
        'Days' => 'Дней',
        'Hours' => 'Часов',
    ),

    'activity_status_type_dom' => array(''=>'--не выбрано--',
        'active' => 'Активно',
        'inactive' => 'Не активно',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Контрагенты',
    'record_type_display' => array(
            '' => '',
            'Accounts' => 'Контрагенты',
            'Opportunities' => 'Сделки',
            'Cases' => 'Обращения',
            'Leads' => 'Предварит. контакты',
            'Contacts' => 'Контакты', // cn (11/22/2005) added to support Emails

            'Bugs' => 'Ошибка',
            'Project' => 'Проект',

            'Prospects' => 'Адресат',
            'ProjectTask' => 'Проектная задача',

            'Tasks' => 'Задача',

        ),

    'record_type_display_notes' => array(
            'Accounts' => 'Контрагенты',
            'Contacts' => 'Контакты',
            'Opportunities' => 'Сделки',
            'Tasks' => 'Задачи',
            'Emails' => 'E-mail',

            'Bugs' => 'Ошибки',
            'Project' => 'Проекты',
            'ProjectTask' => 'Проектные задачи',
            'Prospects' => 'Адресат',
            'Cases' => 'Обращения',
            'Leads' => 'Предварит. контакты',

            'Meetings' => 'Встречи',
            'Calls' => 'Звонки',
        ),

    'parent_type_display' => array(
            'Accounts' => 'Контрагенты',
            'Contacts' => 'Контакты',
            'Tasks' => 'Задачи',
            'Opportunities' => 'Сделки',

            'Bugs' => 'Ошибки',
            'Cases' => 'Обращения',
            'Leads' => 'Предварит. контакты',

            'Project' => 'Проекты',
            'ProjectTask' => 'Проектные задачи',

            'Prospects' => 'Адресаты',

        ),

    'issue_priority_default_key' => 'Средний',
    'issue_priority_dom' => array(
            'Urgent' => 'Неотложный',
            'High' => 'Высокий',
            'Medium' => 'Средний',
            'Low' => 'Низкий',
        ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
            '' => '',
            'Accepted' => 'Принято',
            'Duplicate' => 'Дублировать',
            'Closed' => 'Закрыто',
            'Out of Date' => 'Устарело',
            'Invalid' => 'Недействительно',
        ),

    'issue_status_default_key' => 'Новый',
    'issue_status_dom' => array(
            'New' => 'Новый',
            'Assigned' => 'Назначено',
            'Closed' => 'Закрыто',
            'Pending' => 'Ожидание решения',
            'Rejected' => 'Отклонённое',
        ),

    'bug_priority_default_key' => 'Средний',
    'bug_priority_dom' => array(
            'Urgent' => 'Срочно',
            'High' => 'Высокий',
            'Medium' => 'Средний',
            'Low' => 'Низкий',
        ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
            '' => '',
            'Accepted' => 'Принято',
            'Duplicate' => 'Дублировать',
            'Fixed' => 'Исправлено',
            'Out of Date' => 'Устарело',
            'Invalid' => 'Недействительно',
            'Later' => 'Отложено',
        ),
    'bug_status_default_key' => 'Новый',
    'bug_status_dom' => array(
            'New' => 'Новая',
            'Assigned' => 'Назначена',
            'Closed' => 'Закрытая',
            'Pending' => 'Ожидание решения',
            'Rejected' => 'Отклонённое',
        ),
    'bug_type_default_key' => 'Ошибка',
    'bug_type_dom' => array(
            'Defect' => 'Ошибка',
            'Feature' => 'Особенность',
        ),
    'case_type_dom' => array(
            'Administration' => 'Административное',
            'Product' => 'Продукция',
            'User' => 'Пользовательское',
        ),

    'source_default_key' => '',
    'source_dom' => array(
            '' => '',
            'Internal' => 'Внутренний',
            'Forum' => 'Форум',
            'Web' => 'Веб',
            'InboundEmail' => 'E-mail',
        ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
            '' => '',
            'Accounts' => 'Контрагенты',
            'Activities' => 'Мероприятия',
            'Bugs' => 'Ошибки',
            'Calendar' => 'Календарь',
            'Calls' => 'Звонки',
            'Campaigns' => 'Маркетинг',
            'Cases' => 'Обращения',
            'Contacts' => 'Контакты',
            'Currencies' => 'Валюты',
            'Dashboard' => 'Диаграммы',
            'Documents' => 'Документы',
            'Emails' => 'E-mail',
            'Feeds' => 'RSS-ленты',
            'Forecasts' => 'Прогнозы',
            'Help' => 'Помощь',
            'Home' => 'Главная',
            'Leads' => 'Предварит. контакты',
            'Meetings' => 'Встречи',
            'Notes' => 'Заметки',
            'Opportunities' => 'Сделки',
            'Outlook Plugin' => 'Outlook-плагин',
            'Projects' => 'Проекты',
            'Quotes' => 'Предложения',
            'Releases' => 'Версии',
            'RSS' => 'RSS-ленты',
            'Studio' => 'Студия',
            'Upgrade' => 'Обновление',
            'Users' => 'Пользователи',
        ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
            '' => '',
            'Planning' => 'Планируется',
            'Active' => 'Активна',
            'Inactive' => 'Не активна',
            'Complete' => 'Завершена',
            //'In Queue' => 'In Queue',
            //'Sending' => 'Sending',
        ),
    'campaign_type_dom' => array(
            '' => '',
            'Telesales' => 'Продажи по телефону',
            'Mail' => 'Почтовая рассылка',
            'Email' => 'Рассылка E-mail',
            'Print' => 'Печать',
            'Web' => 'Веб-реклама',
            'Radio' => 'Радио',
            'Television' => 'Телевидение',
            'NewsLetter' => 'Информ. бюллетень',
        ),

    'newsletter_frequency_dom' => array(
            '' => '',
            'Weekly' => 'Еженедельно',
            'Monthly' => 'Ежемесячно',
            'Quarterly' => 'Ежеквартально',
            'Annually' => 'Ежегодно',
        ),

    'notifymail_sendtype' => array(
            'SMTP' => 'SMTP',
        ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Январь',
        '2' => 'Февраль',
        '3' => 'Март',
        '4' => 'Апрель',
        '5' => 'Май',
        '6' => 'Июнь',
        '7' => 'Июль',
        '8' => 'Август',
        '9' => 'Сентябрь',
        '10' => 'Октябрь',
        '11' => 'Ноябрь',
        '12' => 'Декабрь',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Янв',
        '2' => 'Фев',
        '3' => 'Мар',
        '4' => 'Апр',
        '5' => 'Май',
        '6' => 'Июн',
        '7' => 'Июл',
        '8' => 'Авг',
        '9' => 'Сен',
        '10' => 'Окт',
        '11' => 'Ноя',
        '12' => 'Дек',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Воскресенье',
        '2' => 'Понедельник',
        '3' => 'Вторник',
        '4' => 'Среда',
        '5' => 'Четверг',
        '6' => 'Пятница',
        '7' => 'Суббота',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Вс',
        '2' => 'Пн',
        '3' => 'Вт',
        '4' => 'Ср',
        '5' => 'Чт',
        '6' => 'Пт',
        '7' => 'Сб',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'AM',
        'pm' => 'PM',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'Дня',
        'PM' => 'Вечера',
    ),

    'dom_report_types' => array(
        'tabular' => 'Строки и столбцы',
        'summary' => 'Итог',
        'detailed_summary' => 'Детальный итог',
        'Matrix' => 'Матрица',
    ),

    'dom_email_types' => array(
        'out' => 'Отправлено',
        'archived' => 'Архив',
        'draft' => 'Черновик',
        'inbound' => 'Входящее',
        'campaign' => 'Рассылка',
    ),
    'dom_email_status' => array(
        'archived' => 'Архив',
        'closed' => 'Закрытое',
        'draft' => 'Черновик',
        'read' => 'Прочитано',
        'replied' => 'Отвечено',
        'sent' => 'Отправлено',
        'send_error' => 'Ошибка отправки',
        'unread' => 'Не прочитано',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Архив',
    ),

    'dom_email_server_type' => array('' => '--не выбрано--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => 'Нет',
        'createcase' => 'Создать обращение',
        'bounce' => 'Обработка возврата',
    ),
    'dom_email_distribution' => array('' => '--не выбрано--',
        'direct' => 'Прямое назначение',
        'roundRobin' => 'В цикле',
        'leastBusy' => 'Наименее занятой',
    ),
    'dom_email_errors' => array(1 => 'Выбирайте только одного пользователя, когда напрямую работаете с назначенными записями.',
        2 => 'Вы должны назначать только выбранные записи, когда напрямую работаете с назначенными записями.',
    ),
    'dom_email_bool' => array('bool_true' => 'Да',
        'bool_false' => 'Нет',
    ),
    'dom_int_bool' => array(1 => 'Да',
        0 => 'Нет',
    ),
    'dom_switch_bool' => array('on' => 'Да',
        'off' => 'Нет',
        '' => 'Нет', ),

    'dom_email_link_type' => array('sugar' => 'Почтовый клиент SuiteCRM',
        'mailto' => 'Внешний почтовый клиент', ),

    'dom_email_editor_option' => array('' => 'Формат по умолчанию',
        'html' => 'HTML-сообщение',
        'plain' => 'Текстовое сообщение', ),

    'schedulers_times_dom' => array('not run' => 'Время запуска прошло, не выполняем.',
        'ready' => 'Готово',
        'in progress' => 'В процессе',
        'failed' => 'Неудачно',
        'completed' => 'Завершено',
        'no curl' => 'Не запускалось: cURL не доступен',
    ),

    'scheduler_status_dom' => array(
            'Active' => 'Активно',
            'Inactive' => 'Не активно',
        ),

    'scheduler_period_dom' => array(
            'min' => 'мин.',
            'hour' => 'Часы',
        ),
    'forecast_schedule_status_dom' => array(
            'Active' => 'Активен',
            'Inactive' => 'Не активен',
        ),
    'forecast_type_dom' => array(
            'Direct' => 'Прямой',
            'Rollup' => 'Сдвинутый',
        ),
    'document_category_dom' => array(
            '' => '',
            'Marketing' => 'Маркетинг',
            'Knowledege Base' => 'База знаний',
            'Sales' => 'Продажи',
        ),

    'document_subcategory_dom' => array(
            '' => '',
            'Marketing Collateral' => 'Маркетинг',
            'Product Brochures' => 'Брошюры товаров',
            'FAQ' => 'ЧаВо',
        ),

    'document_status_dom' => array(
            'Active' => 'Активен',
            'Draft' => 'Черновик',
            'FAQ' => 'ЧаВо',
            'Expired' => 'Просрочен',
            'Under Review' => 'На рассмотрении',
            'Pending' => 'Ожидание решения',
        ),
    'document_template_type_dom' => array(
            '' => '',
            'mailmerge' => 'Слияние',
            'eula' => 'Пользовательское соглашение (EULA)',
            'nda' => 'Соглашение о неразглашении (NDA)',
            'license' => 'Лицензионное соглашение',
        ),
    'dom_meeting_accept_options' => array(
            'accept' => 'Принять',
            'decline' => 'Отклонить',
            'tentative' => 'Под вопросом',
        ),
    'dom_meeting_accept_status' => array(
            'accept' => 'Принято',
            'decline' => 'Отклонено',
            'tentative' => 'Под вопросом',
            'none' => '--не выбрано--',
        ),
    'duration_intervals' => array('0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Нет',
        'Daily' => 'Ежедневно',
        'Weekly' => 'Еженедельно',
        'Monthly' => 'Ежемесячно',
        'Yearly' => 'Ежегодно',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'дней',
        'Weekly' => 'недель',
        'Monthly' => 'месяцев',
        'Yearly' => 'лет',
    ),

    'duration_dom' => array(
        '' => 'Нет',
        '900' => '15 минут',
        '1800' => '30 минут',
        '2700' => '45 минут',
        '3600' => '1 час',
        '5400' => '1.5 часа',
        '7200' => '2 часа',
        '10800' => '3 часа',
        '21600' => '6 часов',
        '86400' => '1 день',
        '172800' => '2 дня',
        '259200' => '3 дня',
        '604800' => '1 неделя',
    ),

// deferred
    /*// QUEUES MODULE DOMs
    'queue_type_dom' => array(
        'Users' => 'Users',
        'Mailbox' => 'Mailbox',
    ),
    */
//prospect list type dom
    'prospect_list_type_dom' => array(
            'default' => 'Стандартный',
            'seed' => 'Начальный',
            'exempt_domain' => 'Исключение - по домену',
            'exempt_address' => 'Исключение - по email-адресу',
            'exempt' => 'Исключение - по ID',
            'test' => 'Тестовый',
        ),

    'email_settings_num_dom' => array(
            '10' => '10',
            '20' => '20',
            '50' => '50',
        ),
    'email_marketing_status_dom' => array(
            '' => '',
            'active' => 'Активна',
            'inactive' => 'Не активна',
        ),

    'campainglog_activity_type_dom' => array(
            '' => '',
            'targeted' => 'Отправленные / Попытки ',
            'send error' => 'Ошибки - другое',
            'invalid email' => 'Ошибки - неверный адрес',
            'link' => 'Кол-во нажатий на ссылку',
            'viewed' => 'Просмотренные сообщения',
            'removed' => 'Кол-во отписок',
            'lead' => 'Созданные предв. контакты',
            'contact' => 'Созданные контакты',
            'blocked' => 'Заблокированные адресаты',
        ),

    'campainglog_target_type_dom' => array(
            'Contacts' => 'Контакты',
            'Users' => 'Пользователи',
            'Prospects' => 'Адресаты',
            'Leads' => 'Предварит. контакты',
            'Accounts' => 'Контрагенты',
        ),
    'merge_operators_dom' => array(
        'like' => 'Содержит',
        'exact' => 'Точное соответствие',
        'start' => 'Начинается с',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Да',
        'false' => 'Нет',
        'required' => 'Обязательное',
    ),

    'Elastic_boost_options' => array(
        '0' => 'отключён',
        '1' => 'Низкий прирост',
        '2' => 'Средний прирост',
        '3' => 'Высокий прирост',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Выкл.',
        1 => 'Вкл.',
    ),

    'navigation_paradigms' => array(
        'm' => 'Модули',
        'gm' => 'Сгруппированные модули',
    ),

    'projects_priority_options' => array(
        'high' => 'Высокий',
        'medium' => 'Средний',
        'low' => 'Низкий',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Не начат',
        'inprogress' => 'В процессе',
        'completed' => 'Завершён',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Показать легенду',
        'collapselegend' => 'Свернуть легенду',
        'clickfordrilldown' => 'Нажмите для просмотра деталей',
        'drilldownoptions' => 'Детализация вариантов',
        'detailview' => 'Подробно...',
        'piechart' => 'Круговая диаграмма',
        'groupchart' => 'Группа диаграммы',
        'stackedchart' => 'Диаграмма с накоплением',
        'barchart' => 'Гистограмма',
        'horizontalbarchart' => 'Горизонтальная гистограмма',
        'linechart' => 'Линейная диаграмма',
        'noData' => 'Данные отсутствуют',
        'print' => 'Печать',
        'pieWedgeName' => 'секции',
    ),
    'release_status_dom' => array(
            'Active' => 'Активна',
            'Inactive' => 'Не активна',
        ),
    'email_settings_for_ssl' => array(
            '0' => '',
            '1' => 'SSL',
            '2' => 'TLS',
        ),
    'import_enclosure_options' => array(
            '\'' => 'Одинарная кавычка (&#39;)',
            '"' => 'Двойная кавычка (&#34;)',
            '' => 'Нет',
            'other' => 'Другое:',
        ),
    'import_delimeter_options' => array(
            ',' => ',',
            ';' => ';',
            '\t' => '\t',
            '.' => '.',
            ':' => ':',
            '|' => '|',
            'other' => 'Другое:',
        ),
    'link_target_dom' => array(
            '_blank' => 'Новой странице',
            '_self' => 'Текущей странице',
        ),
    'dashlet_auto_refresh_options' => array(
            '-1' => 'Не обновлять',
            '30' => 'Каждые 30 секунд',
            '60' => 'Каждую минуту',
            '180' => 'Каждые 3 минуты',
            '300' => 'Каждые 5 минут',
            '600' => 'Каждые 10 минут',
        ),
    'dashlet_auto_refresh_options_admin' => array(
            '-1' => 'Никогда',
            '30' => 'Каждые 30 секунд',
            '60' => 'Каждую минуту',
            '180' => 'Каждые 3 минуты',
            '300' => 'Каждые 5 минут',
            '600' => 'Каждые 10 минут',
        ),
    'date_range_search_dom' => array(
            '=' => 'Равно',
            'not_equal' => 'Не равно',
            'greater_than' => 'После',
            'less_than' => 'До',
            'last_7_days' => 'Прошедшие 7 дней',
            'next_7_days' => 'Следующие 7 дней',
            'last_30_days' => 'Прошедшие 30 дней',
            'next_30_days' => 'Следующие 30 дней',
            'last_month' => 'Прошлый месяц',
            'this_month' => 'Этот месяц',
            'next_month' => 'Следующий месяц',
            'last_year' => 'Прошлый год',
            'this_year' => 'Этот год',
            'next_year' => 'Следующий год',
            'between' => 'Между',
        ),
    'numeric_range_search_dom' => array(
            '=' => 'Равно',
            'not_equal' => 'Не равно',
            'greater_than' => 'Больше',
            'greater_than_equals' => 'Больше или равно',
            'less_than' => 'Меньше',
            'less_than_equals' => 'Меньше или равно',
            'between' => 'Между',
        ),
    'lead_conv_activity_opt' => array(
            'copy' => 'Копировать',
            'move' => 'Перемещать',
            'donothing' => 'Оставить "как есть"',
        ),
);

$app_strings = array(
    'LBL_TOUR_NEXT' => 'Далее',
    'LBL_TOUR_SKIP' => 'Пропустить',
    'LBL_TOUR_BACK' => 'Назад',
    'LBL_TOUR_CLOSE' => 'Закрыть',
    'LBL_TOUR_TAKE_TOUR' => 'Начать знакомство с системой',
    'LBL_MY_AREA_LINKS' => 'Ссылки в Моя область: ' /*for 508 compliance fix*/,
    'LBL_GETTINGAIR' => 'Получить место' /*for 508 compliance fix*/,
    'LBL_WELCOMEBAR' => 'Добро пожаловать' /*for 508 compliance fix*/,
    'LBL_ADVANCEDSEARCH' => 'Расширенный поиск' /*for 508 compliance fix*/,
    'LBL_MOREDETAIL' => 'Подробнее' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Редактирование в тексте' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Просмотр' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Фильтр' /*for 508 compliance fix*/,
    'LBL_PROJECT_MINUS' => 'Удалить' /*for 508 compliance fix*/,
    'LBL_PROJECT_PLUS' => 'Добавить' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_1' => 'Колонка' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_2' => '2 колонки' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_3' => '3 колонки' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Добавить' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Скрыть/Отобразить' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Удалить' /*for 508 compliance fix*/,
    'LBL_PLUS_INLINE' => 'Добавить' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Очистить' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'Визитная карточка (vCard)' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Удалить' /*for 508 compliance fix*/,
    'LBL_ADD' => 'Добавить' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Логотип' /*for 508 compliance fix*/,
    'LBL_JS_CALENDAR' => 'Календарь' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Crontab-нотация',
    'LBL_BASIC' => 'Основная информация',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MODULE_FILTER' => 'Фильтр по',
    'LBL_CONNECTORS_POPUPS' => 'Подключения',
    'LBL_CLOSEINLINE' => 'Закрыть',
    'LBL_EDITINLINE' => 'Править',
    'LBL_VIEWINLINE' => 'Просмотр',
    'LBL_INFOINLINE' => 'Детали',
    'LBL_POWERED_BY_SUGARCRM' => 'У истоков SugarCRM',
    'LBL_PRINT' => 'Печать',
    'LBL_HELP' => 'Справка',
    'LBL_ID_FF_SELECT' => 'Обзор',
    'DEFAULT' => 'Основная информация', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SORT' => 'Сортировка',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Добавить сервер...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Включить SSL/TLS?',
    'LBL_NO_ACTION' => 'Действие не определено.',
    'LBL_NO_SHORTCUT_MENU' => 'Нет доступных действий.',
    'LBL_NO_DATA' => 'Данные отсутствуют',
    'LBL_ROUTING_ADD_RULE' => 'Добавить правило',
    'LBL_ROUTING_ALL' => 'Минимум',
    'LBL_ROUTING_ANY' => 'Любое',
    'LBL_ROUTING_BREAK' => '-',
    'LBL_ROUTING_BUTTON_CANCEL' => 'Отказаться',
    'LBL_ROUTING_BUTTON_SAVE' => 'Сохранить правило',

    'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Копировать E-mail',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Удалить объекты',
    'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Удалить файл',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Удалить E-mail',
    'LBL_ROUTING_ACTIONS_FORWARD' => 'Переслать E-mail',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Пометить E-mail',
    'LBL_ROUTING_ACTIONS_MARK_READ' => 'Пометить как прочтённое',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'Пометить как непрочтённое',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Переместить E-mail',
    'LBL_ROUTING_ACTIONS_PEFORM' => 'Выполните следующие действия:',
    'LBL_ROUTING_ACTIONS_REPLY' => 'Ответить на E-mail',

    'LBL_ROUTING_CHECK_RULE' => 'Обнаружена ошибка:\n',
    'LBL_ROUTING_CHECK_RULE_DESC' => 'Пожалуйста, проверьте все отмеченные поля.',
    'LBL_ROUTING_CONFIRM_DELETE' => 'Вы действительно хотите удалить это правило?\nОперция не может быть отменена.',

    'LBL_ROUTING_FLAGGED' => 'установленный флаг',
    'LBL_ROUTING_FORM_DESC' => 'Сохранённые правила сразу же вступают в силу.',
    'LBL_ROUTING_FW' => 'FW: ',
    'LBL_ROUTING_LIST_TITLE' => 'Правила',
    'LBL_ROUTING_MATCH' => 'Если',
    'LBL_ROUTING_MATCH_2' => 'встретились следующие условия:',
    'LBL_NOTIFICATIONS' => 'Уведомления',
    'LBL_ROUTING_MATCH_CC_ADDR' => 'Копия',
    'LBL_ROUTING_MATCH_DESCRIPTION' => 'Содержимое',
    'LBL_ROUTING_MATCH_FROM_ADDR' => 'От',
    'LBL_ROUTING_MATCH_NAME' => 'Тема',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Высокий приоритет',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Средний приоритет',
    'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Низкий приоритет',
    'LBL_ROUTING_MATCH_TO_ADDR' => 'Кому',
    'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Содержит',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Не содержит',

    'LBL_ROUTING_NAME' => 'Название правила',
    'LBL_ROUTING_NEW_NAME' => 'Новое правило',
    'LBL_ROUTING_ONE_MOMENT' => 'Пожалуйста, подождите...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Исходное сообщение ниже.',
    'LBL_ROUTING_RE' => 'RE: ',
    'LBL_ROUTING_SAVING_RULE' => 'Сохранение правил',
    'LBL_ROUTING_SUB_DESC' => 'Отмеченные правила работают. Для изменения правила кликните на названии.',
    'LBL_ROUTING_TO' => 'к',
    'LBL_ROUTING_TO_ADDRESS' => 'адрес',
    'LBL_ROUTING_WITH_TEMPLATE' => 'с помощью шаблона',
    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Поля с адресными и телефонными данными текущего контрагента уже содержат значения. Для перезаписи  существующих данных данными выбранного контрагента нажмите кнопку "OK". Для сохранения текущих значений нажмите кнопку "Отмена".',
    'LBL_DROP_HERE' => '[Переместить сюда]',
    'LBL_EMAIL_ACCOUNTS_EDIT' => 'Редактировать',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Установить параметры Gmail&#153;',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Название',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Параметры сервера исходящей почты',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Отправка почты с помощью',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Использовать SMTP-аутентификацию?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Пароль',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Порт',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Сервер исходящей почты',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Использовать SSL при подключении',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Имя пользователя',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Стандартная',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Внимание: отсутствует логин и пароль для сервера исходящей почты.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'Требуется логин SMTP-сервера',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'Требуется пароль SMTP-сервера',
    'LBL_EMAIL_ACCOUNTS_TITLE' => 'Настройка учётных записей',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'Почтовый протокол POP3 не будет поддерживаться в будущих версиях программы. Будет оставлена поддержка только протокола IMAP.',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Настройте учётные записи электронной почты для просмотра входящих писем.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Укажите настройки SMTP-сервера, который будет использоваться для отправки исходящей почты.',
    'LBL_EMAIL_ADD' => 'Добавить адрес',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Готово',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Очистить',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Кому',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Копия',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Скрытая копия',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Кому/Копия/Скрытая копия',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Добавить рассылку',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-mail',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'В данный момент поддерживается только редактирование Контактов.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Фильтр',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Имя/Учётная запись',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Фамилия',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Мои Контакты',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Мои Рассылки',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Имя',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Адреса не обнаружены',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Сохранить и добавить в адресную книгу',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Поиск',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Выбор получателей',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Адресная книга',
    'LBL_EMAIL_REPORTS_TITLE' => 'Отчёт',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', '', null, null, '.gif', 'Address Book').' Адресная книга',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, '.gif', ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Внимание! Удаляемые настройки сервера исходящей почты связаны с существующей учётной записью. Все равно продолжить?',
    'LBL_EMAIL_ADDRESSES' => 'E-mail',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Адрес E-mail',
    'LBL_EMAIL_ADDRESSES_TITLE' => 'Адреса E-mail',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Импорт в SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Назначение',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Добавить вложение',
    'LBL_EMAIL_ATTACHMENT' => 'Вложения',
    'LBL_EMAIL_ATTACHMENTS' => 'Вложения',
    'LBL_EMAIL_ATTACHMENTS2' => 'Добавить документы SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Вложения шаблона',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Файл',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Документ',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'Встроенный',
    'LBL_EMAIL_BCC' => 'Скрытая',
    'LBL_EMAIL_CANCEL' => 'Отказаться',
    'LBL_EMAIL_CC' => 'Копия',
    'LBL_EMAIL_CHARSET' => 'Кодировка',
    'LBL_EMAIL_CHECK' => 'Проверить почту',
    'LBL_EMAIL_CHECKING_NEW' => 'Проверка новых E-mail',
    'LBL_EMAIL_CHECKING_DESC' => 'Пожалуйста, подождите...<br><br>Если это первая проверка почтовой учётной записи, то она может занять некоторое время.',
    'LBL_EMAIL_CLOSE' => 'Закрыть',
    'LBL_EMAIL_COFFEE_BREAK' => 'Обработка почтовых ящиков большого объёма занимает значительное время. Пожалуйста, подождите.',
    'LBL_EMAIL_COMMON' => 'Дополнительно',

    'LBL_EMAIL_COMPOSE' => 'E-mail',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Письмо не содержит получателей.',
    'LBL_EMAIL_COMPOSE_LINK_TO' => 'Связать с ',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Тело письма пустое. Все равно отправить?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Не указана тема письма. Все равно отправить?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(без темы)',
    'LBL_EMAIL_COMPOSE_READ' => 'Прочитать и создать E-mail',
    'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Отправить от имени',
    'LBL_EMAIL_COMPOSE_OPTIONS' => 'Параметры',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Пожалуйста, введите правильный почтовый адрес в поля КОМУ, КОПИЯ и СКРЫТАЯ КОПИЯ',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Закрыть E-mail без сохранения изменений?',
    'LBL_EMAIL_CONFIRM_DELETE' => 'Удалить записи из адресной книги?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Вы действительно хотите удалить эту подпись?',

    'LBL_EMAIL_CREATE_NEW' => '--Создать поверх сохранения--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Мультивыбор',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Пусто',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Отправлено',
    'LBL_EMAIL_DATE_RECEIVED' => 'Получено',
    'LBL_EMAIL_ASSIGNED_TO_USER' => 'Ответственный(ая)',
    'LBL_EMAIL_DATE_TODAY' => 'Сегодня',
    'LBL_EMAIL_DATE_YESTERDAY' => 'Вчера',
    'LBL_EMAIL_DD_TEXT' => 'писем выбрано.',
    'LBL_EMAIL_DEFAULTS' => 'По умолчанию',
    'LBL_EMAIL_DELETE' => 'Удалить',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Удалить выбранные сообщения?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Письма успешно удалены.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Удаление сообщения',
    'LBL_EMAIL_DETAILS' => 'Подробности',
    'LBL_EMAIL_DISPLAY_MSG' => 'Просмотр email {0} - {1} из {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Просмотр адресов email {0} - {1} из {2}',

    'LBL_EMAIL_EDIT_CONTACT' => 'Редактировать контакт',
    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'При работе с Контактами будет использоваться только основной адрес.',
    'LBL_EMAIL_EDIT_MAILING_LIST' => 'Редактировать список рассылки',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Очистка корзины',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Удаление сервера исходящей почты',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Очистка почтового кэша',
    'LBL_EMAIL_EMPTY_MSG' => 'Нет писем для отображения.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Нет адресов для отображения.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Название папки должно быть уникальным и непустым. Исправьте ошибку и попробуйте ещё раз.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Невозможно удалить папку. Папка или её подпапки содержат письма или имеют связанный с ними почтовый ящик.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Невозможно определить означенную папку. Попробуйте ещё раз.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Пожалуйста, проверьте параметры.',
    'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Пожалуйста, убедитесь, что вы указали фамилию.',
    'LBL_EMAIL_ERROR_DESC' => 'Обнаружены ошибки: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'У вас нет прав доступа к этой странице. Для разрешения проблемы свяжитесь с администратором системы.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Названия папок должны быть уникальными.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Пожалуйста, укажите критерий поиска.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Ошибка',
    'LBL_EMAIL_ERROR_LIST_NAME' => 'Почтовый список с указанным названием уже существует',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Сообщение удалено с сервера',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Сообщение было удалено с сервера или перемещено в другую папку',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Нет возможности соединиться с почтовым сервером. Свяжитесь с администратором для устранения проблемы.',
    'LBL_EMAIL_ERROR_MOVE' => 'Перемещение писем между серверами и/или учётными записями в настоящее время не поддерживается.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Ошибка перемещения',
    'LBL_EMAIL_ERROR_NAME' => 'Необходимо ввести название.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Необходимо ввести адрес отправителя в правильном формате.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Пожалуйста, укажите файл.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'Переименование IMAP-папок в настоящее время не поддерживается.',
    'LBL_EMAIL_ERROR_SERVER' => 'Необходимо указать адрес почтового сервера.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Учётная запись, возможно, не сохранена.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Ошибка соединения с почтовым сервером.',
    'LBL_EMAIL_ERROR_USER' => 'Необходимо ввести логин.',
    'LBL_EMAIL_ERROR_PASSWORD' => 'Необходимо ввести пароль.',
    'LBL_EMAIL_ERROR_PORT' => 'Необходимо указать порт почтового сервера.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Необходимо указать протокол почтового сервера.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Необходимо указать проверяемую папку.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Необходимо указать папку корзины.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Информация недоступна',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Не указан сервер исходящей почты.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '').' Папки',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ACTIONS' => 'Переместить в',
    'LBL_EMAIL_FOLDERS_ADD' => 'Добавить',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Добавить новую папку',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Переименовать папку',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Сохранить',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Добавить эту папку в',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Невозможно сменить эту папку',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Вы действительно хотите удалить эту папку?\nЭта операция не может быть отменена.\nУдаление папки приведёт к удалению всех содержащихся в ней папок.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Имя новой папки',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Выберите папку прежде чем выполнить эту операцию.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Управление папками',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Групповой пользователь',

    'LBL_EMAIL_FORWARD' => 'Переслать',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Загружено [[count]] из [[total]] писем',
    'LBL_EMAIL_FOUND' => 'Найдено',
    'LBL_EMAIL_FROM' => 'От',
    'LBL_EMAIL_GROUP' => 'групповая',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Групповая',
    'LBL_EMAIL_HOME_FOLDER' => 'Главная',
    'LBL_EMAIL_HTML_RTF' => 'Отправить в формате HTML',
    'LBL_EMAIL_IE_DELETE' => 'Удаление учётной записи',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Удаление подписи',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Вы действительно хотите удалить эту учётную запись?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Удаление успешно завершено.',
    'LBL_EMAIL_IE_SAVE' => 'Сохранение учётной записи',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Импортирование E-mail',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Импорт в SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Параметры импорта',
    'LBL_EMAIL_INVALID' => 'Неверный',
    'LBL_EMAIL_LOADING' => 'Загрузка...',
    'LBL_EMAIL_MARK' => 'Пометить',
    'LBL_EMAIL_MARK_FLAGGED' => 'как ВАЖНОЕ',
    'LBL_EMAIL_MARK_READ' => 'как прочитанное',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'как ОБЫЧНОЕ',
    'LBL_EMAIL_MARK_UNREAD' => 'как непрочитанное',
    'LBL_EMAIL_ASSIGN_TO' => 'Ответственный(ая)',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Создать папку',
    'LBL_EMAIL_MENU_COMPOSE' => 'Создать...',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Удалить папку',
    'LBL_EMAIL_MENU_EDIT' => 'Правка',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Очистить корзину',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Синхронизировать',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Очистить кэш',
    'LBL_EMAIL_MENU_REMOVE' => 'Удалить',
    'LBL_EMAIL_MENU_RENAME' => 'Переименовать',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Переименовать папку',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Переименование папки',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Сделайте необходимый выбор перед выполнением данной операции',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Создать папку (удалённо или в SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Архивировать указанные E-mail в SuiteCRM',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'Написать выбранным адресатам',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'Написать выбранному Контакту',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Удалить контакт',
    'LBL_EMAIL_MENU_HELP_DELETE' => 'Удалить указанные E-mail',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Удалить папку (удалённо или в SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Править Контакт',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Править список рассылки',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Очистить все папки-корзины для вашей учётной записи',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Пометить указанные E-mail',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Пометить указанные E-mail как прочтённые',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Снять отметку с указанных E-mail',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Пометить указанные E-mail как непрочтенные',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Удалить списки рассылки',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Переименовать папку(удалённо или в SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY' => 'Ответить на указанные E-mail',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Ответить всем получателям указанных E-mail',

    'LBL_EMAIL_MESSAGES' => 'сообщения',

    'LBL_EMAIL_ML_NAME' => 'Название рассылки',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Выбранные адреса рассылки',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Доступные адреса рассылки',

    'LBL_EMAIL_MULTISELECT' => 'Используйте <b>Ctrl-Click</b> для выбора нескольких позиций<br />(<b>CMD-Click</b> для пользователей Mac)',

    'LBL_EMAIL_NO' => 'Нет',
    'LBL_EMAIL_NOT_SENT' => 'Запрос не может быть выполнен. Обратитесь к системному администратору.',

    'LBL_EMAIL_OK' => 'Готово',
    'LBL_EMAIL_ONE_MOMENT' => 'Пожалуйста, подождите...',
    'LBL_EMAIL_OPEN_ALL' => 'Открыть в отдельной вкладке',
    'LBL_EMAIL_OPTIONS' => 'Параметры',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Быстрое создание E-mail',
    'LBL_EMAIL_OPT_OUT' => 'Не писать',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Не писать/Неверный адрес',
    'LBL_EMAIL_PAGE_AFTER' => 'из {0}',
    'LBL_EMAIL_PAGE_BEFORE' => 'Страница',
    'LBL_EMAIL_PERFORMING_TASK' => 'Выполнение задачи',
    'LBL_EMAIL_PRIMARY' => 'Основной ',
    'LBL_EMAIL_PRINT' => 'Печать',

    'LBL_EMAIL_QC_BUGS' => 'Ошибка',
    'LBL_EMAIL_QC_CASES' => 'Обращение',
    'LBL_EMAIL_QC_LEADS' => 'Предв. контакт',
    'LBL_EMAIL_QC_CONTACTS' => 'Контакт',
    'LBL_EMAIL_QC_TASKS' => 'Задача',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Сделка',
    'LBL_EMAIL_QUICK_CREATE' => 'Быстрое создание',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Перестройка дерева папок',
    'LBL_EMAIL_RELATE_TO' => 'Связать',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Просмотр связей',
    'LBL_EMAIL_RECORD' => 'Данные E-mail',
    'LBL_EMAIL_REMOVE' => 'Удалить',
    'LBL_EMAIL_REPLY' => 'Ответить',
    'LBL_EMAIL_REPLY_ALL' => 'Ответить всем',
    'LBL_EMAIL_REPLY_TO' => 'Для автоответа',
    'LBL_EMAIL_RETRIEVING_LIST' => 'Получение списка рассылки',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Получение сообщения',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Получение данных E-mail',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Пожалуйста, выберите только одно E-mail',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Вернуться к предыдущему модулю?',
    'LBL_EMAIL_REVERT' => 'Вернуть',
    'LBL_EMAIL_RELATE_EMAIL' => 'Связать E-mail',

    'LBL_EMAIL_RULES_TITLE' => 'Управление правилами',

    'LBL_EMAIL_SAVE' => 'Сохранить',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Сохранить и ответить',
    'LBL_EMAIL_SAVE_DRAFT' => 'Сохранить черновик',

    'LBL_EMAIL_SEARCHING' => 'ПОИСК',
    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_SEARCH_ADVANCED' => 'Расширенный поиск',
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Дата С',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Дата По',
    'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Текст сообщения',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'По вашему запросу ничего не обнаружено.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Результаты поиска',
    'LBL_EMAIL_SEARCH_TITLE' => 'Простой поиск',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Поиск по учётной записи',

    'LBL_EMAIL_SELECT' => 'Выбрать',

    'LBL_EMAIL_SEND' => 'Отправить',
    'LBL_EMAIL_SENDING_EMAIL' => 'Отправка E-mail',

    'LBL_EMAIL_SETTINGS' => 'Настройки',
    'LBL_EMAIL_SETTINGS_2_ROWS' => 'Снизу',
    'LBL_EMAIL_SETTINGS_3_COLS' => 'Справа',
    'LBL_EMAIL_SETTINGS_LAYOUT' => 'Просмотр содержимого',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Учётные записи',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Очистить форму',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'Импортировать E-mail при просмотре',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Проверять почту',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Использовать панель просмотра',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Использовать всплывающее окно',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Количество E-mail на странице',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Редактировать учётную запись',
    'LBL_EMAIL_SETTINGS_FOLDERS' => 'Папки',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Адрес отправителя',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Адрес E-mail для тестового уведомления:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'Адрес получателя',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Имя',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Также пересылать на адрес',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Во весь экран (закладки модулей будут недоступны)',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Синхронизировать все учётные записи',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Письмо было отправлено на указанный адрес с использованием настроек сервера исходящей почты. Убедитесь, что письмо было получено.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Выполнение данной операции приведёт к синхронизации учётных записей с их содержимым.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Выполнить полную синхронизацию?\nЭто может занять несколько минут.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Нажмите на клавишу Shift или Ctrl для выбора нескольких папок ',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Основные настройки',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Имеющиеся групповые папки',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Создание групповых папок',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Сохранение групповых папок',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Получение групповой папки',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Редактировать групповую папку',

    'LBL_EMAIL_SETTINGS_NAME' => 'Название',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Выберите количество входящих писем, отображаемых на странице. Для применения этих настроек, возможно, потребуется обновить страницу.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Получение учётной записи',
    'LBL_EMAIL_SETTINGS_RULES' => 'Правила',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Настройки сохранены',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Отправлять в текстовом формате',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'Активные',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Количество E-mail на странице',
    'LBL_EMAIL_SETTINGS_TAB_POS' => 'Располагать закладки внизу',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Настройка отображения',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Настройки',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Дополнительные настройки',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Имеющиеся локальные папки',
    'LBL_EMAIL_ERROR_PREPEND' => 'Ошибка:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Неверные параметры сервера исходящей почты для данной учётной записи. Проверьте указанные параметры или выберите другой сервер исходящей почты.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Сервер исходящей почты не настроен для отправки электронной почты. Настройте необходимые параметры или выберите другой сервер исходящей почты, если он указан в настройках учётной записи модуля "E-mail".',
    'LBL_EMAIL_SHOW_READ' => 'Показать все',
    'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Показать непрочитанные',
    'LBL_EMAIL_SIGNATURES' => 'Подписи',
    'LBL_EMAIL_SIGNATURE_CREATE' => 'Создание подписи',
    'LBL_EMAIL_SIGNATURE_NAME' => 'Название подписи',
    'LBL_EMAIL_SIGNATURE_TEXT' => 'Текст подписи',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Почта',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Другое',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Удалённые папки ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Папки SuiteCRM ]',
    'LBL_EMAIL_SUBJECT' => 'Тема',
    'LBL_EMAIL_SUCCESS' => 'Готово',
    'LBL_EMAIL_SUGAR_FOLDER' => 'Папка SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Шаблон письма пуст',
    'LBL_EMAIL_TEMPLATES' => 'Шаблоны',
    'LBL_EMAIL_TEXT_FIRST' => 'Первая страница',
    'LBL_EMAIL_TEXT_PREV' => 'Предыдущая страница',
    'LBL_EMAIL_TEXT_NEXT' => 'Следующая страница',
    'LBL_EMAIL_TEXT_LAST' => 'Последняя страница',
    'LBL_EMAIL_TEXT_REFRESH' => 'Обновить',
    'LBL_EMAIL_TO' => 'Кому',
    'LBL_EMAIL_TOGGLE_LIST' => 'Переключить',
    'LBL_EMAIL_VIEW' => 'Просмотр',
    'LBL_EMAIL_VIEWS' => 'Вид',
    'LBL_EMAIL_VIEW_HEADERS' => 'Заголовок E-mail',
    'LBL_EMAIL_VIEW_PRINTABLE' => 'Версия для печати',
    'LBL_EMAIL_VIEW_RAW' => 'Исходный текст E-mail',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Данная возможность не поддерживается при использовании POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Текст ссылки по умолчанию.',
    'LBL_EMAIL_YES' => 'Да',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Отправка тестового письма',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Тестовое письмо отправлено',
    'LBL_EMAIL_MESSAGE_NO' => 'Сообщение №',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Импорт успешно завершён',
    'LBL_EMAIL_IMPORT_FAIL' => 'Импорт не удался, поскольку сообщение было либо импортировано ранее, либо оно было удалено с сервера',

    'LBL_LINK_NONE' => 'Нет',
    'LBL_LINK_ALL' => 'Все',
    'LBL_LINK_RECORDS' => 'Записи',
    'LBL_LINK_SELECT' => 'Выбрать',
    'LBL_LINK_ACTIONS' => 'Действия', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_LINK_MORE' => 'Ещё',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Подтверждение',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Вы действительно хотите закрыть это мероприятие?',
    'LBL_CLOSE_ACTIVITY_REMEMBER' => 'Не отображать это сообщение в дальнейшем: &nbsp;',
    'LBL_INVALID_FILE_EXTENSION' => 'Неверное расширение файла',

    'ERR_AJAX_LOAD' => 'ОШИБКА:',
    'ERR_AJAX_LOAD_FAILURE' => 'В процессе обработки запроса произошла ошибка, попробуйте ещё раз.',
    'ERR_AJAX_LOAD_FOOTER' => 'При возникновении данной ошибки уведомите администратора системы о необходимости отключения ajax-технологии для текущего модуля.',
    'ERR_CREATING_FIELDS' => 'Ошибка заполнения полей с подробностями: ',
    'ERR_CREATING_TABLE' => 'Ошибка создания таблицы: ',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'В качестве десятичного разделителя не может быть использован тот же символ, что и при разделении разрядов.\n\n  Пожалуйста, измените значения.',
    'ERR_DELETE_RECORD' => 'Номер записи надо определить для удаления контакта.',
    'ERR_EXPORT_DISABLED' => 'Экспорт выключен.',
    'ERR_EXPORT_TYPE' => 'Ошибка, экспорт не выполнен. ',
    'ERR_INVALID_AMOUNT' => 'Пожалуйста, введите правильную сумму.',
    'ERR_INVALID_DATE_FORMAT' => 'Формат даты должен быть в виде: гггг-мм-дд',
    'ERR_INVALID_DATE' => 'Пожалуйста, введите правильную дату.',
    'ERR_INVALID_DAY' => 'Пожалуйста, введите правильный день.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Неверный адрес e-mail.',
    'ERR_INVALID_FILE_REFERENCE' => 'INVALID FILE REFERENCE.',
    'ERR_INVALID_HOUR' => 'Пожалуйста, введите правильный час.',
    'ERR_INVALID_MONTH' => 'Пожалуйста, введите правильный месяц.',
    'ERR_INVALID_TIME' => 'Пожалуйста, введите правильное время.',
    'ERR_INVALID_YEAR' => 'Пожалуйста, введите правильные 4 цифры года.',
    'ERR_NEED_ACTIVE_SESSION' => 'Для экспорта контента необходима активная сессия.',
    'ERR_NO_HEADER_ID' => 'Данная возможность недоступна в этой теме.',
    'ERR_NOT_ADMIN' => 'Неавторизованный доступ к панели администратора.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Пропущено обязательное поле:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Неверное значение обязательного поля:',
    'ERR_INVALID_VALUE' => 'Неверное значение:',
    'ERR_NO_SUCH_FILE' => 'Файл не существует.',
    'ERR_NO_SINGLE_QUOTE' => 'Не может использовать одинарные кавычки для ',
    'ERR_NOTHING_SELECTED' => 'Пожалуйста, сделайте выбор перед тем, как продолжить.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Сделка с именем %s уже существует.  Пожалуйста, введите другое имя.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Название сделки не указано. Пожалуйста, введите имя сделки.',
    'ERR_POTENTIAL_SEGFAULT' => 'Потенциальная сегментация в модуле Apache. Пожалуйста уведомите вашего системного администратора, для подтверждения проблемы, и попросите его отправить отчет в SuiteCRM.',
    'ERR_SELF_REPORTING' => 'Сотрудник не может отчитываться перед самим собой.',
    'ERR_SINGLE_QUOTE' => 'В данном поле нельзя использовать одинарные кавычки. Пожалуйста, измените значение.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Нет соответствия для поля: ',
    'ERR_SQS_NO_MATCH' => 'Не выбрано',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify \'key\' index in displayParams attribute for the Meta-Data definition',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Ошибка: Название уже назначено другому пользователю.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Неверное значение поля',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Ошибка сохранения внешней учётной записи.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Ошибка загрузки.  Убедитесь, что загружаемый файл не пуст.',
    'ERR_NO_DB' => 'Невозможно установить соединение с базой данных. Более подробная информация находится в файле suitecrm.log.',
    'ERR_DB_FAIL' => 'Ошибка базы данных. Более подробная информация находится в файле suitecrm.log.',
    'ERR_EXTERNAL_API_403' => 'Доступ запрещён. Данный тип файлов не поддерживается.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth-токен доступа не обнаружен.',
    'ERR_DB_VERSION' => 'SuiteCRM версии {0} работает только с базой данных версии {1}.',

    'LBL_ACCOUNT' => 'Контрагент',
    'LBL_OLD_ACCOUNT_LINK' => 'Предыдущий Контрагент',
    'LBL_ACCOUNTS' => 'Контрагенты',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Краткий отчёт',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Краткий отчёт',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Добавить',
    'LBL_ADD_BUTTON' => 'Добавить',
    'LBL_ADD_DOCUMENT' => 'Добавить документ',
    'LBL_REPLACE_BUTTON' => 'Заменить',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Добавить в список адресатов',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Добавить в список адресатов',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Добавить контакты в список адресатов',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Закрыть',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Закрыть',
    'LBL_ADDITIONAL_DETAILS' => 'Подробности',
    'LBL_ADMIN' => 'Администрирование',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Архивация',
    'LBL_ASSIGNED_TO_USER' => 'Ответственный(ая)',
    'LBL_ASSIGNED_TO' => 'Ответственный(ая): ',
    'LBL_BACK' => 'Назад',
    'LBL_BILL_TO_ACCOUNT' => 'Выставлен счёт',
    'LBL_BILL_TO_CONTACT' => 'Выставлено для контактного лица',
    'LBL_BILLING_ADDRESS' => 'Расчётный адрес',
    'LBL_QUICK_CREATE_TITLE' => 'Быстрое создание',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS' => 'Ошибки',
    'LBL_BY' => 'для',
    'LBL_CALLS' => 'Звонки',
    'LBL_CALL' => 'Звонок',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Разослать очередь сообщений',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Подтвердить',
    'LBL_CASE' => 'Обращение',
    'LBL_CASES' => 'Обращения',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Изменение пароля',
    'LBL_CHANGE_BUTTON_LABEL' => 'Изменять',
    'LBL_CHANGE_BUTTON_TITLE' => 'Изменить',
    'LBL_CHARSET' => 'utf-8',
    'LBL_CHECKALL' => 'Отметить все',
    'LBL_CITY' => 'Город',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Очистить',
    'LBL_CLEAR_BUTTON_TITLE' => 'Очистить',
    'LBL_CLEARALL' => 'Очистить все',
    'LBL_CLOSE_BUTTON_TITLE' => 'Закрыть', // As in closing a task
    'LBL_CLOSE_BUTTON_KEY' => 'Q',
    'LBL_CLOSE_WINDOW' => 'Закрыть окно',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Закрыть все',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Закрыть все',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Закрыть и создать копию', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Закрыть и создать копию', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Актуальные:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Создать E-mail',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Создать E-mail',
    'LBL_SEARCH_DROPDOWN_YES' => 'Да',
    'LBL_SEARCH_DROPDOWN_NO' => 'Нет',
    'LBL_CONTACT_LIST' => 'Контакты',
    'LBL_CONTACT' => 'Контакт',
    'LBL_CONTACTS' => 'Контакты',
    'LBL_CONTRACT' => 'Договор',
    'LBL_CONTRACTS' => 'Договоры',
    'LBL_COUNTRY' => 'Страна:',
    'LBL_CREATE_BUTTON_LABEL' => 'Создать', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CREATED_BY_USER' => 'Кем создано',
    'LBL_CREATED_USER' => 'Кем создано',
    'LBL_CREATED_ID' => 'Создано(ID)',
    'LBL_CREATED' => 'Создано',
    'LBL_CURRENT_USER_FILTER' => 'Мои записи:',
    'LBL_CURRENCY' => 'Валюта:',
    'LBL_DOCUMENTS' => 'Документы',
    'LBL_DATE_ENTERED' => 'Создано:',
    'LBL_DATE_MODIFIED' => 'Последнее изменение:',
    'LBL_EDIT_BUTTON' => 'Править',
    'LBL_DUPLICATE_BUTTON' => 'Дублировать',
    'LBL_DELETE_BUTTON' => 'Удалить',
    'LBL_DELETE' => 'Удалить',
    'LBL_DELETED' => 'Удалено',
    'LBL_DIRECT_REPORTS' => 'Подчинённые',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Готово',
    'LBL_DONE_BUTTON_TITLE' => 'Готово',
    'LBL_DST_NEEDS_FIXIN' => 'Приложению требуется исправление дневного времени. Пожалуйста, перейдите по ссылке <a href="index.php?module=Administration&action=DstFix">Восстановление</a> в панели администратора и используйте ссылку "Исправление дневного времени".',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Редактировать как новый',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Редактировать как новый',
    'LBL_FAVORITES' => 'Избранное',
    'LBL_FILTER_MENU_BY' => 'Filter Menu By',
    'LBL_VCARD' => 'Визитная карточка (vCard)',
    'LBL_EMPTY_VCARD' => 'Пожалуйста, укажите файл vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard не содержит всех полей, необходимых для текущего модуля. Подробная информация находится в файле suitecrm.log.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Размер загружаемого файла vCard превышает допустимый лимит в 30000 байт.',
    'LBL_VCARD_ERROR_DEFAULT' => 'При загрузке файла vCard произошла ошибка. Подробная информация содержится в файле suitecrm.log.',
    'LBL_IMPORT_VCARD' => 'Импорт из vCard:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Импортировать из vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Импортировать из vCard',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Просмотр',
    'LBL_VIEW_BUTTON_TITLE' => 'Просмотр',
    'LBL_VIEW_BUTTON' => 'Просмотреть',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'М',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Отправить в формате PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Отправить в формате PDF',
    'LBL_EMAILS' => 'E-mail',
    'LBL_EMPLOYEES' => 'Сотрудники',
    'LBL_ENTER_DATE' => 'Ввод даты',
    'LBL_EXPORT_ALL' => 'Экспортировать всё',
    'LBL_EXPORT' => 'Экспортировать',
    'LBL_FAVORITES_FILTER' => 'Избранное:',
    'LBL_GO_BUTTON_LABEL' => 'Поехали ...',
    'LBL_GS_HELP' => 'Данные полей текущего модуля используются в процессе поиска. Выделенный текст соответствует критериям поиска.',
    'LBL_HIDE' => 'Скрыть',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Импорт',
    'LBL_IMPORT_STARTED' => 'Импорт начат: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Должен быть указан разделитель.',
    'LBL_LAST_VIEWED' => 'Последние просмотры',
    'LBL_SHOW_LESS' => 'Показать меньше',
    'LBL_SHOW_MORE' => 'Показать больше',
    'LBL_TODAYS_ACTIVITIES' => 'Сегодняшние мероприятия',
    'LBL_LEADS' => 'Предварит. контакты',
    'LBL_LESS' => 'меньше',
    'LBL_CAMPAIGN' => 'Маркет. кампания:',
    'LBL_CAMPAIGNS' => 'Маркет. кампании',
    'LBL_CAMPAIGNLOG' => 'Журнал маркет. кампании',
    'LBL_CAMPAIGN_CONTACT' => 'Маркет. кампании',
    'LBL_CAMPAIGN_ID' => 'ID маркет. кампании',
    'LBL_CAMPAIGN_NONE' => '--не выбрано--',
    'LBL_SITEMAP' => 'Карта',
    'LBL_THEME' => 'Тема:',
    'LBL_THEME_PICKER' => 'Оформление',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Внимание: Internet Explorer 6 не поддерживает выбранную тему. Нажмите на кнопку "OK" для принудительного выбора темы или на кнопку "Отмена" для выбора другой темы.',
    'LBL_FOUND_IN_RELEASE' => 'Обнаружено в версии',
    'LBL_FIXED_IN_RELEASE' => 'Исправлено в версии',
    'LBL_LIST_ACCOUNT_NAME' => 'Контрагент',
    'LBL_LIST_ASSIGNED_USER' => 'Ответственный(ая)',
    'LBL_LIST_CONTACT_NAME' => 'Контактное лицо',
    'LBL_LIST_CONTACT_ROLE' => 'Контактная роль',
    'LBL_LIST_DATE_ENTERED' => 'Дата создания',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_NAME' => 'Имя',
    'LBL_LIST_OF' => 'из',
    'LBL_LIST_PHONE' => 'Тел.',
    'LBL_LIST_RELATED_TO' => 'Связано с',
    'LBL_LIST_USER_NAME' => 'Логин',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Вы действительно хотите обновить весь список?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Пожалуйста, выберите хотя бы одну запись',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Выберите не менее 2 записей.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Пожалуйста, выберите менее 10 записей.',
    'LBL_LISTVIEW_ALL' => 'Все',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Выбранные записи',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Выбрано: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Афиноген',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Пупкин',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Гн.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Обращение',
    'LBL_LOGIN_TO_ACCESS' => 'Войдите в систему, чтобы получить доступ к этой странице.',
    'LBL_LOGOUT' => 'Выход',
    'LBL_PROFILE' => 'Профиль',
    'LBL_MAILMERGE_KEY' => 'М',
    'LBL_MAILMERGE' => 'Слияние',
    'LBL_MASS_UPDATE' => 'Массовое обновление',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Не найдены обновляемые поля',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Не писать на E-mail:',
    'LBL_MEETINGS' => 'Встречи',
    'LBL_MEETING' => 'Встреча',
    'LBL_MEETING_GO_BACK' => 'Назад, к Встрече',
    'LBL_MEMBERS' => 'Члены',
    'LBL_MEMBER_OF' => 'Состоит в',
    'LBL_MODIFIED_BY_USER' => 'Изменено',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_MODIFIED' => 'Изменено',
    'LBL_MODIFIED_NAME' => 'Изменено (Имя)',
    'LBL_MODIFIED_ID' => 'Изменено(ID)',
    'LBL_MORE' => 'Ещё',
    'LBL_MY_ACCOUNT' => 'Мои настройки',
    'LBL_NAME' => 'Имя',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Создать',
    'LBL_NEW_BUTTON_TITLE' => 'Создать',
    'LBL_NEXT_BUTTON_LABEL' => 'Далее',
    'LBL_NONE' => '--не выбрано--',
    'LBL_NOTES' => 'Заметки',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Открыть все',
    'LBL_OPENALL_BUTTON_TITLE' => 'Открыть все',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Открыть для: ',
    'LBL_OPENTO_BUTTON_TITLE' => 'Открыть для:',
    'LBL_OPPORTUNITIES' => 'Сделки',
    'LBL_OPPORTUNITY_NAME' => 'Название сделки',
    'LBL_OPPORTUNITY' => 'Сделка',
    'LBL_OR' => 'ИЛИ',
    'LBL_LOWER_OR' => 'или',
    'LBL_PANEL_OVERVIEW' => 'Основная информация', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ASSIGNMENT' => 'Разное', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ADVANCED' => 'Дополнительная информация', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PARENT_TYPE' => 'Родительский тип',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Диапазон',
    'LBL_POSTAL_CODE' => 'Индекс:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Основной адрес - город:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Основной адрес - страна:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Основной адрес - индекс:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Основной адрес - область:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Основной адрес - улица 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Основной адрес - улица 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Основной адрес - улица:',
    'LBL_PRIMARY_ADDRESS' => 'Основной адрес:',

    'LBL_BILLING_STREET' => 'Улица:',
    'LBL_SHIPPING_STREET' => 'Улица:',

    'LBL_PROSPECTS' => 'Адресаты',
    'LBL_PRODUCT_BUNDLES' => 'Набор товаров',
    'LBL_PRODUCTS' => 'Товары',
    'LBL_PROJECT_TASKS' => 'Проектные задачи',
    'LBL_PROJECTS' => 'Проекты',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Создать сделку из ссылки',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Создать сделку из ссылки',
    'LBL_QUOTES_SHIP_TO' => 'Предложения для',
    'LBL_QUOTES' => 'Предложения',

    'LBL_RELATED' => 'Связано',
    'LBL_RELATED_INFORMATION' => 'Дополнительная информация',
    'LBL_RELATED_RECORDS' => 'Связанные записи',
    'LBL_REMOVE' => 'Удалить',
    'LBL_REPORTS_TO' => 'Руководитель',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Поля, обязательные для заполнения',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Готово',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Сохранить как',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Сохранить как',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Показать все поля формы',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Показать все поля формы',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Сохранить и создать новую',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Сохранить и создать новую',
    'LBL_SAVE_OBJECT' => 'Сохранить {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Фильтр',
    'LBL_SEARCH_BUTTON_TITLE' => 'Фильтр',
    'LBL_SEARCH' => 'Фильтр',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_TIPS' => 'Press the search button or click enter to get an exact match for them.',
    'LBL_SEARCH_TIPS_2' => 'Press the search button or click enter to get an exact match for',
    'LBL_SEARCH_MORE' => 'далее',
    'LBL_SEE_ALL' => 'Посмотреть все',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Неверный формат файла. Могут быть загружены только изображения.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Выбрать',
    'LBL_SELECT_BUTTON_TITLE' => 'Выбрать',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Добавить команду(ы)',
    'LBL_SELECT_TEAMS_TITLE' => 'Добавить команду(ы)',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Обзор документов',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Обзор документов',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Выбрать контакт',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Выбрать контакт',
    'LBL_GRID_SELECTED_FILE' => 'выбранный файл',
    'LBL_GRID_SELECTED_FILES' => 'выбранные файлы',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Выбрать отчёт',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Выбрать отчёт',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Выбрать пользователя',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Выбрать пользователя',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Очистить выбор',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Очистить выбор',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Очистить выбор',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Очистить выбор',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Выбор файла',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Выбор файла',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Очистить файл',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Очистить файл',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Выбрать пользователя',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Выбрать пользователя',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Удалить пользователя',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Удалить пользователя',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Выбор контрагента',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Выбор контрагента',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Удалить аккаунт',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Удалить аккаунт',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'М',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Выберите кампанию',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Выберите кампанию',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Очистить кампании',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Очистить кампании',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Выбрать контакт',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Выбрать контакт',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Удалить контакт',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Удалить контакт',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Выбор команды',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Выбор команды',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Очистить Команда',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Очистить Команда',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ресурсы, использованные для создания данной страницы (запросы, файлы)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'сек.',
    'LBL_SERVER_RESPONSE_TIME' => '<br>Время ответа сервера:',
    'LBL_SERVER_MEMORY_BYTES' => 'байт',
    'LBL_SERVER_MEMORY_USAGE' => 'Потребление памяти сервером: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Потребление: - модулем: {0} - действием: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Пиковое потребление памяти сервером: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT' => 'Отправлено контрагенту',
    'LBL_SHIP_TO_CONTACT' => 'Отправлено контактному лицу',
    'LBL_SHIPPING_ADDRESS' => 'Отгрузочный адрес',
    'LBL_SHORTCUTS' => 'Меню',
    'LBL_SHOW' => 'Показать',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Состояние:', //Used for Case State, situation, condition
    'LBL_STATUS_UPDATED' => 'Ваш статус для этого события был обновлён!',
    'LBL_STATUS' => 'Статус:',
    'LBL_STREET' => 'Улица',
    'LBL_SUBJECT' => 'Тема',

    'LBL_INBOUNDEMAIL_ID' => 'ID входящего E-mail',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2013 SuiteCRM Inc. Приложение распространяется по принципу "КАК ЕСТЬ", без каких-либо гарантий, по лицензии <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.<br>SuiteCRM является зарегистрированной торговой маркой SuiteCRM, Inc. Названия остальных компаний и продуктов могут являться торговым марками соответствующих компаний, с которыми они связаны.',

    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2013 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> Все права защищены.<br />SuiteCRM является зарегистрированной торговой маркой SuiteCRM, Inc. Названия остальных компаний и продуктов могут являться торговым марками соответствующих компаний, с которыми они связаны.',

    'LBL_SCENARIO_SALES' => 'Продажи',
    'LBL_SCENARIO_MARKETING' => 'Маркетинг',
    'LBL_SCENARIO_FINANCE' => 'Продажи',
    'LBL_SCENARIO_SERVICE' => 'Обращения',
    'LBL_SCENARIO_PROJECT' => 'Проекты',

    'LBL_SCENARIO_SALES_DESCRIPTION'=>'Управление сделками',
    'LBL_SCENARIO_MAKETING_DESCRIPTION'=>'Управление маркетинговыми кампаниями',
    'LBL_SCENARIO_FINANCE_DESCRIPTION'=>'Управление продажами',
    'LBL_SCENARIO_SERVICE_DESCRIPTION'=>'Управление пользовательскими обращениями',
    'LBL_SCENARIO_PROJECT_DESCRIPTION'=>'Управление проектами',

    'LBL_SYNC' => 'Синхронизация',
    'LBL_TABGROUP_ALL' => 'Все',
    'LBL_TABGROUP_ACTIVITIES' => 'Мероприятия',
    'LBL_TABGROUP_COLLABORATION' => 'Совместная работа',
    'LBL_TABGROUP_HOME' => 'Главная',
    'LBL_TABGROUP_MARKETING' => 'Маркетинг',
    'LBL_TABGROUP_MY_PORTALS' => 'Мои сайты',
    'LBL_TABGROUP_OTHER' => 'Разное',
    'LBL_TABGROUP_REPORTS' => 'Отчёты',
    'LBL_TABGROUP_SALES' => 'Продажи',
    'LBL_TABGROUP_SUPPORT' => 'Поддержка',
    'LBL_TABGROUP_TOOLS' => 'Сервис',
    'LBL_TASKS' => 'Задачи',
    'LBL_TEAMS_LINK' => 'Команды',
    'LBL_THEME_COLOR' => 'Цвет',
    'LBL_THEME_FONT' => 'Шрифт',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Отправить E-mail в архив',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Отправить E-mail в архив',
    'LBL_UNAUTH_ADMIN' => 'Неавторизованный доступ к администрированию',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Восстановить',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Восстановить',
    'LBL_UNDELETE_BUTTON' => 'Восстановить',
    'LBL_UNDELETE' => 'Восстановить',
    'LBL_UNSYNC' => 'Рассинхронизация',
    'LBL_UPDATE' => 'Обновить',
    'LBL_USER_LIST' => 'Пользователи',
    'LBL_USERS_SYNC' => 'Синхронизация пользователей',
    'LBL_USERS' => 'Пользователи',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Проверка адреса E-mail...',
    'LBL_VERIFY_PORTAL_NAME' => 'Проверка названия портала...',
    'LBL_VIEW_IMAGE' => 'вид',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Печать в PDF-формате',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Печать в PDF-формате',

    'LNK_ABOUT' => 'Справка',
    'LNK_ADVANCED_FILTER' => 'Расширенный поиск',
    'LNK_BASIC_FILTER' => 'Базовый поиск',
    'LBL_ADVANCED_SEARCH' => 'Расширенный поиск',
    'LBL_QUICK_FILTER' => 'Базовый поиск',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Отобразить все результаты',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Отобразить всё',
    'LNK_CLOSE' => 'Закрытие',
    'LBL_MODIFY_CURRENT_SEARCH' => 'Изменить текущий фильтр',
    'LBL_MODIFY_CURRENT_FILTER' => 'Изменить текущий фильтр',
    'LNK_SAVED_VIEWS' => 'Настройка отображения результатов поиска',
    'LNK_DELETE_ALL' => 'Удалить все',
    'LNK_DELETE' => 'Удалить',
    'LNK_EDIT' => 'Править',
    'LNK_GET_LATEST' => 'Получить последнюю версию',
    'LNK_GET_LATEST_TOOLTIP' => 'Заменить последней версией',
    'LNK_HELP' => 'Помощь',
    'LNK_CREATE' => 'Создать',
    'LNK_LIST_END' => 'Конец',
    'LNK_LIST_NEXT' => 'След.',
    'LNK_LIST_PREVIOUS' => 'Пред.',
    'LNK_LIST_RETURN' => 'Вернуться к списку',
    'LNK_LIST_START' => 'Начало',
    'LNK_LOAD_SIGNED' => 'Подпись',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Заменить подписанным документом',
    'LNK_PRINT' => 'Печать',
    'LNK_BACKTOTOP' => 'Наверх',
    'LNK_REMOVE' => 'Удалить',
    'LNK_RESUME' => 'Продолжить',
    'LNK_VIEW_CHANGE_LOG' => 'Просмотр журнала изменений',

    'NTC_CLICK_BACK' => 'Пожалуйста, нажмите на кнопку возврата в браузере и исправьте ошибку.',
    'NTC_DATE_FORMAT' => '(гггг-мм-дд)',
    'NTC_DATE_TIME_FORMAT' => '(гггг-мм-дд 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Вы действительно хотите удалить выбранные(ую) записи(ь)?',
    'NTC_TEMPLATE_IS_USED' => 'Данный шаблон используется как минимум в одной рассылке. Вы действительно хотите его удалить?',
    'NTC_TEMPLATES_IS_USED' => 'Данные шаблоны используются как минимум в одной рассылке. Вы действительно хотите их удалить?\n',
    'NTC_DELETE_CONFIRMATION' => 'Вы действительно хотите удалить эту запись?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Вы действительно хотите удалить ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Вы действительно хотите обновить ',
    'NTC_DELETE_SELECTED_RECORDS' => ' выбранных записей?',
    'NTC_LOGIN_MESSAGE' => 'Пожалуйста, введите Ваш логин и пароль.',
    'NTC_NO_ITEMS_DISPLAY' => 'нет',
    'NTC_REMOVE_CONFIRMATION' => 'Вы действительно хотите удалить эту связь? (При удалении связей данные не удаляются)',
    'NTC_REQUIRED' => '-  поля, обязательные для заполнения',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Дoбрo пoжалoвать',
    'NTC_YEAR_FORMAT' => '(гггг) ',
    'LOGIN_LOGO_ERROR' => 'Пожалуйста, замените логотипы SuiteCRM',
    'WARN_ONLY_ADMINS' => 'В систему могут войти только администраторы.',
    'WARN_UNSAVED_CHANGES' => 'Вы покидаете данную страницу без сохранения внесённых изменений. Продолжить?',
    'ERROR_NO_RECORD' => 'Ошибка получения записи. Вероятно, эта запись была удалена или у вас недостаточно прав для её просмотра.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Предупреждение:</b> Данная версия браузера не поддерживается.<p></p>Рекомендуются следующие версии браузеров:<p></p><ul><li>Internet Explorer 11 (режим совместимости не поддерживается)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Предупреждение:</b> Браузер открыт в режиме совместимости с IE, данный режим не поддерживается.',
    'ERROR_TYPE_NOT_VALID' => 'Ошибка. Недопустимый тип.',
    'ERROR_NO_BEAN' => 'Отсутствует вывод.',
    'LBL_DUP_MERGE' => 'Поиск дубликатов',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Управление подписками',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Управление подписками для ',
    'LBL_SUBSCRIBE' => 'Подписаться',
    'LBL_UNSUBSCRIBE' => 'Отписаться',
    // Ajax status strings
    'LBL_LOADING' => 'Загрузка...',
    'LBL_SEARCHING' => 'Поиск...',
    'LBL_SAVING_LAYOUT' => 'Сохранение макета...',
    'LBL_SAVED_LAYOUT' => 'Макет сохранён',
    'LBL_SAVED' => 'Сохранено',
    'LBL_SAVING' => 'Сохраняется',
    'LBL_FAILED' => 'Ошибка сохранения!',
    'LBL_DISPLAY_COLUMNS' => 'Отображаемые колонки',
    'LBL_HIDE_COLUMNS' => 'Скрытые колонки',
    'LBL_SEARCH_CRITERIA' => 'Условие поиска',
    'LBL_SAVED_VIEWS' => 'Сохранённые условия',
    'LBL_PROCESSING_REQUEST' => 'Выполняется...',
    'LBL_REQUEST_PROCESSED' => 'Готово',
    'LBL_AJAX_FAILURE' => 'Ошибка Ajax',
    'LBL_MERGE_DUPLICATES' => 'Объединить',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Мои фильтры',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Мои фильтры',
    'LBL_SEARCH_POPULATE_ONLY' => 'Выполните поиск, используя вышеуказанную форму',
    'LBL_DETAILVIEW' => 'Форма просмотра',
    'LBL_LISTVIEW' => 'Форма списка',
    'LBL_EDITVIEW' => 'Форма редактирования',
    'LBL_SEARCHFORM' => 'Форма поиска',
    'LBL_SAVED_SEARCH_ERROR' => 'Пожалуйста, укажите название сохраняемого условия.',
    'LBL_DISPLAY_LOG' => 'Показать журнал',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Система',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Продолжительность сессии',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Ваша сессия закончится через 2 минуты. Пожалуйста, сохраните результаты работы.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Время вашей сессии истекло.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nПовестка: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Встреча',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Звонок',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Время: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Место: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Описание: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Статус: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Относится к: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nНажмите кнопку 'ОК' для просмотра информации об этом звонке или на кнопку 'Отмена', чтобы отклонить это сообщение.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nНажмите кнопку 'ОК' для просмотра информации об этой встрече или на кнопку 'Отмена', чтобы отклонить это сообщение.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Событие',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Событие не задано',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Не указано место встречи.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Не указана дата начала.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Ничего не обнаружено.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'No results found... Perhaps change your search criteria and try again?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Ничего не обнаружено с названием <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Создать новую запись с таким названием',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'or change your search criteria',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Записи не обнаружены. Вы можете либо <item2> новую запись, либо выполнить <item3> записей.',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' => '<item4> чтобы узнать больше о модуле <item1> в англоязычной веб-справке.',

    'LBL_CLICK_HERE' => 'Нажмите здесь',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Добавить в Избранное',
    'LBL_MARK_AS_FAVORITES' => 'Пометить как Избранное',
    'LBL_CREATE_CONTACT' => 'Создать контакт',
    'LBL_CREATE_CASE' => 'Создать обращение',
    'LBL_CREATE_NOTE' => 'Создать примечание',
    'LBL_CREATE_OPPORTUNITY' => 'Создать сделку',
    'LBL_SCHEDULE_CALL' => 'Запланировать звонок',
    'LBL_SCHEDULE_MEETING' => 'Запланировать встречу',
    'LBL_CREATE_TASK' => 'Создать задачу',
    'LBL_REMOVE_FROM_FAVORITES' => 'Удалить из Избранного',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Создать веб-форму',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Save Web Form',
    'LBL_AVAILABLE_FIELDS'=>'Перечень доступных полей',
    'LBL_FIRST_FORM_COLUMN'=>'Первая колонка веб-формы',
    'LBL_SECOND_FORM_COLUMN'=>'Вторая колонка веб-формы',
    'LBL_ASSIGNED_TO_REQUIRED'=>'Пропущено обязательное поле: Ответственный(ая)',
    'LBL_RELATED_CAMPAIGN_REQUIRED'=>'Пропущено обязательное поле: Связь с маркетинговой кампанией',
    'LBL_TYPE_OF_PERSON_FOR_FORM'=>'Форма создания записи в модуле ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC'=>'В результате отправки этой формы будет создана запись в модуле ',

    'LBL_PLEASE_SELECT' => 'Пожалуйста, выберите',
    'LBL_REDIRECT_URL' => 'URL переадресации',
    'LBL_RELATED_CAMPAIGN' => 'Связь с маркет. кампанией',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Добавить все поля',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Удалить все поля',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Удалить все поля',
    'LBL_NEXT_BTN' => 'Далее',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Возможно добавить только графическое вложение',
    'LBL_TRAINING' => 'Форум поддержки',
    'ERR_DATABASE_CONN_DROPPED' => 'Ошибка при выполнении запроса. Вероятно, соединение с базой данных было утеряно. Пожалуйста, обновите текущую страницу. Возможно, потребуется перезагрузить ваш веб-сервер.',
    'ERR_MSSQL_DB_CONTEXT' => 'Состояние БД изменилось:',
    'ERR_MSSQL_WARNING' => 'Внимание:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Внимание: поле [[field]] не имеет отображаемой записи в файле [moduleDir] vardefs.php',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Ошибка: Файл [[file]] отсутствует. Невозможно создать, т.к. не был найден соответствующий HTML файл.',
    'ERR_CANNOT_FIND_MODULE' => 'Ошибка: Модуль [module] не существует.',
    'LBL_ALT_ADDRESS' => 'Другой адрес:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Missing index in displayParams Array for: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Основные настройки',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Фильтры',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Мои записи:',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Заголовок дашлета',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Отображать строк:',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Создание новой страницы ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'Была создана новая страница. Вы можете наполнить её содержимым с помощью кнопки "Добавить дашлеты".',
    'LBL_DELETE_PAGE_CONFIRM' => 'Вы действительно хотите удалить эту страницу?',
    'LBL_SAVING_PAGE_TITLE' => 'Сохранение заголовка страницы ...',
    'LBL_RETRIEVING_PAGE' => 'Получение страницы ...',
    'LBL_MAX_DASHLETS_REACHED' => 'У вас установлено максимальное количество дашлетов, разрешённое администратором. Необходимо удалить один из дашлетов для добавления нового.',
    'LBL_ADDING_DASHLET' => 'Добавление дашлета ...',
    'LBL_ADDED_DASHLET' => 'Дашлет добавлен',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Вы действительно хотите удалить этот дашлет?',
    'LBL_REMOVING_DASHLET' => 'Удаление дашлета ...',
    'LBL_REMOVED_DASHLET' => 'Дашлет удалён',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Добавить страницу',
    'LBL_DELETE_PAGE' => 'Удалить страницу',
    'LBL_CHANGE_LAYOUT' => 'Изменить макет',
    'LBL_RENAME_PAGE' => 'Переименовать страницу',

    'LBL_LOADING_PAGE' => 'Загрузка страницы...',

    'LBL_RELOAD_PAGE' => 'Пожалуйста, <a href="javascript: window.location.reload()">обновите эту страницу</a> для использования этого дашлета.',
    'LBL_ADD_DASHLETS' => 'Добавить дашлет',
    'LBL_CLOSE_DASHLETS' => 'закрыть',
    'LBL_OPTIONS' => 'Параметры',
    'LBL_NUMBER_OF_COLUMNS' => 'Количество колонок на странице:',
    'LBL_1_COLUMN' => '1 колонка',
    'LBL_2_COLUMN' => '2 колонки',
    'LBL_3_COLUMN' => '3 колонки',
    'LBL_PAGE_NAME' => 'Название страницы',

    'LBL_SEARCH_RESULTS' => 'Результаты поиска',
    'LBL_SEARCH_MODULES' => 'Модули',
    'LBL_SEARCH_CHARTS' => 'Диаграммы',
    'LBL_SEARCH_REPORT_CHARTS' => 'Графики отчетов',
    'LBL_SEARCH_TOOLS' => 'Разное',
    'LBL_SEARCH_HELP_TITLE' => 'Настройка отображения результатов поиска и управление сохранёнными условиями поиска',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Закрыть',
    'LBL_SEARCH_RESULTS_FOUND' => 'Результаты поиска',
    'LBL_SEARCH_RESULTS_TIME' => 'мсек.',
    'ERR_BLANK_PAGE_NAME' => 'Пожалуйста, укажите название страницы.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Нет изображения',

    'LBL_MODULE' => 'Модуль',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Копировать адрес слева:',
    'LBL_SAVE_AND_CONTINUE' => 'Сохранить и продолжить',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Выбор нескольких элементов</strong></p><ul><li>Для выбора необходимого элемента списка нажмите на нём.</li><li>Для выбора нескольких непоследовательных элементов списка нажмите на них, удерживая клавишу <b>Ctrl</b> (CMD-Click для пользователей Mac).</li><li>Для выбора нескольких последовательных элементов списка нажмите на начальном и конечном выбираемых элементах списка, удерживая клавишу <b>Shift</b>. </li></ul><p><strong>Расширенный поиск и настройка макета результатов поиска  </strong><br><br>Используя ссылку <b>Настройка отображения результатов поиска</b>, вы можете сохранять указанные параметры поиска и / или настраивать макеты результатов поиска для быстрого получения желаемых результатов поиска в дальнейшем. Вы можете сохранять неограниченное количество различных вариантов поиска и макетов результатов поиска. Названия всех сохраненных условий поиска отображаются в соответствующем комбобоксе, последнее выбранное условие поиска всегда отображается первым в списке комбобокса.<br><br> Для настойки макета результатов поиска используйте списки с отображаемыми и скрытыми колонками. Например, в результатах поиска вы можете отображать или скрывать такие колонки как дату создания или изменения записи, ответственного пользователя и т.д. Для настройки отображения необходимых результатов поиска выберите соответствующие элементы в правом / левом списке и воспользуйтесь стрелками для перемещения элементов между ними.<br><br> Для сохранения и обновления параметров поиска и / или сохранения настроек макета результатов поиска:<ol><li>Укажите название сохраняемых параметров в поле <b>Сохранить условия поиска</b> и нажмите кнопку <b>Сохранить</b>. Указанное название будет отображено в комбобоксе справа от кнопки <b>Очистить</b>.</li><li>Для применения сохранённых параметров выберите необходимое название из комбобокса <b>Сохраненные условия поиска</b>, результат поиска тут же будет отображён на экране.</li><li> Для изменения ранее сохраненных параметров выберите необходимое название из комбобокса, измените параметры поиска  и / или настройки макета результатов поиска на странице <b>Расширенного поиска</b> и нажмите на кнопку <b>Обновить</b>.</li><li>Для удаления сохраненных параметров выберите необходимое название из комбобокса <b>Сохраненные условия поиска</b>, нажмите на кнопку <b>Удалить</b> и подтвердите свой выбор нажатием кнопки <b>OK</b>.</li></ol><p><strong>Совет</strong><br><br> Используйте символ <b>%</b> в качестве маски поиска. Например, если необходимо найти записи, начинающиеся со слова <b>Яблоко</b>, введите <b>Яблоко%</b> в качестве критерия поиска.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Ошибка: Достигнут предел запроса $limit для модуля $module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Ошибка: ResourceObserver->notify() должен быть отменён.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Ошибка: Невозможно создать обзор потому что файл метаданных не существует.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Ошибка: Для запрашиваемого имени обзор не сконфигурирован.',
    'ERR_UNDEFINED_METRIC' => 'Ошибка: Невозможно сохранить значение для неопределённого измерения',
    'ERR_STORE_FILE_MISSING' => 'Ошибка: Невозможно найти файл внедрения хранилища.',

    'LBL_MONITOR_ID' => 'Monitor Id',
    'LBL_USER_ID' => 'ID пользователя',
    'LBL_MODULE_NAME' => 'Название модуля',
    'LBL_ITEM_ID' => 'Item Id',
    'LBL_ITEM_SUMMARY' => 'Item Summary',
    'LBL_ACTION' => 'Действие',
    'LBL_SESSION_ID' => 'Session Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack создан для ID пользователя {0}',
    'LBL_VISIBLE' => 'Запись видима',
    'LBL_DATE_LAST_ACTION' => 'Дата последнего действия',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'is not before',
    'MSG_IS_MORE_THAN' => 'is more than',
    'MSG_IS_LESS_THAN' => 'is less than',
    'MSG_SHOULD_BE' => 'должно быть',
    'MSG_OR_GREATER' => 'или больше',

    'LBL_PORTAL_WELCOME_TITLE' => 'Welcome to SuiteCRM',
    'LBL_PORTAL_WELCOME_INFO' => 'SuiteCRM Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to SuiteCRM that can be deployed within any website.',
    'LBL_LIST' => 'Список',
    'LBL_CREATE_BUG' => 'Новая ошибка',
    'LBL_NO_RECORDS_FOUND' => '- Найдено 0 записей -',

    'DATA_TYPE_DUE' => 'Дата окончания:',
    'DATA_TYPE_START' => 'Начало:',
    'DATA_TYPE_SENT' => 'Отправлено:',
    'DATA_TYPE_MODIFIED' => 'Изменено:',

    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Количество',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'object image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Выбор даты',

    'LBL_VALIDATE_RANGE' => 'находится все корректного диапазона дат',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Укажите начальную и конечную даты диапазона',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Укажите начальное и конечное значение диапазона',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Все',

    'LBL_OPERATOR_IN_TEXT' => 'является одним из следующих:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'не является одним из следующих:',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Ошибка: Не указано подключение для модуля.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Ошибка: Невозможно получить данные подключения {0}. Возможно, сервис в данный момент недоступен или у вас установлены неверные параметры подключения. Сообщение об ошибке: ({1}).',
    'LBL_MERGE_CONNECTORS' => 'Получить данные',
    'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
    'LBL_REMOVE_MODULE_ENTRY' => 'Вы действительно хотите деактивировать связь подключения с данным модулем?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Для оптимального использования IIS / FastCGI SAPI, установите параметр fastcgi.logging в файле php.ini равным 0.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'Извините, но Вы не можете удалить глобальную команду. Отмена',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'Эта частная команда [{0}] не может быть удалена до тех пор, пока не удалён пользователь [{1}].',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'Возможно, у вас выключена flash-анимация или у вас установлена старая версия Adobe Flash Player. Нажмите <a href="http://www.adobe.com/go/getflashplayer/">здесь</a> для загрузки последней версии плеера или включите flash-анимацию.',
    //Collection Field
    'LBL_COLLECTION_NAME' => 'Название',
    'LBL_COLLECTION_PRIMARY' => 'Основной ',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Обязательное поле не заполнено',
    'LBL_COLLECTION_EXACT' => 'Exact',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_DESCRIPTION' => 'Описание',

    'LBL_YESTERDAY' => 'вчера',
    'LBL_TODAY' => 'сегодня',
    'LBL_TOMORROW' => 'завтра',
    'LBL_NEXT_WEEK' => 'след. неделя',
    'LBL_NEXT_MONDAY' => 'след. понедельник',
    'LBL_NEXT_FRIDAY' => 'след. пятница',
    'LBL_TWO_WEEKS' => 'две недели',
    'LBL_NEXT_MONTH' => 'след. месяц',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'первый день след. месяца',
    'LBL_THREE_MONTHS' => 'три месяца',
    'LBL_SIXMONTHS' => 'шесть месяцев',
    'LBL_NEXT_YEAR' => 'след. год',
    'LBL_FILTERED' => 'Фильтр включён',

    //Datetimecombo fields
    'LBL_HOURS' => 'Часы',
    'LBL_MINUTES' => 'Минуты',
    'LBL_MERIDIEM' => 'пополудни',
    'LBL_DATE' => 'Дата',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Автообновление:',

    'LBL_DURATION_DAY' => 'день',
    'LBL_DURATION_HOUR' => 'час',
    'LBL_DURATION_MINUTE' => 'минута',
    'LBL_DURATION_DAYS' => 'дней',
    'LBL_DURATION_HOURS' => 'часов',
    'LBL_DURATION_MINUTES' => 'минут',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Выберите месяц',
    'LBL_ENTER_YEAR' => 'Введите год',
    'LBL_ENTER_VALID_YEAR' => 'Введите правильное значение года',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Введите корректный телефонный номер (включая код района).',

    //File write error label
    'ERR_FILE_WRITE' => 'Ошибка: Нельзя записать файл {0}. Проверьте права доступа.',
    'ERR_FILE_NOT_FOUND' => 'Ошибка: Нельзя загрузить файл {0}. Проверьте права доступа.',

    'LBL_AND' => 'И',
    'LBL_BEFORE' => 'До',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Загрузка с вашего компьютера',
    'LBL_SEARCH_EXTERNAL_API' => 'Поиск на внешнем носителе',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Безопасность',
    'LBL_SHARE_PRIVATE' => 'Private',
    'LBL_SHARE_COMPANY' => 'Компания',
    'LBL_SHARE_LINKABLE' => 'Связуемые',
    'LBL_SHARE_PUBLIC' => 'Публичный',

    // Web Services REST RSS
    'LBL_RSS_FEED' => 'RSS-канал',
    'LBL_RSS_RECORDS_FOUND' => 'записей найдено',
    'ERR_RSS_INVALID_INPUT' => 'RSS не является действительным input_type',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS не является действительным response_type для этого метода',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs не поддерживает данный формат файлов.',

    'LBL_EMPTY' => 'Пусто',
    'LBL_IS_EMPTY' => 'Пусто',
    'LBL_IS_NOT_EMPTY' => 'Не пусто',
    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => ' 

Это пример файла, содержащего данные, подготовленные к импорту.
Файл представляет собой текст, содержащий запятые в качестве обычного разделителя и двойные кавычки в качестве ограничителя полей.

Самая верхняя строка представляет собой строку заголовков и содержит названия полей, которые будут отображены в системе.
Названия полей будут использоваться для корректного отображения содержимого файла в соответствующих полях системы.

Примечание:
Названия полей, содержащихся в БД также могут быть использованы в строке заголовка. Это может быть полезно, когда используются средства администрирования СУБД, например PhpMyAdmin или любой другой соответствующий инструментарий для экспорта данных, предназначенных для последующего импорта.
Порядок расположения столбцов в файле не имеет решающего значения, так как данные будут импортироваться в систему в соответствии с порядком следования полей в строке заголовка.


Для использования данного файла в качестве шаблона, выполните следующие действия:
1. Удалите строки с демонстрационными данными
2. Удалите текст справки, который вы сейчас читаете
3. Заполните файл необходимыми рабочими данными
4. Сохраните данный файл в определенной папке
5. Из меню модуля запустите процесс импорта и выберите только что сохранённый файл в качестве источника данных для загрузки

   ',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Ответственный(ая)-ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Ответственный(ая)',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Руководитель (ID)',
    'LBL_EXPORT_FULL_NAME' => 'Полное Имя',
    'LBL_EXPORT_TEAM_ID' => 'Team ID',
    'LBL_EXPORT_TEAM_NAME' => 'Команды',
    'LBL_EXPORT_TEAM_SET_ID' => 'Team Set ID',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'Navigating... ',

    'LBL_PENDING_NOTIFICATIONS' => 'Уведомления',
    'LBL_NOTIFICATIONS_NONE' => 'Уведомления отсутствуют',
    'LBL_ALT_ADD_TEAM_ROW' => 'Add new team row',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Remove team',
    'LBL_ALT_SPOT_SEARCH' => 'Spot Search',
    'LBL_ALT_SORT_DESC' => 'Нисходящая сортировка',
    'LBL_ALT_SORT_ASC' => 'Восходящая сортировка',
    'LBL_ALT_SORT' => 'Сортировать',
    'LBL_ALT_SHOW_OPTIONS' => 'Показать параметры',
    'LBL_ALT_HIDE_OPTIONS' => 'Скрыть параметры',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Перемещение выбранного элемента в левую колонку',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Перемещение выбранного элемента в правую колонку',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Перемещение выбранного элемента выше по списку',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Перемещение выбранного элемента ниже по списку',
    'LBL_ALT_INFO' => 'Детали',
    'MSG_DUPLICATE' => 'Запись {0} возможно, дублирует уже существующую запись. Схожие записи приведены в списке.<br>Нажмите на кнопку <b>Создать</b> для создания новой записи или выберите существующую запись из списка.',
    'MSG_SHOW_DUPLICATES' => 'Запись {0} возможно, дублирует уже существующую запись. Схожие записи приведены в списке. Нажмите на кнопку <b>Сохранить</b> для создания новой записи или на кнопку <b>Отказаться</b> для возврата в модуль без создания новой записи.',
    'LBL_EMAIL_TITLE' => 'адрес E-mail',
    'LBL_EMAIL_OPT_TITLE' => 'адрес для отписки',
    'LBL_EMAIL_INV_TITLE' => 'Неверный адрес E-mail',
    'LBL_EMAIL_PRIM_TITLE' => 'Основной адрес E-mail',
    'LBL_SELECT_ALL_TITLE' => 'Выбрать всё',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Выбрать текущую запись',
    'LBL_TEAM_SELECTED_TITLE' => 'Team Selected ',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Select to make this team primary',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ВНИМАНИЕ: В процессе загрузки произошла ошибка. Код ошибки: {0} - {1}.',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ВНИМАНИЕ: В процессе загрузки произошла ошибка. Код ошибки: {0} - {1}. Максимально допустимый размер загружаемого файла (upload_maxsize) составляет {2} байт.',
    'UPLOAD_ERROR_HOME_TEXT' => 'ВНИМАНИЕ: В процессе загрузки произошла ошибка, для решения вопроса свяжитесь с системным администратором.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Размер загружаемого файла ({0} байт) превышает допустимый максимум: {1} байт',
    'UPLOAD_REQUEST_ERROR' => 'Произошла ошибка. Обновите страницу и попробуйте ещё раз.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Править',
    'LBL_EDIT_BUTTON_TITLE' => 'Править',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Дублировать',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Дублировать',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Удалить',
    'LBL_DELETE_BUTTON_TITLE' => 'Удалить',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Массовые действия', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Действие', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Сохранить',
    'LBL_SAVE_BUTTON_TITLE' => 'Сохранить',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Отказаться',
    'LBL_CANCEL_BUTTON_TITLE' => 'Отказаться',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Сочетания клавиш',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Form Functionality - Alt+</strong><br/> I = ed<b>I</b>t (detailview)<br/> U = d<b>U</b>plicate (detailview)<br/> D = <b>D</b>elete (detailview)<br/> A = s<b>A</b>ve (editview)<br/> L = cance<b>L</b> (editview) <br/><br/></p><p><strong>Search and Navigation  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>',

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Загрузка была заблокирована модулем Suhosin, необходимо добавить &quot;upload&quot; в параметр  suhosin.executor.include.whitelist (детали описаны в файле журнала: suitecrm.log)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Некорректный ответ сервера',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Предложение',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Цена распродажи',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Вручную',
        '5' => 'Каждые 5 минут',
        '15' => 'Каждые 15 минут',
        '30' => 'Каждые 30 минут',
        '60' => 'Каждый час',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Неверное или незаполненное напоминание.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Напоминание не настроено.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Нет приглашённых.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Delete Reminder',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choose columns',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Сохранить изменения',
    'LBL_DISPLAYED' => 'Displayed',
    'LBL_HIDDEN' => 'Скрытые поля',
    'ERR_EMPTY_COLUMNS_LIST' => 'At least, one element required',

    'LBL_FILTER_HEADER_TITLE' => 'Фильтр',
    'LBL_SEARCH_HEADER_TITLE' => 'Фильтр',
    'LBL_AOP_INTERNAL' => 'Внутренний',

);

$app_list_strings['moduleList']['Library'] = 'Библиотека';
$app_list_strings['library_type'] = array('Books' => 'Book', 'Music' => 'Музыка', 'DVD' => 'DVD', 'Magazines' => 'Журналы');
$app_list_strings['moduleList']['EmailAddresses'] = 'Адрес E-mail';
$app_list_strings['project_priority_default'] = 'Средний';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Высокий',
    'Medium' => 'Средний',
    'Low' => 'Низкий',
);

$app_list_strings['kbdocument_status_dom'] = array(
    'Draft' => 'Черновик',
    'Expired' => 'Просрочен',
    'In Review' => 'На рассмотрении',
    'Published' => 'Опубликован',
);

$app_list_strings['kbadmin_actions_dom'] =
    array(
        '' => '--не выбрано--',
        'Create New Tag' => 'Создать новый тег',
        'Delete Tag' => 'Удалить тег',
        'Rename Tag' => 'Переименовать тег',
        'Move Selected Articles' => 'Переместить отмеченные пункты',
        'Apply Tags On Articles' => 'Применить теги',
        'Delete Selected Articles' => 'Удалить отмеченные пункты',
    );

$app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        '' => '',
        'some' => 'Есть вложения',
        'none' => 'Нет',
        'mime' => 'Указать тип MIME',
        'name' => 'Указать название',
    );

$app_list_strings['moduleList']['KBDocuments'] = 'База знаний';
$app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Создать статью';
$app_list_strings['kbdocument_viewing_frequency_dom'] =
    array(
        '' => '',
        'Top_5' => 'Первые 5',
        'Top_10' => 'Первые 10',
        'Top_20' => 'Первые 20',
        'Bot_5' => 'Последние 5',
        'Bot_10' => 'Последние 10',
        'Bot_20' => 'Последние 20',
    );

$app_list_strings['kbdocument_canned_search'] =
    array(
        'all' => 'Все',
        'added' => 'Добавленные за последние 30 дней',
        'pending' => 'Ожидающие утверждения',
        'updated' => 'Изменённые за последние 30 дней',
        'faqs' => 'ЧаВо(FAQs)',
    );
$app_list_strings['kbdocument_date_filter_options'] =
    array(
        '' => '',
        'on' => 'Конкретная дата',
        'before' => 'До',
        'after' => 'После',
        'between_dates' => 'Между',
        'last_7_days' => 'Последние 7 дней',
        'next_7_days' => 'Следующие 7 дней',
        'last_month' => 'Последний месяц',
        'this_month' => 'Текущий месяц',
        'next_month' => 'Следующий месяц',
        'last_30_days' => 'Последние 30 дней',
        'next_30_days' => 'Следующие 30 дней',
        'last_year' => 'Последний год',
        'this_year' => 'Текущий год',
        'next_year' => 'Следующий год',
        'isnull' => 'Без даты',
    );

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'АБУ-ДАБИ',
    'ADEN' => 'АДЕН',
    'AFGHANISTAN' => 'АФГАНИСТАН',
    'ALBANIA' => 'АЛБАНИЯ',
    'ALGERIA' => 'АЛЖИР',
    'AMERICAN SAMOA' => 'ВОСТОЧНОЕ САМОА',
    'ANDORRA' => 'АНДОРРА',
    'ANGOLA' => 'АНГОЛА',
    'ANTARCTICA' => 'АНТАРКТИДА',
    'ANTIGUA' => 'АНТИГУА',
    'ARGENTINA' => 'АРГЕНТИНА',
    'ARMENIA' => 'АРМЕНИЯ',
    'ARUBA' => 'АРУБА',
    'AUSTRALIA' => 'АВСТРАЛИЯ',
    'AUSTRIA' => 'АВСТРИЯ',
    'AZERBAIJAN' => 'АЗЕРБАЙДЖАН',
    'BAHAMAS' => 'БАГАМСКИЕ ОСТРОВА',
    'BAHRAIN' => 'БАХРЕЙН',
    'BANGLADESH' => 'БАНГЛАДЕШ',
    'BARBADOS' => 'БАРБАДОС',
    'BELARUS' => 'БЕЛАРУССИЯ',
    'BELGIUM' => 'БЕЛЬГИЯ',
    'BELIZE' => 'БЕЛИЗ',
    'BENIN' => 'БЕНИН',
    'BERMUDA' => 'БЕРМУДСКИЕ ОСТРОВА',
    'BHUTAN' => 'БУТАН',
    'BOLIVIA' => 'БОЛИВИЯ',
    'BOSNIA' => 'БОСНИЯ',
    'BOTSWANA' => 'БОТСВАНА',
    'BOUVET ISLAND' => 'ОСТРОВ БОВЕ',
    'BRAZIL' => 'БРАЗИЛИЯ',
    'BRITISH ANTARCTICA TERRITORY' => 'БРИТАНСКАЯ АНТАРКТИЧЕСКАЯ ТЕРРИТОРИЯ',
    'BRITISH INDIAN OCEAN TERRITORY' => 'БРИТАНСКАЯ ТЕРРИТОРИЯ В ИНДИЙСКОМ ОКЕАНЕ',
    'BRITISH VIRGIN ISLANDS' => 'ВИРГИНСКИЕ ОСТРОВА - ВЕЛИКОБРИТАНИЯ',
    'BRITISH WEST INDIES' => 'КАРИБСКИЕ ОСТРОВА - ВЕЛИКОБРИТАНИЯ',
    'BRUNEI' => 'БРУНЕЙ',
    'BULGARIA' => 'БОЛГАРИЯ',
    'BURKINA FASO' => 'БУРКИНА-ФАСО',
    'BURUNDI' => 'БУРУНДИ',
    'CAMBODIA' => 'КАМБОДЖИЯ',
    'CAMEROON' => 'КАМЕРУН',
    'CANADA' => 'КАНАДА',
    'CANAL ZONE' => 'ЗОНА ПАНАМСКОГО КАНАЛА',
    'CANARY ISLAND' => 'КАНАРСКИЕ ОСТРОВА',
    'CAPE VERDI ISLANDS' => 'ОСТРОВА ЗЕЛЁНОГО МЫСА',
    'CAYMAN ISLANDS' => 'КАЙМАНОВЫ ОСТРОВА',
    'CEVLON' => 'ЦЕЙЛОН',
    'CHAD' => 'ЧАД',
    'CHANNEL ISLAND UK' => 'НОРМАНДСКИЕ ОСТРОВА',
    'CHILE' => 'ЧИЛИ',
    'CHINA' => 'КИТАЙ',
    'CHRISTMAS ISLAND' => 'ОСТРОВ РОЖДЕСТВА',
    'COCOS (KEELING) ISLAND' => 'КОКОСОВЫЕ ОСТРОВА',
    'COLOMBIA' => 'КОЛУМБИЯ',
    'COMORO ISLANDS' => 'КОМОРСКИЕ ОСТРОВА',
    'CONGO' => 'КОНГО',
    'CONGO KINSHASA' => 'ЗАИР',
    'COOK ISLANDS' => 'ОСТРОВА КУКА',
    'COSTA RICA' => 'КОСТА-РИКА',
    'CROATIA' => 'ХОРВАТИЯ',
    'CUBA' => 'КУБА',
    'CURACAO' => 'КЮРАСАО',
    'CYPRUS' => 'КИПР',
    'CZECH REPUBLIC' => 'ЧЕХИЯ',
    'DAHOMEY' => 'БЕНИН',
    'DENMARK' => 'ДАНИЯ',
    'DJIBOUTI' => 'ДЖИБУТИ',
    'DOMINICA' => 'ДОМИНИКА',
    'DOMINICAN REPUBLIC' => 'ДОМИНИКАНСКАЯ РЕСПУБЛИКА',
    'DUBAI' => 'ДУБАЙ',
    'ECUADOR' => 'ЭКВАДОР',
    'EGYPT' => 'ЕГИПЕТ',
    'EL SALVADOR' => 'САЛЬВАДОР',
    'EQUATORIAL GUINEA' => 'ЭКВАТОРИАЛЬНАЯ ГВИНЕЯ',
    'ESTONIA' => 'ЭСТОНИЯ',
    'ETHIOPIA' => 'ЭФИОПИЯ',
    'FAEROE ISLANDS' => 'ФАРЕРСКИЕ ОСТРОВА',
    'FALKLAND ISLANDS' => 'ФОЛКЛЕНДСКИЕ ОСТРОВА',
    'FIJI' => 'ФИДЖИ',
    'FINLAND' => 'ФИНЛЯНДИЯ',
    'FRANCE' => 'ФРАНЦИЯ',
    'FRENCH GUIANA' => 'ФРАНЦУЗСКАЯ ГВИАНА',
    'FRENCH POLYNESIA' => 'ФРАНЦУЗСКАЯ ПОЛИНЕЗИЯ',
    'GABON' => 'ГАБОН',
    'GAMBIA' => 'ГАМБИЯ',
    'GEORGIA' => 'ГРУЗИЯ',
    'GERMANY' => 'ГЕРМАНИЯ',
    'GHANA' => 'ГАНА',
    'GIBRALTAR' => 'ГИБРАЛТАР',
    'GREECE' => 'ГРЕЦИЯ',
    'GREENLAND' => 'ГРЕНЛАНДИЯ',
    'GUADELOUPE' => 'ГВАДЕЛУПА',
    'GUAM' => 'ГУАМ',
    'GUATEMALA' => 'ГВАТЕМАЛА',
    'GUINEA' => 'ГВИНЕЯ',
    'GUYANA' => 'ГАЙАНА',
    'HAITI' => 'ГАИТИ',
    'HONDURAS' => 'ГОНДУРАС',
    'HONG KONG' => 'ГОНКОНГ',
    'HUNGARY' => 'ВЕНГРИЯ',
    'ICELAND' => 'ИСЛАНДИЯ',
    'IFNI' => 'ИФНИ',
    'INDIA' => 'ИНДИЯ',
    'INDONESIA' => 'ИНДОНЕЗИЯ',
    'IRAN' => 'ИРАН',
    'IRAQ' => 'ИРАК',
    'IRELAND' => 'ИРЛАНДИЯ',
    'ISRAEL' => 'ИЗРАИЛЬ',
    'ITALY' => 'ИТАЛИЯ',
    'IVORY COAST' => 'БЕРЕГ СЛОНОВОЙ КОСТИ',
    'JAMAICA' => 'ЯМАЙКА',
    'JAPAN' => 'ЯПОНИЯ',
    'JORDAN' => 'ИОРДАНИЯ',
    'KAZAKHSTAN' => 'КАЗАХСТАН',
    'KENYA' => 'КЕНИЯ',
    'KOREA' => 'КНДР',
    'KOREA, SOUTH' => 'ЮЖНАЯ КОРЕЯ',
    'KUWAIT' => 'КУВЕЙТ',
    'KYRGYZSTAN' => 'КИРГИЗИЯ',
    'LAOS' => 'ЛАОС',
    'LATVIA' => 'ЛАТВИЯ',
    'LEBANON' => 'ЛЕВАН',
    'LEEWARD ISLANDS' => 'ПОДВЕТРЕННЫЕ ОСТРОВА',
    'LESOTHO' => 'ЛЕСОТО',
    'LIBYA' => 'ЛИВИЯ',
    'LIECHTENSTEIN' => 'ЛИХТЕНШТЕЙН',
    'LITHUANIA' => 'ЛИТВА',
    'LUXEMBOURG' => 'ЛЮКСЕМБУРГ',
    'MACAO' => 'МАКАО',
    'MACEDONIA' => 'МАКЕДОНИЯ',
    'MADAGASCAR' => 'МАДАГАСКАР',
    'MALAWI' => 'МАЛАВИ',
    'MALAYSIA' => 'МАЛАЙЗИЯ',
    'MALDIVES' => 'МАЛЬДИВЫ',
    'MALI' => 'МАЛИ',
    'MALTA' => 'МАЛЬТА',
    'MARTINIQUE' => 'МАРТИНИКА',
    'MAURITANIA' => 'МАВРИТАНИЯ',
    'MAURITIUS' => 'МАВРИКИЙ',
    'MELANESIA' => 'МЕЛАНЕЗИЯ',
    'MEXICO' => 'МЕКСИКА',
    'MOLDOVIA' => 'МОЛДАВИЯ',
    'MONACO' => 'МОНАКО',
    'MONGOLIA' => 'МОНГОЛИЯ',
    'MOROCCO' => 'МАРОККО',
    'MOZAMBIQUE' => 'МОЗАМБИК',
    'MYANAMAR' => 'МЬЯНМА',
    'NAMIBIA' => 'НАМИБИЯ',
    'NEPAL' => 'НЕПАЛ',
    'NETHERLANDS' => 'НИДЕРЛАНДЫ',
    'NETHERLANDS ANTILLES' => 'АНТИЛЬСКИЕ ОСТРОВА',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'АНТИЛЬСКИЕ ОСТРОВА-НЕЙТРАЛЬНАЯ ЗОНА',
    'NEW CALADONIA' => 'НОВАЯ КАЛЕДОНИЯ',
    'NEW HEBRIDES' => 'НОВЫЕ ГЕБРИДЫ',
    'NEW ZEALAND' => 'НОВАЯ ЗЕЛАНДИЯ',
    'NICARAGUA' => 'НИКАРАГУА',
    'NIGER' => 'НИГЕР',
    'NIGERIA' => 'НИГЕРИЯ',
    'NORFOLK ISLAND' => 'НОРФОЛКСКИЕ ОСТРОВА',
    'NORWAY' => 'НОРВЕГИЯ',
    'OMAN' => 'ОМАН',
    'OTHER' => 'Другое',
    'PACIFIC ISLAND' => 'МАРИАНСКИЕ ОСТРОВА',
    'PAKISTAN' => 'ПАКИСТАН',
    'PANAMA' => 'ПАНАМА',
    'PAPUA NEW GUINEA' => 'ПАПУА-НОВАЯ ГВИНЕЯ',
    'PARAGUAY' => 'ПАРАГВАЙ',
    'PERU' => 'ПЕРУ',
    'PHILIPPINES' => 'ФИЛИПИНЫ',
    'POLAND' => 'ПОЛЬША',
    'PORTUGAL' => 'ПОРТУГАЛИЯ',
    'PORTUGUESE TIMOR' => 'ВОСТОЧНЫЙ ТИМОР',
    'PUERTO RICO' => 'ПУЭРТО-РИКО',
    'QATAR' => 'КАТАР',
    'REPUBLIC OF BELARUS' => 'БЕЛАРУСЬ',
    'REPUBLIC OF SOUTH AFRICA' => 'ЮЖНО-АФРИКАНСКАЯ РЕСПУБЛИКА',
    'REUNION' => 'РЕЮНЬОН',
    'ROMANIA' => 'РУМЫНИЯ',
    'RUSSIA' => 'РОССИЯ',
    'RWANDA' => 'РУАНДА',
    'RYUKYU ISLANDS' => 'ОСТРОВА РЮКЮ (НАНСЕЙ)',
    'SABAH' => 'МАЛАЙЗИЯ',
    'SAN MARINO' => 'САН-МАРИНО',
    'SAUDI ARABIA' => 'САУДОВСКАЯ АРАВИЯ',
    'SENEGAL' => 'СЕНЕГАЛ',
    'SERBIA' => 'СЕРБИЯ',
    'SEYCHELLES' => 'СЕЙШЕЛЬСКИЕ ОСТРОВА',
    'SIERRA LEONE' => 'СЬЕРРА-ЛЕОНЕ ',
    'SINGAPORE' => 'СИНГАПУР',
    'SLOVAKIA' => 'СЛОВАКИЯ',
    'SLOVENIA' => 'СЛОВЕНИЯ',
    'SOMALILIAND' => 'СОМАЛИ',
    'SOUTH AFRICA' => 'ЮЖНАЯ АФРИКА',
    'SOUTH YEMEN' => 'ЮЖНЫЙ ЙЕМЕН',
    'SPAIN' => 'ИСПАНИЯ',
    'SPANISH SAHARA' => 'ЗАПАДНАЯ САХАРА',
    'SRI LANKA' => 'ШРИ-ЛАНКА',
    'ST. KITTS AND NEVIS' => 'СЕНТ-КИТС И НЕВИС',
    'ST. LUCIA' => 'СЕНТ-ЛЮСИЯ',
    'SUDAN' => 'СУДАН',
    'SURINAM' => 'СУРИНАМ',
    'SW AFRICA' => 'НАМИБИЯ',
    'SWAZILAND' => 'СВАЗИЛЕНД',
    'SWEDEN' => 'ШВЕЦИЯ',
    'SWITZERLAND' => 'ШВЕЙЦАРИЯ',
    'SYRIA' => 'СИРИЯ',
    'TAIWAN' => 'ТАЙВАНЬ',
    'TAJIKISTAN' => 'ТАДЖИКИСТАН',
    'TANZANIA' => 'ТАНЗАНИЯ',
    'THAILAND' => 'ТАИЛАНД',
    'TONGA' => 'ТОНГА',
    'TRINIDAD' => 'ТРИНИДАД',
    'TUNISIA' => 'ТУНИС',
    'TURKEY' => 'ТУРЦИЯ',
    'UGANDA' => 'УГАНДА',
    'UKRAINE' => 'УКРАИНА',
    'UNITED ARAB EMIRATES' => 'ОАЭ',
    'UNITED KINGDOM' => 'ВЕЛИКОБРИТАНИЯ',
    'UPPER VOLTA' => 'ВЕРХНЯЯ ВОЛЬТА',
    'URUGUAY' => 'УРУГВАЙ',
    'US PACIFIC ISLAND' => 'МАРИАНСКИЕ ОСТРОВА-США',
    'US VIRGIN ISLANDS' => 'ВИРГИНСКИЕ ОСТРОВА-США',
    'USA' => 'США',
    'UZBEKISTAN' => 'УЗБЕКИСТАН',
    'VANUATU' => 'ВАНУАТУ',
    'VATICAN CITY' => 'ВАТИКАН',
    'VENEZUELA' => 'ВЕНЕСУЭЛА',
    'VIETNAM' => 'ВЬЕТНАМ',
    'WAKE ISLAND' => 'ОКЕАНИЯ',
    'WEST INDIES' => 'КАРИБСКИЕ ОСТРОВА',
    'WESTERN SAHARA' => 'ЗАПАДНАЯ САХАРА',
    'YEMEN' => 'ЙЕМЕН',
    'ZAIRE' => 'ЗАИР',
    'ZAMBIA' => 'ЗАМБИЯ',
    'ZIMBABWE' => 'ЗИМБАБВЕ',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Тайвань и Гонконг)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS кириллица)',
    'CP1252' => 'CP1252 (MS Западная Европа и США)',
    'EUC-CN' => 'EUC-CN (Упрощенный китайский GB2312)',
    'EUC-JP' => 'EUC-JP (Unix японский)',
    'EUC-KR' => 'EUC-KR (Корейский)',
    'EUC-TW' => 'EUC-TW (Тайваньский)',
    'ISO-2022-JP' => 'ISO-2022-JP (Японский)',
    'ISO-2022-KR' => 'ISO-2022-KR (Корейский)',
    'ISO-8859-1' => 'ISO-8859-1 (Западная Европа и США)',
    'ISO-8859-2' => 'ISO-8859-2 (Центральная и Восточная Европа)',
    'ISO-8859-3' => 'ISO-8859-3 (Латиница 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Латиница 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Кириллица)',
    'ISO-8859-6' => 'ISO-8859-6 (Арабский)',
    'ISO-8859-7' => 'ISO-8859-7 (Греческий)',
    'ISO-8859-8' => 'ISO-8859-8 (Иврит)',
    'ISO-8859-9' => 'ISO-8859-9 (Латиница 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Латиница 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Латиница 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Латиница 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Латиница 9)',
    'KOI8-R' => 'KOI8-R (Русская кириллица)',
    'KOI8-U' => 'KOI8-U (Украинская кириллица)',
    'SJIS' => 'SJIS (MS японский)',
    'UTF-8' => 'utf-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Африка/Алжир',
    'Africa/Luanda' => 'Африка/Луанда',
    'Africa/Porto-Novo' => 'Африка/Порто-Ново',
    'Africa/Gaborone' => 'Африка/Габороне',
    'Africa/Ouagadougou' => 'Африка/Уагадугу',
    'Africa/Bujumbura' => 'Африка/Бужумбура',
    'Africa/Douala' => 'Африка/Douala (Дуала)',
    'Atlantic/Cape_Verde' => 'Атлантика/Cape Verde (Кейп Верд)',
    'Africa/Bangui' => 'Африка/Банги',
    'Africa/Ndjamena' => 'Африка/Ndjamena (Нджамена)',
    'Indian/Comoro' => 'Индия/Comoro (Коморо)',
    'Africa/Kinshasa' => 'Африка/Киншаса',
    'Africa/Lubumbashi' => 'Африка/Lubumbashi (Лубумбаши)',
    'Africa/Brazzaville' => 'Африка/Браззавиль',
    'Africa/Abidjan' => 'Африка/Абиджан',
    'Africa/Djibouti' => 'Африка/Джибути',
    'Africa/Cairo' => 'Африка/Каир',
    'Africa/Malabo' => 'Африка/Малабо',
    'Africa/Asmera' => 'Африка/Asmera (Асмера)',
    'Africa/Addis_Ababa' => 'Африка/Аддис Абеба',
    'Africa/Libreville' => 'Африка/Либревиль',
    'Africa/Banjul' => 'Африка/Банджул',
    'Africa/Accra' => 'Африка/Аккра',
    'Africa/Conakry' => 'Африка/Конакри',
    'Africa/Bissau' => 'Африка/Бисау',
    'Africa/Nairobi' => 'Африка/Найроби',
    'Africa/Maseru' => 'Африка/Масеру',
    'Africa/Monrovia' => 'Африка/Монровия',
    'Africa/Tripoli' => 'Африка/Триполи',
    'Indian/Antananarivo' => 'Индия/Антананариву',
    'Africa/Blantyre' => 'Африка/Blantyre (Блантир)',
    'Africa/Bamako' => 'Африка/Бамако',
    'Africa/Nouakchott' => 'Африка/Нуакшот',
    'Indian/Mauritius' => 'Индия/Маврикий',
    'Indian/Mayotte' => 'Индия/Mayotte',
    'Africa/Casablanca' => 'Африка/Касабланка',
    'Africa/El_Aaiun' => 'Африка/El_Aaiun (Эль-Ааяюн)',
    'Africa/Maputo' => 'Африка/Мапуто',
    'Africa/Windhoek' => 'Африка/Виндхук',
    'Africa/Niamey' => 'Африка/Ниамей',
    'Africa/Lagos' => 'Африка/Лагос',
    'Indian/Reunion' => 'Индия/Reunion (Реюнион)',
    'Africa/Kigali' => 'Африка/Кигали',
    'Atlantic/St_Helena' => 'Атлантика/St. Helena (Сент Хелена)',
    'Africa/Sao_Tome' => 'Африка/Сан-Томе',
    'Africa/Dakar' => 'Африка/Дакар',
    'Indian/Mahe' => 'Индия/Mahe (Махе)',
    'Africa/Freetown' => 'Африка/Фритаун',
    'Africa/Mogadishu' => 'Африка/Могадишо',
    'Africa/Johannesburg' => 'Африка/Йоханнесбург',
    'Africa/Khartoum' => 'Африка/Хартум',
    'Africa/Mbabane' => 'Африка/Мбабане',
    'Africa/Dar_es_Salaam' => 'Африка/Дар-эс-Салам',
    'Africa/Lome' => 'Африка/Ломе',
    'Africa/Tunis' => 'Африка/Тунис',
    'Africa/Kampala' => 'Африка/Кампала',
    'Africa/Lusaka' => 'Африка/Лусака',
    'Africa/Harare' => 'Африка/Хараре',
    'Antarctica/Casey' => 'Антарктика/Casey (Кейзи)',
    'Antarctica/Davis' => 'Антарктика/Davis (Дэвис)',
    'Antarctica/Mawson' => 'Антарктика/Mawson (Мэйсон)',
    'Indian/Kerguelen' => 'Индия/Kerguelen (Кергелен)',
    'Antarctica/DumontDUrville' => 'Антарктика/DumontDUrville (ДюмонДЮрвилль)',
    'Antarctica/Syowa' => 'Антарктика/Syowa (Сйова)',
    'Antarctica/Vostok' => 'Антарктика/Восток',
    'Antarctica/Rothera' => 'Антарктика/Rothera (Ротера)',
    'Antarctica/Palmer' => 'Антарктика/Palmer (Палмер)',
    'Antarctica/McMurdo' => 'Антарктика/McMurdo (Макмурдо)',
    'Asia/Kabul' => 'Азия/Кабул',
    'Asia/Yerevan' => 'Азия/Ереван',
    'Asia/Baku' => 'Азия/Баку',
    'Asia/Bahrain' => 'Азия/Бахрейн',
    'Asia/Dhaka' => 'Азия/Дакка',
    'Asia/Thimphu' => 'Азия/Тхимпху',
    'Indian/Chagos' => 'Индия/Chagos (Чагос)',
    'Asia/Brunei' => 'Азия/Бруней',
    'Asia/Rangoon' => 'Азия/Рангун (Ягон)',
    'Asia/Phnom_Penh' => 'Азия/Пномпень',
    'Asia/Beijing' => 'Азия/Пекин',
    'Asia/Harbin' => 'Азия/Харбин',
    'Asia/Shanghai' => 'Азия/Шанхай',
    'Asia/Chongqing' => 'Азия/Chongqing (Чонгкинг)',
    'Asia/Urumqi' => 'Азия/Urumqi (Урумки)',
    'Asia/Kashgar' => 'Азия/Kashgar (Кашгар)',
    'Asia/Hong_Kong' => 'Азия/Гонконг',
    'Asia/Taipei' => 'Азия/Тайбэй',
    'Asia/Macau' => 'Азия/Macau (Макау)',
    'Asia/Nicosia' => 'Азия/Никосия',
    'Asia/Tbilisi' => 'Азия/Тбилиси',
    'Asia/Dili' => 'Азия/Дили',
    'Asia/Calcutta' => 'Азия/Калькутта',
    'Asia/Jakarta' => 'Азия/Джакарта',
    'Asia/Pontianak' => 'Азия/Pontianak (Понтьянак)',
    'Asia/Makassar' => 'Азия/Makassar (Макассар)',
    'Asia/Jayapura' => 'Азия/Jayapura (Джаяпура)',
    'Asia/Tehran' => 'Азия/Тегеран',
    'Asia/Baghdad' => 'Азия/Багдад',
    'Asia/Jerusalem' => 'Азия/Иерусалим',
    'Asia/Tokyo' => 'Азия/Токио',
    'Asia/Amman' => 'Азия/Амман',
    'Asia/Almaty' => 'Азия/Алматы',
    'Asia/Qyzylorda' => 'Азия/Qyzylorda (Квизилорда)',
    'Asia/Aqtobe' => 'Азия/Aqtobe (Актобе)',
    'Asia/Aqtau' => 'Азия/Aqtau (Актау)',
    'Asia/Oral' => 'Азия/Oral (Орал)',
    'Asia/Bishkek' => 'Азия/Бишкек',
    'Asia/Seoul' => 'Азия/Сеул',
    'Asia/Pyongyang' => 'Азия/Пхеньян',
    'Asia/Kuwait' => 'Азия/Кувейт',
    'Asia/Vientiane' => 'Азия/Вьентьян',
    'Asia/Beirut' => 'Азия/Бейрут',
    'Asia/Kuala_Lumpur' => 'Азия/Куала-Лумпур',
    'Asia/Kuching' => 'Азия/Кучинг',
    'Indian/Maldives' => 'Индия/Мальдивы',
    'Asia/Hovd' => 'Азия/Hovd (Ховд)',
    'Asia/Ulaanbaatar' => 'Азия/Ulaanbaatar (Улаанбатаар)',
    'Asia/Choibalsan' => 'Азия/Choibalsan (Чоибалсан)',
    'Asia/Katmandu' => 'Азия/Катманду',
    'Asia/Muscat' => 'Азия/Маскат',
    'Asia/Karachi' => 'Азия/Карачи',
    'Asia/Gaza' => 'Азия/Газа',
    'Asia/Manila' => 'Азия/Манила',
    'Asia/Qatar' => 'Азия/Катар',
    'Asia/Riyadh' => 'Азия/Эр-Рияд',
    'Asia/Singapore' => 'Азия/Сингапур',
    'Asia/Colombo' => 'Азия/Коломбо',
    'Asia/Damascus' => 'Азия/Дамаск',
    'Asia/Dushanbe' => 'Азия/Душанбе',
    'Asia/Bangkok' => 'Азия/Бангкок',
    'Asia/Ashgabat' => 'Азия/Ашгабат',
    'Asia/Dubai' => 'Азия/Дубаи',
    'Asia/Samarkand' => 'Азия/Самарканд',
    'Asia/Tashkent' => 'Азия/Ташкент',
    'Asia/Saigon' => 'Азия/Сайгон',
    'Asia/Aden' => 'Азия/Аден',
    'Australia/Darwin' => 'Австралия/Дарвин',
    'Australia/Perth' => 'Австралия/Перт',
    'Australia/Brisbane' => 'Австралия/Брисбен',
    'Australia/Lindeman' => 'Австралия/Lindeman (Линдемен)',
    'Australia/Adelaide' => 'Австралия/Аделаида',
    'Australia/Hobart' => 'Австралия/Хобарт',
    'Australia/Currie' => 'Австралия/Currie (Керри)',
    'Australia/Melbourne' => 'Австралия/Мельбурн',
    'Australia/Sydney' => 'Австралия/Сидней',
    'Australia/Broken_Hill' => 'Австралия/Broken_Hill (Броукен Хилл)',
    'Indian/Christmas' => 'Индия/Christmas (Кристмас)',
    'Pacific/Rarotonga' => 'Тихоокеанский регион/Раротонга',
    'Indian/Cocos' => 'Индия/Cocos (Кокос)',
    'Pacific/Fiji' => 'Тихоокеанский регион/Фиджи',
    'Pacific/Gambier' => 'Тихоокеанский регион/Gambier (Гамбьер)',
    'Pacific/Marquesas' => 'Тихоокеанский регион/Маркизские острова',
    'Pacific/Tahiti' => 'Тихоокеанский регион/Таити',
    'Pacific/Guam' => 'Тихоокеанский регион/Гуам',
    'Pacific/Tarawa' => 'Тихоокеанский регион/Тарава',
    'Pacific/Enderbury' => 'Тихоокеанский регион/Enderbury (Эндербери)',
    'Pacific/Kiritimati' => 'Тихоокеанский регион/Kiritimati (Киритимати)',
    'Pacific/Saipan' => 'Тихоокеанский регион/Сайпан',
    'Pacific/Majuro' => 'Тихоокеанский регион/Majuro (Маюро)',
    'Pacific/Kwajalein' => 'Тихоокеанский регион/Kwajalein (Квайялейн)',
    'Pacific/Truk' => 'Тихоокеанский регион/Truk (Трук)',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Тихоокеанский регион/Kosrae (Косрае)',
    'Pacific/Nauru' => 'Тихоокеанский регион/Науру',
    'Pacific/Noumea' => 'Тихоокеанский регион/Нумеа',
    'Pacific/Auckland' => 'Тихоокеанский регион/Окленд',
    'Pacific/Chatham' => 'Тихоокеанский регион/Чатем',
    'Pacific/Niue' => 'Тихоокеанский регион/Ниуэ',
    'Pacific/Norfolk' => 'Тихоокеанский регион/Норфолк',
    'Pacific/Palau' => 'Тихоокеанский регион/Палау',
    'Pacific/Port_Moresby' => 'Тихоокеанский регион/Порт-Морсби',
    'Pacific/Pitcairn' => 'Тихоокеанский регион/Pitcairn (Питкаирн)',
    'Pacific/Pago_Pago' => 'Тихоокеанский регион/Паго-Паго',
    'Pacific/Apia' => 'Тихоокеанский регион/Апиа',
    'Pacific/Guadalcanal' => 'Тихоокеанский регион/Гуадалканал',
    'Pacific/Fakaofo' => 'Тихоокеанский регион/Fakaofo (Факаофо)',
    'Pacific/Tongatapu' => 'Тихоокеанский регион/Tongatapu (Тонгатапу)',
    'Pacific/Funafuti' => 'Тихоокеанский регион/Фунафути',
    'Pacific/Johnston' => 'Тихоокеанский регион/Johnston (Джонстон)',
    'Pacific/Midway' => 'Тихоокеанский регион/Острова Мидуэй',
    'Pacific/Wake' => 'Тихоокеанский регион/Wake (Уэйк)',
    'Pacific/Efate' => 'Тихоокеанский регион/Efate (Ифейт)',
    'Pacific/Wallis' => 'Тихоокеанский регион/Wallis (Воллис)',
    'Europe/London' => 'Европа/Лондон',
    'Europe/Dublin' => 'Европа/Дублин',
    'WET' => 'WET (западноевропейское время)',
    'CET' => 'CET (центральноевропейское время)',
    'MET' => 'MET (среднеевропейское время)',
    'EET' => 'EET (восточноевропейское поясное время)',
    'Europe/Tirane' => 'Европа/Тирана',
    'Europe/Andorra' => 'Европа/Андорра',
    'Europe/Vienna' => 'Европа/Вена',
    'Europe/Minsk' => 'Европа/Минск',
    'Europe/Brussels' => 'Европа/Брюссель',
    'Europe/Sofia' => 'Европа/София',
    'Europe/Prague' => 'Европа/Прага',
    'Europe/Copenhagen' => 'Европа/Копенгаген',
    'Atlantic/Faeroe' => 'Атлантика/Faeroe (Фаерое)',
    'America/Danmarkshavn' => 'Америка/Danmarkshavn (Данмаркшавн)',
    'America/Scoresbysund' => 'Америка/Scoresbysund (Скорсбисунд)',
    'America/Godthab' => 'Америка/Godthab (Годтаб)',
    'America/Thule' => 'Америка/Thule (Тул)',
    'Europe/Tallinn' => 'Европа/Таллин',
    'Europe/Helsinki' => 'Европа/Хельсинки',
    'Europe/Paris' => 'Европа/Париж',
    'Europe/Berlin' => 'Европа/Берлин',
    'Europe/Gibraltar' => 'Европа/Гибралтар',
    'Europe/Athens' => 'Европа/Афины',
    'Europe/Budapest' => 'Европа/Будапешт',
    'Atlantic/Reykjavik' => 'Атлантика/Рейкьявик',
    'Europe/Rome' => 'Европа/Рим',
    'Europe/Riga' => 'Европа/Рига',
    'Europe/Vaduz' => 'Европа/Вадуц',
    'Europe/Vilnius' => 'Европа/Вильнюс',
    'Europe/Luxembourg' => 'Европа/Люксембург',
    'Europe/Malta' => 'Европа/Мальта',
    'Europe/Chisinau' => 'Европа/Кишинёв',
    'Europe/Monaco' => 'Европа/Монако',
    'Europe/Amsterdam' => 'Европа/Амстердам',
    'Europe/Oslo' => 'Европа/Осло',
    'Europe/Warsaw' => 'Европа/Варшава',
    'Europe/Lisbon' => 'Европа/Лиссабон',
    'Atlantic/Azores' => 'Атлантика/Азорские острова',
    'Atlantic/Madeira' => 'Атлантика/Madeira (Мадейра)',
    'Europe/Bucharest' => 'Европа/Бухарест',
    'Europe/Kaliningrad' => 'Европа/Калининград',
    'Europe/Moscow' => 'Европа/Москва',
    'Europe/Samara' => 'Европа/Самара',
    'Asia/Yekaterinburg' => 'Азия/Екатеринбург',
    'Asia/Omsk' => 'Азия/Омск',
    'Asia/Novosibirsk' => 'Азия/Новосибирск',
    'Asia/Krasnoyarsk' => 'Азия/Красноярск',
    'Asia/Irkutsk' => 'Азия/Иркутск',
    'Asia/Yakutsk' => 'Азия/Якутск',
    'Asia/Vladivostok' => 'Азия/Владивосток',
    'Asia/Sakhalin' => 'Азия/Сахалин',
    'Asia/Magadan' => 'Азия/Магадан',
    'Asia/Kamchatka' => 'Азия/Камчатка',
    'Asia/Anadyr' => 'Азия/Анадырь',
    'Europe/Belgrade' => 'Европа/Белград',
    'Europe/Madrid' => 'Европа/Мадрид',
    'Africa/Ceuta' => 'Африка/Ceuta (Кеута)',
    'Atlantic/Canary' => 'Атлинтика/ Канарские острова',
    'Europe/Stockholm' => 'Европа/Стокгольм',
    'Europe/Zurich' => 'Европа/Цюрих',
    'Europe/Istanbul' => 'Европа/Стамбул',
    'Europe/Kiev' => 'Европа/Киев',
    'Europe/Uzhgorod' => 'Европа/Ужгород',
    'Europe/Zaporozhye' => 'Европа/Запорожье',
    'Europe/Simferopol' => 'Европа/Симферополь',
    'America/New_York' => 'Америка/Нью-Йорк',
    'America/Chicago' => 'Америка/Чикаго',
    'America/North_Dakota/Center' => 'Америка/Северная Дакота/Center (Сентер)',
    'America/Denver' => 'Америка/Денвер',
    'America/Los_Angeles' => 'Америка/Лос-Анджелес',
    'America/Juneau' => 'Америка/Джуно',
    'America/Yakutat' => 'Америка/Yakutat (Якутат)',
    'America/Anchorage' => 'Америка/Anchorage (Анкораж)',
    'America/Nome' => 'Америка/Ном',
    'America/Adak' => 'Америка/Adak (Адак)',
    'Pacific/Honolulu' => 'Тихоокеанский регион/Гонолулу',
    'America/Phoenix' => 'Америка/Феникс',
    'America/Boise' => 'Америка/Бойсе',
    'America/Indiana/Indianapolis' => 'Америка/Индиана/Индианаполис',
    'America/Indiana/Marengo' => 'Америка/Индиана/Marengo (Маренго)',
    'America/Indiana/Knox' => 'Америка/Индиана/Knox (Кнокс)',
    'America/Indiana/Vevay' => 'Америка/Индиана/Vevay (Вевай)',
    'America/Kentucky/Louisville' => 'Америка/Кентукки/Луисвилл',
    'America/Kentucky/Monticello' => 'Америка/Кентукки/Monticello (Монтиселло)',
    'America/Detroit' => 'Америка/Детройт',
    'America/Menominee' => 'Америка/Menominee (Меномини)',
    'America/St_Johns' => 'Америка/St. Johns (Сент Джонс)',
    'America/Goose_Bay' => 'Америка/Goose Bay (Гуз Бей)',
    'America/Halifax' => 'Америка/Галифакс',
    'America/Glace_Bay' => 'Америка/Glace Bay (Глейс Бей)',
    'America/Montreal' => 'Америка/Монреаль',
    'America/Toronto' => 'Америка/Торонто',
    'America/Thunder_Bay' => 'Америка/Thunder Bay (Санде Бей)',
    'America/Nipigon' => 'Америка/Нипигон',
    'America/Rainy_River' => 'Америка/Rainy River (Рейни Риве)',
    'America/Winnipeg' => 'Америка/Виннипег',
    'America/Regina' => 'Америка/Риджайна',
    'America/Swift_Current' => 'Америка/Swift Current (Свифт Карент)',
    'America/Edmonton' => 'Америка/Эдмонтон',
    'America/Vancouver' => 'Америка/Ванкувер',
    'America/Dawson_Creek' => 'Америка/Dawson Creek (Доусон Крик)',
    'America/Pangnirtung' => 'Америка/Pangnirtung (Пангнитунг)',
    'America/Iqaluit' => 'Америка/Икалуит',
    'America/Coral_Harbour' => 'Америка/Coral Harbour (Корал Харбор)',
    'America/Rankin_Inlet' => 'Америка/Rankin Inlet (Ранкин Инлет)',
    'America/Cambridge_Bay' => 'Америка/Cambridge Bay (Кембрижд Бей)',
    'America/Yellowknife' => 'Америка/Yellowknife (Йелоу Найф)',
    'America/Inuvik' => 'Америка/Inuvik (Инувик)',
    'America/Whitehorse' => 'Америка/Whitehorse (Уайтхорс)',
    'America/Dawson' => 'Америка/Dawson (Доусон)',
    'America/Cancun' => 'Америка/Cancun (Канкун)',
    'America/Merida' => 'Америка/Merida (Мерида)',
    'America/Monterrey' => 'Америка/Монтеррей',
    'America/Mexico_City' => 'Америка/Мехико',
    'America/Chihuahua' => 'Америка/Chihuahua (Чихуахуа)',
    'America/Hermosillo' => 'Америка/Hermosillo (Гермосилло)',
    'America/Mazatlan' => 'Америка/Mazatlan (Мазатлан)',
    'America/Tijuana' => 'Америка/Tijuana (Тихуана)',
    'America/Anguilla' => 'Америка/Anguilla (Анкилла)',
    'America/Antigua' => 'Америка/Антигуа',
    'America/Nassau' => 'Америка/Нассау',
    'America/Barbados' => 'Америка/Барбадос',
    'America/Belize' => 'Америка/Белиз',
    'Atlantic/Bermuda' => 'Атлантика/Бермудские острова',
    'America/Cayman' => 'Америка/Каймановы острова',
    'America/Costa_Rica' => 'Америка/Коста-Рика',
    'America/Havana' => 'Америка/Гавана',
    'America/Dominica' => 'Америка/Доминика',
    'America/Santo_Domingo' => 'Америка/Санто-Доминго',
    'America/El_Salvador' => 'Америка/Сальвадор',
    'America/Grenada' => 'Америка/Гренада',
    'America/Guadeloupe' => 'Америка/Гваделупа',
    'America/Guatemala' => 'Америка/Гватемала',
    'America/Port-au-Prince' => 'Америка/Порт-о-Пренс',
    'America/Tegucigalpa' => 'Америка/Тегусигальпа',
    'America/Jamaica' => 'Америка/Ямайка',
    'America/Martinique' => 'Америка/Мартиника',
    'America/Montserrat' => 'Америка/Montserrat (Монтсеррат)',
    'America/Managua' => 'Америка/Манагуа',
    'America/Panama' => 'Америка/Панама',
    'America/Puerto_Rico' => 'Америка/Пуэрто-Рико',
    'America/St_Kitts' => 'Америка/Сент-Китс',
    'America/St_Lucia' => 'Америка/Сент-Люсия',
    'America/Miquelon' => 'Америка/Miquelon (Микелон)',
    'America/St_Vincent' => 'Америка/Сент-Винсент',
    'America/Grand_Turk' => 'Америка/Grand_Turk (Гранд-Турк)',
    'America/Tortola' => 'Америка/Tortola (Тортола)',
    'America/St_Thomas' => 'Америка/St. Thomas (Сент Томас)',
    'America/Argentina/Buenos_Aires' => 'Америка/Аргентина/Буэнос-Айрес',
    'America/Argentina/Cordoba' => 'Америка/Аргентина/Кордова',
    'America/Argentina/Tucuman' => 'Америка/Аргентина/Tucuman (Тукуман)',
    'America/Argentina/La_Rioja' => 'Америка/Аргентина/La Rioja (Ла Риойя)',
    'America/Argentina/San_Juan' => 'Америка/Аргентина/Сан-Хуан',
    'America/Argentina/Jujuy' => 'Америка/Аргентина/Jujuy (Джуйю)',
    'America/Argentina/Catamarca' => 'Америка/Аргентина/Catamarca (Катамарка)',
    'America/Argentina/Mendoza' => 'Америка/Аргентина/Mendoza (Мендоза)',
    'America/Argentina/Rio_Gallegos' => 'Америка/Аргентина/Rio Gallegos (Рио-Галлегос)',
    'America/Argentina/Ushuaia' => 'Америка/Аргентина/Ushuaia (Ушуайя)',
    'America/Aruba' => 'Америка/Аруба',
    'America/La_Paz' => 'Америка/Ла-Пас',
    'America/Noronha' => 'Америка/Noronha (Норонха)',
    'America/Belem' => 'Америка/Белен',
    'America/Fortaleza' => 'Америка/Fortaleza (Форталеза)',
    'America/Recife' => 'Америка/Ресифи',
    'America/Araguaina' => 'Америка/Araguaina (Арагуйяна)',
    'America/Maceio' => 'Америка/Maceio (Масейо)',
    'America/Bahia' => 'Америка/Bahia (Бахья)',
    'America/Sao_Paulo' => 'Америка/Сан-Паулу',
    'America/Campo_Grande' => 'Америка/Campo_Grande (Кампо Гранде)',
    'America/Cuiaba' => 'Америка/Cuiaba (Куйяба)',
    'America/Porto_Velho' => 'Америка/Porto Velho (Порто Велхо)',
    'America/Boa_Vista' => 'Америка/Boa_Vista (Боа Виста)',
    'America/Manaus' => 'Америка/Манаус',
    'America/Eirunepe' => 'Америка/Eirunepe (Ейрунепе)',
    'America/Rio_Branco' => 'Америка/Rio Branco (Рио-Бранко)',
    'America/Santiago' => 'Америка/Сантьяго',
    'Pacific/Easter' => 'Тихоокеанский регион/О. Пасхи',
    'America/Bogota' => 'Америка/Богота',
    'America/Curacao' => 'Америка/Кюрасао',
    'America/Guayaquil' => 'Америка/Гуаякиль',
    'Pacific/Galapagos' => 'Тихоокеанский регион/Черепашьи острова',
    'Atlantic/Stanley' => 'Атлантика/Stanley (Стенли)',
    'America/Cayenne' => 'Америка/Кайенна',
    'America/Guyana' => 'Америка/Гайана',
    'America/Asuncion' => 'Америка/Асунсьон',
    'America/Lima' => 'Америка/Лима',
    'Atlantic/South_Georgia' => 'Атлантика/South Georgia (Саус Джорджия)',
    'America/Paramaribo' => 'Америка/Парамарибо',
    'America/Port_of_Spain' => 'Америка/Порт-оф-Спейн',
    'America/Montevideo' => 'Америка/Монтевидео',
    'America/Caracas' => 'Америка/Каракас',
);

$app_list_strings['moduleList']['Sugar_Favorites'] = 'Избранное';
$app_list_strings['eapm_list'] = array(
    'Sugar' => 'Suite',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.NET',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Контакты',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Токен запроса',
    2 => 'Токен доступа',
    3 => 'Неверный токен',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Маркетинг',
    'email' => 'E-mail',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Маркетинг',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Маркетинг',
    'email' => 'E-mail',
);
$app_strings ['documentation'] = array(
    'LBL_DOCS' => 'Документация',
    'ULT' => '02_Sugar_Ultimate',
    'ENT' => '02_Sugar_Enterprise',
    'CORP' => '03_Sugar_Corporate',
    'PRO' => '04_Sugar_Professional',
    'COM' => '05_Sugar_Community_Edition',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'База знаний'; // Shows in the ALL menu entries
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - категории'; // Shows in the ALL menu entries
$app_list_strings['aok_status_list']['Draft'] = 'Черновик';
$app_list_strings['aok_status_list']['Expired'] = 'Просрочена';
$app_list_strings['aok_status_list']['In_Review'] = 'На рассмотрении';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Не опубликована';
$app_list_strings['aok_status_list']['published_public'] = 'Опубликована';

$app_list_strings['moduleList']['FP_events'] = 'События';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Места';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Приглашён';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Не приглашён';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Участвовал';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Не участвовал';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Принято';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Отклонено';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Ответ не получен';

$app_strings['LBL_STATUS_EVENT'] = 'Статус приглашения';
$app_strings['LBL_ACCEPT_STATUS'] = 'Статус приглашения';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Текущая страница';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Все записи';
$app_strings['LBL_LISTVIEW_NONE'] = 'Отменить выбор';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Индексирование';
$app_list_strings['moduleList']['AOD_Index'] = 'Индекс';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'События обращения';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Обновления обращения';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'События обращения';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Обновления обращения';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Пожалуйста, пишите ответ выше этой линии ==========';



//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Открыт',
        'Closed' => 'Закрыто',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Создать',
        'Open_Assigned' => 'Назначенный',
        'Closed_Closed' => 'Закрыто',
        'Open_Pending Input' => 'Ожидание решения',
        'Closed_Rejected' => 'Отклонённое',
        'Closed_Duplicate' => 'Дублировать',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Указанный пользователь',
        'Account' => 'Учётная запись пользователя',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Стандартный',
    'singleUser' => 'Указанный пользователь',
    'roundRobin' => 'В цикле',
    'leastBusy' => 'Наименее занятой',
    'random' => 'Случайный',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Отчёт';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Условия отчёта';
$app_list_strings['moduleList']['AOR_Charts'] = 'Графики отчетов';
$app_list_strings['moduleList']['AOR_Fields'] = 'Поля отчёта';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Отчёты по расписанию';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Равно';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'НЕ равно';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Больше';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Меньше';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Больше или равно';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Меньше или равно';
$app_list_strings['aor_operator_list']['Contains'] = 'Содержит';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Начинается с';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Оканчивается на';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Г-м-д';
$app_list_strings['aor_format_options']['Ymd'] = 'Гмд';
$app_list_strings['aor_format_options']['Y-m'] = 'Г-м';
$app_list_strings['aor_format_options']['d/m/Y'] = 'д/м/Г';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'И';
$app_list_strings['aor_condition_operator_list']['OR'] = 'ИЛИ';
$app_list_strings['aor_condition_type_list']['Value'] = 'Значение';
$app_list_strings['aor_condition_type_list']['Field'] = 'Поле';
$app_list_strings['aor_condition_type_list']['Date'] = 'Дата';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Мультивыбор';
$app_list_strings['aor_condition_type_list']['Period'] = 'Период';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Текущий пользователь';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'мин.';
$app_list_strings['aor_date_type_list']['hour'] = 'Часов';
$app_list_strings['aor_date_type_list']['day'] = 'Дней';
$app_list_strings['aor_date_type_list']['week'] = 'недель';
$app_list_strings['aor_date_type_list']['month'] = 'Месяцев';
$app_list_strings['aor_date_type_list']['business_hours'] = 'График работы';
$app_list_strings['aor_date_options']['now'] = 'Сейчас';
$app_list_strings['aor_date_options']['field'] = 'Это поле';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Восходящая';
$app_list_strings['aor_sort_operator']['DESC'] = 'Нисходящая';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Количество';
$app_list_strings['aor_function_list']['MIN'] = 'МИНИМУМ';
$app_list_strings['aor_function_list']['MAX'] = 'МАКСИМУМ';
$app_list_strings['aor_function_list']['SUM'] = 'СУММА';
$app_list_strings['aor_function_list']['AVG'] = 'СРЕДНЕЕ';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Количество';
$app_list_strings['aor_total_options']['SUM'] = 'СУММА';
$app_list_strings['aor_total_options']['AVG'] = 'СРЕДНЕЕ';
$app_list_strings['aor_chart_types']['bar'] = 'Линейчатая диаграмма';
$app_list_strings['aor_chart_types']['line'] = 'График';
$app_list_strings['aor_chart_types']['pie'] = 'Круговая диаграмма';
$app_list_strings['aor_chart_types']['radar'] = 'Лепестковая диаграмма';
$app_list_strings['aor_chart_types']['polar'] = 'Полярная диаграмма';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Гистограмма с накоплением';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Гистограмма с группировкой';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Ежемесячно';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Еженедельно';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Ежедневно';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Активно';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Не активно';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Пользователь: ';
$app_list_strings['aor_email_type_list']['Users'] = 'Пользователи';
$app_list_strings['aor_assign_options']['all'] = 'ВСЕ пользователи';
$app_list_strings['aor_assign_options']['role'] = 'ВСЕ пользователи из Роли';
$app_list_strings['aor_assign_options']['security_group'] = 'ВСЕ пользователи из Группы';
$app_list_strings['date_time_period_list']['today'] = 'Сегодня';
$app_list_strings['date_time_period_list']['yesterday'] = 'Вчера';
$app_list_strings['date_time_period_list']['this_week'] = 'На этой неделе';
$app_list_strings['date_time_period_list']['last_week'] = 'Прошлая неделя';
$app_list_strings['date_time_period_list']['last_month'] = 'Прошлый месяц';
$app_list_strings['date_time_period_list']['this_month'] = 'Этот месяц';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Этот квартал';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Прошлый квартал';
$app_list_strings['date_time_period_list']['this_year'] = 'В этом году';
$app_list_strings['date_time_period_list']['last_year'] = 'В прошлом году';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'число';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'в';
$app_strings['LBL_CRON_AT'] = 'в';
$app_strings['LBL_CRON_RAW'] = 'Crontab-нотация';
$app_strings['LBL_CRON_MIN'] = 'Мин.';
$app_strings['LBL_CRON_HOUR'] = 'Час';
$app_strings['LBL_CRON_DAY'] = 'День';
$app_strings['LBL_CRON_MONTH'] = 'Месяц';
$app_strings['LBL_CRON_DOW'] = 'День недели';
$app_strings['LBL_CRON_DAILY'] = 'Ежедневно';
$app_strings['LBL_CRON_WEEKLY'] = 'Еженедельно';
$app_strings['LBL_CRON_MONTHLY'] = 'Ежемесячно';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Договоры';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Счета';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - шаблоны';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'Товары';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Позиции';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Группа позиций';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Предложения';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Аналитик';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Конкурент';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Клиент';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Интегратор';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Инвестор';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Партнёр';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Пресса';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Потенциальный клиент';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Реселлер';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Другое';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Черновик';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Согласование';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Поставлено';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Ведётся';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Подтверждено';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Принято и закрыто';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Закрыто с потерями /Товар возвращён';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Закрыто с прекращением';
$app_list_strings['quote_term_dom']['Net 15'] = 'Net 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Net 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Утверждено';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Не утверждено';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0.0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Процент';
$app_list_strings['discount_list']['Amount'] = 'Сумма';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Аналитик';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Конкурент';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Клиент';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Интегратор';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Инвестор';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Партнёр';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Пресса';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Потенциальный клиент';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Реселлер';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Другое';
$app_list_strings['invoice_status_dom']['Paid'] = 'Оплачен';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Не оплачен';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Аннулирован';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Не преобразовано в счёт';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Преобразовано в счёт';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Ноутбуки';
$app_list_strings['product_category_dom']['Desktops'] = 'Системные блоки';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Товар';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Предложения';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Счета';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Договоры';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Предложения';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Счета';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Договоры';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Контрагенты';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Контакты';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Предварительные контакты';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Проект';
$app_list_strings['contract_status_list']['In Progress'] = 'В процессе';
$app_list_strings['contract_status_list']['Signed'] = 'Подписан';
$app_list_strings['contract_type_list']['Type'] = 'Тип';
$app_strings['LBL_GENERATE_LETTER'] = 'Создать письмо (PDF)';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Пожалуйста, выберите шаблон';
$app_strings['LBL_NO_TEMPLATE'] = 'ОШИБКА\nШаблоны не обнаружены.\nОткройте модуль PDF-шаблонов и создайте необходимый шаблон.';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Процессы';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Условия';
$app_list_strings['moduleList']['AOW_Processed'] = 'Контроль процесса';
$app_list_strings['moduleList']['AOW_Actions'] = 'Действия';
$app_list_strings['aow_status_list']['Active'] = 'Активный';
$app_list_strings['aow_status_list']['Inactive'] = 'Неактивен';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Равно';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'НЕ равно';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Больше';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Меньше';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Больше или равно';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Меньше или равно';
$app_list_strings['aow_operator_list']['Contains'] = 'Содержит';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Начинается с';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Оканчивается на';
$app_list_strings['aow_operator_list']['is_null'] = 'Без даты';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aow_sql_operator_list']['Contains'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Starts_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Ends_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['is_null'] = 'IS NULL';
$app_list_strings['aow_process_status_list']['Complete'] = 'Завершена';
$app_list_strings['aow_process_status_list']['Running'] = 'Выполняется';
$app_list_strings['aow_process_status_list']['Pending'] = 'Ожидание решения';
$app_list_strings['aow_process_status_list']['Failed'] = 'Неудачно';
$app_list_strings['aow_condition_operator_list']['And'] = 'И';
$app_list_strings['aow_condition_operator_list']['OR'] = 'ИЛИ';
$app_list_strings['aow_condition_type_list']['Value'] = 'Значение';
$app_list_strings['aow_condition_type_list']['Field'] = 'Поле';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Изменение';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Состоит в Группе пользователей';
$app_list_strings['aow_condition_type_list']['Date'] = 'Дата';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Мультивыбор';
$app_list_strings['aow_action_type_list']['Value'] = 'Значение';
$app_list_strings['aow_action_type_list']['Field'] = 'Поле';
$app_list_strings['aow_action_type_list']['Date'] = 'Дата';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Назначение в цикле';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Назначение наименее занятого';
$app_list_strings['aow_action_type_list']['Random'] = 'Случайный';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Значение';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Поле';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'мин.';
$app_list_strings['aow_date_type_list']['hour'] = 'Часов';
$app_list_strings['aow_date_type_list']['day'] = 'Дней';
$app_list_strings['aow_date_type_list']['week'] = 'недель';
$app_list_strings['aow_date_type_list']['month'] = 'Месяцев';
$app_list_strings['aow_date_type_list']['business_hours'] = 'График работы';
$app_list_strings['aow_date_options']['now'] = 'Сейчас';
$app_list_strings['aow_date_options']['today'] = 'Сегодня';
$app_list_strings['aow_date_options']['field'] = 'Это поле';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ВСЕ пользователи';
$app_list_strings['aow_assign_options']['role'] = 'ВСЕ пользователи из Роли';
$app_list_strings['aow_assign_options']['security_group'] = 'ВСЕ пользователи из Группы';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Отобранной записи';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Связанной записи';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Пользователь: ';
$app_list_strings['aow_email_type_list']['Users'] = 'Пользователи';
$app_list_strings['aow_email_to_list']['to'] = 'Кому';
$app_list_strings['aow_email_to_list']['cc'] = 'Копия';
$app_list_strings['aow_email_to_list']['bcc'] = 'Скрытая копия';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Всех записей';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Создаваемых записей';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Изменяемых записей';
$app_list_strings['aow_run_when_list']['Always'] = 'Всегда';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Только при сохранении записи';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Только по расписанию в Планировщике';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Проекты - шаблоны';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Шаблоны проектных задач';
$app_list_strings['relationship_type_list']['FS'] = 'Окончание-Начало';
$app_list_strings['relationship_type_list']['SS'] = 'Начало-Окончание';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Каникулы проекта';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Контакты';
$app_list_strings['holiday_resource_dom']['Users'] = 'Пользователи';
$app_list_strings['duration_unit_dom']['Days'] = 'Дней';
$app_list_strings['duration_unit_dom']['Hours'] = 'Часов';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'View Gantt';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'View Gantt';
$app_strings['LBL_CREATE_PROJECT'] = 'Создать проект';

//gmaps
$app_strings['LBL_MAP'] = 'Карта';
$app_strings['LBL_MAPS'] = 'Карты';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Долгота';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Широта';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Геокод';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Адрес';
$app_strings['LBL_BUG_FIX'] = 'Исправление Ошибки';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Карты';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Карты - маркеры';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['map_unit_type_list']['mi'] = 'Мили';
$app_list_strings['map_unit_type_list']['km'] = 'Километры';

$app_list_strings['map_module_type_list']['Accounts'] = 'Контрагенты';
$app_list_strings['map_module_type_list']['Contacts'] = 'Контакты';
$app_list_strings['map_module_type_list']['Cases'] = 'Обращения';
$app_list_strings['map_module_type_list']['Leads'] = 'Предварительные контакты';
$app_list_strings['map_module_type_list']['Meetings'] = 'Встречи';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Сделки';
$app_list_strings['map_module_type_list']['Project'] = 'Проекты';
$app_list_strings['map_module_type_list']['Prospects'] = 'Адресаты';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Контрагент';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Контакт';
$app_list_strings['map_relate_type_list']['Cases'] = 'Обращение';
$app_list_strings['map_relate_type_list']['Leads'] = 'Предварит. контакт';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Встреча';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Сделка';
$app_list_strings['map_relate_type_list']['Project'] = 'Проект';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Адресат';

$app_list_strings['marker_image_list']['accident'] = 'Авария';
$app_list_strings['marker_image_list']['administration'] = 'Администрирование';
$app_list_strings['marker_image_list']['agriculture'] = 'Сельское хозяйство';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Малая авиация';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Аэротуризм';
$app_list_strings['marker_image_list']['airport'] = 'Аэропорт';
$app_list_strings['marker_image_list']['amphitheater'] = 'Амфитеатр';
$app_list_strings['marker_image_list']['apartment'] = 'Апартаменты';
$app_list_strings['marker_image_list']['aquarium'] = 'Аквариум';
$app_list_strings['marker_image_list']['arch'] = 'Арка';
$app_list_strings['marker_image_list']['atm'] = 'Банкомат';
$app_list_strings['marker_image_list']['audio'] = 'Аудиотехника';
$app_list_strings['marker_image_list']['bank'] = 'Банк';
$app_list_strings['marker_image_list']['bank_euro'] = 'Банк (евро)';
$app_list_strings['marker_image_list']['bank_pound'] = 'Банк (фунты)';
$app_list_strings['marker_image_list']['bar'] = 'Бар';
$app_list_strings['marker_image_list']['beach'] = 'Пляж';
$app_list_strings['marker_image_list']['beautiful'] = 'Красота';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Велосипедная парковка';
$app_list_strings['marker_image_list']['big_city'] = 'Большой город';
$app_list_strings['marker_image_list']['bridge'] = 'Мост';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Мост подвесной';
$app_list_strings['marker_image_list']['bus'] = 'Автобус';
$app_list_strings['marker_image_list']['cable_car'] = 'Фуникулёр';
$app_list_strings['marker_image_list']['car'] = 'Автомобиль';
$app_list_strings['marker_image_list']['car_rental'] = 'Прокат автомобилей';
$app_list_strings['marker_image_list']['carrepair'] = 'Авторемонт';
$app_list_strings['marker_image_list']['castle'] = 'Замок';
$app_list_strings['marker_image_list']['cathedral'] = 'Кафедральный собор';
$app_list_strings['marker_image_list']['chapel'] = 'Часовня';
$app_list_strings['marker_image_list']['church'] = 'Церковь';
$app_list_strings['marker_image_list']['city_square'] = 'Городская площадь';
$app_list_strings['marker_image_list']['cluster'] = 'Оборудование';
$app_list_strings['marker_image_list']['cluster_2'] = 'Оборудование 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Оборудование 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Оборудование 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Оборудование 5';
$app_list_strings['marker_image_list']['coffee'] = 'Кофе';
$app_list_strings['marker_image_list']['community_centre'] = 'Клуб';
$app_list_strings['marker_image_list']['company'] = 'Компания';
$app_list_strings['marker_image_list']['conference'] = 'Конференция';
$app_list_strings['marker_image_list']['construction'] = 'Строительство';
$app_list_strings['marker_image_list']['convenience'] = 'Комфорт';
$app_list_strings['marker_image_list']['court'] = 'Суд';
$app_list_strings['marker_image_list']['cruise'] = 'Круиз';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Обмен валюты';
$app_list_strings['marker_image_list']['customs'] = 'Таможня';
$app_list_strings['marker_image_list']['cycling'] = 'Велоспорт';
$app_list_strings['marker_image_list']['dam'] = 'Дамба';
$app_list_strings['marker_image_list']['days_dim'] = 'Dim(Вс)';
$app_list_strings['marker_image_list']['days_dom'] = 'Dom(Вс)';
$app_list_strings['marker_image_list']['days_jeu'] = 'Jeu(Чт)';
$app_list_strings['marker_image_list']['days_jue'] = 'Jue(Чт)';
$app_list_strings['marker_image_list']['days_lun'] = 'Lun(Пн)';
$app_list_strings['marker_image_list']['days_mar'] = 'Mar(Вт)';
$app_list_strings['marker_image_list']['days_mer'] = 'Mer(Ср)';
$app_list_strings['marker_image_list']['days_mie'] = 'Mie(Ср)';
$app_list_strings['marker_image_list']['days_qua'] = 'Qua(Ср)';
$app_list_strings['marker_image_list']['days_qui'] = 'Qui(Чт)';
$app_list_strings['marker_image_list']['days_sab'] = 'Sab(Сб)';
$app_list_strings['marker_image_list']['days_sam'] = 'Sam(Сб)';
$app_list_strings['marker_image_list']['days_seg'] = 'Seg(Пн)';
$app_list_strings['marker_image_list']['days_sex'] = 'Sex(Пт)';
$app_list_strings['marker_image_list']['days_ter'] = 'Ter(Вт)';
$app_list_strings['marker_image_list']['days_ven'] = 'Ven(Пт)';
$app_list_strings['marker_image_list']['days_vie'] = 'Vie(Пт)';
$app_list_strings['marker_image_list']['dentist'] = 'Зубной врач';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Универсальный магазин';
$app_list_strings['marker_image_list']['disability'] = 'Инвалидность';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Парковка для инвалидов';
$app_list_strings['marker_image_list']['doctor'] = 'Врач';
$app_list_strings['marker_image_list']['dog_leash'] = 'Выгул собак';
$app_list_strings['marker_image_list']['down'] = 'Вниз';
$app_list_strings['marker_image_list']['down_left'] = 'Нижний левый';
$app_list_strings['marker_image_list']['down_right'] = 'Нижний правый';
$app_list_strings['marker_image_list']['down_then_left'] = 'Вниз и налево';
$app_list_strings['marker_image_list']['down_then_right'] = 'Вниз и направо';
$app_list_strings['marker_image_list']['drugs'] = 'Лекарства';
$app_list_strings['marker_image_list']['elevator'] = 'Лифт';
$app_list_strings['marker_image_list']['embassy'] = 'Посольство';
$app_list_strings['marker_image_list']['expert'] = 'Специалист';
$app_list_strings['marker_image_list']['factory'] = 'Фабрика';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Обвал';
$app_list_strings['marker_image_list']['fast_food'] = 'Предприятие быстрого питания';
$app_list_strings['marker_image_list']['festival'] = 'Фестиваль';
$app_list_strings['marker_image_list']['fjord'] = 'Фьорд';
$app_list_strings['marker_image_list']['forest'] = 'Лес';
$app_list_strings['marker_image_list']['fountain'] = 'Фонтан';
$app_list_strings['marker_image_list']['friday'] = 'Пятница';
$app_list_strings['marker_image_list']['garden'] = 'Сад';
$app_list_strings['marker_image_list']['gas_station'] = 'Бензоколонка';
$app_list_strings['marker_image_list']['geyser'] = 'Гейзер';
$app_list_strings['marker_image_list']['gifts'] = 'Подарки';
$app_list_strings['marker_image_list']['gourmet'] = 'Гурман';
$app_list_strings['marker_image_list']['grocery'] = 'Продовольственный магазин';
$app_list_strings['marker_image_list']['hairsalon'] = 'Парикмахерская';
$app_list_strings['marker_image_list']['helicopter'] = 'Вертолёт';
$app_list_strings['marker_image_list']['highway'] = 'Шоссе';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Исторический квартал';
$app_list_strings['marker_image_list']['home'] = 'Главная';
$app_list_strings['marker_image_list']['hospital'] = 'Больница';
$app_list_strings['marker_image_list']['hostel'] = 'Хостел';
$app_list_strings['marker_image_list']['hotel'] = 'Отель';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Отель, 1 звезда';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Отель, 2 звезды';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Отель, 3 звезды';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Отель, 4 звезды';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Отель, 5 звёзд';
$app_list_strings['marker_image_list']['info'] = 'Детали';
$app_list_strings['marker_image_list']['justice'] = 'Юстиция';
$app_list_strings['marker_image_list']['lake'] = 'Озеро';
$app_list_strings['marker_image_list']['laundromat'] = 'Прачечная самообслуживания';
$app_list_strings['marker_image_list']['left'] = 'Налево';
$app_list_strings['marker_image_list']['left_then_down'] = 'Налево и вниз';
$app_list_strings['marker_image_list']['left_then_up'] = 'Налево и вверх';
$app_list_strings['marker_image_list']['library'] = 'Библиотека';
$app_list_strings['marker_image_list']['lighthouse'] = 'Маяк';
$app_list_strings['marker_image_list']['liquor'] = 'Спиртные напитки';
$app_list_strings['marker_image_list']['lock'] = 'Замок';
$app_list_strings['marker_image_list']['main_road'] = 'Основная дорога';
$app_list_strings['marker_image_list']['massage'] = 'Массаж';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Вышка сотовой связи';
$app_list_strings['marker_image_list']['modern_tower'] = 'Высотное здание';
$app_list_strings['marker_image_list']['monastery'] = 'Монастырь';
$app_list_strings['marker_image_list']['monday'] = 'Понедельник';
$app_list_strings['marker_image_list']['monument'] = 'Памятник';
$app_list_strings['marker_image_list']['mosque'] = 'Мечеть';
$app_list_strings['marker_image_list']['motorcycle'] = 'Мотоцикл';
$app_list_strings['marker_image_list']['museum'] = 'Музей';
$app_list_strings['marker_image_list']['music_live'] = 'Живая музыка';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Нефтяной насос-качалка';
$app_list_strings['marker_image_list']['pagoda'] = 'Пагода';
$app_list_strings['marker_image_list']['palace'] = 'Дворец';
$app_list_strings['marker_image_list']['panoramic'] = 'Панорама';
$app_list_strings['marker_image_list']['park'] = 'Парк';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Перехватывающая парковка';
$app_list_strings['marker_image_list']['parking'] = 'Парковка';
$app_list_strings['marker_image_list']['photo'] = 'Фото';
$app_list_strings['marker_image_list']['picnic'] = 'Пикник';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Непосещённые места';
$app_list_strings['marker_image_list']['places_visited'] = 'Посещённые места';
$app_list_strings['marker_image_list']['playground'] = 'Детская площадка';
$app_list_strings['marker_image_list']['police'] = 'Отделение полиции';
$app_list_strings['marker_image_list']['port'] = 'Порт';
$app_list_strings['marker_image_list']['postal'] = 'Почта';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Линия электропередачи';
$app_list_strings['marker_image_list']['power_plant'] = 'Электростанция';
$app_list_strings['marker_image_list']['power_substation'] = 'Электрическая подстанция';
$app_list_strings['marker_image_list']['public_art'] = 'Публичное искусство';
$app_list_strings['marker_image_list']['rain'] = 'Дождь';
$app_list_strings['marker_image_list']['real_estate'] = 'Недвижимость';
$app_list_strings['marker_image_list']['regroup'] = 'Перегруппировка';
$app_list_strings['marker_image_list']['resort'] = 'Курорт';
$app_list_strings['marker_image_list']['restaurant'] = 'Ресторан';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Ресторан (Африканский)';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Ресторан (Мясной)';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Ресторан (Шведский стол)';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Ресторан (Китайский)';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Ресторан (Рыбный)';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Ресторан (Рыбные чипсы)';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Ресторан (для гурманов)';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Ресторан (Греческий)';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Ресторан (Индийский)';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Ресторан (Итальянский)';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Ресторан (Японский)';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Ресторан (Кебаб)';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Ресторан (Корейский)';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Ресторан (Средиземноморский)';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Ресторан (Мексиканский)';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Ресторан (Романтический)';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Ресторан (Тайский)';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Ресторан (Турецкий)';
$app_list_strings['marker_image_list']['right'] = 'Направо';
$app_list_strings['marker_image_list']['right_then_down'] = 'Направо и вниз';
$app_list_strings['marker_image_list']['right_then_up'] = 'Направо и вверх';
$app_list_strings['marker_image_list']['satursday'] = 'Суббота';
$app_list_strings['marker_image_list']['school'] = 'Школа';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Торговый пассаж';
$app_list_strings['marker_image_list']['shore'] = 'Берег';
$app_list_strings['marker_image_list']['sight'] = 'Достопримечательность';
$app_list_strings['marker_image_list']['small_city'] = 'Небольшой город';
$app_list_strings['marker_image_list']['snow'] = 'Снег';
$app_list_strings['marker_image_list']['spaceport'] = 'Космодром';
$app_list_strings['marker_image_list']['speed_100'] = 'Ограничение скорости - 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Ограничение скорости - 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Ограничение скорости - 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Ограничение скорости - 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Ограничение скорости - 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Ограничение скорости - 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Ограничение скорости - 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Ограничение скорости - 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Ограничение скорости - 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Ограничение скорости - 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Ограничение скорости - 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Ограничение скорости - 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Лежачий полицейский';
$app_list_strings['marker_image_list']['stadium'] = 'Стадион';
$app_list_strings['marker_image_list']['statue'] = 'Статуя';
$app_list_strings['marker_image_list']['steam_train'] = 'Паровоз';
$app_list_strings['marker_image_list']['stop'] = 'Стоп';
$app_list_strings['marker_image_list']['stoplight'] = 'Светофор';
$app_list_strings['marker_image_list']['subway'] = 'Метро';
$app_list_strings['marker_image_list']['sun'] = 'Солнце';
$app_list_strings['marker_image_list']['sunday'] = 'Воскресенье';
$app_list_strings['marker_image_list']['supermarket'] = 'Супермаркет';
$app_list_strings['marker_image_list']['synagogue'] = 'Синагога';
$app_list_strings['marker_image_list']['tapas'] = 'Тапас';
$app_list_strings['marker_image_list']['taxi'] = 'Такси';
$app_list_strings['marker_image_list']['taxiway'] = 'Рулёжная дорожка';
$app_list_strings['marker_image_list']['teahouse'] = 'Чайный домик';
$app_list_strings['marker_image_list']['telephone'] = 'Телефон';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Индийский храм';
$app_list_strings['marker_image_list']['terrace'] = 'Терраса';
$app_list_strings['marker_image_list']['text'] = 'Текст';
$app_list_strings['marker_image_list']['theater'] = 'Театр';
$app_list_strings['marker_image_list']['theme_park'] = 'Тематический парк';
$app_list_strings['marker_image_list']['thursday'] = 'Четверг';
$app_list_strings['marker_image_list']['toilets'] = 'Туалет';
$app_list_strings['marker_image_list']['toll_station'] = 'Телефонная станция';
$app_list_strings['marker_image_list']['tower'] = 'Башня';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Камера ГИБДД';
$app_list_strings['marker_image_list']['train'] = 'Поезд';
$app_list_strings['marker_image_list']['tram'] = 'Трамвай';
$app_list_strings['marker_image_list']['truck'] = 'Грузовик';
$app_list_strings['marker_image_list']['tuesday'] = 'Вторник';
$app_list_strings['marker_image_list']['tunnel'] = 'Туннель';
$app_list_strings['marker_image_list']['turn_left'] = 'Повернуть налево';
$app_list_strings['marker_image_list']['turn_right'] = 'Повернуть направо';
$app_list_strings['marker_image_list']['university'] = 'Университет';
$app_list_strings['marker_image_list']['up'] = 'Вверх';
$app_list_strings['marker_image_list']['up_left'] = 'Верхний левый';
$app_list_strings['marker_image_list']['up_right'] = 'Верхний правый';
$app_list_strings['marker_image_list']['up_then_left'] = 'Вверх и налево';
$app_list_strings['marker_image_list']['up_then_right'] = 'Вверх и направо';
$app_list_strings['marker_image_list']['vespa'] = 'Скутер';
$app_list_strings['marker_image_list']['video'] = 'Видеотехника';
$app_list_strings['marker_image_list']['villa'] = 'Особняк';
$app_list_strings['marker_image_list']['water'] = 'Вода';
$app_list_strings['marker_image_list']['waterfall'] = 'Водопад';
$app_list_strings['marker_image_list']['watermill'] = 'Мельница (водяная)';
$app_list_strings['marker_image_list']['waterpark'] = 'Аквапарк';
$app_list_strings['marker_image_list']['watertower'] = 'Водонапорная башня';
$app_list_strings['marker_image_list']['wednesday'] = 'Среда';
$app_list_strings['marker_image_list']['wifi'] = 'Wi-Fi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Ветротурбина';
$app_list_strings['marker_image_list']['windmill'] = 'Мельница (ветровая)';
$app_list_strings['marker_image_list']['winery'] = 'Винный завод';
$app_list_strings['marker_image_list']['work_office'] = 'Офис';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Объект всемирного наследия';
$app_list_strings['marker_image_list']['zoo'] = 'Зоопарк';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Сотрудник отсутствует';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Сотрудник занят';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Отложенные звонки';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Заполните следующие поля:';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Дата:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Причина:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Укажите правильную дату';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Укажите причину, по которой звонок отложен';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Отложенные звонки';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'История дозвона';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Попыток дозвона';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Управление Группами пользователей';
$app_strings['LBL_LOGIN_AS'] = 'Войти как ';
$app_strings['LBL_LOGOUT_AS'] = 'Выйти как ';
$app_strings['LBL_SECURITYGROUP'] = 'Группы пользователей';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Серверы исходящей почты (SMTP)';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Учётная запись в Facebook';
$app_strings['LBL_TWITTER_USER_C'] = 'Учётная запись в Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Подробности';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Фильтр';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Создать контрагента';
$app_strings['LBL_QUICK_CONTACT'] = 'Создать контакт';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Создать сделку';
$app_strings['LBL_QUICK_LEAD'] = 'Создать предв. контакт';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Создать документ';
$app_strings['LBL_QUICK_CALL'] = 'Запланировать звонок';
$app_strings['LBL_QUICK_TASK'] = 'Создать задачу';
$app_strings['LBL_COLLECTION_TYPE'] = 'Тип';

$app_strings['LBL_ADD_TAB'] = 'Добавить страницу';
$app_strings['LBL_EDIT_TAB'] = 'Удалить страницу';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Основная страница'; //Can be translated in all caps. This string will be used by SuiteP template menu actions
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Название страницы:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Количество колонок на странице:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Вы действительно хотите удалить страницу';
$app_strings['LBL_DELETE_DASHBOARD2'] = '?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Добавление новой страницы на закладку';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Удаление страницы с закладки';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Переименование страницы';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'Действия'; //Can be translated in all caps. This string will be used by SuiteP template menu actions

$app_strings['LBL_DISCOVER_SUITECRM'] = 'Узнать о SuiteCRM';

$app_list_strings['collection_temp_list'] = array('Tasks' => 'Задачи', 'Meetings' => 'Встречи', 'Calls' => 'Звонки', 'Notes' => 'Заметки', 'Emails' => 'E-mail');

$app_list_strings['moduleList']['TemplateEditor'] = 'Редактор фрагментов шаблонов';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Данные редактируемого поля не сохранены. При нажатии на кнопку ОК все изменённые данные будут утеряны, при нажатии на кнопку 'Отмена' вы сможете продолжить редактирование поля";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Ошибка получения данных. Вероятно, сеанс закончился и необходимо заново войти в систему";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Продажи',
    'getAccountsSpotsData' => 'Контрагенты',
    'getLeadsSpotsData' => 'Предварит. контакты',
    'getServiceSpotsData' => 'Сервис',
    'getMarketingSpotsData' => 'Маркетинг',
    'getMarketingActivitySpotsData' => 'Маркетинговая активность',
    'getActivitiesSpotsData' => 'Маркетинговая активность',
    'getQuotesSpotsData' => 'Предложения'
);

$app_list_strings['moduleList']['Spots'] = 'Сводки';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'График работы';
$app_list_strings['business_hours_list']['0'] = '0:00';
$app_list_strings['business_hours_list']['1'] = '1:00';
$app_list_strings['business_hours_list']['2'] = '2:00';
$app_list_strings['business_hours_list']['3'] = '3:00';
$app_list_strings['business_hours_list']['4'] = '4:00';
$app_list_strings['business_hours_list']['5'] = '5:00';
$app_list_strings['business_hours_list']['6'] = '6:00';
$app_list_strings['business_hours_list']['7'] = '7:00';
$app_list_strings['business_hours_list']['8'] = '8:00';
$app_list_strings['business_hours_list']['9'] = '9:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '12:00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19:00';
$app_list_strings['business_hours_list']['20'] = '20:00';
$app_list_strings['business_hours_list']['21'] = '21:00';
$app_list_strings['business_hours_list']['22'] = '22:00';
$app_list_strings['business_hours_list']['23'] = '23:00';
$app_list_strings['day_list']['Monday'] = 'Понедельник';
$app_list_strings['day_list']['Tuesday'] = 'Вторник';
$app_list_strings['day_list']['Wednesday'] = 'Среда';
$app_list_strings['day_list']['Thursday'] = 'Четверг';
$app_list_strings['day_list']['Friday'] = 'Пятница';
$app_list_strings['day_list']['Saturday'] = 'Суббота';
$app_list_strings['day_list']['Sunday'] = 'Воскресенье';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Письмо';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Книжная';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Альбомная';
$app_list_strings['LBL_REPORTS_RESTRICTED'] = 'A report you have selected is targeting a module you do not have access to. Please select a report with a target module you have access to.';
