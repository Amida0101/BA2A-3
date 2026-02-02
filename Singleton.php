<?php

/**
 * Singleton Design Pattern Implementation
 * 
 * The Singleton pattern ensures that a class has only one instance
 * and provides a global point of access to that instance.
 * 
 * Use Cases:
 * - Database connections
 * - Configuration managers
 * - Logging services
 * - Cache managers
 */

class Singleton
{
    /**
     * The single instance of the class
     * @var Singleton|null
     */
    private static ?Singleton $instance = null;

    /**
     * Private constructor to prevent direct instantiation
     */
    private function __construct()
    {
        // Initialize your singleton here
        echo "Singleton instance created!\n";
    }

    /**
     * Prevent cloning of the instance
     */
    private function __clone()
    {
        // Prevent cloning
    }

    /**
     * Prevent unserialization of the instance
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    /**
     * Get the single instance of the class
     * 
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        
        return self::$instance;
    }

    /**
     * Example method
     */
    public function doSomething(): void
    {
        echo "Singleton is doing something!\n";
    }
}

// Example usage:
// $singleton1 = Singleton::getInstance();
// $singleton2 = Singleton::getInstance();
// 
// var_dump($singleton1 === $singleton2); // Output: bool(true)
// $singleton1->doSomething();

?>
