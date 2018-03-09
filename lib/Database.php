<?php 
namespace Phalms\Installer;
use Phalms\Installer\Mysql;
use Phalms\Installer\Pgsql;
/**
* 
*/
class Database 
{
    public static function connect($input)
    {
        $adapter = '\Phalcon\Db\Adapter\Pdo\\' . $input["dbadapter"];
        $connection = new $adapter(
            [
                "host"      => $input["dbserver"],
                "port"      => $input["dbport"],
                "username"  => $input["dbusername"],
                "password"  => $input["dbpassword"],
                "dbname"    => $input["dbname"],
            ]
        );
        return $connection;
    }

    public static function CreateTable($input)
    {
        $connection = self::connect($input);
        if($input["dbadapter"] == 'Mysql'){
            $result = [
                "email_confirmations" => Mysql::emailConfirmations($connection),
                "failed_logins"     => Mysql::failedLogins($connection),
                "remember_tokens"   => Mysql::rememberTokens($connection),
                "reset_passwords"   => Mysql::resetPasswords($connection),
                "password_changes"  => Mysql::passwordChanges($connection),
                "success_logins"    => Mysql::successLogins($connection),
                "permissions"       => Mysql::permissions($connection),
                "banner"    => Mysql::banner($connection),
                "menu"      => Mysql::menu($connection),
                "modules"   => Mysql::modules($connection),
                "resources" => Mysql::privateResource($connection),
                "profiles"  => Mysql::profiles($connection),
                "users"     => Mysql::users($connection),
                "blog"      => Mysql::blog($connection),
                "page"      => Mysql::page($connection),
                "blog_categories"   => Mysql::blogCategory($connection),
                "page_categories"   => Mysql::pageCategory($connection),
            ];
        }else{
            $result = [
                "email_confirmations" => Pgsql::emailConfirmations($connection),
                "failed_logins"     => Pgsql::failedLogins($connection),
                "remember_tokens"   => Pgsql::rememberTokens($connection),
                "reset_passwords"   => Pgsql::resetPasswords($connection),
                "password_changes"  => Pgsql::passwordChanges($connection),
                "success_logins"    => Pgsql::successLogins($connection),
                "permissions"       => Pgsql::permissions($connection),
                "banner"    => Pgsql::banner($connection),
                "menu"      => Pgsql::menu($connection),
                "modules"   => Pgsql::modules($connection),
                "resources" => Pgsql::privateResource($connection),
                "profiles"  => Pgsql::profiles($connection),
                "users"     => Pgsql::users($connection),
                "blog"      => Pgsql::blog($connection),
                "page"      => Pgsql::page($connection), 
                "blog_categories" => Pgsql::blogCategory($connection),
                "page_categories" => Pgsql::pageCategory($connection),
            ];
        }
        
        return $result;
    }
}