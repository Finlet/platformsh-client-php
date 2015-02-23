<?php

namespace Platformsh\Client\Session;

use Platformsh\Client\Session\Storage\SessionStorageInterface;

interface SessionInterface
{

    /**
     * @param SessionStorageInterface $storage
     */
    public function setStorage(SessionStorageInterface $storage);

    /**
     * @param array $data
     */
    public function add(array $data);

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function set($key, $value);

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function get($key);

    /**
     * @param array $data
     */
    public function setData(array $data);

    /**
     * @return array
     */
    public function getData();

    /**
     * @param string $id
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getId();

    /**
     * @param bool $reload
     *
     * @return bool
     */
    public function load($reload = false);

    /**
     * Save the session, if storage is defined.
     */
    public function save();

    /**
     * Clear the session data.
     */
    public function clear();
}