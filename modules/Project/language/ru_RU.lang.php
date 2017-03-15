<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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


$mod_strings = array(
    'LBL_MODULE_NAME' => 'Проект',
    'LBL_MODULE_TITLE' => 'Проекты - ГЛАВНАЯ',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск проекта',
    'LBL_LIST_FORM_TITLE' => 'Список проектов',
    'LBL_HISTORY_TITLE' => 'История',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Дата создания:',
    'LBL_DATE_MODIFIED' => 'Дата изменения:',
    'LBL_ASSIGNED_USER_ID' => 'Ответственный(ая): ',
    'LBL_ASSIGNED_USER_NAME' => 'Менеджер проекта',
    'LBL_MODIFIED_USER_ID' => 'Изменено(ID):',
    'LBL_CREATED_BY' => 'Кем создано:',
    'LBL_TEAM_ID' => 'Группа:',
    'LBL_NAME' => 'Проект:',
    'LBL_PDF_PROJECT_NAME' => 'Название проекта:',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалено:',
    'LBL_DATE' => 'Дата:',
    'LBL_DATE_START' => 'Дата начала:',
    'LBL_DATE_END' => 'Дата окончания:',
    'LBL_PRIORITY' => 'Приоритет',
    'LBL_MY_PROJECTS' => 'Мои проекты',
    'LBL_MY_PROJECT_TASKS' => 'Мои проектные задачи',
    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Предварительная оценка общих усилий (час.):',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Реальные общие усилия (час.):',
    'LBL_LIST_NAME' => 'Название',
    'LBL_LIST_DAYS' => 'дней',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Предварительная оценка общих усилий (час.)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Реальные общие усилия (час.)',
    'LBL_LIST_UPCOMING_TASKS' => 'Ближайшие задачи (1 неделя)',
    'LBL_LIST_OVERDUE_TASKS' => 'Просроченные задачи',
    'LBL_LIST_OPEN_CASES' => 'Открытые обращения',
    'LBL_LIST_END_DATE' => 'Дата окончания',
    'LBL_LIST_TEAM_ID' => 'Группа',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекты',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Проектные задачи',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Контакты',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Контрагенты',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Сделки',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Сметы',
	'LBL_PROJECT_PREDECESSOR_NONE' => '--не выбрано--',
	'LBL_ALL_PROJECTS' => 'Все проекты',
	'LBL_ALL_USERS' => 'Все пользователи',
	'LBL_ALL_CONTACTS' => 'Все контакты',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Новый проект',
    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Вы уверены, что хотите удалить этот контакт из проекта?',
    'LNK_NEW_PROJECT' => 'Создать проект',
    'LNK_PROJECT_LIST' => 'Проекты',
    'LNK_NEW_PROJECT_TASK' => 'Создать задачу проекта',
    'LNK_PROJECT_TASK_LIST' => 'Проектные задачи',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Проекты',
    'LBL_ACTIVITIES_TITLE' => 'Мероприятия',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_QUICK_NEW_PROJECT' => 'Создать проект',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенты',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Сделки',
    'LBL_CASES_SUBPANEL_TITLE' => 'Обращения',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Ошибки',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Товары',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Проектная задача',
    'LBL_DURATION' => 'Продолжительность',
    'LBL_ACTUAL_DURATION' => 'Фактическая продолжительность',
    'LBL_START' => 'Начало',
    'LBL_FINISH' => 'Окончание',
    'LBL_PREDECESSORS' => 'Предшественник',
    'LBL_PERCENT_COMPLETE' => 'Процент выполнения',
    'LBL_MORE' => 'Больше...',
    'LBL_PERCENT_BUSY' => '% занято',
    'LBL_TASK_ID_WIDGET' => 'ID',
    'LBL_TASK_NAME_WIDGET' => 'описание',
    'LBL_DURATION_WIDGET' => 'продолжительность',
    'LBL_START_WIDGET' => 'дата начала',
    'LBL_FINISH_WIDGET' => 'дата окончания',
    'LBL_PREDECESSORS_WIDGET' => 'предшественники_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'Процент выполнения',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Редактировать проектные задачи',
    'LBL_OPPORTUNITIES' => 'Сделки',
    'LBL_LAST_WEEK' => 'Предыдущая',
    'LBL_NEXT_WEEK' => 'Следующая',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Ресурсы проекта',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Проектные задачи',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Выходные',
    'LBL_PROJECT_INFORMATION' => 'Основная информация',
    'LBL_EDITLAYOUT' => 'Изменить макет' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Добавить строки' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Проектные задачи',
    'LBL_VIEW_GANTT_TITLE' => 'Диаграмма Ганта',
    'LBL_VIEW_GANTT_DURATION' => 'Продолжительность',
    'LBL_TASK_TITLE' => 'Редактировать',
    'LBL_PREDECESSOR_TITLE' => 'Редактировать',
    'LBL_START_DATE_TITLE' => 'Select Start Date',
    'LBL_END_DATE_TITLE' => 'Select End Date',
    'LBL_DURATION_TITLE' => 'Продолжительность',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Edit %Complete',
    'LBL_ACTUAL_DURATION_TITLE' => 'Edit Actual Duration',
    'LBL_LAG' => 'Задержка',
    'LBL_DAYS' => 'дней',
    'LBL_HOURS' => 'часов',
    'LBL_MONTHS' => 'Месяцев',
    'LBL_SUBTASK' => 'Задача',
    'LBL_MILESTONE_FLAG' => 'Контрольная точка',
    'LBL_ADD_NEW_TASK' => 'Добавить проектную задачу',
    'LBL_DELETE_TASK' => 'Удалить проектную задачу',
    'LBL_EDIT_TASK_PROPERTIES' => 'Настройка параметров',
    'LBL_PARENT_TASK_ID' => 'Предшествующая задача(ID)',
    'LBL_RESOURCE_CHART' => 'Диаграмма ресурсов',
    'LBL_RESOURCE_CHART_START' => 'Дата начала:',
    'LBL_RESOURCE_CHART_END' => 'Дата окончания:',
    'LBL_RESOURCES' => 'Выбор участников:',
    'LBL_RELATIONSHIP_TYPE' => 'Тип связи',
    'LBL_ASSIGNED_TO' => 'Менеджер проекта',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Шаблон проекта',
    'LBL_STATUS' => 'Статус',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Менеджер проекта',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Выходные дни',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Проект',
    'LBL_TOOLTIP_TASK_NAME' => 'Проектная задача',
    'LBL_TOOLTIP_TITLE' => 'Задачи на выбранный период',
    'LBL_TOOLTIP_TASK_DURATION' => 'Продолжительность',
    'LBL_PROJECT_TITLE_HOVER' => 'Детали проекта',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Участник является пользователем',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Участник является контактом',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Предыдущий месяц',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Следующий месяц',
    'LBL_RESOURCE_CHART_WEEK' => 'Неделя',
    'LBL_RESOURCE_CHART_DAY' => 'День',
    'LBL_RESOURCE_CHART_WARNING' => 'В проект не добавлено ни одного участника.',
    'LBL_PROJECT_DELETE_MSG' => 'Вы действительно хотите удалить этот проект и все входящие в него задачи?',
    'LBL_LIST_MY_PROJECT' => 'Мои проекты',
    'LBL_LIST_ASSIGNED_USER' => 'Менеджер проекта',
    'LBL_UNASSIGNED' => 'Не назначен',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Участники',

	'LBL_EMAIL' => 'E-mail',
	'LBL_PHONE' => 'Тел. (раб.):',
	'LBL_ADD_BUTTON'=> 'Добавить',
	'LBL_ADD_INVITEE' => 'Добавить участника',
	'LBL_FIRST_NAME' => 'Имя',
	'LBL_LAST_NAME' => 'Фамилия',
	'LBL_SEARCH_BUTTON'=> 'Найти',
	'LBL_EMPTY_SEARCH_RESULT' => 'По указанным критериям ничего не обнаружено.',
	'LBL_CREATE_INVITEE' => 'Добавить участника',
	'LBL_CREATE_CONTACT' => 'Создав новый контакт',
	'LBL_CREATE_AND_ADD' => 'Создать',
	'LBL_CANCEL_CREATE_INVITEE' => 'Отказаться',
	'LBL_NO_ACCESS' => 'У вас нет прав на создание записи в модуле $module',
	'LBL_SCHEDULING_FORM_TITLE' => 'Участники',
	'LBL_REMOVE' => 'удал.',
	'LBL_VIEW_DETAIL' => 'Детали проекта',
	'LBL_OVERRIDE_BUSINESS_HOURS' => 'Учитывать все рабочие дни',

	'LBL_PROJECTS_SEARCH' => 'Проекты',
	'LBL_USERS_SEARCH' => 'Пользователи',
	'LBL_CONTACTS_SEARCH' => 'Контакты',
	'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Контакты: контакты',
	'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Найти',
	
	'LBL_CHART_TYPE' => 'Отображать данные по:',
	'LBL_CHART_WEEKLY' => 'Неделям',
	'LBL_CHART_MONTHLY' => 'Месяцам',	
	'LBL_CHART_QUARTERLY' => 'Кварталам',

	'LBL_RESOURCE_CHART_MONTH' => 'Месяц',
	'LBL_RESOURCE_CHART_QUARTER' => 'Квартал',
 	'LBL_ALL_RESOURCES' => 'Все участники',
	'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Шаблоны проектов',
	'LBL_AOS_QUOTES_PROJECT' => 'Quotes project',

);
?>
