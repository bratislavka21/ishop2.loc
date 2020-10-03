<?php


namespace ishop;


class Registry
{
    use TSingleton;

    public static $properties = [];

    public function getProperties(): array
    {
        return self::$properties;
    }

    public function getProperty(string $name)
    {
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }

        return null;
    }

    public function setProperty(string $name, $value)
    {
        self::$properties[$name] = $value;
    }
}