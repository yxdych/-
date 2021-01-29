<?php
/**
 * CreateDTime: 2021/1/29 10:58
 * details    :
 */
declare(strict_types=1);//必须为第一个语句

class LogtoolClass
{
    /***
     * CreateDTime: 2021/1/29 14:40
     * Function: ""
     * @param string $path
     * @param string $pathname
     * @param string $title
     * @param array  $data
     * @return bool
     */
    final public   function errorFile(string $path,string $pathname,string $title, array $data ):bool
    {
        # 如果目录不存在则创建目录
        if (!file_exists($path)) {
            if (!mkdir($path,0777,true)){
                die('目录创建失败,或尝试手动创建！');
            }
        }
        #2021-01-29 14:21:08	【测试】data:  a:0:{}
        return error_log(date('Y-m-d H:i:s', time()) . "\t【" . $title . "】data:  " . serialize($data) . "\n",3, $path.'/'.$pathname.'_'.date('Y-m-d', time()) . ".log");
    }


}
