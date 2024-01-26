<?php
/**
 * ===============================================
 * 版权所有 2019-2050 青岛鑫睿网络技术有限公司，并保留所有权利。
 * 网站地址: http://www.qdxinrui.net
 * ===============================================
 * Author: Alex
 * Created Time: 2019/12/30 12:44
 * Modified Time: 2019/12/30 12:44
 * Version: 2.0
 */
namespace fast;
trait Singleton{
    protected static $instances = [];
    public static function getInstance(...$args) {
        $class = get_called_class();
        if (!isset(self::$instances[$class])) {
            self::$instances[$class] = new $class(...$args);
        }
        return self::$instances[$class];
    }
}