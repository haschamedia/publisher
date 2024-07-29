<?php

namespace Publisher\Configurations;

enum DBConnect : string
{
    case BASE = "mysql";
    case PRODUCTION = "mysql_production";
    case RELEASE = "mysql_release";
    case FILE = "mysql_file";
}