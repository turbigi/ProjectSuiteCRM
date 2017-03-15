<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
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

    'LBL_ADD_MODULE' => 'Добавить',
    'LBL_ADDRCITY' => 'Город',
    'LBL_ADDRCOUNTRY' => 'Страна',
    'LBL_ADDRCOUNTRY_ID' => 'Страна (ID)',
    'LBL_ADDRSTATEPROV' => 'Область',
    'LBL_ADMINISTRATION' => 'Администрирование подключения',
    'LBL_ADMINISTRATION_MAIN' => 'Параметры подключения',
    'LBL_AVAILABLE' => 'Доступно',
    'LBL_BACK' => '< Назад',
    'LBL_COMPANY_ID' => 'Контрагент (ID)',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Некоторые поля, требующие обязательного заполнения, оставлены пустыми. Продолжить сохранение?',
    'LBL_CONNECTOR' => 'Подключение',
    'LBL_CONNECTOR_FIELDS' => 'Поля подключения',
    'LBL_DATA' => 'Данные',
    'LBL_DEFAULT' => 'По умолчанию',
    'LBL_DELETE_MAPPING_ENTRY' => 'Вы действительно хотите удалить эту запись?',
    'LBL_DISABLED' => 'Отключённые модули',
    'LBL_DUNS' => 'DUNS',
    'LBL_EMPTY_BEANS' => 'В результате поиска ничего не найдено.',
    'LBL_ENABLED' => 'Подключённые модули',
    'LBL_EXTERNAL' => 'Разрешать пользователям создавать внешние учётные записи для данного подключения. Соответствующие параметры должны быть так же указаны на странице настроек параметров подключения.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' Соответствующие параметры должны быть также указаны на странице настроек параметров подключения.',

    'LBL_MARKET_CAP' => 'Market Cap',
    'LBL_MERGE' => 'Объединить',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Выбор модулей',
    'LBL_MODIFY_DISPLAY_DESC' => 'Выбор модулей, связанных с указанным подключением.',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Параметры подключения: Выбор модулей',
    'LBL_MODULE_FIELDS' => 'Поля модуля',
    'LBL_MODIFY_MAPPING_TITLE' => 'Настройка полей',
    'LBL_MODIFY_MAPPING_DESC' => 'Настройка соответствия полей подключения полям модулей. Данные полей подключения будут объединены с данными полей модулей.',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Параметры подключения: Настройка полей',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Настройка URL подключения',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Настройка параметров подключения.',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Параметры подключения: Настройка URL подключения',
    'LBL_MODIFY_SEARCH_TITLE' => 'Управление поиском данных в подключении',
    'LBL_MODIFY_SEARCH' => 'Поиск',
    'LBL_MODIFY_SEARCH_DESC' => 'Выбор полей подключения для поиска необходимых данных.',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Параметры подключения: Управление поиском',
    'LBL_MODULE_NAME' => 'Подключения',
    'LBL_NO_PROPERTIES' => 'Для данного подключения нет настраиваемых параметров.',
    'LBL_PARENT_DUNS' => 'Parent DUNS',
    'LBL_PREVIOUS' => '< Назад',
    'LBL_QUOTE' => 'Предложение',
    'LBL_RECNAME' => 'Контрагент',
    'LBL_RESET_TO_DEFAULT' => 'Сброс в стандартные значения',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Вы действительно хотите вернуться к стандартным настройкам?',
    'LBL_RESET_BUTTON_TITLE' => 'Сброс',
    'LBL_RESULT_LIST' => 'Список данных',
    'LBL_RUN_WIZARD' => 'Запуск мастера',
    'LBL_SAVE' => 'Сохранить',
    'LBL_SEARCHING_BUTTON_LABEL' => 'Поиск...',
    'LBL_SHOW_IN_LISTVIEW' => 'Show In Merge Listview',
    'LBL_SMART_COPY' => 'Smart Copy',
    'LBL_SUMMARY' => 'Отправка писем',
    'LBL_STEP1' => 'Поиск и просмотр данных',
    'LBL_STEP2' => 'Объединение записей с',
    'LBL_TEST_SOURCE' => 'Тестирование подключения',
    'LBL_TEST_SOURCE_FAILED' => 'Тест не пройден',
    'LBL_TEST_SOURCE_RUNNING' => 'Выполнение тестового подключения...',
    'LBL_TEST_SOURCE_SUCCESS' => 'Тест успешно пройден',
    'LBL_TITLE' => 'Объединение данных',
    'LBL_ULTIMATE_PARENT_DUNS' => 'Ultimate Parent DUNS',

    'ERROR_RECORD_NOT_SELECTED' => 'Ошибка: Выберите запись из списка перед тем как продолжить.',
    'ERROR_EMPTY_WRAPPER' => 'Error: Unable to retrieve wrapper instance for the source [{$source_id}]',
    'ERROR_EMPTY_SOURCE_ID' => 'Ошибка: Источник данных не указан или он пуст.',
    'ERROR_EMPTY_RECORD_ID' => 'Ошибка: Запись не указана или она пуста.',
    'ERROR_NO_ADDITIONAL_DETAIL' => 'Ошибка: Для данной записи не обнаружено дополнительной информации.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Для данного подключения не указан ни один модуль. Укажите модуль на странице выбора модулей.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Ошибка: Нет подключений с настроенными для поиска полями.',
    'ERROR_NO_SOURCEDEFS_FILE' => 'Ошибка: Файл sourcedefs.php не найден.',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Ошибка: Не указан источник получения данных.',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Ошибка: С данным модулем не связано ни одного подключения.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Ошибка:  Не определены поля поиска для модуля и подключения. Для решения проблемы свяжитесь с системным администратором.',
    'ERROR_NO_FIELDS_MAPPED' => 'Ошибка: Для каждого модуля вы должны указать как минимум одно поле подключения.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Ошибка: Не указано ни одного поля модуля для отображения в результирующих данных. Обратитесь к системному администратору.',
    'LBL_TWITTER_USER' => 'Учётная запись в Twitter',
    'LBL_FACEBOOK_USER' => 'Учётная запись в Facebook',
    'LBL_INFO_INLINE' => 'Детали' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Закрытие' /*for 508 compliance fix*/,

);

?>