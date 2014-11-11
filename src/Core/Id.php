<?php

class Id
{
    const NS = 'jxta';

    const FORMAT_JXTA = "jxta";


    /**
     * ==================================
     * Special reserved JXTA IDs
     * ==================================
     */

    /**
     *
     */
    const ID_WORLD_GROUP = 'WorldGroup';
    const ID_NET_GROUP = 'NetGroup';
    const ID_NULL = 'NULL';

    public static function fromParts($format, $unique_id)
    {
        $id = new static;
        $id->setFormat($format);
        $id->setUniqueId($unique_id);
        return $id;
    }

    protected static function makeUrnString($format, $unique_id)
    {
        return "urn::jxta:$format-$unique_id";
    }

    public static function null()
    {
       return static::fromParts(static::FORMAT_JXTA, static::ID_NULL);
    }

    public static function netGroup()
    {
        return static::fromParts(static::FORMAT_JXTA, static::ID_NET_GROUP);
    }

    public static function worldGroup()
    {
        return static::fromParts(static::FORMAT_JXTA, static::ID_WORLD_GROUP);
    }


    private  $format;

    private  $unique_id;

    # public static function fromUrn
    # public static function is(Id $other)


    public function getUrn()
    {
        return static::makeUrnString($this->getFormat(), $this->getUniqueId());
    }


    /**
     * @param string $unique_id
     */
    public function setUniqueId($unique_id)
    {
        $this->unique_id = $unique_id;
    }

    public function getUniqueId()
    {
        return $this->unique_id;
    }

//    protected  function getIdVal()
//    {
//        return $this->getFormat() . '-' . $this->getUniqueId();
//    }

    /**
     * @param mixed $fmt
     */
    public function setFormat($fmt)
    {
        $this->format = $fmt;
    }

    /**
     * @return mixed
     */
    public function getFormat()
    {
        return $this->format;
    }

} 