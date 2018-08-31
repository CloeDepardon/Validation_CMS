<?php

class Config {
    const
          DB_SERVER  = 'localhost',
          DB_NAME = 'my_cms',
          DB_USER = 'root',
          DB_PASS = '000000',
          TITLE = 'My New CMS',
          LOGIN_URI = '/auth/login',
          LOGOUT_URI = '/auth/logout',
          SESSION_KEY = 'currentUser',
          CLASS_SUFFIX = 'Controller',
          TEMPLATE_DIRECTORY = "views";
}
