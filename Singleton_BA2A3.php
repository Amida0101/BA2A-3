class Singleton
{
    /**
     * Holds the single instance of the class.
     * Declared static so it belongs to the class, not an instance.
     * The `static` return type (PHP 8.0+) allows for extendable singletons.
     */
    private static ?static $instance = null;

    /**
     * The constructor is private to prevent direct instantiation with "new".
     */
    private function __construct() {
        // Initialization code (e.g., database connection) goes here
    }

    /**
     * Prevents cloning of the instance.
     */
    private function __clone() {}

    /**
     * Prevents unserialization of the instance.
     */
    private function __wakeup() {}

    /**
     * Get the single instance of the class.
     */
    public static function getInstance(): static
    {
        // If the instance is null, create a new one, otherwise return the existing one.
        return self::$instance ??= new static();
    }

    // Other methods of the class can be defined here
    public function showMessage() {
        echo "Hello, I am the one and only instance of the Singleton class!<br>";
    }
}

// --- Usage Example ---

// Get the instance
$instance1 = Singleton::getInstance();
$instance1->showMessage();

// Get the same instance again
$instance2 = Singleton::getInstance();
$instance2->showMessage();

// Verify that both variables hold the exact same object instance
if ($instance1 === $instance2) {
    echo "Both variables hold the same instance.";
} else {
    echo "Different instances.";
}

// Trying to directly instantiate the class will cause a fatal error:
// $instance3 = new Singleton();
