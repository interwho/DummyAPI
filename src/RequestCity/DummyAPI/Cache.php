<?php
namespace RequestCity\DummyAPI;

use Doctrine\Common\Cache\CacheProvider;

/**
 * Class Cache
 * @package RequestCity\DummyAPI
 */
class Cache extends CacheProvider
{
    /**
     * @param string $type
     * @param string $key
     * @param mixed  $value
     * @param int    $expire
     * @return bool
     */
    public function set($type, $key, $value, $expire = 0)
    {
        return $this->doSave($type . ":" . $key, $value, $expire);
    }

    /**
     * @param string $type
     * @param string $key
     * @return string
     */
    public function get($type, $key)
    {
        return $this->doFetch($type . ":" . $key);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch($id)
    {
        return $this->doFetch($id);
    }

    /**
     * {@inheritdoc}
     */
    public function contains($id)
    {
        return $this->doContains($id);
    }

    /**
     * {@inheritdoc}
     */
    public function save($id, $data, $lifeTime = 0)
    {
        return $this->doSave($id, $data, $lifeTime);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($id)
    {
        return $this->doDelete($id);
    }

    /**
     * @param string $type
     * @param string $key
     * @return bool|void
     */
    public function remove($type, $key)
    {
        return $this->doDelete($type . ":" . $key);
    }

    protected function doFetch($id)
    {
        return false;
    }

    /**
     * Test if an entry exists in the cache.
     *
     * @param string $id cache id The cache id of the entry to check for.
     * @return boolean TRUE if a cache entry exists for the given cache id, FALSE otherwise.
     */
    protected function doContains($id)
    {
        return (bool)$this->fetch($id);
    }

    /**
     * Puts data into the cache.
     *
     * @param string   $id The cache id.
     * @param string   $data The cache entry/data.
     * @param bool|int $lifeTime The lifetime. If != false, sets a specific lifetime for this
     *                           cache entry (null => infinite lifeTime).
     *
     * @return boolean TRUE if the entry was successfully stored in the cache, FALSE otherwise.
     */
    protected function doSave($id, $data, $lifeTime = false)
    {
        return false;
    }

    /**
     * Deletes a cache entry.
     *
     * @param string $id cache id
     * @return boolean TRUE if the cache entry was successfully deleted, FALSE otherwise.
     */
    protected function doDelete($id)
    {
        return false;
    }

    /**
     * Deletes all cache entries.
     *
     * @return boolean TRUE if the cache entry was successfully deleted, FALSE otherwise.
     */
    protected function doFlush()
    {
        return false;
    }

    /**
     * Retrieves cached information from data store
     *
     * @return array An associative array with server's statistics if available, NULL otherwise.
     */
    protected function doGetStats()
    {
        return false;
    }
}
