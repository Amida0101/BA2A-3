/**
 * Singleton Design Pattern Implementation (Java)
 * 
 * Thread-safe implementation using the Bill Pugh Singleton Design
 * This approach uses an inner static helper class to ensure thread safety
 * without requiring synchronization.
 */

public class Singleton {
    
    /**
     * Private constructor to prevent instantiation
     */
    private Singleton() {
        System.out.println("Singleton instance created!");
    }
    
    /**
     * Static inner class - inner classes are not loaded until they are referenced
     * This ensures thread-safe lazy initialization
     */
    private static class SingletonHelper {
        private static final Singleton INSTANCE = new Singleton();
    }
    
    /**
     * Get the single instance of the class
     * 
     * @return Singleton instance
     */
    public static Singleton getInstance() {
        return SingletonHelper.INSTANCE;
    }
    
    /**
     * Example method
     */
    public void doSomething() {
        System.out.println("Singleton is doing something!");
    }
    
    /**
     * Example usage
     */
    public static void main(String[] args) {
        Singleton singleton1 = Singleton.getInstance();
        Singleton singleton2 = Singleton.getInstance();
        
        System.out.println("Are both instances the same? " + (singleton1 == singleton2));
        singleton1.doSomething();
    }
}
