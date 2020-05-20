<?php

namespace Mix\Micro\Config;

/**
 * Interface ConfiguratorInterface
 * @package Mix\Micro\Config
 */
interface ConfiguratorInterface
{

    /**
     * Listen
     * @throws \RuntimeException
     */
    public function listen();

    /**
     * Sync to config-server
     * 可在 git webhook 中调用某个接口来触发该方法
     * @param string $path 目录或者文件路径
     * @param string $prefix
     */
    public function sync(string $path);

    /**
     * Get
     * @param string $key
     * @param string $default
     * @return string
     */
    public function get(string $key, string $default = ''): string;
    
    /**
     * All
     * @return string[]
     */
    public function all();

    /**
     * Close
     */
    public function close();

}
