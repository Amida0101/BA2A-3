# Singleton Design Pattern

This repository contains implementations of the **Singleton Design Pattern** in multiple programming languages.

## What is the Singleton Pattern?

The Singleton pattern is a creational design pattern that ensures a class has only one instance and provides a global point of access to that instance.

### Key Characteristics:
- ✅ Only one instance of the class exists
- ✅ Global access point to the instance
- ✅ Lazy initialization (instance created when first needed)
- ✅ Thread-safe implementations

## Use Cases

The Singleton pattern is commonly used for:
- **Database Connections**: Ensure only one connection pool exists
- **Configuration Managers**: Single source of application settings
- **Logging Services**: Centralized logging mechanism
- **Cache Managers**: Single cache instance across the application
- **Thread Pools**: Manage a single pool of worker threads

## Implementations

This repository includes Singleton implementations in:

### 1. PHP (`Singleton.php`)
- Prevents direct instantiation
- Prevents cloning
- Prevents unserialization
- Thread-safe implementation

**Usage:**
```php
$singleton = Singleton::getInstance();
$singleton->doSomething();
```

### 2. Java (`Singleton.java`)
- Bill Pugh Singleton Design (using inner static helper class)
- Thread-safe without synchronization overhead
- Lazy initialization

**Usage:**
```java
Singleton singleton = Singleton.getInstance();
singleton.doSomething();
```

### 3. Python (`singleton.py`)
Three different approaches:
- **Metaclass approach**: Most Pythonic way
- **Decorator approach**: Clean and reusable
- **`__new__` method approach**: Low-level control

**Usage:**
```python
singleton = Singleton()
singleton.do_something()
```

### 4. JavaScript (`singleton.js`)
Three different approaches:
- **ES6 Class**: Modern JavaScript
- **Module Pattern (IIFE)**: Classic approach
- **Object Literal**: Simplest implementation

**Usage:**
```javascript
const singleton = Singleton.getInstance();
singleton.doSomething();
```

## Running the Examples

### PHP
```bash
php Singleton.php
```

### Java
```bash
javac Singleton.java
java Singleton
```

### Python
```bash
python singleton.py
```

### JavaScript (Node.js)
```bash
node singleton.js
```

## Advantages

✅ **Controlled access**: Single instance ensures controlled access to resources  
✅ **Reduced namespace pollution**: No global variables needed  
✅ **Permits refinement**: Can be subclassed if needed  
✅ **Memory efficiency**: Only one instance in memory

## Disadvantages

⚠️ **Global state**: Can make testing difficult  
⚠️ **Hidden dependencies**: Can hide dependencies in the code  
⚠️ **Concurrency issues**: Requires careful thread-safe implementation  
⚠️ **Violates Single Responsibility Principle**: Class controls both its behavior and instantiation

## Best Practices

1. **Use dependency injection** when possible instead of Singleton
2. **Ensure thread safety** in multi-threaded environments
3. **Prevent cloning and serialization** to maintain single instance
4. **Consider using a factory** if you need more control over instance creation
5. **Document clearly** why Singleton is necessary for your use case

## Contributing

Feel free to add implementations in other languages or improve existing ones!

## License

MIT License - Feel free to use these implementations in your projects.

## Author

Dorian - [GitHub](https://github.com/Bassong01/Dorian29)
