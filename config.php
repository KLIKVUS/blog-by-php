<?php
const IS_DEBUG = false;

const DATA_TEMPLATE = "core/section.tpl";
const EDIT_FORM_TEMPLATE = "core/edit-form.tpl";
const REMOVE_FORM_TEMPLATE = "core/remove-form.tpl";

const DB_HOST = "localhost";
const DB_LOGIN = "root";
const DB_PASSWORD = "";
const DB_NAME = "blog";

const MSG_ON_DB_CONN_ERROR = "Проблема с бд";
const MSG_ON_READ_DATA_ERROR = "Проблема с чтением данных";
const MSG_ON_CREATE_DATA_ERROR = "Проблема с добавлением записи";
const MSG_ON_UPDATE_DATA_ERROR = "Проблема с изменением записи";
const MSG_ON_DELETE_DATA_ERROR = "Проблема с удалением записи";

set_error_handler("error_handler");

$db_conn = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
if(!$db_conn):
    trigger_error(MSG_ON_DB_CONN_ERROR, E_USER_ERROR);
endif;