/**
 * Singleton Design Pattern Implementation (JavaScript)
 * 
 * Multiple approaches to implement Singleton in JavaScript
 */

// Approach 1: Using ES6 Class
class Singleton {
    constructor() {
        if (Singleton.instance) {
            return Singleton.instance;
        }
        
        console.log("Singleton instance created!");
        this.timestamp = new Date();
        Singleton.instance = this;
    }
    
    doSomething() {
        console.log("Singleton is doing something!");
    }
    
    static getInstance() {
        if (!Singleton.instance) {
            Singleton.instance = new Singleton();
        }
        return Singleton.instance;
    }
}

// Approach 2: Using Module Pattern (IIFE)
const SingletonModule = (function() {
    let instance;
    
    function createInstance() {
        console.log("SingletonModule instance created!");
        return {
            timestamp: new Date(),
            doSomething: function() {
                console.log("SingletonModule is doing something!");
            }
        };
    }
    
    return {
        getInstance: function() {
            if (!instance) {
                instance = createInstance();
            }
            return instance;
        }
    };
})();

// Approach 3: Using Object Literal (Simplest)
const SingletonObject = {
    timestamp: new Date(),
    doSomething: function() {
        console.log("SingletonObject is doing something!");
    }
};

// Example usage
if (typeof module !== 'undefined' && module.exports) {
    // Node.js environment
    module.exports = { Singleton, SingletonModule, SingletonObject };
    
    // Test the implementations
    console.log("=== Testing ES6 Class Approach ===");
    const s1 = new Singleton();
    const s2 = new Singleton();
    console.log("Are both instances the same?", s1 === s2);
    s1.doSomething();
    
    console.log("\n=== Testing Module Pattern ===");
    const sm1 = SingletonModule.getInstance();
    const sm2 = SingletonModule.getInstance();
    console.log("Are both instances the same?", sm1 === sm2);
    sm1.doSomething();
    
    console.log("\n=== Testing Object Literal ===");
    SingletonObject.doSomething();
}
